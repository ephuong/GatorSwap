<div class="container">
        <div class= "col-xs-6 col-md-6">
            
        <table>
           <?php foreach ($itemListArr["itemListArr"] as $item_x) { ?>
            <h2><b>Title: <?php if (isset($item_x->Title)) echo htmlspecialchars($item_x->Title, ENT_QUOTES, 'UTF-8'); ?></h2></b>
            <h5><b>Item ID: <?php if (isset($item_x->Item_ID)) echo htmlspecialchars($item_x->Item_ID, ENT_QUOTES, 'UTF-8'); ?></h5> </b>
            
            <h5><b>Description: <?php if (isset($item_x->Description)) echo htmlspecialchars($item_x->Description, ENT_QUOTES, 'UTF-8'); ?></h5> </b>
            <h5><b>Price: $<?php if (isset($item_x->Price)) echo htmlspecialchars($item_x->Price, ENT_QUOTES, 'UTF-8'); ?></h5> </b>
          
            <?php 
                    if (isset($item_x->IMG)) {
                            echo '<img style=" width:30%" src="data:image/jpg;base64,' . base64_encode($item_x->IMG) . '" />';
                    }									
            ?>     

        <?php } ?>

        </table>    
        </div> 
</div>
