
<style>
@import "bourbon";

body {
	background: #eee !important;
        padding-bottom: 100px;
        
}

.wrapper {	
       // margin-top: 80px;
       //margin-bottom: 80px;
       
}

.form-sign-in {
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

  <div id="login" class="container">
      
      <form id="myForm" class="form-sign-in" method="post" action="<?php echo URL; ?>signin/login">       
        <h3>Login or <a href="<?php echo URL; ?>register/index">Sign up</a> </h3>
      <label>Username</label>  
      <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])){echo htmlspecialchars($_POST['username']); }?>" />
   
      </br>
      <label>Password</label> 
      <input id="pwd" class="form-control" type="password"  name="password" placeholder="Password" /> 
      
    
      <button id="myBtn" class="btn btn-lg btn-primary btn-block" name="user-signin" type="submit" >Login</button>    
    </form>
 
</div>







