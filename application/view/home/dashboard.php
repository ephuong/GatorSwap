<style>

.panel-primary>.panel-heading {
    font-size: 100%:
    background-color: #000000;
    border-color: #000000;
}

.panel-primary{
  border-color: #53565a
}

</style>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Books</div>
        <!--USING flaticon free icons here, need to put in doc -->
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="2">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body">
                <button class="btn btn-success-outline" id="search-button" name="search">
                <img src="http://image.flaticon.com/icons/svg/126/126503.svg"  alt="Image"  width="300" height="200"></div>
            <div class="panel-footer">Click here to view books</div>
        </form>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Office</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="3">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body">
            <button class="btn btn-success-outline" id="search-button" name="search">
                <img src="http://image.flaticon.com/icons/svg/126/126483.svg"  alt="Image"  width="300" height="200"></button></div>
            <div class="panel-footer">Click here to view office supplies</div>
      </form>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Clothing</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="4">
            <input type= "hidden" name="search-keyword" value="">
        <div class="panel-body">
            <button class="btn btn-success-outline" id="search-button" name="search">
            <img src="http://image.flaticon.com/icons/svg/126/126515.svg" alt="Image"  width="300" height="200"></button></div>
        <div class="panel-footer">Click here to view clothes</div>
      </div>
    </form>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Furniture</div>
        <!--USING flaticon free icons here, need to put in doc -->
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="5">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body">
                <button class="btn btn-success-outline" id="search-button" name="search">
                <img src="http://image.flaticon.com/icons/svg/126/126496.svg"  alt="Image"  width="300" height="200"></div>
            <div class="panel-footer">Click here to view furniture</div>
        </form>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Electronics</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="6">
            <input type= "hidden" name="search-keyword" value="">
            <div class="panel-body">
            <button class="btn btn-success-outline" id="search-button" name="search">
                <img src="http://image.flaticon.com/icons/svg/126/126512.svg"  alt="Image"  width="300" height="200"></button></div>
            <div class="panel-footer">Click here to view office electronics</div>
      </form>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Others</div>
        <form action="<?php echo URL; ?>home/search" method="POST">
            <input type= "hidden" name="search-category" value="7">
            <input type= "hidden" name="search-keyword" value="">
        <div class="panel-body">
            <button class="btn btn-success-outline" id="search-button" name="search">
            <img src="http://image.flaticon.com/icons/svg/126/126498.svg" alt="Image"  width="300" height="200"></button></div>
        <div class="panel-footer">Click here to view others</div>
      </div>
    </form>
    </div>
  </div>
</div><br>
</div><br><br>
