<?php
include 'includes/hotelfunctions.php';
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

        <title>Log In | Hotel Reservation System</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
        <!-- custom CSS -->
        <link href="http://saintmartinparibahan.com.bd/assets/css/bootstrap.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="assets/css/truebus.css" rel="stylesheet">
        <link href="assets/css/parsley.css" rel="stylesheet">
        <!--   <link href="http://saintmartinparibahan.com.bd/assets/css/datepicker3.css" rel="stylesheet"> -->
        <link href="assets/css/datepick.css" rel="stylesheet">


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

        <script src="/assets/js/jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <script src="/assets/js/jquery.raty.js"></script>
    </head>

    <div class="modal-dialog">
        <!-- Modal content-->

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

            </div>
        </form>
    </div>
    </div>