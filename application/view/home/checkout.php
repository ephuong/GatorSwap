<style>
body { margin-top:20px; 
padding-left: 750px;}
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
</style

</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" >
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
					 <p><b>Shipping Details</b></p>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-6">
              <input type="text" placeholder="First Name" class="form-control">
            </div>
            <div class="col-sm-6">
              <input type="text" placeholder="Last Name" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" placeholder="Shipping Address" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" placeholder="City" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-6">
              <input type="text" placeholder="Phone #" class="form-control">
            </div>
            <div class="col-sm-6">
              <input type="text" placeholder="Post Code" class="form-control"><br>
            </div>
          </div>
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" size = "50px" placeholder="3214-4242-4234-2143">
                                
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expiryMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pull-right">
                                    <input type="text" class="form-control" id="expiryMonth" placeholder="04" >
                                </div>
                                <div class="col-xs-6 col-lg-6 pull-right ">
                                    <input type="text" class="form-control" id="expityYear" placeholder="16" ></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cv">
                                    CVV </label>
                                <input type="password" class="form-control" id="cv" placeholder="546" >
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            
            <br/>
			<a href="cart.php" class="btn btn-default btn-lg btn-block" role="button">Review Purchase</a>
            <a href="endpage.php" class="btn btn-primary btn-lg btn-block" role="button">Pay</a>
        </div>
    </div>
</div>
