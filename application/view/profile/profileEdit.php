
<?php

if(!session_id()) {
  session_start();
}

?>

<div id="profileEdit" class="container">
  <form class="form-input" role="form" method="post" id="editProfile" action="<?php echo URL; ?>editProfile/updateUserInfo">
    <h3>Account Information</h3>
    <div class="row">
      <div class="col-md-6 messageContainer">

        <div class="form-group">
          <label>First Name</label></br>
          <input class="form-control" name="firstName" type="text" value= <?php if(isset($_SESSION['firstname'])){ echo $_SESSION['firstname'] ;}?>>
        </div>

        <div class="form-group">
          <label>Last Name</label></br>
          <input class="form-control" name="lastName" type="text" value= <?php if(isset($_SESSION['lastname'])){ echo $_SESSION['lastname']; }?>>
        </div>

        <div class="form-group">
          <label>Username</label></br>
          <label><?php if(isset($_SESSION['username'])){ echo $_SESSION['username'] ;} ?></label>
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

      <div class="col-md-6 messageContainer">

        <div class="form-group">
          <label>Phone Number</label>
          <input class="form-control" type="text" name="phoneNumber" value= "<?php if(isset($_SESSION['phone'])){echo  $_SESSION['phone']; }?>">
        </div>

        <div class="form-group">
          <label>Address:</label>
          <input class="form-control" name="address"  type="text" value= "<?php if(isset($_SESSION['address'])){ echo  $_SESSION['address'];} ?>">
        </div>

        <div class="form-group">
          <label>City</label>
          <input class="form-control" name="city"  type="text" value= "<?php if(isset($_SESSION['city'])){ echo $_SESSION['city']; }?>">
        </div>

        <div class="form-group">
          <label>State</label>
          <input class="form-control" name="state"  type="text" value= "<?php if(isset($_SESSION['state'])){ echo $_SESSION['state']; }?>">
        </div>

        <div class="form-group">
          <label>Zipcode</label>
          <input class="form-control" name="zipcode"  type="text" value= "<?php if(isset($_SESSION['zipcode'])){ echo  $_SESSION['zipcode'] ;}?>">
        </div>

        <div class="form-group">
          <label>Country</label>
          <input class="form-control" name="country"  type="text" value= "<?php if(isset($_SESSION['country'])){ echo $_SESSION['country']; }?>">
        </div>
      </div>

      <button  id="useEditBtn" class="btn btn-lg btn-primary btn-block" name="user-update" type="submit" >Save</button>
    </div>
  </form>
</div>

<script>
// JavaScript Document
$('document').ready(function() {
  $('#editProfile').bootstrapValidator({
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
      firstName: {
        validators: {
          notEmpty: {
            message: 'The firstname is required and cannot be empty'
          },
          regexp: {
            regexp: /^[a-z\s]+$/i,
            message: 'First name must consist of alphabetical characters and spaces only'
          },
          stringLength: {
            max: 35,
            message: 'First name must be be shorter than 35 characters'
          }
        }
      },
      lastName: {
        validators: {
          notEmpty: {
            message: 'The lastname is required and cannot be empty'
          },
          regexp: {
            regexp: /^[a-z\s]+$/i,
            message: 'Last name must consist of alphabetical characters and spaces only'
          },
           stringLength: {
            max: 35,
            message: 'Last name must be be shorter than 35 characters'
          }
        }
      },
      country: {
        validators: {
          notEmpty: {
            message: 'Country is required and cannot be empty'
          },
          regexp: {
            regexp: /^[a-z\s]+$/i,
            message: 'Country name must consist of alphabetical characters and spaces only'
          },
           stringLength: {
            max: 15,
            message: 'Country name must be be shorter than 15 characters'
          }
        }
      },
      state: {
        validators: {
          notEmpty: {
            message: 'State is required and cannot be empty'
          },
          regexp: {
            regexp: /^[a-z\s]+$/i,
            message: 'State name must consist of alphabetical characters and spaces only'
          },
          stringLength: {
            max: 12,
            message: 'State name must be be shorter than 12 characters'
          }
        }
      },
      address: {
        validators: {
          notEmpty: {
            message: 'Address is required and cannot be empty'
          },
          regexp: {
            regexp: /^[0-9a-zA-Z. ]+$/i,
            message: 'Address must consist of alphanumeric characters and spaces only'
          },
           stringLength: {
            max: 50,
            message: 'Address must be be shorter than 50 characters'
          }
        }
      },
      city: {
        validators: {
          notEmpty: {
            message: 'City is required and cannot be empty'
          },
          regexp: {
            regexp: /^[a-z\s]+$/i,
            message: 'City name must consist of alphabetical characters and spaces only'
          },
          stringLength: {
            max: 15,
            message: 'City name must be be shorter than 35 characters'
          }
        }
      },
      phoneNumber: {
        validators: {
          notEmpty: {
            message: 'Phone number is required and cannot be empty'
          },
          regexp: {
            regexp: /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/i,
            message: 'This is an invalid phone number'
                  },
          stringLength: {
            message: 'Your 10 digit phone number'
          }
        }
      },
      zipcode: {
        validators: {
          notEmpty: {
            message: 'Zipcode is required and cannot be empty'
          },
          regexp: {
            regexp: /^\d{5}$/,
            message: 'US zipcode must contain 5 digits'
          }
        }
      }
    }
  });
});

$(function() {
  $('.form-profile-info').keypress(function(e) {
    if(e.which == 13) {
      $('#useEditBtn').focus().click();
    }
  });
});
</script>
