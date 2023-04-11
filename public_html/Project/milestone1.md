<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Matthew Choi (mjc)</td></tr>
<tr><td> <em>Generated: </em> 4/10/2023 10:37:24 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mjc" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231020605-a9b952e1-2e48-4f4d-bf72-d528a2d877f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>It tells the user that the email input is invalid.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231020652-8b2710ce-7193-4f86-8c0f-b37eae77cdbc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>It tells the user that the password input length is invalid.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231020689-33d4911d-6dbc-48d5-81e5-682abe190837.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>It shows the user that two passwords that user input is not matching<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231020734-66a75721-d95b-45bd-bb2e-b4894c3787f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>It shows that the email is not available.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231020782-a5ebb2a4-e278-4e68-b4c6-3297ef182273.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>It shows that the user input username is not available.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231020835-ca0aea69-ead6-44c8-b3e1-f74d1b20e64a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The form is filled out with valid data before the submission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231018065-105f8747-d06d-4487-a0eb-570674eecc26.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the screenshot of the table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231018169-5ef7cbd3-32ef-4d86-b2bb-95bcc8567277.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the highlighted screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/26">https://github.com/mjkchoi1/IT202-008/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <div>The form is handled by a PHP script that receives the form data<br>through a POST request. When the user submits the form, the PHP script<br>checks if the required fields are set in the POST request. If they<br>are, the script retrieves the values. If any of the required fields are<br>empty or invalid, the script displays an error message using flash. If all<br>validation checks pass, the script hashes the password and insert a new user<br>record into the database. If the insertion is successful, the script displays a<br>success message using the flash</div><div><br></div><div>The validation logic is implemented in both the frontend<br>and backend of the application. In the frontend, HTML5 attributes of required, maxlength,<br>and minlength make sure that the user input is valid. In the backend,<br>the PHP script validates the form data more thoroughly. It checks if the<br>email and username fields are empty or invalid, and if the password and<br>confirm fields match and meet certain length requirements.</div><div><br></div><div>When a user submits the registration<br>form, the PHP script retrieves the password and confirm password fields from the<br>form data. The script checks if the passwords match and meet a minimum<br>length requirement. If the password is valid, PHP function of password hash is<br>used to hash the password.</div><div><br></div><div>The PHP script utilizes a database to store user<br>records. It first attempts to make a connection using the initDB.&nbsp; The SQL<br>statement contains placeholders for the email, password, and username fields.&nbsp;&nbsp;</div><div><br></div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231020914-12b9084b-738c-4f54-b7d4-185a1490a0e0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The password of user input is not matching in the log in page.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231020993-52de83d9-d878-4e13-9c86-2d979ed640aa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows that the email is non existing in the database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231021080-23e40177-f530-4170-81fe-a0728d07573e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot shows that the login was successful.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/29">https://github.com/mjkchoi1/IT202-008/pull/29</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form has email and password input. Both input fields are required, and<br>password require 8 characters length.&nbsp;<div>On the frontend side, there is the validate() function<br>by JS, which is used for the form submission. On the backend,&nbsp;PHP code<br>functions to handle the form submission. PHP code checks if the email and<br>password fields are set in the POST data. If they are, it retrieves<br>the values. It checks for validation errors by seeing if the email or<br>username and password fields are empty and if they meet the set requirements.<br>If there are no errors, it goes to query the database to get<br>the user&#39;s information.</div><div>Then it uses password_verify() to compare the submitted password and the<br>password in the database that has been hashed.&nbsp;If the password is correct, it<br>fetches the user&#39;s roles from the database.</div><div>The database is used to get the<br>user&#39;s information and roles, and the session data is set to maintain user<br>login state between pages.<br></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231022726-6c2b9436-9743-4138-95e5-5aab28a3c2a0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot shows that the user has been logged out.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231028204-eb1feaac-0c45-4092-bd65-d4c75ed721de.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>logged out user cannot access an admin page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/24">https://github.com/mjkchoi1/IT202-008/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The explanation of session logic is very similar to the previous questions. When<br>the user is logged out, the session data is not maintained, and the<br>user loses the login state. Since user does not have any information and<br>roles, the user cannot access the admin page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231028290-478e6b97-fb1f-4bb6-80cc-5c2cc3f46500.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>logged out user cannot access an admin page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231028379-cb66a035-831b-412f-9f40-2d9264df53ea.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A logged in user without the admin permission cannot access to the admin<br>page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231028496-471953e9-e719-45c7-8584-b78e34817bf1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Table of roles. The role in this table is admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231028550-b3da0f50-e97a-48f9-a4f3-5021f5d93be0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the UserRoles table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231028620-764146cb-6bcd-4ff7-b1c7-4cf7f6eba695.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The is the User table, and mjc, which has the id number of<br>1 is assigned to admin in the UserRoles table.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/26">https://github.com/mjkchoi1/IT202-008/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <div>When a user with the admin access accesses the page, the code checks<br>if the user has the role. If the user is not the admin,<br>the user is redirected to the home page:&nbsp;<br></div><div><div style="color: rgb(212, 212, 212); background-color:<br>rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span style="color:<br>#c586c0;">if</span> (!<span style="color: #dcdcaa;">has_role</span>(<span style="color: #ce9178;">"Admin"</span>)) {</div><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">flash</span>(<span style="color: #ce9178;">"You<br>don't have permission to view this page"</span>, <span style="color: #ce9178;">"warning"</span>);</div><div>&nbsp; &nbsp; <span style="color:<br>#c586c0;">die</span>(<span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">"Location: </span><span style="color: #9cdcfe;">$BASE_PATH</span><span style="color: #ce9178;">"</span> . <span style="color:<br>#ce9178;">"/home.php"</span>));</div></div></div><div><br></div><div>The has_role() function is used to check if the user has the admin<br>role.</div><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Similar to subtask 6, has_role() checks to see if the user has the<br>admin role. The function returns true if the user has the correct roles<br>for the desired access page. If the user does have the correct role,<br>the user could access the page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231033647-f623e717-36dd-4a15-b181-122fb8854fbf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the styled nav and forms.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231033709-fa409aaf-6ec7-4890-a864-a7ee76d33016.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second screenshot<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231033804-d77591a2-fed0-43ab-b0e5-5be7652e9b77.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Output is displaying in a clean manner<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/31">https://github.com/mjkchoi1/IT202-008/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <div>For the nav bar, I have chosen the flex display and aligned the<br>items to the center. I have also added background color and padding for<br>it. The nav bar does have a bullet, but since the bullet is<br>same color with the background, it cannot be seen. When hovering, the background<br>color changes.<br></div><div>For alerts, I have set the styles for the background color, padding,<br>margin, border, font weight, and color for different alert types.</div><div>What I have decided<br>to do was basically same throughout the css stylesheet.</div><div><br></div><div><br></div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231034672-4e27ba62-bb71-4d3b-b598-13bb2765a1c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid password error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231034735-b25e6810-fe8d-44f5-9642-466d7d12c42e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email not found error.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231034829-aa1a86f2-12a5-4379-8dee-0cf614b5be82.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email not available error.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/31">https://github.com/mjkchoi1/IT202-008/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>For example, &quot;Invalid email address&quot; error message is displayed to the user, directing<br>what kind of problem that the user has for the attempt.&nbsp;<div>The best situation<br>in terms of security, like mentioned during lectures, is to give out least<br>information with the most accuracy to lead the users to correct information.</div><div>The error<br>messages are also displayed with flash function, which adds colored messages to the<br>user to make them see it easier.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231035474-a07c9c35-b33a-41b3-9a8d-8d81f06b8ab3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User access to the profile page, and the email and username is prefill.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/24">https://github.com/mjkchoi1/IT202-008/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The code checks if the user is logged in, and if the user<br>is not logged in, the code redirects user to the login page. If<br>the user is logged in, the script processes the form data. It first<br>updates the email and username in the database for the user.&nbsp;<div>Then the code<br>checks if the user entered a new password. If new password is entered,<br>it first checks if the current password is correct. Then it updates password<br>in the database.</div><div>Finally, the code shows a form for update. The form also<br>has client side validation for making sure that the passwords match.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231036210-73098b26-8844-4d37-b44f-a6ff24a1d35a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username change validation <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231036267-34d245bc-4694-46a6-9590-8e8169327dec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email change validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231036329-359a7d07-589a-4687-b7d0-d7fb45b292e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password reset validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231036425-70ef7511-daa5-486e-876f-1132f8fc90f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password mismatch message.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231036504-287c9335-9c4d-4163-b6cf-0fc2bdacf48f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username already in use message.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231028620-764146cb-6bcd-4ff7-b1c7-4cf7f6eba695.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>original table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231036727-383b4774-f7bb-4f94-ad61-75c7d0ea36b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Modified table, user <a href="mailto:&#109;&#x6a;&#x63;&#64;&#110;&#x6a;&#x69;&#x74;&#46;&#101;&#100;&#x75;">&#109;&#x6a;&#x63;&#64;&#110;&#x6a;&#x69;&#x74;&#46;&#101;&#100;&#x75;</a> <mjc> has been changed to <a href="mailto:&#x6d;&#x6a;&#107;&#x40;&#110;&#106;&#x69;&#116;&#46;&#101;&#100;&#117;">&#x6d;&#x6a;&#107;&#x40;&#110;&#106;&#x69;&#116;&#46;&#101;&#100;&#117;</a> <mjk><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/26">https://github.com/mjkchoi1/IT202-008/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The code first validates that the user information is matching, and then when<br>user submits the desired modification, the code modifies the information in the database.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231040722-c19a5d54-3683-40d0-8399-a2c1347d440a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot number 1 of project board perspective<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/231040846-8bd139e0-8b04-4217-a7a3-bb6177e170a0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot number 2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/mjkchoi1/projects/1">https://github.com/users/mjkchoi1/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mjc224-prod.herokuapp.com/Project/login.php">https://mjc224-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mjc" target="_blank">Grading</a></td></tr></table>