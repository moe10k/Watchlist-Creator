<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 API Project</td></tr>
<tr><td> <em>Student: </em> Mohammad Kiyam (mk42)</td></tr>
<tr><td> <em>Generated: </em> 8/8/2023 11:29:02 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-3-api-project/grade/mk42" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes just to be up to date</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> API Data Association </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Consider how your API data will be associated with a user</td></tr>
<tr><td> <em>Response:</em> <p>The API data will be associated with the user via a watchlist. The<br>user is able to search for any movie/show he wants thanks to the<br>API, and then add it to his own watchlist to then rate/review. A<br>user can type in the search bar only a part of a movie/shows<br>title and all closely related movies will appear. Whenever a movie/show is selected,<br>that movie&#39;s data such as image, title, release date, etc. is stored in<br>the database and is associated with each users unique ID. That data can<br>then be called from database into the user&#39;s watchlist and show a personalized<br>array of movies with their own details.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Handling Data Changes</td></tr>
<tr><td> <em>Response:</em> <p>Each user&#39;s watchlist contains movies that they added for themselves to see. And<br>each movie has the option to be rated, and these ratings can be<br>looked at. The ratings for each entity can be manually updated and the<br>user can actually see new ratings if they decide to update it manually.<br>So if a user gave a movie a 5/10 rating and decided that<br>he would like to update that rating, he is able to and the<br>rating is updated in the database and on the display. The way this<br>works is that each movie and rating is associated with a user, and<br>I am able to update the rating column in the database whenever the<br>user decides to update the rating for a movie. And then I&#39;m able<br>to display the new updated rating by calling that table that has it.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Handle the association of data to a user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Which option did you need to do to handle the association of data?</td></tr>
<tr><td> <em>Response:</em> <p>With option 1, the user is able to search for movies from the<br>movie database API&nbsp; and there is a button to be clicked whenever the<br>user has selected movies from the database they would like to add. And<br>selected movies are associated with each user and those movies get added into<br>the their own specific watchlist.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots of the updated/created pages related to associating data with the user (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T15.56.34codefordashboard.jpg.webp?alt=media&token=bd2fa75a-7a55-4ef0-b498-48c77e50588d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code to show the API data and to add to each users watchlist<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T15.54.57searched%20movie.jpg.webp?alt=media&token=e533fae7-47b1-4fcc-ad3f-23a85793b7b3"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows a movie being searched and the &quot;add to watchlist&quot; button<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T15.55.42inwatchlist.jpg.webp?alt=media&token=f7a0cad7-26ba-485f-a6b4-21e110da5380"/></td></tr>
<tr><td> <em>Caption:</em> <p>Movie that was selected goes into that specific user&#39;s watchlist<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T15.56.41watchlisttable.jpg.webp?alt=media&token=2f2b5388-6403-4317-9893-06eb82e288d9"/></td></tr>
<tr><td> <em>Caption:</em> <p>The table shows the association of the movie the user picked with the<br>userid and relevant info to be used later<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Include any Heroku prod links to pages that would trigger entity to user association</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/dashboard.php">https://mk42-prod.herokuapp.com/Project/dashboard.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/51">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Logged in user’s associated entities page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What is the data that's associated with the user?</td></tr>
<tr><td> <em>Response:</em> <p>The entities that are being talked about in my project are the movies/shows<br>the user selects. Each movie/show a user picks will be associated with their<br>own individual account.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshots of the logged in user's entities associated with them  (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T17.21.58watchlistpic.jpg.webp?alt=media&token=4ce13374-32da-439c-900f-b0fb46d878e8"/></td></tr>
<tr><td> <em>Caption:</em> <p>This picture shows the user&#39;s watchlist with a lot of features. A link<br>for a single view that redirects them to a screen about more details<br>from a specific show they choose. It also has a button to delete<br>selected movies. And there is also a button to remove all movies at<br>once from their watchlist. The header shows the total count of movies in<br>each persons&#39; watchlist which is updated when filtered. There is also an option<br>to filter by amount of movies to see at once and also a<br>sort movie by new/old and  genre. All this data is pulled from<br>the tables which are associated with each unique userid.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T17.26.02view%20details.jpg.webp?alt=media&token=a9261a7a-4306-4484-9ee6-652c7244071e"/></td></tr>
<tr><td> <em>Caption:</em> <p>When clicking view more details, it redirects them to a new page with<br>more information about the movie.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T17.27.50remove%20selected%20movie.jpg.webp?alt=media&token=add770ef-77f5-4dfc-811c-5346a334ec4a"/></td></tr>
<tr><td> <em>Caption:</em> <p>removed a selected movie with validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T17.28.32removeall.jpg.webp?alt=media&token=c156eb6f-5623-4bf8-9b63-6f6e4ef47cca"/></td></tr>
<tr><td> <em>Caption:</em> <p>removed all movies with a message saying they were all removed, and another<br>message that says there are no more movies in your watchlist.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T17.30.38sorted%20movies%20by%20newest%20first.jpg.webp?alt=media&token=00a8709a-e9bf-4f97-87c8-7a056243906d"/></td></tr>
<tr><td> <em>Caption:</em> <p>I added a new movie, and I sorted and filtered the list to<br>show new movies first.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T17.31.50codetofilter.jpg.webp?alt=media&token=d36e4d96-f5cb-4705-ad21-0a88ca920f4c"/></td></tr>
<tr><td> <em>Caption:</em> <p>code shows buttons to remove selected movies which also remove the association in<br>the tables. And code also shows the filter/sort options.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-08T18.01.33watchlisttable2.jpg.webp?alt=media&token=8c94cfa5-b008-4ed2-bbb9-3e4a1612fe63"/></td></tr>
<tr><td> <em>Caption:</em> <p>movie watchlist table with associations of movies to users<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) where the logged in user has their entities listed</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/watchlist.php">https://mk42-prod.herokuapp.com/Project/watchlist.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/70">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/70</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> All Users association page (Note: This will likely be an admin page and is not the same as the previous item) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe/Explain the purpose of this page from your project perspective</td></tr>
<tr><td> <em>Response:</em> <p>The purpose of this page is for user&#39;s to post ratings from the<br>movies they added to their watchlists. This ratings page shows the users, the<br>movies they are rating, and all the ratings.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshots of the entity data associated with many users (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T00.42.57ratings.jpg.webp?alt=media&token=16359069-a158-47bc-9c14-8f26e38a236e"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the ratings tab where it shows the association of many entities<br>to many users. The entities in this case being the movies/shows. Each line<br>shows the user, his movie he rated, and the ratings he gives it.<br>If you aren&#39;t an admin, you cannot update someone elses rating. And as<br>an admin you can delete a rating. There is also a filter where<br>you can pick how many review you want to see at a time<br>and also a sort/search option to search for a name where it can<br>even be a partial match. And there is also a count of the<br>amount of ratings that are on the page.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T00.47.53minirate.jpg.webp?alt=media&token=0234e5ca-2603-4268-97f7-10814d608aa0"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows me using both the search/sort option to partially search for the<br>name mini and the username minikiyam shows up. From the last picture we<br>saw he had 4 ratings, but we used to filter option to only<br>show 2.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T00.49.59miniupdate.jpg.webp?alt=media&token=0a98f61b-34f8-42bb-a1dc-3d4baac21d48"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows the admin account updating the first movies rating which use to<br>be a 5 from the last picture to a 10. And the validation<br>that shows up when doing it.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T00.53.05ratingcode.jpg.webp?alt=media&token=4a813170-40b2-4488-a305-8d7dd138dcdb"/></td></tr>
<tr><td> <em>Caption:</em> <p>code to show the filter/sort and how it fetches data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) where entities associated to many users can be seen</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/user_ratings2.php?username=mini&limit=2">https://mk42-prod.herokuapp.com/Project/user_ratings2.php?username=mini&limit=2</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/72">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/72</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/62">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/62</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Create a page that shows data not associated with any user (Note: This will likely be an admin page and is not the same as the previous item) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show screenshots of the page showing entities not associated with anyone (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T00.54.49allmovies.jpg.webp?alt=media&token=f840daaa-8927-498a-a4eb-7f71f85636f9"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows the movies tab that is an admin feature. This does<br>not show any users and their associations to any movies. All it shows<br>are all the movies that any user has ever added but with association<br>to tell whos is what with no duplicates. Their is also a sort<br>and filter option just as before to sort by alphabetically/reverse and to filter<br>to see how many you want on screen with default at 10. Their<br>is a single view link below each movie to see more details about<br>it as shown previously in watchlist.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T01.12.55reverseallmovies.jpg.webp?alt=media&token=1f5b7acc-f8b7-4f75-8dae-a5d8940e4592"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the reverse alphabetic sort and 5 movies applied filter used. And<br>as well as the total count of movies being updated when the filters<br>are applied.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T01.17.46moviecode.jpg.webp?alt=media&token=90b59c54-29f5-4261-8efe-09992a7b8f44"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows code for how the sorting/filtering process works<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add Heroku Prod links to the page(s) where unassociated entities can be seen</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/admin/all_movies.php">https://mk42-prod.herokuapp.com/Project/admin/all_movies.php</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/74">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/74</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin can associate any entity with any users (Note: This may be a form on an existing association page if you rather not have a separate page for this) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing evidence of the checklist items (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T02.11.18recommendmovies.jpg.webp?alt=media&token=c0f32d9e-8439-448a-b470-c7361d5a0ac9"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows a page where I can associate an entity to a<br>user if I search them up. When I click search with nothing typed<br>in the fields, all the movies in my watchlist and users registered will<br>show up in 2 columns just like in the screenshot. I am able<br>to partially search for a movie name or partially search for a username<br>and all related items will appear. The admin is able to click any<br>movies he wants and associate them to any user&#39;s recommended watchlist.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T02.15.29partial2.jpg.webp?alt=media&token=4abb4ce7-9711-44da-98d2-e4042444983c"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows me partially entering avengers and test and all the avenger movies<br>show up with all usernames starting with test. I selected avengers endgame and<br>test7 and we will see in the next screenshot how that will go<br>into test7&#39;s recommended tab.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T02.25.13rec.jpg.webp?alt=media&token=737eff65-2203-4ec6-9e0b-c615a34a3b59"/></td></tr>
<tr><td> <em>Caption:</em> <p>If we go to test7 account and go to recommend tab, it shows<br>the movie we added before.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmk42%2F2023-08-09T02.27.54coderec.jpg.webp?alt=media&token=0373a207-88d5-4393-8dac-55bb1ed24bcb"/></td></tr>
<tr><td> <em>Caption:</em> <p>code for searching movies, users and adding to their recommend page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the code logic for this page</td></tr>
<tr><td> <em>Response:</em> <p>Firstly, to access the page, you need to be an admin otherwise you<br>won&#39;t have access to the screen and it&#39;ll give warnings. When a POST<br>request is received it&#39;ll look for users and movies in the table with<br>just a partial match in text. The results are then displayed on the<br>screen. In the html forms, I added checkboxes per movie and username, along<br>with CSS to split into 2 columns. Then the admin can click each<br>checkbox in the movies side to send to whichever users and it&#39;ll handle<br>the request and send the movies to the users recommend tab.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mk42-prod.herokuapp.com/Project/admin/assign_movies.php">https://mk42-prod.herokuapp.com/Project/admin/assign_movies.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mohammad-kiyam/mk42-IT202-450/pull/75">https://github.com/mohammad-kiyam/mk42-IT202-450/pull/75</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Reflection </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Document any issues/struggles</td></tr>
<tr><td> <em>Response:</em> <p>One of the biggest struggles was being able to change and assign movies<br>to users who are not yourself. So an admin putting a movie on<br>another users watchlist. And I put that into a recommendation page as to<br>not get mixed with their regular watchlist. I thought that was a real<br>life good application to think ahead about because the user shouldn&#39;t feel like<br>he doesn&#39;t understand where certain movies came from. So I created the recommend.php<br>file and assign_movies.php file. The assign movies take movies from the admins watchlist<br>and can select any user to add to. When he selects a user,<br>the movies go to their recommendation tab.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Highlight any favorite topics</td></tr>
<tr><td> <em>Response:</em> <p>One of my favorite topics to work on is the API call for<br>my dashboard and the watchlist tab. Stylistically, it was the best thing I<br>have ever made. API called were confusing at first but I understood them<br>later on and how to use that data and insert to my tables.<br>and putting a nice background image in dashboard made me feel like it<br>was a legitimate website. Ordering everything properly on my watchlist was also hard<br>but rewarding.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Overall how do you feel you did with the project and meeting requirements</td></tr>
<tr><td> <em>Response:</em> <p>I felt like I did very good with the project. It was a<br>steep learning curve at first. After re-watching and reading the modules multiple times<br>some things just started to click. I feel with all my work and<br>time put in this, I feel I got a 100%. This was no<br>easy task and I had to spend hours coding which was something new<br>to me.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Summarize your experience per the checklist items</td></tr>
<tr><td> <em>Response:</em> <p>I had 0 web development experience. I took CS100 python but that didn&#39;t<br>do me too good for this course, and I had to learn so<br>much in so little time. At this point, I am very happy about<br>my current experience. I&#39;ve learned so much and the professor&#39;s course and teaching<br>made me fee like a real developer now. So many new technologies and<br>I feel like I&#39;m proficient with them now. Only thing I would do<br>differently is work even faster than before to finish my milestones in time.<br>My grades really took a hit and I am really aiming for that<br>A. Hopefully with how much time and effort I put in these milestone<br>Project and demo, it will pay off at the end.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-3-api-project/grade/mk42" target="_blank">Grading</a></td></tr></table>