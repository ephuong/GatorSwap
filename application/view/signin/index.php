<?php
// remove all session variables
session_unset();
?>
<style>
 @import "bourbon";

body {
	background: white;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
       .Title {
        text-align: center;
	line-height: 300%;
}
}

</style>
<?php
  //CHECK THE DATA BASE HERE WITH THE INPUT VALUE

?>
  <div id="loginForm" class="wrapper" data-toggle="validator">
      <form id="myForm" class="form-signin" method="post">       
        <h3>Login or <a href="<?php echo URL; ?>register/index">Sign up</a> </h3>
      <label for="username" control-label">Username</label>  
      <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])){echo htmlspecialchars($_POST['username']); }?>" />
      <?php 
      if(isset($errUserName)){
      echo "<p class='text-danger'>$errUserName</p>";
      }
      ?>
      </br>
      <label for="pwd" control-label">Password</label> 
      <input type="text" id="pwd" class="form-control" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])){echo htmlspecialchars($_POST['password']); }?>"/> 
      <?php 
      if(isset($errPassword)){
      echo "<p class='text-danger'>$errPassword</p>";
      }
      ?>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
       <div class="form-group">
        <div class="col-md-4 ">
            <div id="messages"></div>
        </div>
    </div>
      <button onclick="myFunction()" class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button>
     
    </form>
  </div>

<script>
    $(document).ready(function() {
    $('#loginForm').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Username is required and cannot be empty'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The content must be at least than 6 characters long'
                    }
                }
            }
        
         }
    });
});

function myFunction()
{  
     
    var url = window.location.href;   
    //var formData = JSON.stringify($("#myForm").serializeArray());
    var newUrl = url.split("/");
    delete newUrl[6];
    var modifiedUrl = newUrl.join("/");
    location.href = modifiedUrl+"dashboard";
   /* 
   $.ajax({
    url: modifiedUrl+"dashboard",
    type: "POST",
    //data: "{'username':'" + username + "','password':'"+password+"'}",
    contentType: "application/json; charset=UTF-8",
    success: function(res) {
          console.log("ajax went through!");
          location.href = modifiedUrl+"dashboard";
        },
        error: function(res){
         console.log(res);
        }
    });
  */
}


</script>






