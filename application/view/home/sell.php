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

 

<div id="seller page" class="container">
    
    <form class="form-sell" role="form" method="post" action="#">
        <h3>Post An Item For Sale.</h3>
            <div class="col-md-6">
    
                <div class="form-group">
	                <label>Name of item:</label>
	                <input class="form-control" name="name_of_item" placeholder="Book Title, " type="text">
            	</div>

            	<div class="form-group">
	                <label>Price: </label>
	                <input class="form-control" name="price" placeholder="$10" type="text">
            	</div>

<!-- 		  		<div class="form-group">                
	                <label>Condition</label> 
	                <input class="form-control" name="condition" placeholder="Good" type="text"> 
            	</div> -->

            	<div class="dropdown open">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="condition" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Condition
				  </button>
				  <div class="dropdown-menu" aria-labelledby="conditionmenu">
				    <a class="dropdown-item" href="#">New</a>
				    <a class="dropdown-item" href="#">Like New</a>
				    <a class="dropdown-item" href="#">Used</a>
				    <a class="dropdown-item" href="#">Damaged</a>
				  </div>
				</div>

                     <!-- <div class="form-group">                
 	                <label>Quantity</label> 
 	                <input type="number" class="form-control" name="quantity" placeholder="1" type="text"> 
             		</div>   --> 

             	<div class="dropdown open">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="quantity" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Quantity
				  </button>
				  <div class="dropdown-menu" aria-labelledby="quantitymenu">
				    <a class="dropdown-item" href="#"> 1 </a>
				    <a class="dropdown-item" href="#"> 2 </a>
				    <a class="dropdown-item" href="#"> 3 </a>
				    <a class="dropdown-item" href="#"> 4 </a>
				    <a class="dropdown-item" href="#"> 5+ </a>
				  </div>
				</div> 

            </div>
            
            <div class="col-md-6">
                <div class="form-group">                
	                <label>Email address::</label> 
	                <input class="form-control" name="email_address"  placeholder="johndoe@sfsu.edu" type="text"> 
            	</div>
        		<div class="form-group">                
	                <label>Phone #:</label> 
	                <input class="form-control"  name="phone_no" placeholder="123-456-7890" type="text"> 
            	</div>
        		<!-- <div class="form-group">                
	                <label>Delivery</label> 
	                <input class="form-control" name="delivery" placeholder="I can deliver the item to your location." type="text"> 
            	</div> -->

            	<div class="dropdown open">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="quantity" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Preferred Delivery
				  </button>
				  <div class="dropdown-menu" aria-labelledby="quantitymenu">
				    <a class="dropdown-item" href="#"> Meet up on campus </a>
				    <a class="dropdown-item" href="#"> Come pick up </a>
				    <a class="dropdown-item" href="#"> I will deliver/ship </a>
				  </div>
				</div> 

            	<div class="form-group">                
	                <label>Add Images: </label> 
	                <span class="glyphicons glyphicons-ambulance"></span><button type="button" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-plus"></span> Add
					</button></label> <br><br>
            	</div>

			</div>

			<div class="col-md-12">
			    <div class="form-group">                
 	                <label>Description: </label> 
					<textarea class="form-control" id="comments" name="Description" placeholder="Describe your item here!" rows="5"></textarea></label><br>
             	</div>
            </div>
       		<button type="button" class="btn btn-lg btn-primary btn-block ">  Submit  </button>	 
        
                  
    </form>
</div>
</br></br></br></br></br>

