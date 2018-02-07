
<style>
body {
  background: #eee !important;
}
</style>

<div id="login" class="container wrapper">

  <form id="signin-form" class="form-input" role="form" method="post" action="<?php echo URL; ?>signin/login">
    <h3>Login or <a href="<?php echo URL; ?>register/index">Sign up</a> </h3>

    <div class="messageContainer">
      <div class="form-group">
        <label>Username</label>
        <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])){echo htmlspecialchars($_POST['username']); }?>" />
      </div>

      <div class="form-group">
        <label>Password</label>
        <input id="pwd" class="form-control" type="password"  name="password" placeholder="Password" />
      </div>
    </div>

    <br>
    <button id="myBtn" class="btn btn-lg btn-primary btn-block" name="user-signin" type="submit" >Login</button>
  </form>

</div>

<script>
// JavaScript Document

$('document').ready(function()
{
  $('#signin').bootstrapValidator({
    //container: '#messages',
    err: {
      container: function($field, validator) {
          return $field.parent().next('.messageContainer');
      }
    },
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      username: {
        validators: {
          notEmpty: {
            message: 'Username cannot be empty'
          },
          regexp: {
           regexp: /^[a-z0-9]+$/i,
           message: 'Name can consist of alphanumeric characters only'
          },
        }
      },
      password: {
        validators: {
          notEmpty: {
            message: 'Password cannot be empty'
          },
        }
      }
    }
  });
});

$(function() {
  $('.form-sign-in').keypress(function(e) {
    if(e.which == 13) {
      $('#myBtn').focus().click();
    }
  });
});
</script>
