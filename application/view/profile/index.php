
<?php

if(!session_id()) {
  session_start();
}

?>

<div id="profile" class="container">

  <form class="form-input" role="form" method="post" action="<?php echo URL; ?>editProfile/profileEdit">
    <h3>Account Information</h3>
    <div class="row">

      <div class="col-md-6">
        <div class="form-group">
          <label>First Name: </label></br>
          <label><?php if(isset($_SESSION['firstname'])){ echo $_SESSION['firstname'] ;}?></label>
        </div>

        <div class="form-group">
          <label>Last Name: </label></br>
          <label><?php if(isset($_SESSION['lastname'])){ echo $_SESSION['lastname']; }?></label>
        </div>

        <div class="form-group">
          <label>Username: </label></br>
          <label><?php if(isset($_SESSION['username'])){ echo $_SESSION['username'] ;}?></label>
        </div>

        <div class="form-group">
          <label>SFSU E-mail: </label></br>
          <label><?php if(isset($_SESSION['username'])){ echo $_SESSION['username']."@mail.sfsu.edu" ;} ?></label>
        </div>

        <div class="form-group">
          <label>SFSU ID: </label>
          <label><?php if(isset($_SESSION['student_id'])){ echo  $_SESSION['student_id']; }?></label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Phone Number: </label>
          <label><?php if(isset($_SESSION['phone'])){echo  $_SESSION['phone']; }?></label>
        </div>

        <div class="form-group">
          <label>Address: </label>
          <label><?php if(isset($_SESSION['address'])){ echo  $_SESSION['address'];} ?></label>
        </div>

        <div class="form-group">
          <label>City: </label>
          <label><?php if(isset($_SESSION['city'])){ echo $_SESSION['city']; }?></label>
        </div>

        <div class="form-group">
          <label>State: </label>
          <label><?php if(isset($_SESSION['state'])){ echo $_SESSION['state']; }?></label>
        </div>

        <div class="form-group">
          <label>Zipcode: </label>
          <label><?php if(isset($_SESSION['zipcode'])){ echo  $_SESSION['zipcode'] ;}?></label>
        </div>

        <div class="form-group">
          <label>Country: </label>
          <label><?php if(isset($_SESSION['country'])){ echo $_SESSION['country']; }?></label>
        </div>
      </div>

      <button  id="useEditBtn" class="btn btn-lg btn-primary btn-block" name="user-edit" type="submit" >Edit profile</button>

    </div>
  </form>
  <br>

  <form class="form-profile-info" method="POST" action="<?php echo URL; ?>sell/displayAllPost">
    <h3>Sell History</h3>
    <button  id="useEditBtn" class="btn btn-lg btn-primary btn-block" name="displayAllPost" type="submit" >View Sell History</button>
  </form>
  <br>
</div>
