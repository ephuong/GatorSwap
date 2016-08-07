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
                <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="search-button" name="search" style="height:100%;">
                <img class="img-responsive" src="http://image.flaticon.com/icons/svg/126/126503.svg"  alt="Image" style="height:100%;" ></div></p>
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
            <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="search-button" name="search" style="height:100%;">
                <img class="img-responsive" src="http://image.flaticon.com/icons/svg/126/126483.svg"  alt="Image" style="height:100%;"></button></div></p>
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
            <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="search-button" name="search" style="height:100%;">
            <img class="img-responsive" src="http://image.flaticon.com/icons/svg/126/126515.svg" alt="Image" style="height:100%;"></button></div></p>

      </div>
    </form>
    </div>
  </div>
<br>

  <div class="row" id="lastHomeIndex">
    <div class="col-xs-4 offset-xs-4">
      <div class="panel panel-primary">

        <div class="panel-heading">FURNITURE</div>
        <!--USING flaticon free icons here, need to put in doc -->
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="5">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body" style="height:300px">
                <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="search-button" name="search" style="height:100%;">
                <img class="img-responsive" src="http://image.flaticon.com/icons/svg/126/126496.svg"  alt="Image" style="height:100%;"></div></p>
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
            <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="search-button" name="search" style="height:100%;">
                <img class="img-responsive" src="http://image.flaticon.com/icons/svg/126/126512.svg"  alt="Image" style="height:100%;"></button></div></p>
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
            <p style="text-align:center;height:100%"><button class="btn btn-success-outline" id="search-button" name="search" style="height:100%;">
            <img class="img-responsive" src="http://image.flaticon.com/icons/svg/126/126498.svg" alt="Image" style="height:100%;"></button></div></p>

      </div>
    </form>
    </div>
  </div>
</div><br>
</div><br><br>

