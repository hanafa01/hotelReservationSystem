<?php

Class DB
{
    var $DBHOST = "localhost";
    var $DBNAME = "hotel";
    var $DBUSER = "root";
    var $DBPASS = "";
    var $conn;

    function connection()
    {
        $con = mysqli_connect($this->DBHOST, $this->DBUSER, $this->DBPASS, $this->DBNAME) or die("Connection failed: " . mysqli_connect_error());

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        } else {
            $this->conn = $con;
        }
        return $this->conn;
    }
}
$GLOBALS['url'] = "http://localhost/hotelReservationSystem/hotel/";

session_start();
ob_start();
