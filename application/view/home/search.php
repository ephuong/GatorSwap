
<head>
  <link rel="stylesheet" href="<?php echo URL; ?>css/vp.css">
</head>

<div class="container">
	
	<!-- Table for search results -->
	<div id="user-table">
		<h2>Search: <?php echo $results["count"]; ?> result(s)</h2>
		<table>
			<thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Item ID</td>
                <td>Title</td>
                <td>Category</td>
                <td>Description</td>
				<td>Price</td>
				<td>Image</td>
            </tr>
            </thead>
			
			<tbody>
			<?php foreach ($results["results"] as $result) { ?>
			<tr>
				<td><?php if (isset($result->Item_ID)) echo htmlspecialchars($result->Item_ID, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php if (isset($result->Title)) echo htmlspecialchars($result->Title, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php if (isset($result->Category)) echo htmlspecialchars($result->Category, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php if (isset($result->Description)) echo htmlspecialchars($result->Description, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php if (isset($result->Price)) echo htmlspecialchars($result->Price, ENT_QUOTES, 'UTF-8'); ?></td>
				<td>
				<?php 
					if (isset($result->IMG)) {
						echo '<img style="width:50%" src="data:image/jpg;base64,' . base64_encode($result->IMG) . '" />';
					}									
				?>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>


<div class="container">

    
     <div class="input-group custom-search-form">           
             
             
             <br>
    <hgroup class="mb20">
        <h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Book</strong></h2>								
	</hgroup>

    <section class="container">
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="book" class="thumbnail"><img src="" alt="book" style="width: 142px; height: 142px;"/></a>
				<div class="form">
				<div class="form-inline">
				<label for="item_name"><input type="text" class="form-control" id="item_name" placeholder = "Algorithms"></label><br>
				<label for="item_price"><input type="text" class="form-control" id="item_price" placeholder = "$15"></label><br>
				<label for="item_condtion"><input type="text" class="form-control" id="item_condtion" placeholder = "Good"></label><br>
				</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<div class="buttons">
                        <button type="button" class="btn btn-primary">
                           Add to cart 
                        </button>  </div><br>
						<div class="buttons">
						<button type="button" class="btn btn-danger" ><i class="glyphicon glyphicon-flag"></i>
                           Flag
                        </button>
						</div>
						
				</ul>
                 
			</div>
			
			
			<span class="clearfix borda"></span>
		</article>
		<hr>
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="book" class="thumbnail"><img src="" alt="book" style="width: 142px; height: 142px;"/></a>
				<div class="form">
				<div class="form-inline">
				<label for="item_name"><input type="text" class="form-control" id="item_name" placeholder = "Data Structure"></label><br>
				<label for="item_price"><input type="text" class="form-control" id="item_price" placeholder = "$45"></label><br>
				<label for="item_condtion"><input type="text" class="form-control" id="item_condtion" placeholder = "Good"></label><br>
				</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<div class="buttons">
                        <button type="button" class="btn btn-primary">
                           Add to cart 
                        </button>  </div><br>
						<div class="buttons">
						<button type="button" class="btn btn-danger" ><i class="glyphicon glyphicon-flag"></i>
                           Flag
                        </button>
						</div>
						
				</ul>
                 
			</div>
			
			
			<span class="clearfix borda"></span>
		</article>
		<hr>
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="book" class="thumbnail"><img src="" alt="book" style="width: 142px; height: 142px;"/></a>
				<div class="form">
				<div class="form-inline">
				<label for="item_name"><input type="text" class="form-control" id="item_name" placeholder = "Theory of Computing"></label><br>
				<label for="item_price"><input type="text" class="form-control" id="item_price" placeholder = "$15"></label><br>
				<label for="item_condtion"><input type="text" class="form-control" id="item_condtion" placeholder = "Good"></label><br>
				</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<div class="buttons">
                        <button type="button" class="btn btn-primary">
                           Add to cart 
                        </button>  </div><br>
						<div class="buttons">
						<button type="button" class="btn btn-danger" ><i class="glyphicon glyphicon-flag"></i>
                           Flag
                        </button>
						</div>
						
				</ul>
                 
			</div>
			
			
			<span class="clearfix borda"></span>
		</article>
		<hr>

       

		
        <div class="text-center">
<ul class="pagination ">
  <li class='disabled'><a href="#">«</a></li>
  <li class='active'><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">»</a></li>
</ul>
</div>
	</section>
</div>
</div>

