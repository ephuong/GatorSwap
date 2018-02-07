
<div id="seller-page" class="container">
  <p id="sellTitle">Sell an Item</p>
  <hr style="margin-top: 15px;">

  <form name="form-sell" class="form-sell" role="form" action="<?php echo URL; ?>sell/postItem" method="POST" enctype="multipart/form-data">
    <h4>* Required</h4><br>
    <div class="col-md-6" id="first">
      <div class="form-group">
        <label>*Title:</label>
        <input class="form-control" name="item_title" placeholder=" " type="text" required>
      </div>
      <br>

      <div id="form-group-select" class="form-group">
        <label>*Category:</label>
        <select class="form-control" name="item_category" required>
          <option selected value="">Please select a category</option>
          <?php foreach (array_slice($categoryList, 0) as $category) {
            if (isset($category->Category_ID))
              $category_id = htmlspecialchars($category->Category_ID, ENT_QUOTES, 'UTF-8');
            if (isset($category->Category_Name))
              $category_name = htmlspecialchars($category->Category_Name, ENT_QUOTES, 'UTF-8');
          ?>
          <option <?php echo isset($_POST['item_category']) && $_POST['item_category'] == $category_id ? 'selected="' . $_POST['item_category'] . '" value="' . $category_id . '"' : 'value="' . $category_id  . '"' ?>>
            <?php echo $category_name; ?>
          </option>
          <?php } ?>
        </select>
      </div>
      <br>

      <div id="form-group-select" class="form-group">
        <label>*Item Condition:</label>
        <select class="form-control" name="item_condition" required>
          <option selected value="">Please select item condition</option>
          <option value="New">New</option>
          <option value="Used">Used</option>
        </select>
      </div>
      <br>

      <div class="form-group">
        <label>*Description: </label>
        <textarea class="form-control" name="item_desc" cols="10" rows="3" style="resize: none;" placeholder="Describe your item here." required></textarea><br>
      </div>
    </div>

    <div class="col-md-6" id="second">

      <div class="form-group">
        <label>*Price:</label>
        <input class="form-control" name="item_price" placeholder="10.00" type="text" required>
      </div>
      <br>

      <div class="form-group">
        <div class="form-control-img">
          <label>*Add Image: </label><br>
          <input  type="file" size="60" name="item_image" accept=".jpg,.jpeg,.png">
        </div>
      </div>
      <br><br><br><br><br><br><br>

      <div class="col-md-12">
        <input type="submit" value="CLICK TO SUBMIT" id="submit-button" class="btn btn-lg btn-primary center-block" name="postItem" onclick="checkPriceInput();"/>
      </div>
    </div>

  </form>
  <br><br><br>
</div>

<script>
$('document').ready(function() {
  $('.form-sell').bootstrapValidator({
    err: {
      container: function($field, validator) {
        return $field.parent().next('messageContainer');
      }
    },
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      item_title: {
        validators: {
          notEmpty: {
            message: 'This field is required'
          }
        }
      },
      item_category: {
        validators: {
          notEmpty: {
            message: 'This field is required'
          }
        }
      },
      item_condition: {
        validators: {
          notEmpty: {
            message: 'This field is required'
          }
        }
      },
      item_desc: {
        validators: {
          notEmpty: {
            message: 'This field is required'
          }
        }
      },
      item_image: {
        validators: {
          notEmpty: {
            message: 'This field is required'
          }
        }
      },
      item_price: {
        validators: {
          notEmpty: {
            message: 'This field is required'
          },
          numeric: {
            message: 'Price must be numeric',
            // The default separators
            thousandsSeparator: '',
            decimalSeparator: '.'
          }
        }
      }
    }
  })
})
</script>
