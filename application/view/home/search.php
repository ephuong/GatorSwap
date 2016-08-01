
<!--<head>
    <title>Search Display Items</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }


        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
    <script> 
                $(document).ready(function () {
            $('#list').click(function (event) {
                event.preventDefault();
                $('#products .item').addClass('list-group-item');
            });
            $('#grid').click(function (event) {
                event.preventDefault();
                $('#products .item').removeClass('list-group-item');
                $('#products .item').addClass('grid-group-item');
            });
        });
     </script> 
</head>-->

<body style = "background-color:#F0f0f0;">
    <div class="container">
		<h2>Search: <?php echo $results["count"]; ?> results</h2>

        <div id="products" class="row list-group is-table-row" >
		
            <?php foreach ($results["results"] as $result) { ?>
                <div class="item col-xs-6 col-md-3 " > 
                    <div class="thumbnail" >
                        <?php
                        if (isset($result->IMG) && !empty($result->IMG)) {
                            echo '<img style="max-height:250px; " class="group" src="data:image/jpg;base64,' . base64_encode($result->IMG) . '" alt=""/>';

                        } else {
                            echo ' <img style="height:250px;" class="group " src="http://placehold.it/400x250/000/fff" alt="" /> ';
                        }
                        ?>
                        <div class= "caption list-group-text"  >
                            <h3 class="group inner ">
                                <b> <?php if (isset($result->Title)) echo htmlspecialchars($result->Title, ENT_QUOTES, 'UTF-8'); ?>  </b> </h3>
                            <h5 class="group inner "> 
                                <b> <?php if (isset($result->Category)) echo htmlspecialchars($result->Category, ENT_QUOTES, 'UTF-8'); ?> </b></h5>

                           <p class="group inner list-group-item-text"> 
                                <?php if (isset($result->Description)) echo htmlspecialchars($result->Description, ENT_QUOTES, 'UTF-8'); ?>
                            </p>
							
                            <hr style ="border-color:black">

                            <div class="row ">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        <?php if (isset($result->Price)) echo "$" . htmlspecialchars($result->Price, ENT_QUOTES, 'UTF-8'); ?> </p>
                                </div>
                                 <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-warning " href="#">Buy it Now</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    
                    
                </div>
 
            <?php } ?>
        </div>
    </div>

  <!--<script>
    $(document).ready(function() {
    var maxHeight = 0;          
    $(".equalize").each(function(){
      if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    });         
    $(".equalize").height(maxHeight);
  }); 
  </script>-->
    <script>
        //Function to duplicate items 


        $('.advenced').click(function (e) {
            e.preventDefault();
            $('#panelAdv').toggle();
        });
        $('.plus1 a').click(function (e) {
            e.preventDefault();
            if ($(this).children('i').hasClass('glyphicon-plus')) {
                $(this).children('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
            }
            else {
                $(this).children('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
            }
            $('.morePanel1').toggle();
        });
        $('.plus2 a').click(function (e) {
            e.preventDefault();
            if ($(this).children('i').hasClass('glyphicon-plus')) {
                $(this).children('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
            }
            else {
                $(this).children('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
            }
            $('.morePanel2').toggle();
        });
        $('.plus3 a').click(function (e) {
            e.preventDefault();
            if ($(this).children('i').hasClass('glyphicon-plus')) {
                $(this).children('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
            }
            else {
                $(this).children('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
            }
            $('.morePanel3').toggle();
        });
    </script>

</body>


