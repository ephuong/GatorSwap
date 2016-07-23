  
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
					<h3>Cart</h3>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Item name</a></h4>
                                <h5 class="media-heading"> by <a href="#"> Author/Brand</a></h5>
                                <span>Status: </span><span class="text-success"><strong>Available</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" id="item_number" placeholder=" 2" >
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><input type="number" class="form-control" id="item_price" placeholder="$ 15" ></td>
                        <td class="col-sm-1 col-md-1 text-center"><input type="number" class="form-control" id="item_total_price" placeholder="$ 30" ></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            Delete
                        </button></td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Item name</a></h4>
                                <h5 class="media-heading"> by <a href="#"> Author/Brand</a></h5>
                                <span>Status: </span><span class="text-success"><strong>UnAvailable</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" id="item_number" placeholder=" 3" >
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><input type="number" class="form-control" id="item_price" placeholder="$ 5" ></td>
                        <td class="col-sm-1 col-md-1 text-center"><input type="number" class="form-control" id="item_total_price" placeholder="$ 15" ></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                           Delete
                        </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                         <td class="col-sm-1 col-md-1 "><input type="number" class="form-control" id="subtotal" placeholder="$45" ></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                       <td class="col-sm-1 col-md-1 "><input type="number" class="form-control" id="shipping_price" placeholder="$5" ></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                         <td class="col-sm-1 col-md-1 "><input type="number" class="form-control" id="total" placeholder="$50" ></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td> 
                       <a href ="search.php"> <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></a></td>
                        <td>
                        <a href = "checkout.php"><button type="button" class="btn btn-primary">
                            Checkout </span>
                        </button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
