<?php
include 'includes/hotelfunctions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "search") {
    $hotels = getHotelsSearch($_POST["search"]);

}else{

    $hotels = getHotels();
}
?>
    <!DOCTYPE html>
    <html ng-app='myFrontend'>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Hotel Reservation System</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <!-- custom CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="assets/css/truebus.css" rel="stylesheet">
        <link href="assets/css/parsley.css" rel="stylesheet">
        <!--   <link href="http://saintmartinparibahan.com.bd/assets/css/datepicker3.css" rel="stylesheet"> -->
        <link href="assets/css/datepick.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
                        </a>
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
                        <div class="small_loader" style="text-align:center;display:none"><img src="assets/images/loader-small.gif"></div>
                        <div class="signup_res" style="text-align:center;"></div>
                        <br>
                        <div class="account"><a data-dismiss="modal" href="#myModals" data-toggle="modal" data-target="#myModals">Already have an account?</a></div>
                        <div class="sign_in"><a data-dismiss="modal" href="#myModals" data-toggle="modal" data-target="#myModals">Sign In</a></div>
                    </div>
                </form>
            </div>
        </div>


        <!--SEARCH-BAR-->
        <div class="container" ng-controller="search">
            <div class="row" style="min-height:400px;margin-top:120px;">
                <div class="col-md-6">
                    <form method="post" action="hotels.php">
                        <input type="hidden" name="form" value="search">
                        <section id="Search" class="LB XXCN  P20">
                            <h1 class="bookTic XCN TextSemiBold">Online Hotel Booking with Zero Booking Fees</h1>
                            <div class="searchRow clearfix">

                            </div>
                            <div class="searchRow clearfix">
                                <div class="LB">
                                    <label class="inputLabel">City search</label>
                                    <span class="blackTextSmall"></span>
                                    <input name="search" class="XXinput searching" placeholder="eg:Beirut" type="text" />
                                    <input type="submit" value="Search Hotels" class="RB Xbutton" />
                                </div>
                            </div>
                    </form>
                    <div class="searchRow clearfix">
                        <div class="LB">
                            <form action="hotels.php">
                                <button class="RB Xbutton"> view All hotels</button>
                            </form>
                        </div>

                    </div>
                    </section>

                </div>
                <div class="col-md-6">
                    <div class="tb_bus">
                        <img src="assets/images/hotel.jpg" height="400px" width="500px">
                    </div>
                </div>
            </div>
        </div>
        <!--SEARCH-BAR-END-->
        <!--operator-BAR-->
        <div class="tb_operator">
            <div class="container">
                <div class="tb_inner">
                    <div class="row">
                        <div class="wrapper">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="tb_operator">
                                    <i class="fa fa-hotel" style="color: white;" aria-hidden="true"></i> &nbsp;
                                    <span class="tb_operator1">67000 <small class="smalls">Hotels</small></span>
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-12 col-xs-12">
                                <div class="tb_operator left">
                                    <i class="fa fa-user" style="color: white;" aria-hidden="true"></i> &nbsp;
                                    <span class="tb_operator2">1800 <small class="smalls"> Users</small></span>
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-12 col-xs-12">
                                <div class="tb_operator right">
                                    <i class="fa fa-ticket" style="color: white;" aria-hidden="true"></i> &nbsp;
                                    <span class="tb_operator3">6,00,000 + <small class="smalls">Books</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--operator-BAR end-->
        <!--offers-BAR-->
        <div class="tb_offers">
            <div class="shadow"><img src="assets/images/shadow.png"></div>
            <div class="outer">
                <div class="container">
                    <div class="tb_inner">

                    </div>
                    <hr class="border">
                    </hr>
                </div>
            </div>
        </div>
        <!--footer-BAR-->
        <div class="container">
            <div class="row">
                <div class="tb_inner">
                    <div class="col-md-9">
                        <div class="tb_footer">

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
                        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            base_url = "";
        </script>
        <!--   custom JavaScript -->

        <script src="assets/js/angular.js"></script>
        <script src="assets/js/dirPagination.js"></script>
        <script src="assets/js/search.js"></script>
        <script src="assets/js/service.js"></script>
        <script src="assets/js/truebus.js"></script>
        <script src="assets/js/rating.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>


        <script src="/assets/js/jquery-datepicker.js"></script>

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
    </body>

    </html>
