<style>

.panel .panel-heading {
    font-size: 150%;
    background-color: #26215f ;
    border-color: #26215f;
}

.panel-primary{
  background-color: #26215f ;
  border-color: #26215f;
}
.panel-body {
     padding: 0px;
}

.panel-body .btn {
  padding: 0px;
}

#welcomeText{
  
  color : #FFF;
  background-color: #26215f ;
  margin-bottom: 15px;
  margin-top: 0px;
}
.page-header {
  margin:0px;
}
#lastHomeIndex{
  margin-bottom: 55px;
}
#category-icons{
   background-color: transparent; 
   border: none;
   outline: none;
}
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
    <div class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">

        <div class="panel-heading">BOOKS</div>
        <!--USING flaticon free icons here, need to put in doc -->
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="2">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body" style="height:300px">
                <p style="text-align:center;height:100%;"><button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
                <img class="img-responsive" src="http://sfsuswe.com/~pbroestl/gatorswap/GatorSwap/public/img/book-icon-white.png"  alt="Image" style="height:100%;" ></div></p>
        </form>

      </div>
    </div>
    <div class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">
        <div class="panel-heading">OFFICE SUPPLIES</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="3">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body" style="height:300px">
            <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
                <img class="img-responsive" src="http://sfsuswe.com/~pbroestl/gatorswap/GatorSwap/public/img/office-icon-white.png"  alt="Image" style="height:100%;"></button></div></p>
      </form>

      </div>
    </div>
    <div class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">

        <div class="panel-heading">CLOTHING</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="4">
            <input type= "hidden" name="search-keyword" value="">
        <div class="panel-body" style="height:300px">
            <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
            <img class="img-responsive" src="http://sfsuswe.com/~pbroestl/gatorswap/GatorSwap/public/img/clothing-icon-white.png" alt="Image" style="height:100%;"></button></div></p>

      </div>
    </form>
    </div>
  </div>
<br>

  <div class="row" id="lastHomeIndex">
    <div class="col-xs-4 offset-xs-4">
      <div class="panel panel-primary">

        <div class="panel-heading">FURNITURE</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="5">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body" style="height:300px">
                <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
                <img class="img-responsive" src="http://sfsuswe.com/~pbroestl/gatorswap/GatorSwap/public/img/furniture-icon-white.png"  alt="Image" style="height:100%;"></div></p>
        </form>
		
      </div>
    </div>
    <div class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">

        <div class="panel-heading">ELECTRONICS</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="6">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body" style="height:300px">
            <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
                <img class="img-responsive" src="http://sfsuswe.com/~pbroestl/gatorswap/GatorSwap/public/img/electronic-icon-white.png"  alt="Image" style="height:100%;"></button></div></p>
      </form>

      </div>
    </div>
    <div class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">

        <div class="panel-heading">OTHERS</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="7">
            <input type= "hidden" name="search-keyword" value="">
        <div class="panel-body" style="height:300px">
            <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
            <img class="img-responsive" src="http://sfsuswe.com/~pbroestl/gatorswap/GatorSwap/public/img/other-icon-white.png" alt="Image" style="height:100%;"></button></div></p>

      </div>
    </form>
    </div>
  </div>
</div><br>
</div><br><br>

