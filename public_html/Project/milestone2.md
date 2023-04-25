<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Matthew Choi (mjc)</td></tr>
<tr><td> <em>Generated: </em> 4/25/2023 7:14:37 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/mjc" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234165597-30e4aee7-0158-4d05-98c8-20dc832bb511.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>&#39;add_item.php&#39; on the admin page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234166300-a28caacc-dd34-4587-8453-c26f8117ce3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Item created in the admin page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234166559-0b5dbc7c-d258-48ec-acc3-2cf12d5ae94e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is a table column with the created item.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <div>Only the user with an admin role has the authority to view the<br>page. The form data is submitted by the POST, and the script goes<br>over to check if the user has the admin role. If the user<br>does not have admin, the user is sent to the home page. Save_data<br>function is used to put in the data to the table.</div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/46">https://github.com/mjkchoi1/IT202-008/pull/46</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mjc224-prod.herokuapp.com/Project/admin/add_item.php">https://mjc224-prod.herokuapp.com/Project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234170902-6c72fcd9-e994-4d41-8446-8be0a9223fc6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>There are 10 sample items in the shop.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234176363-fa2780b1-17cd-4e30-8879-ca62ba314f5d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The filter is showing two items that have &quot;1&quot; in the name.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234177365-17da6e1d-9d59-4370-96f3-82bc5ee7f976.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the filter coding logic from the code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <div>The code handles a form submission with a POST request, which has the<br>input field itemName. It does a search query on a table $Table_NAME, which<br>selects rows where the "name" column in similar to the value of itemName<br>with wildcard characters.&nbsp;</div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/51">https://github.com/mjkchoi1/IT202-008/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mjc224-prod.herokuapp.com/Project/admin/list_items.php">https://mjc224-prod.herokuapp.com/Project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234182432-bfc44f49-f695-4a27-9ed2-4069a0ff41ed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the product list that only admin could see.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <div>The results are shown by connecting the database and executing a SELECT query<br>to get data from the Products table. Each row of data is displayed<br>to the using using a foreach loop that iterates through the $results array.</div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/50">https://github.com/mjkchoi1/IT202-008/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mjc224-prod.herokuapp.com/Project/admin/admin_item.php">https://mjc224-prod.herokuapp.com/Project/admin/admin_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234132677-df9c8f33-bac9-4ed0-95e8-b74c2dba5a11.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is a screenshot showing that the edit button is only visible to<br>the admin on the shop page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234379614-c5ef313b-6452-47d9-9c1b-d9d0d91650ab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The screenshot is showing the edit button in blue(no style) in the product<br>details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234185219-93003e16-70b1-49e8-acc8-6e2b1baa6b3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is a screenshot showing the edit button visible to the admin on<br>the admin product list page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234380220-38e6892b-1dec-44c9-aa5e-20fbb9817e60.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot before changing the product <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234379996-94e25f19-2ceb-4510-b773-2e02dcb4b997.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot after changing the product<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>When the user hits the submit button, the code checks if the user<br>has the admin. When the user is the admin, the code sends the<br>user to edit_item.php page. If the user is not the admin, the user<br>should be redirected to the home. Then the update_data updates the items with<br>the new data. When the edit was successful, the code will flash a<br>success message to the user. Then it receives the id of the item<br>that the user is trying to edit. If the id of the item<br>is valid, the new data is sent to the table.</div><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/46">https://github.com/mjkchoi1/IT202-008/pull/46</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mjc224-dev.herokuapp.com/Project/admin/edit_item.php">https://mjc224-dev.herokuapp.com/Project/admin/edit_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234381872-2c69040e-2ed3-4bee-ba34-d46fb2f64a2b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>all of the items have a clickable button that directs user to the<br>products detail page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234382012-cafc3cdd-5ba2-4c0e-93a0-2d3df2d85418.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is my product details page with an edit button. It shows name,<br>quantity, price, stock of the item.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>The code shows the product details page based on the id of the<br>product that is passed in the URL. if the id of the product<br>is not provided or not found, an error message is displayed. The product<br>details page shows the image, name, description, price, and the quantity.&nbsp;</div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/51">https://github.com/mjkchoi1/IT202-008/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mjc224-prod.herokuapp.com/Project/product.php?id=1">https://mjc224-prod.herokuapp.com/Project/product.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234187386-fe5f0427-7830-40d7-8beb-dc9a22edd717.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The item is added to card<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234187585-80597ef7-2650-4196-83fe-230e5a45e195.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The page shows that the user must be logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234187702-9e5e5b8c-df7b-468b-aa68-07ad0ef3da33.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The cart has the value of the items.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <div>The code first checks if the user is logged in. Then it checks<br>if there is any action specified by the post request. If there is,<br>the code makes the connection to the database. Then the user could see<br>what items are in the cart of the user.</div><div><br></div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <div>When the user wants to add item to the cart, the code puts<br>a new record into the cart table with the item id, quantity, price,<br>and the user id. If there is already a previous record, the desired_quantity<br>is used. when updating an item, the code updates the desired_quantity for the<br>user. when deleting an item, the code deletes the record from the cart<br>table of the user. After these, the code fetches the new data from<br>the tables by joining the id and the item_id. The fetched data is<br>stored in the $cart variable. Then the data is showed to the user<br>using a foreach loop on the $cart. It displays the item name, price,<br>quantity, subtotal, and delete.</div><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/51">https://github.com/mjkchoi1/IT202-008/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234191092-3b7da12c-de63-408b-b9e0-2e138a2609f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cart.php shows a correct output<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <div>The code checks if the action has been requested through a POST request,<br>and if it does, it performs the requested action in the database. After<br>this process, the code queries the database to retrieve the information of the&nbsp;<br>items in the cart including the price, quantity, and stock. It calculates the<br>subtotal for each item as the product of the unit price, and adds<br>this to a cumulative total. Then the code shows the items with the<br>name, unit price, desired quantity, and subtotal.</div><div></div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/51">https://github.com/mjkchoi1/IT202-008/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mjc224-prod.herokuapp.com/Project/cart.php">https://mjc224-prod.herokuapp.com/Project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234191637-70bba707-383b-4fde-90e5-335bae036ccf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before updating the quantity of item 1 (quantity 3)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234191839-3317cdce-6f10-458a-8d20-094c40fbab06.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After updating the quantity to 10.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234424886-a569e0de-f52c-4079-92db-f1c7c43ba5e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before updating the quantity of item 3. Quantity is at 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234424923-809ddf1c-063c-4299-9024-80be4d7e95ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The page flashes a message that the value has to be larger than<br>0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234425164-15560c27-4b96-438d-9fc2-8e637d2c58b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the quantity is trying to update to -, it shows a flash<br>that the quantity has to be larger.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <div>When the user is trying to update the quantity of item in the<br>cart, the code updates the field of cart table by updating the desired_quantity<br>field. This sets the new quantity. When either 0 or negative values are<br>requested for an update, the se function is used to validate the form<br>inputs. The se function will discriminate whether if the value is less than<br>0.&nbsp;</div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/51">https://github.com/mjkchoi1/IT202-008/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234426470-3d474df4-b468-4f34-a3e9-aa9635685358.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Item 1 is in the cart with quantity 1.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234426504-af3cc0ba-4327-447c-ba2a-872a26a50b86.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Item 1 has been deleted.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234426226-a5fa725d-7c54-49e7-85fa-9f05167b1db9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Item 3 and 4 exist in the cart with the quantity of 1.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234426317-9c18b368-7c1b-42c1-8fea-65819a2b89c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Both items have been deleted from the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <div>Whenever user submits the form by clicking the delete button, a POST request<br>is sent to the server with the cart_id to the id of the<br>cart that user is willing to delete. Then sql query is executed to<br>delete the item from the cart table using the cart_id and id of<br>the user who is currently logged in.</div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mjkchoi1/IT202-008/pull/51">https://github.com/mjkchoi1/IT202-008/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/116091558/234427325-ea9e7c5b-f7cc-4852-b052-c70a1f4ff350.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot shows which issues that I had.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/mjc" target="_blank">Grading</a></td></tr></table>