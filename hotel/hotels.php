<?php
include 'includes/hotelfunctions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "search") {
    $hotels = getHotelsSearch($_POST["search"]);

}else{

    $hotels = getHotels();
}
?>
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



    <style>
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
            display: none !important;
        }
    </style>
    <script src="assets/js/jquery.js"></script>

    <script src="assets/js/jquery-ui.js"></script>

    <script src="assets/js/jquery.raty.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>


<!--HEADER-BAR-->
<div class="tb_header">
    <div class="container">
        <div class="col-md-6" style="padding:0;">
            <div class="tb_logo">
                <a href="index.php">
                    <img style="width:20%;" src="assets/images/logo.png">
                </a></div>
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
                        <li><a href="#myModals" data-toggle="modal" data-target="#myModals">Sign In</a> <span
                                    style="color:#f0a2a3;">/</span></li>
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
          <button type="button" class="close_lft" data-dismiss="modal">Ã—</button>
          <form method="POST" action="includes/hotelfunctions.php" accept-charset="UTF-8" class="login-form">
              <input type="hidden" name="form" value="login" >
              <div class="login-block">
                  <h1>Login</h1>
                  <input name="username" placeholder="Username" class="username" id="username" required="" type="text">
                  <input class="password" placeholder="Password" id="password" required=""
                         type="password" name="password">

                  <input type="submit" name="submit" value="Login">
                  <br>
                  <div class="small_loader" style="text-align:center;display:none"><img
                              src="assets/images/loader-small.gif"></div>
                  <div class="login_res" style="text-align:center;"></div>
                  <br>
                  <div class="forgot"><a data-dismiss="modal" href="#myModalf" data-toggle="modal"
                                         data-target="#myModalf">Forgot Password?</a></div>
                  <div class="sign_in"><a data-dismiss="modal" href="#myModal" data-toggle="modal" data-target="#myModal">Sign
                          Up</a></div>
              </div>
          </form>
      </div>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
          <button type="button" class="close_lft" data-dismiss="modal">Ã—</button>
          <form method="POST" action="includes/hotelfunctions.php" accept-charset="UTF-8" class="login-form">
              <input type="hidden" name="form" value="signup" >
              <div class="login-block">
                  <h1>Sign Up</h1>
                  <input class="name" id="register_firstname" name="name" placeholder="Name">
                  <input class="mobile" id="signup-username" name="phone" placeholder="Mobile" type="text">
                  <input value="" class="username" placeholder="Username" name="username" required="" >
                  <input value="" class="password" placeholder="Password" id="dfdfd" name="password"
                         required="" type="password"><br>

                  <br>

                  <input type="submit" name="submit" type="button">
                  <br>
                  <div class="small_loader" style="text-align:center;display:none"><img
                              src="assets/images/loader-small.gif"></div>
                  <div class="signup_res" style="text-align:center;"></div>
                  <br>
                  <div class="account"><a data-dismiss="modal" href="#myModals" data-toggle="modal"
                                          data-target="#myModals">Already have an account?</a></div>
                  <div class="sign_in"><a data-dismiss="modal" href="#myModals" data-toggle="modal"
                                          data-target="#myModals">Sign In</a></div>
              </div>
          </form>
      </div>
  </div>

<div class="row" style="min-height:80px;">
      <div class="container">
          <div class="row">

          </div>
           </div>
          </div>
		      <div class="row mtop20 ng-scope" ng-controller="search">
			  <input value="fsd" id="rating" ng-click="rating()" style="display:none;" type="button">
           <div class="container" ng-init="getTripdetails()">
    <div class="col-md-12">
	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1" data-id="d">Search Result</li>



	</ul>

	<div id="tab-1" class="tab-content current" data-id="paytm">


		<!-- {{tripDetails}} -->
        <?php foreach ($hotels as $hotel) { ?>
         <!-- ngRepeat: trips in tripDetails -->
        <div class="tb_route_inner_txt ng-scope" ng-show="tripDetails.length!='0'" ng-repeat="trips in tripDetails">

            <div class="tb_route_inner" data-toggle="collapse" data-target="#demo0" style="cursor:pointer;">

                <div class="tb_route_from">

                     <span class="tb_tour_type ng-binding">
                            <img src="uploads/<?php echo $hotel[2]["src"] ?>" width="100px" height="100px"/>
                         <span>

                </div>
                 <div class="tb_route_to">
                   <div class="tb_tour ng-binding">   <?php echo $hotel[0]["name"]; ?><br>
                     <span class="tb_tour_type ng-binding"><?php echo $hotel[0]["city"]?></span>
                        </div>

                </div>
                 <div class="tb_route_date">
                    <div class="tb_tour ng-binding"><?php echo $hotel[0]["address"]?><br>
                     <!-- <span class="tb_tour_type" >{{trips.booking_id}}</span> -->
                        </div>
                </div>
                 <div class="tb_route_name">
                     <div class="tb_tour"><raty id="star0" score="" number="5" style="cursor: default;">
                             <img id="star0-1" src="assets/images/Star3s.png" alt="1" title="bad" class="star0">&nbsp;<img id="star0-2" src="assets/images/Star3s.png" alt="2" title="poor" class="star0">&nbsp;<img id="star0-3" src="assets/images/Star3s.png" alt="3" title="regular" class="star0">&nbsp;<img id="star0-4" src="assets/images/Star3s.png" alt="4" title="good" class="star0">&nbsp;<img id="star0-5" src="assets/images/Star3s.png" alt="5" title="gorgeous" class="star0"><input id="star0-score" name="score" value="0" type="hidden"></raty><br>
                     <span class="tb_tour_type ng-binding"></span>
                        </div>
                </div>

				<div class="tb_route_cnf">

			 <div class="user">
                 <a href="list.php?id=<?php echo $hotel[0]["id"]?>">
                     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAATCAMAAABMZWaEAAAA+VBMVEUAAAAAAAAAAABAQEBmZmZxcXFmZmZqamptbW13d2ZwcHBtbW1wcHBycnJzc3NycnJ2dnZ0dHRzc3Nzc3N2dnF0dHR1dXV3d3N1dXV2dnZ0dHR2dnZ1dXV1dXV0dHR1dXV0dHR3d3R1dXV3d3R2dnN1dXV3d3R3d3V1dXV1dXV1dXV3d3R3d3V1dXV1dXV2dnZ3d3V2dnZ2dnV1dXV2dnR1dXV3d3V2dnV2dnZ2dnZ2dnZ2dnZ2dnZ3d3V2dnV2dnZ2dnV3d3Z2dnZ2dnV3d3V2dnV3d3V3d3Z3d3Z2dnV3d3V2dnV2dnV3d3Z2dnV2dnV2dnV3d3Z3d3bYunxAAAAAUnRSTlMAAQIEBQkKDA4PEBUZHR8mJywzNTY3Ozw/QUJDRkhNU1hYWVpfZGVpa29xcoWJi42Sk5eYmqGlpqeprbi8vcDBwsPFxsjP19nf4uTn6ert8vf5uY8U+gAAAL9JREFUGNN1j9USwjAURBcrFHcoVjS4O8Udiv//x9DOdNIWOS93cya5swEoXAK/iN2T2qMxRYgfnCH96BFKFOicBKGEpqX/XAiUWxmiX3lYP7roktwcN48clgzQqFCf2ijequ9AffjLXwasFNoWrXZPlwjNR19f2Y29QESUUpfRaNvLATiHghSDuvvHOovz2i0lu84H9lOlz4z53RN/+hfNn/7qkwPRe36FybalkskXkvI81GCtNlT4bD4uT2J6A4DuHaqnkK4BAAAAAElFTkSuQmCC">Book
                 </a>

    </div>

  </div>

            </div>
              <div class="trip_details ">

          </div>

	 <br>
        &nbsp;
             </div>
        <!-- end ngRepeat: trips in tripDetails -->
        <?php } ?>

			<!--ff-->


        </div> </div> </div></div>

	   <script src="http://techlabz.in/truebus/assets/js/myaccount.js.pagespeed.jm.eLrupg7jL9.js"></script>
	    <div class="loader" style="text-align: center; display: none;"></div>
         <!--footer-BAR-->
         </a><div class="container"><a href="#">
         </a><div class="row"><a href="#">
         </a><div class="tb_inner"><a href="#">
         </a><div class="col-md-9"><a href="#">
         </a><div class="tb_footer"><a href="#">
         </a><ul>
         </ul>
         </div>
         <div class="footer_con">&#169; Hana Fakhouri 2018</div>
         </div>
         <div class="col-md-3">
         <div class="tb_social">
         <ul>
         <li>  <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAZCAQAAABEULxHAAABr0lEQVQoz13RX2jNcRQA8LNNW/6sMfkz2oPGtrZSZGRTEvUpax4mI5p/aWhbWne42j+0JV2iCFFSK/KiUZNnL0Kilgcvk6fFeKY8XA+/a3Z1Hr7n2+fUOacTYiZKbdBrQEq3bmcM2vcPq1w0qNni3P+A50b/4nKXpLVbOVO+VMajJC3Wpl2nc1bMalYhnSTLtEpJKxWKFQp1GjXoT7jSUc9sE+bY5ZgbJn33w5eEa51yWa1Q66YPst7JuON8wg26VCgQ5hvy21NlQihIuFrXzEL9so4ot0SIUGmP4w4pz/Fu49I6jHhgaxhySZdbUkqEUKTcalVOmDYW+tRY5KRmhbN2XuWsj8ZDt3VC0SwKywzoMeVx6LY+j0KJg4Z1+ule6HBXi2oFySrqXPPCfa9ljYTtsrLGlOb4gmwupuwPC7Ub9NCa3J2u+ialWYtGC5Juc52xUQg7jXqbKw2RPIudtlkIm4z7rC6fy/VqEubZ64pJ9flc5pQtQo1h/d5Ym8+LHFajXkbabROq87lUmyYHZbTq8+n/0Qr1eO+VMde9NKkqn8MOE6Z99d0vT2aOG38A8QfL1pGSoCsAAAAASUVORK5CYII=" data-pagespeed-url-hash="3643681810" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> </li>
         <li>  <a href="#"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAZCAQAAACIyYasAAACfklEQVQ4y4XTX2jVdRjH8e/RTfy3SpyZQ7NMM3NMSDD/gEqoL3OgWG2hpJg6XExhHZuy0Fqx4qgXa4m16mIoDMcUMuhCobqoWBpEF2IMuhghUUiQwlYIi28X+3N+Z79T8rl6nu/z/vJ9vs/nCcI9NMN6BzRp9qwp+XwQLLT0P6AJqrU5rMYWL+lw2vQ8OMVZvdYWwSbK6rZlLC71kaN5cJWcDa6pToEbdZlbkLnPtyoEqy0L6vSossI3thYUlWu1yjIzC7Ifuy6rU1+wW48msyx3VV2iZLHX7ZU1uQCcq9Fibb4KntBjnTJBpe+9bdpIfzs0OGVdqoGM1/zuSlCi2fGR5Cxf6rBIMF2XNSpMHQdVyFipVQwydmgZO5rqXRe96JjzMqnhbHZBlY1+0heUavVq4vh5XTp0WjgOm2STnDP6RTc9FWQ0yCUKHtfgSAoL5mixzWXR15YOO2elq1YkSiYrTz3zYS/bK+uuAbWjlpvgmM+U/69jn9Fru07RDQ+MgkGJ80U+Pq953nNCvV7Rh3mTB8GJIpYb1QLHHbVGj2jQk4XgC04X+ZAgmGaXLpvtdlPUnVyrYV1yw4wUNtsbtqp3wCeG/OXRPFjnOTsd9I5ak1Ijr9Vtv0ofGBA1Jhf5b1dUmT3OzEGwyJveslOzQ34TXVKWBO+6o8EcwUz3K1GqxEPmm69du/22yxkU9atMXhvcEUX9mjTZp8ZqT3vFHnusV+uUL9wS3bah8D1B1h+iKBr0sx+c06bRGWed9KN/RNGfasY3EgRrtftlBI6iAb8aMjQWX7cpPabRPVui3uduJ/Bh9WnxWLH5JoMyj9jlfZdd851P5VR7MGX3Ef0LLblun0f3MdsAAAAASUVORK5CYII=" data-pagespeed-url-hash="2391363313" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
         <li>  <a href="#">  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAZCAQAAACbHsZYAAACYElEQVQ4y03SbWjVdRQH8GOyDLuVD5PuUGY0Mm3BnFAbaU0j9wkva8zYUMbUwAjBxAhvbbaZbllujLFZJlKJkprNUrEsRMXCFVRSsLQHEKNhEUnDwIS9WS/uxv3ze/v5nvM7hxNCCLPVeU2bFtvtsEO7zVbqdsI9ORFCgUa7bfWk20waC4aw3GVHzRyHE22wU4UwVbsTWk2UUqXckP2mjcfCcn1mSJnlQyMG3dQqtNniUzX5+uFNC8y22Xo/aTRTkysqpbXqtT0JO6Us0exZn7lTCJv0CmV6fG5KHna41ULNHnFKuRDm2iVtoR+dMz0P33OXlB4N3nVAgZDWpV69b+xLtj7rIeEB95nrOx3SanxkmXWGrBSKleRglzNmjeXK7PSGbhlrXLNfKLXXSUtFmOGMi97WpEqJEhWKFRr0iSJL9cva4JimEAoddN1/rrkqa4IVvjAgrUy/WgXCAj/nWk7ymOfsNehRE6wy6lWh1D6vK/SgTgPjU92uWIN+84W00y4qEipd1WeLUXU5VqlFizpFY7ElhvQI4SkX/OKs6eEWtdotc7cqz1g7tvQX/W21EEpUukOEGr0y5vnADaNG/G6b8LjdvrIoufA+zV7wqyuyKpSr9r1XLLLVBV1JOOB57/ght38hLHbeKm0OO568x0PW+NemxGWX6lIv62OnTM3DPSY74qT7pUxxr4yXPWGjbf70VrL1oLUm69BphY267bJOgz0u+8vDSbjasE61MqplLDZf1m9GDGtMfCdCaPKH67503GFHnHfDqK9VJ1kOhjle8q1/3DTskvc9nZ92/P0PVUosLqFiEEkAAAAASUVORK5CYII=" data-pagespeed-url-hash="1736491741" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
         </ul>
         </div>
		 <a href="#" id="back-to-top" title="Back to top" class="show">&uarr;</a>
         </div>
         </div>
         </div>
         </div>	<script>base_url="http://techlabz.in/truebus/";</script>
     <!--   custom JavaScript -->

	 <script src="assets/js/angular.js"></script>
	 <script src="http://techlabz.in/truebus/assets/js/dirPagination.js+search.js+service.js+truebus.js+rating.js+bootstrap.js.pagespeed.jc.6IJ4wd6HU_.js"></script><script>eval(mod_pagespeed_cSdBks4rkj);</script>
	  <script>eval(mod_pagespeed_nktdEI92vw);</script>
	  <script>eval(mod_pagespeed_POlSCULGpo);</script>
      <script>eval(mod_pagespeed_y4wvIvRymA);</script>
	  <script>eval(mod_pagespeed_q$xszmq0C$);</script>
      <script>eval(mod_pagespeed_RxtOetojux);</script>
	  <script src="http://malsup.github.com/jquery.form.js"></script>


	  <script src="assets/js/jquery-datepicker.js"></script>

	  <script src="http://techlabz.in/truebus/assets/js/custom.js+parsley.min.js.pagespeed.jc.alQI4AlSBU.js"></script><script>eval(mod_pagespeed_sQ4tZrCnhS);</script>


	<script>eval(mod_pagespeed_zIdgmraIss);</script>

      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<script>$(document).ready(function(){$('#pickDate').click(function(e){$(this).next().datepicker('show');});$(".pickup_date").datepicker({minDate:0});$(".returnsd").datepicker({minDate:new Date($(".datetimepicker4").val())});$(".pickup_date").on('change',function(e){$("#Calenderreturn").datepicker({minDate:new Date($(".Calenderfrom").val())});});$('ul.tabs li').click(function(){var id=$(this).data('id');var tab_id=$(this).attr('data-tab');$('ul.tabs li').removeClass('current');$('.tab-content').removeClass('current');$(this).addClass('current');$("#"+tab_id).addClass('current');$('#pament_option').val(id);});});</script>


</body>
