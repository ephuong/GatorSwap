<!--
<head>
    <link rel="stylesheet" href="<?php echo URL; ?>css/vp.css">
</head>

<div class="container">

    <!-- Table for search results 
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

-->
    <!--<head>
        <title>Search Display Items</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
            .row.content {height: 1500px}

            /* Set gray background color and 100% height */
            .sidenav {
                background-color: #f1f1f1;
                height: 100%;
            }



            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height: auto;}
            }
        </style>
        <script> 
                    $(document).ready(function () {
                $('#list').click(function (event) {
                    event.preventDefault();
                    $('#products .item').addClass('list-group-item');
                });
                $('#grid').click(function (event) {
                    event.preventDefault();
                    $('#products .item').removeClass('list-group-item');
                    $('#products .item').addClass('grid-group-item');
                });
            });
         </script> 
    </head>-->
<body style = "background-color:#F0f0f0; padding-bottom:50px;">
    
<div class="container" >

    <h2 id="results"> Search: <?php echo $results["count"]; ?> result(s) </h2>
    <h2 id="noResults"> No results found! :[
        <?php 

        if($results["count"] <= 0){
            echo "
            <script type=\"text/javascript\">
              $('#results').hide();
              $('#noResults').show();
              </script>
              ";
        }else{
            echo "
            <script type=\"text/javascript\">
              $('#results').show();
              $('#noResults').hide();
              </script>
              ";
        }


        ?>
    </h2>
   <!-- <div class="well well-sm">
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div> -->
    <div id="products" class="row list-group">
        <?php
           foreach ($results["results"] as $result) { ?>
        <div class="item  col-xs-4 col-lg-4" >
            <div class="thumbnail" style = "background-color:#FFFFFF; padding-top:10px;">
               <?php 
                  if (isset($result->IMG) && !empty($result->IMG)) {
                     echo '<img style="height:250px; " class="group list-group-image" src="data:image/jpg;base64,' . base64_encode($result->IMG) . '" alt=""/>';
                  }	else {
                     echo ' <img style="height:250px;" class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> ';    
                  }								
                ?>
                 <div class="caption" style = "background-color:#FFFFFF;" >
                    <h3 class="group inner list-group-item-heading">
                      <b> <?php  if (isset($result->Title)) echo htmlspecialchars($result->Title, ENT_QUOTES, 'UTF-8');?>  </b> </h3>
                    <h5 class="group inner list-group-category"> 
                      <b> <?php if (isset($result->Category)) echo htmlspecialchars($result->Category, ENT_QUOTES, 'UTF-8');?> </b></h5>
                       
                    <p class="group inner list-group-item-text"> 
                        <?php if (isset($result->Description)) echo htmlspecialchars($result->Description, ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                    <hr style ="border-color:black">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                <?php if (isset($result->Price)) echo "$" .  htmlspecialchars($result->Price, ENT_QUOTES, 'UTF-8'); ?> </p>
                        </div>
	
                        <div class="col-xs-12 col-md-10">
                            <a class="btn btn-success" href="#">Add to cart</a>
                        </div>
                        <div class="col-xs-12 col-md-10" style="padding-top:5px;">
                            <a class="btn btn-danger" href ="#"  >
                            <i class="glyphicon glyphicon-flag"></i>
                                        Flag
                              </a>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <?php } ?>
     </div>
</div>
     



<!--  <div class="container">

            <div class="row content" >
                <!--<div class="col-xs-2 sidenav">
                    <h3>Filters</h3>
                    <h4>Price Range</h4>
                    <div class="form-inline">
                        <label>$0-$25 <div class="checkbox"><label><input type="checkbox"></label><br>
                            </div></label>
                    </div>
                    <div class="form-inline">
                        <label>$25-$50 <div class="checkbox"><label><input type="checkbox"></label><br>
                            </div></label>
                    </div>
                    <div class="form-inline">
                        <label>$50-$100 <div class="checkbox"><label><input type="checkbox"></label><br>
                            </div></label>
                    </div>
                    <div class="form-inline">
                        <label>$100-$150 <div class="checkbox"><label><input type="checkbox"></label><br>
                            </div></label>
                    </div>


                    <h4>Item Condition</h4>
                    <div class="form-inline">
                        <label>Used <div class="checkbox"><label><input type="checkbox"></label><br>
                            </div></label>
                    </div>
                    <div class="form-inline">
                        <label>New <div class="checkbox"><label><input type="checkbox"></label><br>
                            </div></label>
                    </div>
                </div>

                <div class="col-sm-12" >
                    <h3>Display Search Items</h3>
                    <div class="row">
                        <!--
                          <div class="well well-sm">
                              <strong>Category Title</strong>
                              <div class="btn-group">
                                  <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                                  </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                                      class="glyphicon glyphicon-th"></span>Grid</a>
                              </div>
                          </div>
                        -->
 <!--                    <div id="products" class="row list-group">

                      <div id = "test2 " class="col-sm-4">

                            <div class="form-inline">
                                <a href="#" title="book" ><img src="" alt="book" style="width: 192px; height: 172px;"/></a>
                                <div class="form-group">
                                    <br>
                                    <label for="item_name"><input type="text" class="form-control" id="item_name" placeholder = "Theory of Computing"></label><br>
                                    <label for="poster_name"><input type="text" class="form-control" id="poster_name" placeholder = "Sam Smith"></label><br>
                                    <label for="item_price"><input type="text" class="form-control" id="item_price" placeholder = "$15"></label><br>
                                    <label for="item_condtion"><input type="text" class="form-control" id="item_condtion" placeholder = "Good"></label><br><br>
                                </div>
                                <div class="form-inline"> 
                                    <button type="button" class="btn btn-danger" ><i class="glyphicon glyphicon-flag"></i>
                                        Flag
                                    </button>	
                                    <button type="button" class="btn btn-primary">
                                        Add to cart 
                                    </button>						
                                </div>


                            </div>
                        </div>
                        </div>

                        
 


                        </div>
                    </div>

                </div>
            </div>
 -->
        <script>
            //Function to duplicate items 


            $('.advenced').click(function (e) {
                e.preventDefault();
                $('#panelAdv').toggle();
            });
            $('.plus1 a').click(function (e) {
                e.preventDefault();
                if ($(this).children('i').hasClass('glyphicon-plus')) {
                    $(this).children('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
                }
                else {
                    $(this).children('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
                }
                $('.morePanel1').toggle();
            });
            $('.plus2 a').click(function (e) {
                e.preventDefault();
                if ($(this).children('i').hasClass('glyphicon-plus')) {
                    $(this).children('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
                }
                else {
                    $(this).children('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
                }
                $('.morePanel2').toggle();
            });
            $('.plus3 a').click(function (e) {
                e.preventDefault();
                if ($(this).children('i').hasClass('glyphicon-plus')) {
                    $(this).children('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
                }
                else {
                    $(this).children('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
                }
                $('.morePanel3').toggle();
            });
        </script>


    </body>
</html>

