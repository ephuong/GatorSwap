
<div class="container">
  <div class="row" id="bodyText">
    <div class="text-center">
      <div class="page-header">
        <h1>Welcome to GatorSwap</h1>
		    <p>
          A marketplace for students at San Francisco State University.
        </p>
      </div>
    </div>
  </div>

  <div class="row">
    <div id="categoryBox" class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">

        <div class="panel-heading">BOOKS</div>
        <!--USING flaticon free icons here, need to put in doc -->
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input  type= "hidden" name="search-category" value="1">
            <input type= "hidden" name="search-keyword" value="">

            <div class="panel-body" style="height:300px">
                <p style="text-align:center;height:100%;">
                <button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
                <img class="img-responsive" src="<?php echo URL; ?>img/book-icon-white.png"  alt="Image" style="height:100%;" >
            </div></p>
        </form>
      </div>
    </div>

    <div id="categoryBox" class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">
        <div class="panel-heading">OFFICE SUPPLIES</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
          <input type= "hidden" name="search-category" value="2">
          <input type= "hidden" name="search-keyword" value="">

          <div class="panel-body" style="height:300px">
            <p style="text-align:center;height:100%">
            <button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
            <img class="img-responsive" src="<?php echo URL; ?>img/office-icon-white.png"  alt="Image" style="height:100%;"></button>
          </div></p>
        </form>
      </div>
    </div>

    <div id="categoryBox" class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">
        <div class="panel-heading">CLOTHING</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
          <input type= "hidden" name="search-category" value="3">
          <input type= "hidden" name="search-keyword" value="">

          <div class="panel-body" style="height:300px">
            <p style="text-align:center;height:100%">
            <button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
            <img class="img-responsive" src="<?php echo URL; ?>img/clothing-icon-white.png" alt="Image" style="height:100%;"></button></div></p>
          </div>
        </form>
      </div>
    </div>
    <br>

  <div class="row" id="lastHomeIndex">
    <div id="categoryBox" class="col-xs-4 offset-xs-4">
      <div class="panel panel-primary">
        <div class="panel-heading">FURNITURE</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
          <input type= "hidden" name="search-category" value="4">
          <input type= "hidden" name="search-keyword" value="">

          <div class="panel-body" style="height:300px">
            <p style="text-align:center;height:100%">
            <button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
            <img class="img-responsive" src="<?php echo URL; ?>img/furniture-icon-white.png"  alt="Image" style="height:100%;">
          </div></p>
        </form>
      </div>
    </div>

    <div id="categoryBox" class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">
        <div class="panel-heading">ELECTRONICS</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
          <input type= "hidden" name="search-category" value="5">
          <input type= "hidden" name="search-keyword" value="">
          <div class="panel-body" style="height:300px">
            <p style="text-align:center;height:100%">
            <button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
            <img class="img-responsive" src="<?php echo URL; ?>img/electronic-icon-white.png"  alt="Image" style="height:100%;"></button>
          </div></p>
        </form>
      </div>
    </div>

    <div id="categoryBox" class="col-sm-4 col-xs-4 offset-xs-4">
      <div class="panel panel-primary">
        <div class="panel-heading">OTHERS</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="6">
            <input type= "hidden" name="search-keyword" value="">

            <div class="panel-body" style="height:300px">
              <p style="text-align:center;height:100%">
              <button class="btn btn-success-outline" id="category-icons" name="search" style="height:100%;">
              <img class="img-responsive" src="<?php echo URL; ?>img/other-icon-white.png" alt="Image" style="height:100%;"></button>
            </div></p>
      </div>
        </form>
    </div>
  </div><br>
</div><br><br>
