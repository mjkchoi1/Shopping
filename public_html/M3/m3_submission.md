<table><tr><td> <em>Assignment: </em> IT202 JavaScript and CSS Challenge</td></tr>
<tr><td> <em>Student: </em> Matthew Choi (mjc)</td></tr>
<tr><td> <em>Generated: </em> 2/20/2023 6:21:59 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-javascript-and-css-challenge/grade/mjc" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ul><li>Reminder: Make sure you start in dev and it's up to date<ol><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li><li><code>git checkout -b M3-Challenge-HW</code></li></ol></li></ul><ol><li>Create a copy of the template given here:&nbsp;<a href="https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c">https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c</a></li><li>Implement the changes defined in the body of the code</li><li><strong>Do not</strong>&nbsp;edit anything where the comments tell you not to edit, you will lose points for not following directions</li><li>Make changes where the comments tell you (via TODO's or just above the lines that tell you not to edit below)<ol><li><strong>Hint</strong>: Just change things in the designated&nbsp;<code>&lt;style&gt;</code>&nbsp;and&nbsp;<code>&lt;script&gt;</code>&nbsp;tags</li><li><strong>Important</strong>: The function that drives one of the challenges is&nbsp;<code>updateCurrentPage(str)</code>&nbsp;which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.</li></ol></li><li>Create a branch called M3-Challenge-HW if you haven't yet</li><li>Add this template to that branch (git add/git commit)</li><li>Make a pull request for this branch once you push it</li><li>You may manually deploy the HW branch to dev to get the evidence for the below prompts</li><li>Create a new file&nbsp;<strong>m3_submission.md</strong>&nbsp;file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)</li><li>Add, commit, and push the submission file</li><li>Close the pull request by merging it to dev (double-check all looks good on dev)</li><li>Manually create a new pull request from dev to prod (i.e., base: prod &lt;- compare: dev)</li><li>Complete the merge to deploy to production</li><li>Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission</li></ol><style>` and `<script>` tags
    2. **Important**: The function that drives one of the challenges is `updateCurrentPage(str)` which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.  
5. Create a branch called M3-Challenge-HW if you haven't yet
6. Add this template to that branch (git add/git commit)
7. Make a pull request for this branch once you push it
8. You may manually deploy the HW branch to dev to get the evidence for the below prompts
9. Create a new file **m3_submission.md** file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)
10. Add, commit, and push the submission file
11. Close the pull request by merging it to dev (double-check all looks good on dev)
12. Manually create a new pull request from dev to prod (i.e., base: prod <- compare: dev)
13. Complete the merge to deploy to production
14. Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission
</style></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Completed Challenge Screenshots </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> 5 Screenshots based on the checklist items for this task</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/220209696-a474342c-ae0e-4b66-89b4-0ec7fb847305.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1 screenshot showing the primary page. UCID : mjc, 02/20/2023<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/220209748-a3ba1bbe-8333-4e29-b692-45f89069e4b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>2 screenshot clicking login. UCID : mjc, 02/20/2023<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/220209793-ddbfa8ba-0cd0-4c6f-b09d-435642c868dd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> 3, screenshot clicking register. UCID : mjc, 02/20/2023<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/220209845-75f61f91-01ef-43c3-be98-1f19aff5f0f8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>4 screenshot clicking profile. UCID : mjc, 02/20/2023<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/220210054-15fb269c-cf72-4bbb-aec5-016b6f5161cf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>5 screenshot clicking logout. UCID : mjc, 02/20/2023<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Explain Solutions (Grader use this section to determine completion of each challenge) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly explain how you made the navigation horizontal</td></tr>
<tr><td> <em>Response:</em> <p>I have used the float:left to get the block elements to float next<br>to each other.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how you remove the navigation list item markers</td></tr>
<tr><td> <em>Response:</em> <p>I have used list-style-type : none to remove the item markers. It is<br>inside the ul{} tag, and if you delete the list-style-type, the item markers<br>will show again.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you gave the navigation a background</td></tr>
<tr><td> <em>Response:</em> <p>I have used the nav{} tag to only provide background for the navigation.<br>At first, the whole page had the background, but through some google research,<br>I found out that the nav tag will allow me to only give<br>background to the navigation.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how you made the links (or their surrounding area) change color on mouseover/hover</td></tr>
<tr><td> <em>Response:</em> <div>I have used : li a:hover{} to change the color on moseover. :hover<br>is used to select elements when you place the cursor on them.</div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you changed the challenge list bullet points to checkmarks (✓)</td></tr>
<tr><td> <em>Response:</em> <p>I have used the li:before {content:&quot;<span style="letter-spacing: 0.09996px;">✓&quot;} to add the checkmarks. First,<br>I deleted the bullet points, and then I added the checkmarks by using<br>li:before{}.</span><div><span style="letter-spacing: 0.09996px;"><br></span></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain how you made the first character of the h1 tags and anchor tags uppercased</td></tr>
<tr><td> <em>Response:</em> <div>I have used : h1, a { text-transform: capitalize; } At beginning, I<br>was capitalizing the whole thing, but after some research, I learned that h1,<br>a { text-transform: capitalize; } capitalizes characters with h1 tag and a tag.</div><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain/describe your custom styling of your choice</td></tr>
<tr><td> <em>Response:</em> <p>I used text-decoration: wavy underline because I thought it was eye catching to<br>have a wavy underline.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain how the styling for the challenge list doesn't impact the navigation list</td></tr>
<tr><td> <em>Response:</em> <p>I mostly used the nav{} to only apply changes to the navigation bar.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Briefly explain how you updated the content of the h1 tag with the link text</td></tr>
<tr><td> <em>Response:</em> <div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;,<br>monospace; line-height: 19px; white-space: pre;"><span style="color: #569cd6;">Inside of function getCurrentSelection,</span></div><div style="color: rgb(212, 212,<br>212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space:<br>pre;"><span style="color: #569cd6;">var</span> <span style="color: #9cdcfe;">currentSelectionProcessing</span> = <span style="color: #9cdcfe;">link</span>.<span style="color: #9cdcfe;">innerText</span>;</div><div style="color:<br>rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height:<br>19px; white-space: pre;">I have called variable currentSelectionProcessing and initialized with link.innterText, and </div><div<br>style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace;<br>line-height: 19px; white-space: pre;"><div style="line-height: 19px;"><span style="color: #dcdcaa;">I have put updateCurrentPage</span>(<span style="color: #9cdcfe;">currentSelectionProcessing</span>);</div></div><br></td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain how you updated the content of the title tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>I actually could not figure out why this was not working because my<br>external.js file had no problem, and the directory was also right. I also<br>double checked to put these two lines just in case. The external.js is<br>also in the folder.<div><div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family:<br>Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div>&nbsp; &nbsp; <span style="color: #808080;">&lt;</span><span style="color:<br>#569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">&quot;external.js&quot;</span><span style="color: #808080;">&gt;&lt;/</span><span style="color: #569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div>&nbsp; &nbsp;<br><span style="color: #808080;">&lt;</span><span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">&quot;<a href="https://mjc224-dev.herokuapp.com/M3/external.js&quot;">https://mjc224-dev.herokuapp.com/M3/external.js&quot;</a></span><span style="color: #808080;">&gt;&lt;/</span><span style="color:<br>#569cd6;">script</span><span style="color: #808080;">&gt;</span></div><div><br></div></div></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Comment briefly talking about what you learned and/or any difficulties you encountered and how you resolved them (or attempted to)</td></tr>
<tr><td> <em>Response:</em> <p>The only difficulty in this homework for me was updating the content of<br>the title tag with the link text because I could not figure out<br>why it was not working. I have tried everything. In addition, I was<br>using online html compiler to quickly see how my changes apply to the<br>page, but it was different because the compiler shows the complete list tasks<br>in a list form, whereas my heroku shows only some of it as<br>a list form.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your pull request (hw branch to dev only)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/13">https://github.com/mjkchoi1/IT202-008/pull/13</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to your solution html file from prod (again you can assume the url at this point)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mjc224-prod.herokuapp.com/M3/problem1.html">https://mjc224-prod.herokuapp.com/M3/problem1.html</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-javascript-and-css-challenge/grade/mjc" target="_blank">Grading</a></td></tr></table>