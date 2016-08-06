
<style>
 @import "bourbon";

body {
	background: #eee !important;
        height:100%;
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

/* Code for footer starts */
     footer {
    
    background-color: #53565A;
    border-top: 1px solid #E7E7E7;
    text-align:center;
    padding:20px;   
    position: relative;
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

  <h3 Style = "text-align:center">Already Have an account? <a href="<?php echo URL; ?>signin/index" >Login</a></h3>
    
    <form class="form-signup"  method="post" id="register-form" role="form" method="post" action="<?php echo URL; ?>register/addUser">
        <h3>Register To Create Your Account</h3>
        <div class = "row ">
       
            <div class="col-md-5" >
                
              <div class="form-group">                
	                <label>SFSU ID:</label> 
	                <input class="form-control" name="sfsu_id" placeholder="SFSU ID" type="text">
                        
            	</div>
                <div class="col-xs-5 messageContainer"></div>
              
                <div class="form-group">                
	                <label>SFSU E-mail</label></br> 
                        <input name="username" placeholder="username" type="text"  value="" required /> @mail.sfsu.edu<br>
            	        
                  <b Style = "font-size: 80% ">Example: <i Style = "color:blue">jdoe@mail.sfsu.edu</i> is <b Style = "color:blue">jdoe</b></b>
                </div>
                
                
                <div class="form-group">                
	                <label>Password</label> 
	                <input class="form-control" name="password" placeholder="Password" type="password">
                        
            	</div>
                
                
                <div class="form-group">                
	                <label>Confirm Password</label> 
	                <input class="form-control" name="confirmPassword" placeholder="Confirm Password" type="password">
                        
            	</div>
                
            
            </div>
            <div class="col-md-1"></div>
            
            <div class="col-md-5" >

                <div class="form-group">
	                <label>First Name</label>
	                <input class="form-control" name="firstname" placeholder="First Name" type="text">
                        
                        
            	</div>
                
                
            	<div class="form-group">
	                <label>Last Name</label>
	                <input class="form-control" name="lastname" placeholder="Last Name" type="text">
                           
            	</div>
   		
                
                <div class="form-group">                
	                <label>Country</label> 
	                <input class="form-control"  name="country" placeholder="Ex: USA" type="text"> 
            	</div>
               
                
                <div class="form-group">                
	                <label>State</label> 
	                <input class="form-control"  name="state" placeholder="Ex: California" type="text"> 
            	</div>
                
              
                <div class="form-group">                
	                <label>Address:</label> 
	                <input class="form-control" name="address"  placeholder="Example: 1600 Holloway Ave." type="text"> 
            	</div>
                
                
                <div class="form-group">                
	                <label>City</label> 
	                <input class="form-control"  name="city" placeholder="Example: San Francisco" type="text"> 
            	</div>
                
                
                <div class="form-group">                
	                <label>Zipcode</label> 
	                <input class="form-control" name="zipcode" placeholder="Example: 94132" type="text">    
            	</div>
                
              
              <div class="form-group">                
	                <label>Phone Number</label> 
	                <input class="form-control" name="phoneNumber" placeholder="Example:5104081325" type="text"> 
                       
              </div>
                
              <div class="col-md-1"></div>

        </div>
              <div class="col-md-offset-3 col-md-6 " Style = "Padding-top:2%">
                  <button class="btn btn-lg btn-primary btn-block" name = "user_submit" type="submit" >REGISTER</button>    
              </div>
       </div>
                  
    </form>
     
<script>
// JavaScript Document

$('document').ready(function()
  { 
   $('#register-form').bootstrapValidator({
        //container: '#messages',
         err: {
            container: function($field, validator) {
                // Look at the markup
                //  <div class="col-xs-4">
                //      <field>
                //  </div>
                //  <div class="col-xs-5 messageContainer"></div>
                return $field.parent().next('.messageContainer');
            }
        },
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            sfsu_id: {
                validators: {
                    notEmpty: {
                        message: 'Your Sfsu Id is required for registration'
                    },
                    numeric: {
                            message: 'The value is not numeric',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: ' '
                        },
                    stringLength: {
                        max: 9,
                        min: 9,
                        message: 'Yo, its your 9 digit sf state Id!'
                    },
                    between: {
                        min: 1,
                        max: 9,
                        message: 'must be a greater than 0'
                    }
                }
            },
            username: {
                validators: {
                    notEmpty: {
                        message: 'Your username is the first part of you sfsu student email'
                    },
                    regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'Name can consist of alphabetical characters and spaces only'
                    },
                }
            },
         password: {
            validators: {
                identical: {
                    field: 'confirmPassword',
                    message: 'The password and its confirm are not the same'
                },
                regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'Name can consist of alphabetical characters and spaces only'
                    },
            }
        },
        confirmPassword: {
            validators: {
                identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
                },
                regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'Name can consist of alphabetical characters and spaces only'
                    },
            }
        },
            firstname: {
                validators: {
                    notEmpty: {
                        message: 'The firstname is required and cannot be empty'
                    },
                    regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'Name can consist of alphabetical characters and spaces only'
                    },
                }
            },
            lastname: {
                validators: {
                    notEmpty: {
                        message: 'The lastname is required and cannot be empty'
                    },
                    regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'Name can consist of alphabetical characters and spaces only'
                    },
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'Country is required and cannot be empty'
                    },
                    regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'Country Name should consist of alphabetical characters and spaces only'
                    },
                }
            },
             state: {
                validators: {
                    notEmpty: {
                        message: 'State is required and cannot be empty'
                    },
                    regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'State consist of alphabetical characters and spaces only'
                    },
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'address is required and cannot be empty'
                    },
                    regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'Address should be of alphabetical characters and spaces only'
                    },
                }
            },
             city: {
                validators: {
                    notEmpty: {
                        message: 'city is required and cannot be empty'
                    },
                    regexp: {
                     regexp: /^[a-z\s]+$/i,
                     message: 'City name should be of alphabetical characters and spaces only'
                    },
                }
            },
            phoneNumber: {
                validators: {
                    notEmpty: {
                        message: 'Phone Number is required and cannot be empty'
                    },
                    numeric: {
                            message: 'The value is not numeric',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: ' '
                        },
                    stringLength: {
                        max: 9,
                        min: 9,
                        message: 'Your 9 digit phone Number'
                    },
                    between: {
                        min: 1,
                        max: 9,
                        message: 'must be a greater than 0'
                    }
                }
            },
             zipcode: {
                validators: {
                    regexp: {
                        regexp: /^\d{5}$/,
                        message: 'The US zipcode must contain 5 digits'
                    },
                    between: {
                        min: 1,
                        max: 9,
                        message: 'must be a greater than 0'
                    }
                }
            },
           
        }
    });
    
});


</script>

</div>
