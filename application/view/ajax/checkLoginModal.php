<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div id="login-overlay" >
      <div>
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to site.com</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="myForm" class="form-signin" method="post" action="<?php echo URL; ?>signin/login">
                              <div class="form-group">
                                  <label for="username" control-label>Username</label>  
      <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])){echo htmlspecialchars($_POST['username']); }?>" />
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="pwd" control-label>Password</label> 
      <input id="pwd" class="form-control" type="password"  name="password" placeholder="Password" /> 
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <div class="checkbox">
                              </div>
                              <button id="myBtn" class="btn btn-lg btn-primary btn-block" name="user-signin" type="submit" >Login</button>    
                              
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>                         
                      </ul>
                      <a href="<?php echo URL; ?>register/index"><button class="btn btn-lg btn-primary btn-block" name = "user_submit" type="submit" >REGISTER</button></a>    
                  </div>
              </div>
          </div>
      </div>
  </div>