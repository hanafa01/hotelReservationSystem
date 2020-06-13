<?php
include 'includes/hotelfunctions.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "book") {
    global $connection;
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $user_id = $_SESSION["user_id"];
    $hotel_id = $_GET["hotel_id"];
    $room_id = $_GET["room_id"];
    $total = $_GET["price"];
    $query = "INSERT INTO payments(hotel_id,user_id,total) VALUES('$hotel_id', '$user_id','$total')";
    $connection->query($query);
    $payment_id = $connection->insert_id;
    $query = "INSERT INTO booking(hotel_id,room_id,user_id,start_date,end_date,status,payment_id) VALUES('$hotel_id', '$room_id','$user_id','$start_date','$end_date','confirmed','$payment_id')";
    $connection->query($query);
    $query = "UPDATE rooms SET status='false' WHERE id='$room_id'";
    $connection->query($query);
    header("Location: profile.php");

}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <style type="text/css">@charset "UTF-8";
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
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
        }</style>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Book | Hotel Reservation System</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
    <!-- custom CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="assets/css/truebus.css" rel="stylesheet">
    <link href="assets/css/parsley.css" rel="stylesheet">
    <link href="assets/css/datepick.css" rel="stylesheet">

    <style>
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
            display: none !important;
        }
    </style>
    <script src="assets/js/jquery.js"></script>
    <!--script src="http://saintmartinparibahan.com.bd/assets/js/jquery.js"></script-->


    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

    <script src="assets/js/jquery.raty.js"></script>

</head>
<body>

<div id="body-wrap">
    <!--Start Category Section-->
    <section class="restaurant-category">
        <!--Start Container-->
        <div class="container">
            <br><br><br><br><br>
            <div class="section-title two">
                <h2 class="text-center text-bold"><span>Booking Process</span></h2>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form method="POST" action="" accept-charset="UTF-8">
                        <input name="form" type="hidden" value="book">
                        <div class="row" style="margin-top:15px">
                            <div class="col-md-6">
                                <label>Select Start Date:</label>
                                <input type="date" name="start_date" class="daterange form-control "
                                       style="background: #fff;" required>
                            </div>
                            <div class="col-md-6">
                                <label>Select End Date:</label>
                                <input type="date" name="end_date" class="daterange form-control "
                                       style="background: #fff;" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" onclick="alert('Your Room Booked');" class="btn btn-block btn-primary"id="register-form-submit" name="register-form-submit" value="Book Now"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
