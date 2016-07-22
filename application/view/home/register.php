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
</style>

 

<div id="signup" class="container">
    
    <form class="form-signup" role="form" method="post" action="#">
        <h3>Register To Create An Account.</h3>
        <div class="row">
            <div class="col-md-6">
                
                <div class="form-group">
	                <label>First Name</label>
	                <input class="form-control" name="firstname" placeholder="Your First Name" type="text">
            	</div>

            	<div class="form-group">
	                <label>Last Name</label>
	                <input class="form-control" name="lastname" placeholder="Your Last Name" type="text">
            	</div>

		  <div class="form-group">                
	                <label>UserName</label> 
	                <input class="form-control" name="username" placeholder="Username" type="text"> 
            	</div>
                     <div class="form-group">                
 	                <label>Password</label> 
 	                <input class="form-control" name="password" placeholder="Password" type="text"> 
             	</div>
                 
                 <div class="form-group">                
 	                <label>Confirm Password</label> 
 	                <input class="form-control" name="confirmPassword" placeholder="Confirm Password" type="text"> 
             	</div>
                 
                 
                 
 
          
                
                
                
        

            </div>
            
            <div class="col-md-6">
                 <div class="form-group">                
	                <label>SFSU E-mail</label> 
	                <input class="form-control" name="email" placeholder="....@mail.sfsu.edu" type="email" data-error="Bruh, that email address is invalid" required> 
            	        
                </div>
                
                <div class="form-group">                
	                <label>SFSU ID:</label> 
	                <input class="form-control" name="sfsu_id" placeholder="SFSU ID" type="text"> 
            	</div>
              
                
                <div class="form-group">                
	                <label>Phone Number</label> 
	                <input class="form-control" name="phoneNumber" placeholder="Phone Number" type="text"> 
            	</div>

   		
                
                <div class="form-group">                
	                <label>Address:</label> 
	                <input class="form-control" name="address"  placeholder="1600 Holloway Ave" type="text"> 
            	</div>
        <div class="form-group">                
	                <label>City</label> 
	                <input class="form-control"  name="city" placeholder="City" type="text"> 
            	</div>
        <div class="form-group">                
	                <label>Zipcode</label> 
	                <input class="form-control" name="zipcode" placeholder="Zipcode" type="text"> 
            	</div>
				</div>
       <button type="button" class="btn btn-lg btn-primary btn-block ">  Done  </button>	 
        
                
       </div>
                  
    </form>
</div>
</br></br></br></br></br>
