<style>
 @import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
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
</style>
<?php
if(isset($_POST['submit'])){
    
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $confirmPassword = $_POST['confirmPassword'];
 $email = $_POST['email'];
 $sfsu_id = $_POST['sfsu_id'];
 $phoneNumber = $_POST['phoneNumber'];
 $address = $_POST['address'];
 $city = $_POST['city'];
 $zipcode = $_POST['zipcode'];
 
 //Matches the password length
 if((strlen($password))< 6)
 {
     $passwordLength= "Password has to be at least 6 characters long" ;
 }
 
 //This code mathces two passwords
 if($password!=$confirmPassword)
 {
     $passConfirmationError= "Passwords doesn't match";
 }
 
 if(((strlen($sfsu_id))< 9) && (strlen($sfsu_id))>9)
 {
     $sfsuIdLength= "Please type you 9 digit sfsu id";
 }
 
 if((strlen($phoneNumber))< 10 && (strlen($phoneNumber))>10)
 {   
    $phoneNumberError= "Please type a 10 digit valid phonenumber";  
 }
 
 //Check the length of the username
 if((strlen($username))< 3)
 {
     $usernameLength= "Must be 3+ letters";
 }
 
 //Check the length of the firstname
 if((strlen($firstname))< 3)
 {
     $firstNameError= "name is too short!";
 }
 
 //Check the length of the lastname
 if((strlen($lastname))< 3)
 {
     $lastNameError= "name is too short!";
 }
 
//This code checks the validation of a email using regex
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) 
{
  $emailValidation= "Invalid Email" ;
}
else //If its a valid email, then check if its a sfsu email
{
  $myArray = []; //Declare an empty array
  $myArray = explode('@', $email); //split up the email by @ sign
  if($myArray[1]!="mail.sfsu.edu")
  {
    $emailValidation= "Please type your sfsu student email only";  
  }
}
 
 if((strlen($zipcode))< 5)
 {
   $zipCodeLength= "Zipcode has to be at least 5 digits long!";  
 }
 
}

?>

<div id="signup" class="container">
    
    <form class="form-signup" role="form" method="post" action="#">
        <h3>Register To Create Your Account</h3>
        <div class="row">
            <div class="col-md-4">
                
                <div class="form-group">
	                <label>First Name</label>
	                <input class="form-control" name="firstname" placeholder="Your First Name" type="text">
                        <?php if(isset($firstNameError)){echo "<p class='text-danger'>$firstNameError</p>";}?>
            	</div>

            	<div class="form-group">
	                <label>Last Name</label>
	                <input class="form-control" name="lastname" placeholder="Your Last Name" type="text">
                        <?php if(isset($lastNameError)){echo "<p class='text-danger'>$lastNameError</p>";}?>
            	</div>

		  <div class="form-group">                
	                <label>UserName</label> 
	                <input class="form-control" name="username" placeholder="Username" type="text"> 
                        <?php if(isset($usernameLength)){echo "<p class='text-danger'>$usernameLength</p>";}?>
            	</div>
                
                <div class="form-group">                
	                <label>Password</label> 
	                <input class="form-control" name="password" placeholder="Password" type="password">
                        <?php if(isset($passwordLength)){echo "<p class='text-danger'>$passwordLength</p>";}?>
            	</div> 
                
                <div class="form-group">                
	                <label>Confirm Password</label> 
	                <input class="form-control" name="confirmPassword" placeholder="Confirm Password" type="password">
                        <?php if(isset($passConfirmationError)){echo "<p class='text-danger'>$passConfirmationError</p>";}?>
            	</div>
                
                <h3>Already Have an account?</br><a href="<?php echo URL; ?>signin/index" >Login</a></h3>
                

            </div>
            
            <div class="col-md-4">
                
                <div class="form-group">                
	                <label>SFSU E-mail</label> 
	                <input class="form-control" name="email" placeholder="....@mail.sfsu.edu" type="email" data-error="Bruh, that email address is invalid" required> 
            	        <?php if(isset($emailValidation)){echo "<p class='text-danger'>$emailValidation</p>";}?>
                </div>
                
                <div class="form-group">                
	                <label>SFSU ID:</label> 
	                <input class="form-control" name="sfsu_id" placeholder="SFSU ID" type="text">
                        <?php if(isset($sfsuIdLength)){echo "<p class='text-danger'>$sfsuIdLength</p>";}?>
            	</div>
                
                <div class="form-group">                
	                <label>Phone Number</label> 
	                <input class="form-control" name="phoneNumber" placeholder="Ex:5104081325" type="text"> 
                        <?php if(isset($phoneNumberError)){echo "<p class='text-danger'>$phoneNumberError</p>";}?>
            	</div>

   		
                
                <div class="form-group">                
	                <label>Address:</label> 
	                <input class="form-control" name="address"  placeholder="1600 Holloway Ave" type="text"> 
            	</div>
        <div class="form-group">                
	                <label>City</label> 
	                <input class="form-control"  name="city" placeholder="Ex: Newyork" type="text"> 
            	</div>
        <div class="form-group">                
	                <label>Zipcode</label> 
	                <input class="form-control" name="zipcode" placeholder="Ex:94132" type="text">
                        <?php if(isset($zipCodeLength)){echo "<p class='text-danger'>$zipCodeLength</p>";}?>
            	</div>
        
         <button class="btn btn-lg btn-primary btn-block" name = "user_submit" type="submit">REGISTER</button>                 
        </div>
                
       </div>
                  
    </form>
</div>
</br></br></br></br></br>