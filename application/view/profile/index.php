<?php
if(!session_id())
   {
    session_start();  
   }
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

.form-signup {
  max-width: 80%;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);

  .form-signup-heading,
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
.button{

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



<div id="signup" class="container">

    <form class="form-signup" role="form" method="post" action="#">
        <h3>Account Information</h3>
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
	                <label>First Name</label></br>
                        <label><?php if(isset($_SESSION['firstname'])){ echo $_SESSION['firstname'] ;}?></label>
            	</div>

            	<div class="form-group">
	                <label>Last Name</label></br>
                        <label><?php if(isset($_SESSION['lastname'])){ echo $_SESSION['lastname']; }?></label>
            	</div>

		  <div class="form-group">
	                <label>UserName</label></br>
                        <label><?php if(isset($_SESSION['username'])){ echo $_SESSION['username'] ;}?></label>
            	</div>
                  <div class="form-group">
	                <label>SFSU E-mail</label></br>
                        <label><?php if(isset($_SESSION['username'])){ echo $_SESSION['username']."@mail.sfsu.edu" ;} ?></label>

                </div>

                <div class="form-group">
	                <label>SFSU ID:</label>
                        <label><?php if(isset($_SESSION['student_id'])){ echo  $_SESSION['student_id']; }?></label>
            	</div>

            </div>

            <div class="col-md-6">



                <div class="form-group">
	                <label>Phone Number</label>
                        <label><?php if(isset($_SESSION['phone'])){echo  $_SESSION['phone']; }?></label>
            	</div>



                <div class="form-group">
	                <label>Address:</label>
	               <label><?php if(isset($_SESSION['address'])){ echo  $_SESSION['address'];} ?></label>
            	</div>
        <div class="form-group">
	                <label>City</label>
                        <label><?php if(isset($_SESSION['city'])){ echo $_SESSION['city']; }?></label>
            	</div>
        <div class="form-group">
	                <label>Zipcode</label>
                        <label><?php if(isset($_SESSION['zipcode'])){ echo  $_SESSION['zipcode'] ;}?></label>
            	</div>
</div>
		

       </div>

    </form>
</div>
</br></br></br></br></br>




