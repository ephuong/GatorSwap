


<!-- Default bootstrap modal example -->
<?php 
    // Row id set from Search.php
if(isset( $_POST['item_id'])){
 $rowid = $_POST['item_id'];

}   

   
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
      <div class="container-fluid text-center">
  <a href="<?php echo URL; ?>home/search" style="font-size:18px" type="button" class="btn btn-default btn-lg">
           Return
        </a>
		<a href="<?php echo URL; ?>home/thankyou" style="font-size:18px" type="button" class="btn btn-primary btn-lg">
         Confirm your order
        </a>
      </div>
    </div><br><br>
