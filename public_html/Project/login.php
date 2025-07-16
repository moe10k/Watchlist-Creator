<?php
require_once(__DIR__ . "/../../partials/nav.php");
?>

<div class="container">
    <div class="auth-container">
        <form id="login" onsubmit="return validate(this)" method="POST">
            <h1>Login</h1>
            <div>
                <label for="email">Email/Username</label>
                <input type="text" name="email" required placeholder="Enter your email or username" />
            </div>
            <div>
                <label for="pw">Password</label>
                <input type="password" id="pw" name="password" required minlength="8" placeholder="Enter your password" />
            </div>
            <input type="submit" value="Login" class="btn-primary" />
            <div class="auth-links">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</div>

<style>
.auth-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
}

#login {
    width: 100%;
    max-width: 400px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 2rem;
}

.btn-primary {
    width: 100%;
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    margin-top: 1rem;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: var(--accent-color);
}

.auth-links {
    margin-top: 1.5rem;
    text-align: center;
}

.auth-links a {
    color: var(--primary-color);
    text-decoration: none;
}

.auth-links a:hover {
    text-decoration: underline;
}
</style>

<script>
    function validate(form) {
        let email = form.email.value;
        let password = form.password.value;
        let regexforemail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let regexforusername = /^[a-zA-Z0-9_-]{3,16}$/;
 
        if (!regexforemail.test(email) && !regexforusername.test(email)) {
            flash('Enter a valid email or username.');
            return false;
        }
        if (password.length < 8) {
            flash('Password must be at least 8 characters long.');
            return false;
        }
        return true;
    }
</script>

<?php
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);

    $hasError = false;
    if (empty($email)) {
        flash("Email must be provided <br>");
        $hasError = true;
    }
   
    if (str_contains($email, "@")) {
        $email = sanitize_email($email);
        if (!is_valid_email($email)) {
            flash("Invalid email address");
            $hasError = true;
        }
    } else {
        if (!is_valid_username($email)) {
            flash("Invalid username");
            $hasError = true;
        }
    }
    if (empty($password)) {
        flash("Password must be provided <br>");
        $hasError = true;
    }
    if (strlen($password) < 8) {
        flash("Password must be at least 8 characters long <br>");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();
        $stmt = $db->prepare("SELECT id, email, username, password from Users where email = :email or username = :email");
        try {
            $r = $stmt->execute([":email" => $email]);
            if ($r) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user) {
                    $hash = $user["password"];
                    unset($user["password"]);
                    if (password_verify($password, $hash)) {
                        $_SESSION["user"] = $user;
                        try {
                            //lookup potential roles
                            $stmt = $db->prepare("SELECT Roles.name FROM Roles 
                        JOIN UserRoles on Roles.id = UserRoles.role_id 
                        where UserRoles.user_id = :user_id and Roles.is_active = 1 and UserRoles.is_active = 1");
                            $stmt->execute([":user_id" => $user["id"]]);
                            $roles = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch all since we'll want multiple
                        } catch (Exception $e) {
                            error_log(var_export($e, true));
                        }
                        //save roles or empty array
                        if (isset($roles)) {
                            $_SESSION["user"]["roles"] = $roles; //at least 1 role
                        } else {
                            $_SESSION["user"]["roles"] = []; //no roles
                        }
                        flash("Welcome, " . get_username(), "success");
                        die(header("Location: home.php")); 
                    } else {
                        flash("Invalid password");
                    }
                } else {
                    flash("Email not found");
                }
            }
        } catch (Exception $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
}
?>
<?php require_once(__DIR__ . "/../../partials/flash.php");