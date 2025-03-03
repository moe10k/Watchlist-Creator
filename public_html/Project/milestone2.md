<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 API Project</td></tr>
<tr><td> <em>Student: </em> Mohammad Kiyam (mk42)</td></tr>
<tr><td> <em>Generated: </em> 8/6/2023 11:51:16 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-2-api-project/grade/mk42" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Define the appropriate table or tables for your API </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the table definition SQL files</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T21.17.00table1ss.jpg.webp?alt=media&token=f8de4c4f-32e3-4e0a-9ddd-f1897c22d630"/></td></tr>
<tr><td> <em>Caption:</em> <p>Watchlist - it stores movie title and movie image along with userid, id,<br>created and modified stamps<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T21.17.13table2ss.jpg.webp?alt=media&token=c6d47e00-a51d-4ac4-8031-ab6a61385d01"/></td></tr>
<tr><td> <em>Caption:</em> <p>Ratings - it stores movie title and movie rating along with id, userid,<br>created and modified time stamps<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mappings</td></tr>
<tr><td> <em>Response:</em> <p>The Watchlist table has the following columns: id which is auto generated, user_id<br>which is created and stored, movie_title and image_url which is called by the<br>api and mapped to the table, created and modified are the timestamps. The<br>API data that is mapped includes the movie_title and the image_url of the<br>movie. The Ratings table has the following columns: id which is auto incremented,<br>movie_title which is called and mapped by the api and saved to the<br>table, along with ratings which is user generated. Created and modified are time<br>stamps.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/52">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/52</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Data Creation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the Page and the Code (at least two)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T22.19.46cdt.jpg.webp?alt=media&token=49440b94-c435-4713-aaff-20a3f1d15a80"/></td></tr>
<tr><td> <em>Caption:</em> <p>correct data types<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T22.23.20cva.jpg.webp?alt=media&token=c98708f4-26ab-4ef1-bf6c-18ac2e63639c"/></td></tr>
<tr><td> <em>Caption:</em> <p>correct validation for form with user friendly message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T22.01.26validation.jpg.webp?alt=media&token=57e70eea-24d3-4b6e-94ec-7c1c498f8dc1"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid creation with appropriate message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T22.04.07error.jpg.webp?alt=media&token=baf3a959-a508-425b-9623-664206da0f70"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error where the same movie is picked twice<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T22.06.22before%20submission.jpg.webp?alt=media&token=4b374c38-b9fe-4d29-b651-c6e910283dd3"/></td></tr>
<tr><td> <em>Caption:</em> <p>form of me searching a movie before submission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Database Results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T22.10.30api%20data.jpg.webp?alt=media&token=6aaad449-e999-47e2-afbc-5855bdcdceb4"/></td></tr>
<tr><td> <em>Caption:</em> <p>API data and is stored in a different table than manual data and<br>is determined by the API<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T22.11.02manual%20data.jpg.webp?alt=media&token=ae9188de-b089-477c-b39b-b3901109dcbe"/></td></tr>
<tr><td> <em>Caption:</em> <p>Manual data as the user types to be stored in a different table<br>and is determined by whether is was user generated data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Misc Checklist</td></tr>
<tr><td> <em>Response:</em> <p>Each entity is a different movie with each movie. The duplicates are handled<br>by checking if the users watchlist already has the movie, and if so<br>an error message will appear. Same thing with manually added ratings, if the<br>user has the same rating, an error message will appear. Every user has<br>access to the movies and ratings but only the admin has access to<br>change ratings.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/dashboard.php">https://mk42-prod.herokuapp.com/Project/dashboard.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/51">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Data List Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot the list page and code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T23.18.41watchlist.jpg.webp?alt=media&token=51497ece-95c9-44c6-b552-9887353cbad9"/></td></tr>
<tr><td> <em>Caption:</em> <p>Most of the bullet points are within this screen shot of my movies<br>watchlist. This is API-generated data where the movie that the user picked is<br>added to the users watchlist. And also has data to be manually entered<br>through the ratings option. There is also a filter option which shows 10<br>by default. And also has a sort option which is newest by default.<br>There is also an option to delete selected movies off of the watchlist<br>which you can see at the bottom with the remove selected movies option.<br>And the design looks really good.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T23.23.10oldest%20first.jpg.webp?alt=media&token=98a82f2b-a54b-4640-9f6c-1b2e978b15ec"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the sort option making the watchlist oldest first<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T23.25.03filter.jpg.webp?alt=media&token=0150fc82-a7ef-44d0-bd59-e1f74134955d"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the filter option where I only put 1 movie as the<br>filter to show<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-06T23.28.00genre.jpg.webp?alt=media&token=202040c3-6e60-4486-bbc3-3baa4ffc4da0"/></td></tr>
<tr><td> <em>Caption:</em> <p>Sorted with genre and no matching records shown with message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>A user must be logged in to this page for this to be<br>viewed since this has to look at your individual database of movies saved.<br>Each entity(movies) has the ability to be removed when selected and can also<br>be edited. Also, each movie can be rated, but only the admin can<br>see these ratings. And there is also a sorting and filtering option. You<br>can sort by newest and oldest and if there is no matching movies<br>then there will be a message that says no movies in watchlist.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/watchlist.php">https://mk42-prod.herokuapp.com/Project/watchlist.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/54">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/54</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> View Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T00.42.14ratings.jpg.webp?alt=media&token=49c1364a-1d53-42fd-b992-4f6f5518916d"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of ratings which only admin can see. Entity is fetched by id<br>passed through query parameters. Detailed table of data where admin sees all users<br>ratings for movies. There is also a the ability to delete ratings and<br>to change them.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T00.44.06no%20permission.jpg.webp?alt=media&token=a1ba3fc1-4e28-4e41-9bac-decd5eee8d6f"/></td></tr>
<tr><td> <em>Caption:</em> <p>No permission gives you a message saying you dont have permission and sends<br>you back to the home screen.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>This is a page only an admin can see so the user must<br>have the admin role. Since each user is able to add movies to<br>their watchlist and rate the movies, this is actually all seen within this<br>ratings page. And the admin can also delete or edit these ratings by<br>inputting his own or selecting and deleting the rating.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/admin/user_ratings.php">https://mk42-prod.herokuapp.com/Project/admin/user_ratings.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/62">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/62</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Edit Data Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.37.02edit.jpg.webp?alt=media&token=f5d9d144-d934-4724-b2ed-e5bf0b19240e"/></td></tr>
<tr><td> <em>Caption:</em> <p>Rating edit page where the admin can change ratings. Rating is fetched with<br>the appropriate information of the entities and user information. It has all the<br>correct data types.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.40.11rating.jpg.webp?alt=media&token=e5226136-207b-4cac-bf8a-f69ba3f4f9a2"/></td></tr>
<tr><td> <em>Caption:</em> <p>successful message when updated rating<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.43.13no-permission2.jpg.webp?alt=media&token=57ff26f1-6519-4b25-a11f-b4b667b449e0"/></td></tr>
<tr><td> <em>Caption:</em> <p>no permission to use the page and errors has user friendly messages<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/admin/user_ratings.php">https://mk42-prod.herokuapp.com/Project/admin/user_ratings.php</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/62">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/62</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Delete Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of related code/evidence</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.10.32removedmovies.jpg.webp?alt=media&token=1593869d-cc1e-40b7-9994-f841e72456b8"/></td></tr>
<tr><td> <em>Caption:</em> <p>code of how the deletion occurs<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.13.30selecttodelete.jpg.webp?alt=media&token=bc67bec5-edf6-4a96-85a5-a363936ed49d"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is before I delete the entity from the database, you can see<br>I selected the middle movie with the title dragon ball super<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.15.39after%20delete.jpg.webp?alt=media&token=ae4ba24b-ddba-4be0-96b2-71423c29a6b9"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is after I delete the movie, and the movies are in the<br>same order - with a user friendly message showing it was successful<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.17.46invalid%20ID.jpg.webp?alt=media&token=40b88fc6-1ed8-40bc-a8e3-93d160393147"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid ID message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.19.23no-permission.jpg.webp?alt=media&token=ee22fe98-c058-4df8-acd6-53864d787a44"/></td></tr>
<tr><td> <em>Caption:</em> <p>If you are not an admin, you are unable to remove<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>User&#39;s can only delete entities that are associated with themselves, otherwise they are<br>unable to delete anything else. And each entity is tied with the user<br>id to make this possible. The delete process as I showed in my<br>code was a hard deletion. It is permanently removed from the database. And<br>the sort, as shown in my screen shot, is unaffected after deleting an<br>item. I deleted the middle movie and the sort was still there.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/54">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/54</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> API Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of Code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T02.36.10serverside.jpg.webp?alt=media&token=0711b223-44fe-4cf9-adb2-c902b0d990ac"/></td></tr>
<tr><td> <em>Caption:</em> <p>how the API data is fetched from server side<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T02.36.37datamap.jpg.webp?alt=media&token=91718151-7002-4674-ad68-4e3c046fe1c1"/></td></tr>
<tr><td> <em>Caption:</em> <p>How API data is mapped to tables<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T02.36.23dd2.jpg.webp?alt=media&token=793d7985-beb4-43c7-9123-daa07012f07d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Duplicate data is handled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>The API is called and fetched and saved to specific variables. A table<br>is created and those variables are then inserted within the table. The API<br>calls are triggered within the application whenever the user clicks search movie. That<br>way it isnt called too frequently and only when it is needed. My<br>API is a movie database, the way I am using it is by<br>calling the database of movies, and the user can search any movie in<br>the database. And then they can select whichever movie and add it to<br>their watchlist and can also rate the movies.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/52">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/52</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What issues did you face and overcome during this milestone?</td></tr>
<tr><td> <em>Response:</em> <p>Being able to map the data and manipulate it was very time consuming.<br>And styling it so it looks really good also very hard, but also<br>very rewarding because my website looks really good now.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> What did you find the easiest?</td></tr>
<tr><td> <em>Response:</em> <p>Using the API to show data was relatively easier than I had thought.<br>I decoded the json and turned the data in an array. Handling the<br>data was harder but overall starting off was not that bad.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> What did you find the hardest?</td></tr>
<tr><td> <em>Response:</em> <p>The biggest issue I faced was the time, since this course is much<br>faster in the summer. Another issue was how hard it was to do<br>this milestone myself to tailor towards my needs. Since milestone1 was mainly just<br>following the professor, milestone2 was much harder.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Did you have to utilize any unanticipated APIs?</td></tr>
<tr><td> <em>Response:</em> <p>I did not have to utilize any unanticipated API&#39;s.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of your project board</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-07T03.51.06proj.jpg.webp?alt=media&token=206a53f4-078a-4550-83bd-ac5e9d8a6b00"/></td></tr>
<tr><td> <em>Caption:</em> <p>Picture of project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-2-api-project/grade/mk42" target="_blank">Grading</a></td></tr></table>