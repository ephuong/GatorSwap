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

<!--   <p> <?php if (isset($results["results"][1]->Title))
{          echo $results["results"][1]->Title;
} ?> </p>

-->
<body style = "background-color:#F0f0f0;">
 <!-- Details Modal --> 
 
<a href="item-modal.php" data-remote="false" data-toggle="modal" data-target="#myModal" class="btn btn-default">
    Launch Modal
</a>
<!-- modal template -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
        
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body clearfix">
                <img class="pull-left" src="#" width="256" height="256" alt="image">
				<p></p>  
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


 <a id="item-modal" data-original-title="Preview" data-placement="top" class="data-tooltip" rel="tooltip" data-toggle="modal" href="#modal_2">Modal</a>
 
 
    <div class="container" >
    
        <h2>Search: <?php echo $results["count"]; ?> result(s)</h2>
        <!-- <div class="well well-sm">
             <strong>Category Title</strong>
             <div class="btn-group">
                 <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                 </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                     class="glyphicon glyphicon-th"></span>Grid</a>
             </div>
         </div> -->
        <div id="products" class="row list-group is-table-row" >
            <?php
                  // Incrementing variable for details button 
                  $rowID = 0;
                  foreach ($results["results"] as $result) { ?>
            
            
                <div class="item col-xs-6 col-md-3 " >
                  
                    <div class="thumbnail" >
                        <?php
                        if (isset($result->IMG) && !empty($result->IMG)) {
                            echo '<img style="max-height:250px; " class="group" src="data:image/jpg;base64,' . base64_encode($result->IMG) . '" alt=""/>';
                        } else {
                            echo ' <img style="height:250px;" class="group " src="http://placehold.it/400x250/000/fff" alt="" /> ';
                        }
                        ?>
                        <div class= "caption list-group-text"  >
                            <h3 class="group inner ">
                                <b> <?php if (isset($result->Title)) echo htmlspecialchars($result->Title, ENT_QUOTES, 'UTF-8'); ?>  </b> </h3>
                            <h5 class="group inner "> 
                                <b> <?php if (isset($result->Category)) echo htmlspecialchars($result->Category, ENT_QUOTES, 'UTF-8'); ?> </b></h5>

                          <!--  <p class="group inner list-group-item-text"> 
                                <?php if (isset($result->Description)) echo htmlspecialchars($result->Description, ENT_QUOTES, 'UTF-8'); ?>
                            </p>  -->
                            
                            
                        <button href="item-modal.php" data-remote="false" data-toggle="modal" data-target="#myModal" class="btn btn-default" data-id = "<?php echo $rowID; ?>" > Details </button> 
                            
                            
                            <hr style ="border-color:black">

                            <div class="row ">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        <?php if (isset($result->Price)) echo "$" . htmlspecialchars($result->Price, ENT_QUOTES, 'UTF-8'); ?> </p>
                                </div>
                                 <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-warning " href="#">Buy</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    
                    
                </div>
 
            <?php
                $rowID++; } ?>
        </div>
    </div>


    <script>
        //Function for ajax modal 
 $("#myModal").on("show.bs.modal", function(e) {
    var link = $(e.relatedTarget);
    $(this).find(".modal-body").load(link.attr("href"));
});

 $(document).ready(function() {
    $('#item-modal').click(function() {
        var $modal = $('#item-modal');
            $modal.load('item-modal.php', {'row_id': '2'},
            function(){
              $modal.modal('show');
        });  
    });
});        


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

