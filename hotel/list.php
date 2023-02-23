<?php
include 'includes/hotelfunctions.php';
$hotels = getHotels($_GET["id"]);
$cats  = getroomwithcat($_GET["id"]);
?>

    <head>
        <style type="text/css">
            @charset "UTF-8";
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }

            ng\:form {
                display: block;
            }

            .ng-animate-shim {
                visibility: hidden;
            }

            .ng-anchor {
                position: absolute;
            }
        </style>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Hotel Reservation System</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
        <!-- custom CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="assets/css/truebus.css" rel="stylesheet">
        <link href="assets/css/parsley.css" rel="stylesheet">
        <!--   <link href="http://saintmartinparibahan.com.bd/assets/css/datepicker3.css" rel="stylesheet"> -->
        <link href="assets/css/datepick.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Bootstrap core CSS -->

        <style>
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak {
                display: none !important;
            }
        </style>

        <script src="assets/js/jquery.js"></script>

        <script src="assets/js/jquery-ui.js"></script>

        <script src="assets/js/jquery.raty.js"></script>
    </head>


    <body>


        <!--HEADER-BAR-->
        <div class="tb_header">
            <div class="container">
                <div class="col-md-6" style="padding:0;">
                    <div class="tb_logo">
                        <a href="index.php">
                          <img style="width:20%;" src="assets/images/logo.png">
                    </div>
                </div>
                <div class="col-md-4" style="padding:0;">
                    <div class="tb_navbar">
                        <ul>
                            <li><a href="index.php">Home &nbsp;<span style="color:#f0a2a3;"> |</span></a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-2" style="padding:0;">

                    <div class="signin_up">
                        <?php if(!isset($_SESSION["user_id"])){ ?>
                            <ul>
                                <li><a href="#myModals" data-toggle="modal" data-target="#myModals">Sign In</a> <span style="color:#f0a2a3;">/</span></li>
                                <li><a href="#myModal" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                            </ul>
                            <?php }else { ?>
                                <ul>

                                    <li><a href="profile.php">profile</a></li>
                                    <li><a href="logout.php">- Logout</a></li>
                                </ul>
                                <?php } ?>
                    </div>
                    <!------logged end---------------->
                </div>
            </div>
            <div class="shadow"><img src="assets/images/shadow.png"></div>
        </div>
        <!--HEADER-BAR-END-->
        <!-- Modal -->
        <div class="modal fade" id="myModals" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <!-- Modal content-->
                <button type="button" class="close_lft" data-dismiss="modal">×</button>
                <form method="POST" action="includes/hotelfunctions.php" accept-charset="UTF-8" class="login-form">
                    <input type="hidden" name="form" value="login">
                    <div class="login-block">
                        <h1>Login</h1>
                        <input name="username" placeholder="Username" class="username" id="username" required="" type="text">
                        <input class="password" placeholder="Password" id="password" required="" type="password" name="password">

                        <input type="submit" name="submit" value="Login">
                        <br>
                        <div class="small_loader" style="text-align:center;display:none"><img src="/assets/images/loader-small.gif"></div>
                        <div class="login_res" style="text-align:center;"></div>
                        <br>
                        <div class="forgot"><a data-dismiss="modal" href="#myModalf" data-toggle="modal" data-target="#myModalf">Forgot Password?</a></div>
                        <div class="sign_in"><a data-dismiss="modal" href="#myModal" data-toggle="modal" data-target="#myModal">Sign
                    Up</a></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <button type="button" class="close_lft" data-dismiss="modal">×</button>
                <form method="POST" action="includes/hotelfunctions.php" accept-charset="UTF-8" class="login-form">
                    <input type="hidden" name="form" value="signup">
                    <div class="login-block">
                        <h1>Sign Up</h1>
                        <input class="name" id="register_firstname" name="name" placeholder="Name">
                        <input class="mobile" id="signup-username" name="phone" placeholder="Mobile" type="text">
                        <input value="" class="username" placeholder="Username" name="username" required="">
                        <input value="" class="password" placeholder="Password" id="dfdfd" name="password" required="" type="password">
                        <br>

                        <br>

                        <input type="submit" name="submit" type="button">
                        <br>
                        <div class="small_loader" style="text-align:center;display:none"><img src="/assets/images/loader-small.gif"></div>
                        <div class="signup_res" style="text-align:center;"></div>
                        <br>
                        <div class="account"><a data-dismiss="modal" href="#myModals" data-toggle="modal" data-target="#myModals">Already have an account?</a></div>
                        <div class="sign_in"><a data-dismiss="modal" href="#myModals" data-toggle="modal" data-target="#myModals">Sign In</a></div>
                    </div>
                </form>
            </div>
        </div>



        <style>
            .selected {
                background-color: red !important;
            }

            .layouts {
                height: 200px;
                -ms-transform: rotate(20deg);
                /* IE 9 */
                -webkit-transform: rotate(20deg);
                /* Safari */
                transform: rotate(270deg);
                /* Standard syntax */
            }

            .col-md-20 {
                width: 20% !important;
                float: left !important;
                min-height: 1px !important;
                padding-left: 15px !important;
                padding-right: 15px !important;
                position: relative !important;
            }

            .col-md-40 {
                width: 40% !important;
                float: left !important;
                min-height: 1px !important;
                padding-left: 15px !important;
                padding-right: 15px !important;
                position: relative !important;
            }

            .nopadding {
                padding: 0px !important;
            }
        </style>
        <?php foreach ($hotels as $hotel) { ?>
            <div ng-controller="search" class="ng-scope">
                <div class="container" ng-init="getUrlparameter()">
                    <div class="row" style="margin-top:120px;margin-bottom:15px;">
                        <div class="tb_direct">
                            <div class="tb_direct_inner">
                                <div class="tb_direct_inner_lft ">
                                    <div class="tb_direct_inner_lft1 search_modify">
                                        <?php echo $hotel[0]["name"]; ?>
                                    </div>
                                    <div class="tb_direct_inner_lft2 ">
                                        <div class="tb_align">
                                            <span class="tb_from ng-binding">
                                <?php echo $hotel[0]["city"] ?> City
							   </span>

                                        </div>
                                        <div class="tb_align">

                                            <span class="tb_arrow2 ng-binding"><?php echo $hotel[0]["address"] ?></span>


                                        </div>
                                        <a class="skip_ret ng-hide" ng-show="showSkip=='true'" ng-click="Skipreturn()">Skip return
                                booking and proceed
                            </a>
                                    </div>
                                </div>
                                <div class="tb_direct_inner_rht  ">
                                    <div class="tb_direct_inner_rht1  Grey">
                                        <div class="tb_align">
                                            <?php foreach ($hotel[3] as $service) { ?>
                                                <span class="tb_from1 ng-binding">  <?php echo $service["service"] ?></span>

                                                <?php } ?>

                                        </div>

                                    </div>
                                    <div style="cursor:pointer;" class="tb_direct_inner_rht2 hide">
                                        <div class="hoveclr" id="pickDate">Return</div>
                                        <input style="height: 0px; width:0px; border: 0px;cursor:none;" ng-model="returndate" id="returnsds" class="returnsd ng-pristine ng-untouched ng-valid ng-empty hasDatepicker" placeholder="Return" ng-change="return_date(returndate)">
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="out_tbs ng-hide" ng-show="hiddenDiv[1]">
                    <div class="container" style="padding:0px;">


                        <div class="tb_search">
                            <form id="myForms" method="post" novalidate="" data-parsley-validate="" class="ng-pristine ng-valid">
                                <div class="row">
                                    <div class="col-md-2">From
                                        <br>
                                        <input id="board_point" class="tb_from searching ui-autocomplete-input" placeholder="Enter a city" data-id="board_point" autocomplete="off" data-parsley-error-message="Please select a source city" required="" value="Coxsbazar" ng-init="user.board_point='Coxsbazar'" type="text"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>

                                    </div>
                                    <div class="col-md-1">
                                        <div class="direction switchButton" id="switchButton">
                                            <img src="/assets/images/dbarrw.png">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        To
                                        <br>
                                        <input id="Destination" class="tb_from searching Destination ui-autocomplete-input" placeholder="Enter a city" tabindex="2" data-id="drop_point" autocomplete="off" data-parsley-error-message="Please select a destination city" required="" value="Dhaka" ng-init="user.drop_point='Dhaka'" type="text"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>


                                    </div>
                                    <div class="col-md-3">
                                        Date of journy
                                        <br>
                                        <input class="tb_from  datetimepicker4 pickup_date pickup_datef hasDatepicker" id="datetimepicker4" value="05/09/2018" readonly="" ng-init="user.dateJ='05/09/2018'" type="text">


                                    </div>

                                    <div class="col-md-2 ">
                                        Date of Return (Optional)
                                        <br>
                                        <input class="tb_from pickup_date pickup_dater hasDatepicker" id="datereturn" value="05/09/2018" readonly="" ng-init="user.dateR='05/09/2018'" type="text">


                                    </div>


                                    <div class="col-md-2">
                                        <div class="tb_search_box">

                                            <input id="select" value="Search Buses" class="RB Xbutton" onclick="select_bus();" type="button">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--filter-bar-->
                <div class="tb_total">

                    <div class="tb_total bord" ng-hide="getbusdetails.length=='0'">
                        <div class="container">
                            <div class="tb_seats_list bord">
                                <div class="tb_seats_list1 cent">Type</div>
                                <div class="tb_seats_list2 cent">Floor & View</div>
                                <div class="tb_seats_list3 cent">Beds</div>
                                <div class="tb_seats_list4 cent">Rating</div>
                                <div class="tb_seats_list5 cent">Fare</div>
                            </div>
                        </div>
                        <!--  <div class="no_bus_found">No Bus found</div> -->
                    </div>
                    <!--filter-bar-end-->
                    <!--filter-list- -->
                    <div class="container" style="padding:0;">
                        <div class="tb_seats_lists">
                            <ul>
                                <?php foreach($cats as $cat) { ?>
                                    <?php foreach($cat[1] as $room){ ?>
                                        <!-- ngRepeat: details in wine=(getbusdetails  | filter:colourFilter | filter:colourFilter1 | filter:ratingFilter1 | selectedTags:tags | selectedTags1:amt | selecteddrop:drop ) -->
                                        <li data-ng-repeat="details in wine=(getbusdetails  | filter:colourFilter | filter:colourFilter1 | filter:ratingFilter1 | selectedTags:tags | selectedTags1:amt | selecteddrop:drop )" class="ng-scope">
                                            <div class="tb_seats_list">
                                                <div class="tb_seats_list1">
                                                    <div class="tb_seats_list1_inner">
                                                        <img src="assets/images/type.png" width="25px" height="25px">
                                                        <div class="tb_tour ng-binding">
                                                            <?php echo $cat[0]["type"]?>
                                                                <br>


                                                                <div class="modal fade" id="myModalslider0" role="dialog">
                                                                    <div class="modal-dialog">
                                                                        <!-- Modal content-->
                                                                        <button type="button" class="close_lft rht" data-dismiss="modal">×
                                                                        </button>
                                                                        <div class="login-block width top">
                                                                            <div id="myCarousel0" class="carousel slide" data-ride="carousel">
                                                                                <!-- Indicators -->
                                                                                <ol class="carousel-indicators">
                                                                                    <li data-target="#myCarousel0" data-slide-to="0" class="active"></li>
                                                                                    <li data-target="#myCarousel0" data-slide-to="1"></li>
                                                                                    <li data-target="#myCarousel0" data-slide-to="2"></li>
                                                                                    <li data-target="#myCarousel0" data-slide-to="3"></li>
                                                                                </ol>



                                                                                <div class="carousel-inner" role="listbox">

                                                                                    <!-- ngIf: details.gallery.length==0 -->
                                                                                    <div class="norating ng-scope" ng-if="details.gallery.length==0"> No gallery Image
                                                                                    </div>
                                                                                    <!-- end ngIf: details.gallery.length==0 -->


                                                                                    <!-- ngRepeat: busimage in details.gallery -->

                                                                                </div>
                                                                                <!-- Left and right controls -->
                                                                                <a class="left carousel-control" href="#myCarousel0" role="button" data-slide="prev">
                                                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                                    <span class="sr-only">Previous</span>
                                                                                </a>
                                                                                <a class="right carousel-control" href="#myCarousel0" role="button" data-slide="next">
                                                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                                    <span class="sr-only">Next</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tb_seats_list2">
                                                    <div class="tb_seats_list1_inner">

                                                        <img src="assets/images/view.png" width="25px" height="25px">
                                                        <div class="tb_tour">
                                                            <span class="field-tip">
                                                            <span class="tim_lft ng-binding"><?php echo $room["view"] ?> view</span>
                                                            <span class="tip-content"></span>
                                                            </span>
                                                            <br>
                                                            <span class="tb_tour_type ng-binding"><?php echo $room["floor"] ?> floor</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tb_seats_list3">
                                                    <div class="tb_seats_list1_inner">
                                                        <img src="assets/images/seats.png">
                                                        <div class="tb_tour ng-binding">
                                                            <?php echo $room["beds"] ?> Bed
                                                                <br>
                                                                <span class="tb_tour_type"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tb_seats_list4">
                                                    <div class="tb_seats_list1_inner1">
                                                        <a href="#myModalrate0" ng-click="Ratingdetails(details.bus_id)" data-target="#myModalrate0" data-toggle="modal">
                                                            <raty id="star0" score="" number="5" style="cursor: default;"><img id="star0-1" src="assets/images/Star3s.png" alt="1" title="bad" class="star0">&nbsp;<img id="star0-2" src="assets/images/Star3s.png" alt="2" title="poor" class="star0">&nbsp;<img id="star0-3" src="assets/images/Star3s.png" alt="3" title="regular" class="star0">&nbsp;<img id="star0-4" src="assets/images/Star3s.png" alt="4" title="good" class="star0">&nbsp;<img id="star0-5" src="assets/images/Star3s.png" alt="5" title="gorgeous" class="star0">
                                                                <input id="star0-score" name="score" value="0" type="hidden">
                                                            </raty>
                                                        </a>


                                                        <div class="modal fade" id="myModalrate0" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <button type="button" class="close_lft rht mov" data-dismiss="modal">×
                                                                </button>
                                                                <div class="login-block width padding">


                                                                    <div class="row movtop" ng-hide="ratingdetails.length ==0">

                                                                        <div class="col-md-6">
                                                                            <h4 class="Review">Ratings &amp; Reviews</h4>
                                                                            <div class="bus_nm">
                                                                                <div class="rate_rvw lft wht ng-binding">SP Night Coach
                                                                                </div>


                                                                                <div class="rate_rvw lft ng-binding">Coxsbazar To Dhaka

                                                                                </div>

                                                                                <div class="rate_rvw lft ng-binding">09:00 PM to 06:00 AM


                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <p class="Review_rate">Overall Rating<span class="rateno ng-binding"></span></p>

                                                                        </div>

                                                                    </div>
                                                                    <p ng-show="ratingdetails.length ==0" class="norating ng-hide"> No Rating
                                                                    </p>
                                                                    <br>

                                                                    <div class="ser ng-binding" ng-hide="ratingdetails.length ==0">
                                                                        Customers have rated this service.
                                                                    </div>

                                                                    <!-- ngRepeat: ratingdetailss in ratingdetails |itemsPerPage:3 -->


                                                                    <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" class="ng-isolate-scope">
                                                                        <!-- ngIf: 1 < pages.length -->
                                                                    </dir-pagination-controls>
                                                                </div>
                                                                <div class="nav_landmark">
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="tb_seats_list5">
                                                    <div class="tb_seats_list1_inner">
                                                        <p style="font-weight:600;font-size:15px;" class="ng-binding">$
                                                            <?php echo $cat[0]["price"] ?>
                                                        </p>
                                                        <a data-target="#myModals" data-toggle="modal" href="#myModals">
                                        <a href="book.php?hotel_id=<?php echo $hotel[0]["id"] ?>&room_id=<?php echo $room["id"] ?>&price=<?php echo $cat[0]["price"] ?>" >
                                        <button class="view_seats" data-id="seat_view">
                                           Book Now
                                        </button>
                                        </a>
                                                        </a>
                                                        <a>
                                                        </a>
                                                    </div>
                                                    <a>
                                                    </a>
                                                </div>
                                                <a>
                                                </a>
                                            </div>
                                            <a>


                                                <div class="container ng-hide" ng-show="details.active == true">

                                                    <div class="seat_arragement seat_view" id="bus1">
                                                        <div class="seat_arragement_outer">
                                                            <div class="seat_arragement_inner">

                                                                <div class="tablebus">
                                                                    <div class="driver"><img src="http://saintmartinparibahan.com.bd/assets/images/driver.png">
                                                                    </div>



                                                                    <div class="box-body col-md-6 layouts" id="layouts">

                                                                        <!----------- Left Row Start ---------->
                                                                        <div class="col-md-40 nopadding">

                                                                            <div class="col-md-6 nopadding ">
                                                                                <!-- ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A1" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A2" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A3" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A4" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A5" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A6" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A7" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A8" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A9" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row0 in details.seat_layout[0] ">
                                                                                    <div ng-class="row0.status =='true' ? 's'+row0.type : row0.type" data-class="seater" data-rate="1500" data-seat="A10" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row0 in details.seat_layout[0] -->
                                                                            </div>

                                                                            <div class="col-md-6 nopadding ">
                                                                                <!-- ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B1" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B2" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B3" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B4" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B5" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B6" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B7" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B8" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B9" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row1 in details.seat_layout[1]">
                                                                                    <div ng-class="row1.status =='true' ? 's'+row1.type : row1.type" data-class="seater" data-rate="1500" data-seat="B10" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row1 in details.seat_layout[1] -->
                                                                            </div>

                                                                        </div>
                                                                        <!----------- Left Row Start ---------->

                                                                        <!----------- Middle Row  ---------->
                                                                        <div class="col-md-20 nopadding">
                                                                        </div>
                                                                        <!----------- Middle Row  ---------->

                                                                        <!----------- Right Row Start ---------->
                                                                        <div class="col-md-40 nopadding">
                                                                            <div class="col-md-6 nopadding ">
                                                                                <!-- ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C1" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C2" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C3" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C4" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C5" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C6" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C7" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C8" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C9" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                                <div class="col-md-12 nopadding   ng-scope" ng-repeat="row2 in  details.seat_layout[2]">
                                                                                    <div ng-class="row2.status =='true' ? 's'+row2.type : row2.type" data-class="seater" data-rate="1500" data-seat="C10" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row2 in  details.seat_layout[2] -->
                                                                            </div>
                                                                            <div class="col-md-6 nopadding">
                                                                                <!-- ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D1" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D2" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D3" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D4" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D5" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D6" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D7" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D8" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D9" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                                <div class="col-md-12 nopadding  ng-scope" ng-repeat="row3 in  details.seat_layout[3] ">
                                                                                    <div ng-class="row3.status =='true' ? 's'+row3.type : row3.type" data-class="seater" data-rate="1500" data-seat="D10" data-bus="1" onclick="Selectedseat(this)" class="seater"></div>
                                                                                </div>
                                                                                <!-- end ngRepeat: row3 in  details.seat_layout[3] -->
                                                                            </div>
                                                                        </div>
                                                                        <!----------- Right Row Start ---------->

                                                                        <!----------- Last Row Start ---------->
                                                                        <div class="col-md-12 nopadding">
                                                                            <div class="col-md-12 nopadding">
                                                                                <!-- ngRepeat: row4 in details.seat_layout[4] -->

                                                                            </div>
                                                                        </div>
                                                                        <!-----------Last Row End ---------->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="seat_arragement_inner1">
                                                                <div class="ac-lft-main">
                                                                    <div class="ac-lft-list order">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="order_cnct_detail"><img src="/assets/images/available_seat.png"> Available Seat
                                                                                </div>
                                                                                <div class="order_contact_inf s">Seat(s): <span class="tb_fare seat_no">0</span></div>
                                                                                <input class="seat_nos" id="seat_nos1" type="hidden">
                                                                            </li>
                                                                            <li>
                                                                                <div class="order_cnct_detail"><img src="/assets/images/seat_select.png"> Selected Seat
                                                                                </div>
                                                                                <div class="order_contact_inf">Base Fare: <span class="tb_fare rate_bus ng-binding">  Rs.1500 </span>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="order_cnct_detail"><img src="/assets/images/booked.png"> Booked
                                                                                </div>
                                                                                <div class="order_contact_inf"> Total Fare <span class="tb_fare total_rate">  Rs.0</span></div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="red">&nbsp;</div>
                                                                <div class="red2">

                                                                    <select name="fxselect" id="fxselect" ng-model="droppoints$index" class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                        <option disabled="" value=""=""="">--Boarding points--</option>
                                                                        <!-- ngRepeat: Dpoints in details.Dpoints -->
                                                                        <option ng-repeat="Dpoints in details.Dpoints" value="2" class="ng-binding ng-scope">Kolatoli
                                                                        </option>
                                                                        <!-- end ngRepeat: Dpoints in details.Dpoints -->

                                                                    </select>

                                                                    <div class="red3">
                                                                        <button data-target="#myModals" data-toggle="modal" href="#myModals" class="tb_continue bus_continue">Continue
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>


                                                </div>
                                            </a>
                                        </li>
                                        <!-- end ngRepeat: details in wine=(getbusdetails  | filter:colourFilter | filter:colourFilter1 | filter:ratingFilter1 | selectedTags:tags | selectedTags1:amt | selecteddrop:drop ) -->
                                        <?php }?>
                                            <?php }?>
                            </ul>
                        </div>
                        <a>

                        </a>
                    </div>
                    <a>
                    </a>
                </div>
                <a>
                    <!--seat arrangement-->


                </a>
            </div>
            <?php } ?>
                <a>


                    <div class="loader" style="text-align: center; display: none;"></div>
                    <!--list-BAR-->
                </a>
                <div class="container">
                    <div class="rb_list">
                        <div class="row">
                            <div class="wrapper">
                                <div class="tb_inner">
                                </div>
                            </div>
                        </div>
                        <a href="#">
                        </a>
                    </div>
                    <a href="#">
                        <hr class="border2">

                    </a>
                </div>
                <a href="#">
                    <!--list-BAR end-->
                    <!--footer-BAR-->
                </a>
                <div class="container">
                    <a href="#">
                    </a>
                    <div class="row">
                        <a href="#">
                        </a>
                        <div class="tb_inner">
                            <a href="#">
                            </a>
                            <div class="col-md-9">
                                <a href="#">
                                </a>
                                <div class="tb_footer">
                                    <a href="#">
                                    </a>
                                    <ul>
                                        <a href="#">
                                        </a>

                                    </ul>
                                </div>
                                <div class="footer_con"> &#169; Hana Fakhouri <?php echo date('Y'); ?></div>
                            </div>
                            <div class="col-md-3">
                                <div class="tb_social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" style="color: black;" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a style="padding-left: 1em;" href="#"><i class="fa fa-twitter" style="color: black;" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a style="padding-left: 1em;" href="#"><i class="fa fa-google" style="color: black;" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" id="back-to-top" title="Back to top">↑</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--   custom JavaScript -->

                <script src="assets/js/angular.js"></script>
                <script src="assets/js/dirPagination.js"></script>
                <script src="assets/js/search.js"></script>
                <script src="assets/js/service.js"></script>
                <script src="assets/js/truebus.js"></script>
                <script src="assets/js/rating.js"></script>
                <script src="assets/js/bootstrap.js"></script>
                <script src="http://malsup.github.com/jquery.form.js"></script>


                <script src="assets/js/jquery-datepicker.js"></script>

                <script src="assets/js/custom.js"></script>


                <script src="assets/js/parsley.min.js"></script>

                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

                <script>
                    $(document).ready(function() {

                        $('#pickDate').click(function(e) {
                            $(this).next().datepicker('show');
                        });
                        $(".pickup_date").datepicker({

                            minDate: 0 //this option for allowing user to select from year range
                        });


                        $(".returnsd").datepicker({

                            minDate: new Date($(".datetimepicker4").val())

                            //this option for allowing user to select from year range
                        });
                        $(".pickup_date").on('change', function(e) {

                            $("#Calenderreturn").datepicker({

                                minDate: new Date($(".Calenderfrom").val())

                                //this option for allowing user to select from year range
                            });
                        });

                        $('ul.tabs li').click(function() {
                            var id = $(this).data('id');
                            //alert(id);
                            var tab_id = $(this).attr('data-tab');

                            $('ul.tabs li').removeClass('current');
                            $('.tab-content').removeClass('current');

                            $(this).addClass('current');
                            $("#" + tab_id).addClass('current');

                            $('#pament_option').val(id);
                        });
                    });
                </script>


                <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul>
                <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-2" tabindex="0" style="display: none;"></ul>
                <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
    </body>
