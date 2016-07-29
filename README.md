# Things to do for the 08/01 Checkpoint
### UI
* Large logo
* Some text on the website to describe our site and guide users (eg. Welcome to GatorSwap)
* Dropdown category in search should be connected to the database
* Category text in the dashboard/homepage links should also be connected to the database
* Clicking category links from the dashboard/homepage should be equivalent to searching with specific category with empty searchbox
* Header links should be consistent on all pages
* Search category and search text should persist on search results
* Empty search box should default to “all” results
  *  If the search box is empty and dropdown is in specific category, results should contain all items from that category (ex.  if category is books and search box is empty; show all items under books)
* **NO CART and NO FLAG!!!!!**
* "Sell an Item" is always on the header
* "Sell an Item" should go to the item creation page 
  * if user is not signed in or registered: include message on top of the page with a link to sign in or register
  * after sign in / registration _redirect_ user back to the item creation page
* Search results will show the items: 
  * **NO MORE INDIVIUDAL ITEM PAGES**
  * Items _might_ include a link to the seller's page which will display all the items that user is selling and a contact user button - this is priority 1.5 at best **do not** consider this until we make major progress on the other items on this list.
* If there are no search results put "No results found"
* "Add to Cart" button will be changed to "Buy it now" 
  * Clicking this will direct user to the payment page

##### Email feature **will not** be considered until 08/01 checkpoint is complete
<br>

# Git Rules and Guidelines

### Master Branch
* No one can push any non-merge commits into this branch. _This includes those with the master role: Aileen, Elaine._
* Only Aileen and Elaine can merge to this branch from the **_development branch_**.
* When requesting to merge your code, always open a merge request to the _development branch_ NOT the master branch

### Development Branch
* No one can push any commits into this branch
  * **Only exception:** Aileen or Elaine pushing a commit that modifies the project readme or project wiki
* Before working on a feature, create your own branch from development.
  * All branches should follow the following naming convention
  ````
  feature-yourname 
  example: searchResults-ephuong
  ````
  * Each member is NOT limited to creating only one branch from development
* Once features are complete, you may open a merge request to merge your branch into development. Assign the all merge requests to either Aileen or Elaine.
* Do not open a merge request until your code is well tested and working.
* If a merge request is accidentally opened or you changed your mind you may close it.

### General Guidelines on Commits
* **Do not** push your commits until you have tested your code and have made significant progress.
* A general reminder that local commits are **LOCAL** to your machine. Nothing is reflected in the repo unless you explicitly _push_ those commits to the repo. Local commits should **never** be pushed to the repo until the features are complete and/or your code is working. You may make multiple local commits when a sizable amount of progress is made but **DO NOT** push those local commits until you’ve made significant progress (ex. completed a function).
````
If you modify a file and save that file in your individual linux server account, those changes WILL reflect on the webpage. 
So please save your commits for when you’ve made a sizable amount of progress.
````
* Make meaningful commit messages. At minimum provide a brief full sentence describing what you did for the commit. And please include the following details in the commit when applicable: the file modified, the function modified, the purpose of the commit (ex. fixing a bug or mistake in code).

###### This readme will be updated with more information on git usage. 
###### This readme may be moved to the project wiki later on but it will remain here for now for the team's convenience and until we make an official readme for our site - Elaine 

