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
#conditions-button, #quantity-button, #delivery-button{
	border-color: #cccccc;
	margin-top: 15px;
	margin-bottom: 15px;

}

#submit-button{
	border-color: #cccccc;
	background-color: #d6f5d6;

}
</style>

 

<div id="seller page" class="container">
    
    <form class="form-sell" role="form" method="post" action="#">
        <h3>Post An Item For Sale.</h3>
            <div class="col-md-6">
    
                <div class="form-group">
	                <label>Name:</label>
	                <input class="form-control" name="name_of_item" placeholder=" " type="text">
            	</div>

            	<div class="form-group">
	                <label>Price: </label>
	                <input class="form-control" name="price" placeholder="$10" type="text">
            	</div>

            	<label>Condition:</label>
				<select class="form-control">
				  <option value="New">New</option>
				  <option value="Used">Used</option>
				</select>
				<br>

				<label>Category:</label>
             	 <select class="form-control">
				  <option value="Books">Books</option>
				  <option value="Office Supplies">Office Supplies</option>
				  <option value="Clothing">Clothing</option>
				  <option value="Furniture">Furniture</option>
				  <option value="Electronics">Electronics</option>
				  <option value="Other">Other</option>
				</select>
				<br>



            </div>
            
            <div class="col-md-6">
      

            	<div class="form-group">                
	                <label>Add Image: </label> 
	                <br>
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

             	<input type="submit" value="Submit" id="submit-button" class="btn btn-lg btn-default" /> 
            </div>

                         
    </form>
</div>
</br></br></br></br></br>

