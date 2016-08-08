<style>
p{
    text-align: center;
    font-size: 28px;
} 
table{
    text-align: left;
}
td{
    padding: 30px;
}
.container-selldisplay{
    margin: 0 auto;
    padding: 30px;
}

</style>
<div class="container-selldisplay">
    <!--<div class= "col-xs-6 col-md-6">-->
    <p>Item successfully posted. Thank you for using GatorSwap</p><br><br>
    
     <table>
         <tr>
           <td>
           <?php foreach ($itemListArr["itemListArr"] as $item_x) { ?>
            <h4><b>Title: <?php if (isset($item_x->Title)) echo htmlspecialchars($item_x->Title, ENT_QUOTES, 'UTF-8'); ?></h4></b>
            <h4><b>Item ID: <?php if (isset($item_x->Item_ID)) echo htmlspecialchars($item_x->Item_ID, ENT_QUOTES, 'UTF-8'); ?></h4> </b>
            
            <h4><b>Description: <?php if (isset($item_x->Description)) echo htmlspecialchars($item_x->Description, ENT_QUOTES, 'UTF-8'); ?></h4> </b>
            <h4><b>Price: $<?php if (isset($item_x->Price)) echo htmlspecialchars($item_x->Price, ENT_QUOTES, 'UTF-8'); ?></h4></b>
           </td>
           <td>
            <?php 
                    if (isset($item_x->IMG)) {
                            echo '<img style=" width:60%" src="data:image/jpg;base64,' . base64_encode($item_x->IMG) . '" />';
                    }									
            ?>     

        <?php } ?>
            <td>
        </tr>
     </table>    
    
    <!--<table class="table table-hover">
        <thead>
        <tr>
          <th>Item ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Price</th>
          <th>Item Image</th>
        </tr>
        </thead>
        <tr>
            <?php foreach ($itemListArr["itemListArr"] as $item_x) { ?>
            <td><h5><b>Item ID: <?php if (isset($item_x->Item_ID)) echo htmlspecialchars($item_x->Item_ID, ENT_QUOTES, 'UTF-8'); ?></h5> </b></td>

            <td><h5><b><?php if (isset($item_x->Title)) echo htmlspecialchars($item_x->Title, ENT_QUOTES, 'UTF-8'); ?></h5></b></td> 
            <td><h5><b><?php if (isset($item_x->Description)) echo htmlspecialchars($item_x->Description, ENT_QUOTES, 'UTF-8'); ?></h5> </b></td>
            <td><h5><b>$<?php if (isset($item_x->Price)) echo htmlspecialchars($item_x->Price, ENT_QUOTES, 'UTF-8'); ?></h5> </b></td>

            <td>
                <?php 
                    if (isset($item_x->IMG)) {
                        echo '<img style=" width:30%" src="data:image/jpg;base64,' . base64_encode($item_x->IMG) . '" />';
                    }									
                ?>     

                <?php } ?>
             </td>
        </tr>
    </table>-->    
    <!--</div> -->
</div>
