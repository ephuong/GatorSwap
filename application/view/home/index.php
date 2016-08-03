<style>

.panel-primary>.panel-heading {
    font-size: 100%:
    background-color: #000000;
    border-color: #000000;
}

.panel-primary{
  border-color: #53565a
}

#welcomeText{
  margin-top: -55px;
}
#lastHomeIndex{
  margin-bottom: 55px;
}
/* Code for footer starts */
     footer {
    
    background-color: #53565A;
    border-top: 1px solid #E7E7E7;
    text-align:center;
    padding:20px;   
    position: absolute;
    left: 0;
    bottom: 0;   
    width: 100%;
  
} 
    
    .footerLinks{
      color:white;

    }

    .footerLinks:hover{
      color:#C99700;

    }
    /*Code for the footer ends*/
</style>


<div class="container">
  <div class="row" id="welcomeText">
    <div class="text-center">
      <div class="page-header">
          <h1>GatorSwap</h1>
		  <p>
			San Francisco State University's Marketplace 
          </p>
      </div>    
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">

        <div class="panel-heading">BOOKS</div>
        <!--USING flaticon free icons here, need to put in doc -->
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="2">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body">
                <button class="btn btn-success-outline" id="search-button" name="search">
                <img src="http://image.flaticon.com/icons/svg/126/126503.svg"  alt="Image"  width="300" height="200"></div>
        </form>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">OFFICE SUPPLIES</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="3">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body">
            <button class="btn btn-success-outline" id="search-button" name="search">
                <img src="http://image.flaticon.com/icons/svg/126/126483.svg"  alt="Image"  width="300" height="200"></button></div>
      </form>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">

        <div class="panel-heading">CLOTHING</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="4">
            <input type= "hidden" name="search-keyword" value="">
        <div class="panel-body">
            <button class="btn btn-success-outline" id="search-button" name="search">
            <img src="http://image.flaticon.com/icons/svg/126/126515.svg" alt="Image"  width="300" height="200"></button></div>

      </div>
    </form>
    </div>
  </div>
<br>

  <div class="row" id="lastHomeIndex">
    <div class="col-sm-4">
      <div class="panel panel-primary">

        <div class="panel-heading">FURNITURE</div>
        <!--USING flaticon free icons here, need to put in doc -->
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="5">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body">
                <button class="btn btn-success-outline" id="search-button" name="search">
                <img src="http://image.flaticon.com/icons/svg/126/126496.svg"  alt="Image"  width="300" height="200"></div>
        </form>
		
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">

        <div class="panel-heading">ELECTRONICS</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="6">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body">
            <button class="btn btn-success-outline" id="search-button" name="search">
                <img src="http://image.flaticon.com/icons/svg/126/126512.svg"  alt="Image"  width="300" height="200"></button></div>
      </form>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">

        <div class="panel-heading">OTHERS</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="7">
            <input type= "hidden" name="search-keyword" value="">
        <div class="panel-body">
            <button class="btn btn-success-outline" id="search-button" name="search">
            <img src="http://image.flaticon.com/icons/svg/126/126498.svg" alt="Image"  width="300" height="200"></button></div>

      </div>
    </form>
    </div>
  </div>
</div><br>
</div><br><br>

