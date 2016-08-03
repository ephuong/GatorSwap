<!-- Default bootstrap modal example -->
<?php 
    // Row id set from Search.php
    $rowid = $_POST['item_id'];
   
 ?> 
   <!--  Use $results['content'] where 'content' is the item's information 

<?php if (isset($results['Title'])) {  
        echo $results['Title'];
        } ?>

   --> 
    <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
       
      </div>
    <div class="modal-body clearfix">
    <div class= "col-xs-6 col-md-6">
<?php

    if (isset($results['IMG']) && !empty($results['IMG'])) {
         echo '<img class="pull-left" width="256"  src="data:image/jpg;base64,' . base64_encode($results['IMG']) . '" alt=""/>';
        } else {
              echo ' <img class="pull-left" width="256" height="256" src="http://placehold.it/400x250/000/fff" alt="" /> ';
        }
 ?>
	</div>
  <div class= "col-xs-6 col-md-6">
        <h2> <b><?php if (isset($results['Title'])){ 
            echo $results['Title'];} ?> </b></h2>  
          <h5><b> Id: </b><?php if (isset($results['Item_ID'])){ 
            echo $results['Item_ID'];} ?> </h5>  
          <h5> <b> Condition: </b> <?php if (isset($results['Item_Condition'])){ 
            echo $results['Item_Condition'];} ?> </h5>  
            <p><b> Description: </b></p>
            <p> <?php if (isset($results['Description'])){ 
            echo $results['Description'];} ?> </p>  
            <br>
         <h3> Price: $<?php if (isset($results['Price'])){ 
            echo $results['Price'];} ?> </h3>
  </div> 
  
      </div> 
      <div class="modal-footer">
        <button style="font-size:18px" type="button" class="btn btn-lg btn-default" data-dismiss="modal"> Return </button>
        <button style="font-size:18px" type="button" class="btn btn-lg btn-primary">Buy it now</button>
      </div>
    </div>

<!-- <?php 
    // Row id set from Search.php
    $rowid = $_POST['row_id'];
    
 ?>   
     <div class='modal fade' id='modal_". $rowid ."'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>Preview</h4>
                </div>
                <div class='modal-body'>
      <h4 class='modal-title'> THIS Model id is: <?php echo $rowid ; ?> </h4> 

                </div>
            </div>
        </div>
    </div>

-->

 <!-- <?php /*  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">THIS Model id  is</h4>
            </div>			<!-- /modal-header -->
            <div class="modal-body clearfix">
                <img class="pull-left" src="images/image.png" width="256" height="256" alt="image">
				<p></p>            
        </div>			<!-- /modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>			<!-- /modal-footer -->
        </div>         <!-- /modal-content -->
    </div>     <!-- /modal-dialog -->
  
?>  
 */   
 