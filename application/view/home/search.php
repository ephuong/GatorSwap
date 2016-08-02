
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
 
<!--<a href= "<?php echo URL; ?>itemmodal/index" data-remote="false" data-toggle="modal" data-rowid = "NULL" data-target="#myModal" class="btn btn-default">
    Launch Modal
</a>
 -->
<!-- modal template -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
</div>
</div>
 
 <!--search results body --> 
 
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

                            echo '<img style="max-height:250px; " class="group"  src="data:image/jpg;base64,' . base64_encode($result->IMG) . '" alt=""/>';

                        } else {
                            echo ' <img style="height:250px;" class="group " src="http://placehold.it/400x250/000/fff" alt="" /> ';
                        }
                        ?>
                        <div class= "caption list-group-text"  >
                            <h3 class="group inner ">
                                <b> <?php if (isset($result->Title)) echo htmlspecialchars($result->Title, ENT_QUOTES, 'UTF-8'); ?>  </b> </h4>
                            <h4 class="group inner "> 

                                <i>  <?php if (isset($result->Category_Name)) echo htmlspecialchars($result->Category_Name, ENT_QUOTES, 'UTF-8'); ?> </i></h5>
                            <h5> <b> Condition: </b> <?php if (isset($result->Item_Condition)){  echo $result->Item_Condition;} ?> </h5> 
                            

                                    <p class="lead">
                                        <?php if (isset($result->Price)) echo "$" . htmlspecialchars($result->Price, ENT_QUOTES, 'UTF-8'); ?> </p>
                                
                            
                       
                            
                            
                            <hr style ="border-color:black">

                            <div class="btn-group">
                                
                               
                                 <div class="col-xs-6 col-md-6">
                                  <button href="<?php echo URL; ?>itemmodal/index" data-remote="false" data-toggle="modal" data-target="#myModal" class="btn btn-block  btn-default" data-item= "<?php if (isset($result->Item_ID)) echo htmlspecialchars($result->Item_ID, ENT_QUOTES, 'UTF-8'); ?>" >More Info</button> 
                                 
                                </div>
                                
                                <div class="col-xs-6 col-md-6">
                                  <button class="btn btn-block btn-warning " href="#">Buy It Now</button>
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
    var Id = link.data('item');
    $(this).find(".modal-content").load(link.attr("href"), {item_id : Id});
});

$('#myModal').on('hidden.bs.modal', function () {
    $(this).find(".modal-content").html("");

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


