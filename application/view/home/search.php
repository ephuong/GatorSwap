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

            <div class="item col-xs-6 col-md-3 " style="margin-bottom: 40px">

                <div class="thumbnail">
                   <?php
                    if (isset($result->IMG) && !empty($result->IMG)) {
                        echo '<img style="max-height: 180px; min-height:180px; padding-top: 7px;" class="group"  src="data:image/jpg;base64,' . base64_encode($result->IMG) . '" alt=""/>';
                    } else {
                        echo ' <img style="height:180px; padding-top: 7px;" class="group " src="http://placehold.it/400x250/000/fff" alt="" /> ';
                    }
                    ?>
                    <div class= "caption list-group-text">
                        <h3 class="group inner" style="margin-bottom: 40px; height:37px">
                            <b> <?php if (isset($result->Title)) echo htmlspecialchars($result->Title, ENT_QUOTES, 'UTF-8'); ?> </b> 
                        </h3>
                        
                        <p style="margin: 0px; padding-top: 5px; padding-bottom: 3px;"> 
                            <b><i><?php if (isset($result->Category_Name)) echo htmlspecialchars($result->Category_Name, ENT_QUOTES, 'UTF-8'); ?> </i></b>
                        </p>
                        
                        <p style="margin: 0px; padding-top: 0px; padding-bottom: 3px;"> 
                            <b>Condition:</b> <?php if (isset($result->Item_Condition))echo htmlspecialchars($result->Item_Condition, ENT_QUOTES, 'UTF-8'); ?> 
                        </p>
                        
                        <p class="lead" style="margin: 0px;">
                            <?php if (isset($result->Price)) echo "$" . htmlspecialchars($result->Price, ENT_QUOTES, 'UTF-8'); ?> 
                        </p>

                        <hr style ="border-color:black; margin-top: 5px; margin-bottom: 5px;">

                        <div class="btn-group" style="margin-top: 0px;">
                            <div class="col-xs-6 col-md-6">
                              <button href="<?php echo URL; ?>itemmodal/index" data-remote="false" data-toggle="modal" data-target="#myModal" class="btn btn-block  btn-default" data-item= "<?php if (isset($result->Item_ID)) echo htmlspecialchars($result->Item_ID, ENT_QUOTES, 'UTF-8'); ?>">More Info</button> 
                            </div>

                            <div class="col-xs-6 col-md-6">
                              <button href="#" class="btn btn-block  btn-primary">Buy it now</button>
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