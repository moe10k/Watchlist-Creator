<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Mohammad Kiyam (mk42)</td></tr>
<tr><td> <em>Generated: </em> 7/17/2023 12:52:41 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone1-deliverable/grade/mk42" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T20.53.17inv%20email.jpg.webp?alt=media&token=1b1804a6-06ac-46f5-b343-ca50c4ce94ba"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T20.53.32inv%20password.jpg.webp?alt=media&token=e4a6477c-7373-403c-bfce-b3035769a166"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T20.55.37passwords%20dont%20match.jpg.webp?alt=media&token=075d72f4-6eb1-460e-ae21-fefbe770e1a2"/></td></tr>
<tr><td> <em>Caption:</em> <p>passwords don&#39;t match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T20.55.45email%20taken.jpg.webp?alt=media&token=7b99a1aa-a5b7-456d-ad8d-54d1b907705e"/></td></tr>
<tr><td> <em>Caption:</em> <p>chosen email is not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T20.55.50username%20taken.jpg.webp?alt=media&token=fd8cd241-d5de-4676-adbf-08af049b9c0a"/></td></tr>
<tr><td> <em>Caption:</em> <p>username is not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T20.56.04valid%20form.jpg.webp?alt=media&token=7d6c1d57-6794-40c2-9386-7d0a40433460"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T21.02.50first_user.jpg.webp?alt=media&token=f310965f-d7a2-4a17-9000-249ae24e2e5f"/></td></tr>
<tr><td> <em>Caption:</em> <p>first user is from task 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/32">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/32</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form uses POST method to send any input to the server and<br>when it&#39;s submitted, the client side javascript code is the first validation to<br>be used. The javascript code is in a function that returns true if<br>the data is properly validated from the rules I set, otherwise itll return<br>false and any input isn&#39;t saved. But if returned true, the data is<br>sent the PHP server side to check over. The register form asks for<br>email, username, password, confirm password, and to submit everything. On the front end,<br>the form checks the inputs based on the formatting rules and if any<br>check fails its displayed with the flash function. On the backend, the PHP<br>has it&#39;s own series of validation which is only after the javascript side<br>returns true. There is also regex used for validation. for the email, there<br>must be an &quot;@&quot; between a few characters, and the end must contain<br>a period with more characters at the end. This way it resembles a<br>traditional email. If any of the fields required are empty or not valid,<br>an error message is flashed on screen. The password handling is done by<br>checking if the password is atleast 8 characters long. If it&#39;s shorter than<br>8 characters, a message is flashed that it isn&#39;t long enough and none<br>of the data is sent. But if the password is valid, the password<br>is hashed with the hash function and then is stored into the database.<br>This way a hacker or any leak wouldn&#39;t be able to identify a<br>users password since it is personal/private info. On the database side, the PHP<br>code uses a connection to send over data to our mySQL database. There,<br>the users account is info is stored, like email, username, password(hahsed), and id.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T22.39.56incorrect%20password.jpg.webp?alt=media&token=259a1e0a-2a0e-4298-986a-4f108387e5c1"/></td></tr>
<tr><td> <em>Caption:</em> <p>incorrect password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T22.40.00nonexistinguser.jpg.webp?alt=media&token=529a64c0-6372-4944-be80-7043f902f37f"/></td></tr>
<tr><td> <em>Caption:</em> <p>no existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-16T22.50.03welcome%20login.jpg.webp?alt=media&token=27dab328-009d-40b1-9eda-859e4f4dc68c"/></td></tr>
<tr><td> <em>Caption:</em> <p>login message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/37">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Similar to the registration.php file, the login form has input fields that the<br>user must submit. Once the user clicks submit, the data in each field,<br>email/username and password, will be first validated by the client side javascript code.<br>The javascript will return false and stop submission if any field is not<br>validated. Otherwise, if the javascript code validation goes correctly and returns true, the<br>data is then submitted and the PHP server side code takes over. On<br>the frontend, the javascript checks the email or username based on the rules<br>set, the same validation applies in the backend for the serverside PHP code.<br>There is also regex used for validation. for the email, there must be<br>an &quot;@&quot; between a few characters, and the end must contain a period<br>with more characters at the end. This way it resembles a traditional email.<br>The password handling is also similar where password must be atleast 8 characters<br>long. Whenever someone is signing up, the PHP code checks the database from<br>the data submitted from the user and checks if their username or email<br>is also in the database. Same thing with the password, but since the<br>password is hashed in the database, the PHP code verifies if the passwords<br>match on both ends.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T00.12.37succesfully%20logged%20out.jpg.webp?alt=media&token=79371c12-e37b-4ff6-bfdd-fc70931e186e"/></td></tr>
<tr><td> <em>Caption:</em> <p>logged out message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T00.25.40cannot%20access%20this%20page.jpg.webp?alt=media&token=3a53ba23-ca0f-49cd-8a55-673db2dc4465"/></td></tr>
<tr><td> <em>Caption:</em> <p>cannot access this page since no user is logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/16">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When logging in, we all PHP&#39;s session_start() function which will contain a session<br>id that PHP will look for. This session id is connected to the<br>user and shows that a user is connected on the server side. Since<br>we are logged out and there is no session id, we cannot access<br>the page which requires a session id to be active.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T00.45.19cannot%20access%20this%20page.jpg.webp?alt=media&token=c353004a-4e48-47c6-bfb6-da468ad22508"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can&#39;t get into home.php because it&#39;s login protected and isn&#39;t signed in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T00.55.18dont%20have%20access%20to%20this%20page.jpg.webp?alt=media&token=a8fbd1dd-ba50-4c37-b8f7-fe83f8ae0e90"/></td></tr>
<tr><td> <em>Caption:</em> <p>non-admin user does not have access to admin page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T00.57.14role%20table.jpg.webp?alt=media&token=e27b73ad-17a9-41b6-b15b-9cc5476f0f74"/></td></tr>
<tr><td> <em>Caption:</em> <p>role table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T00.58.14userroles%20table.jpg.webp?alt=media&token=1347901e-3e1c-4eb4-b4d6-0b7aa1b11ad5"/></td></tr>
<tr><td> <em>Caption:</em> <p>the admin role is the first row with role_id 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/23">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/23</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For login protected pages, the user creates a cookie whenever he is logged<br>in and the PHP sesh code looks for. But when the user is<br>logged out, and tries to access a page that can only be accessed<br>if a user is logged in, then no cookie for that user will<br>be found. And an error message will flash telling the user he needs<br>to log in.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>When accessing a page that requires a certain role, there is a role_check<br>function that is checked in our create_role.php. These roles are in our database<br>and is also linked to a user. This is actually a type of<br>many to many relationship, where users can have many roles and many roles<br>can be attached to many users. So when accessing a site, if that<br>site requires a certain role, the user&#39;s role is checked within the database<br>and if validated, he can see the page otherwise there will be the<br>error message.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T01.17.10styling.jpg.webp?alt=media&token=e2d262eb-5c35-4ee4-842d-bfaede588c6d"/></td></tr>
<tr><td> <em>Caption:</em> <p>styling on register page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T01.18.58styling%20part2.jpg.webp?alt=media&token=6a27508d-e7dc-44f7-b6d0-a46dddde93c3"/></td></tr>
<tr><td> <em>Caption:</em> <p>styling on login page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/37">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>Within my styles.css file, I used the form tag for the following styles:<br>I set the form horizontally, set the max width to 500px, padding of<br>20px, added a solid 1px border and a 5px border radius, and a<br>background color of very light gray. The background of the website itself however<br>is a darker shade of gray. The submit button is green and also<br>centered, with the text itself being white. I added padding with no border<br>as well. And if you hover over it, the cursor turns into a<br>pointer. I set the display: block to make each text start on a<br>new line. In the input forms, I made input fields take the full<br>space of the container using width:100. And also adding padding and a border<br>to make it look nicer.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T01.38.16error%201.jpg.webp?alt=media&token=79a32e93-3033-4e7b-b51e-29aba24c1452"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T01.38.20error%202.jpg.webp?alt=media&token=9c77cfcc-5bf7-4418-ba30-602448f10876"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid username<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T01.38.24error%203.jpg.webp?alt=media&token=27f6e96b-a4a7-44c4-9576-56c81445e2b0"/></td></tr>
<tr><td> <em>Caption:</em> <p>no permission for this page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/32">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/32</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>To handle these technical messages, there were a few ideas in mind to<br>keep them user friendly. First and foremost, they had to be specific and<br>to the point. If someone incorrectly types an invalid email, a red text<br>would appear with the words please input a valid email. And just being<br>polite in our statements make them even more user friendly. And not only<br>that, but error messages may even give the requirements so the user doesn&#39;t<br>make the same mistake again. For example, if a user submits an invalid<br>password, the site would say that the password must have certain parameters.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T02.15.41profile%20page.jpg.webp?alt=media&token=386415b2-a61b-4834-aeba-0535faafc998"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile page with email and username prefilled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/19">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>the username and email are retrieved and prefilled by using the php code<br>within profile.php. The functions get_user_email() and get_username() are called from the data base<br>and returned in variables to be used. And within the forms, those variables<br>are reused so when the profile page is loaded with the forms, the<br>variables which hold the email and username are also prefilled in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T02.24.37updated%20email2.jpg.webp?alt=media&token=39820d5b-4dae-4f5e-8b6f-c60d965ce602"/></td></tr>
<tr><td> <em>Caption:</em> <p>email changed from &quot;<a href="mailto:&#x6d;&#111;&#101;&#107;&#x69;&#x79;&#x61;&#x6d;&#x32;&#48;&#64;&#103;&#x6d;&#97;&#105;&#x6c;&#x2e;&#99;&#x6f;&#109;">&#x6d;&#111;&#101;&#107;&#x69;&#x79;&#x61;&#x6d;&#x32;&#48;&#64;&#103;&#x6d;&#97;&#105;&#x6c;&#x2e;&#99;&#x6f;&#109;</a>&quot; to &quot;<a href="mailto:&#x75;&#x70;&#100;&#x61;&#116;&#101;&#100;&#109;&#x6f;&#x65;&#107;&#x69;&#x79;&#97;&#x6d;&#50;&#48;&#64;&#103;&#109;&#x61;&#105;&#108;&#46;&#99;&#x6f;&#x6d;">&#x75;&#x70;&#100;&#x61;&#116;&#101;&#100;&#109;&#x6f;&#x65;&#107;&#x69;&#x79;&#97;&#x6d;&#50;&#48;&#64;&#103;&#109;&#x61;&#105;&#108;&#46;&#99;&#x6f;&#x6d;</a>&quot;<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T02.25.44updated%20username.jpg.webp?alt=media&token=c502d7f9-c8ee-4212-bc6a-5818ba862a87"/></td></tr>
<tr><td> <em>Caption:</em> <p>username changed from mohammad to updatedmohammad<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T02.27.17password%20reset.jpg.webp?alt=media&token=62aa6766-e2cc-4d58-b92e-239a31bf274e"/></td></tr>
<tr><td> <em>Caption:</em> <p>password reset<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T02.28.26password%20mismatch.jpg.webp?alt=media&token=a605223f-1af0-4eff-92b1-b119630fb175"/></td></tr>
<tr><td> <em>Caption:</em> <p>password mismatch<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T02.29.34emailtaken.jpg.webp?alt=media&token=eb791a8d-e12e-45ea-9eed-fa8db6992ac3"/></td></tr>
<tr><td> <em>Caption:</em> <p>email/username is already in use message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T02.37.19beforechange.jpg.webp?alt=media&token=f55ea72c-466e-4bca-b88f-67fc787b1d78"/></td></tr>
<tr><td> <em>Caption:</em> <p>email and username before changing<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T02.37.30afterchange.jpg.webp?alt=media&token=b26701c7-d2ba-4c01-9ce1-18e497061338"/></td></tr>
<tr><td> <em>Caption:</em> <p>after updating email and username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/28">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>When the user updates their email or username, those inputs are saved into<br>variables. The PHP then validates and checks if username/email is already within the<br>database, if so it will flash a message and the submission is stopped.<br>It also checks if the username/email are valid from previous requirements. The password<br>is similar when the user inputs a new password and the javascript uses<br>the validate(form) function to validate if the passwords are matching. The PHP side<br>check if the password is already in the database.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-07-17T04.49.30alltasksdone.jpg.webp?alt=media&token=3f6631ce-e645-48c3-b61e-51fc9ca91c3e"/></td></tr>
<tr><td> <em>Caption:</em> <p>all issues from Milestone features<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/mohammad-kiyam/projects/1">https://github.com/users/mohammad-kiyam/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/login.php">https://mk42-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone1-deliverable/grade/mk42" target="_blank">Grading</a></td></tr></table>