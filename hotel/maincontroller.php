<?php
include 'includes/config.php';
session_start();
ob_start();
$db = new DB();
$connection = $db->connection();
// Retrieve room types
function getHotels($gid = 0)
{
    global $connection;
    if ($gid != 0) {
        $query = "SELECT * FROM hotels h WHERE id='$gid'";
    } else {
        $query = "SELECT * FROM hotels h order by RAND() LIMIT 6";
    }
    $result = $connection->query($query);
    $hotels = array();
    $rooms = array();
    $services = array();
    while ($row = mysqli_fetch_array($result)) {

        $id = $row["id"];
        $query2 = "SElECT * FROM types WHERE hotel_id='$id'";
        $result2 = $connection->query($query2);
        // get gallery
        $query3 = "SElECT * FROM gallery WHERE hotel_id='$id'";
        $result3 = $connection->query($query3);
        $row3 = $result3->fetch_assoc();


        while ($row2 = mysqli_fetch_array($result2)) {
            $rooms[] = $row2;
        }

        $query4 = "SElECT * FROM services WHERE hotel_id='$id'";
        $result4 = $connection->query($query4);
        while ($row4 = mysqli_fetch_array($result4)) {
            $services[] = $row4;
        }


        $hotels[] = array($row, $rooms, $row3, $services);
        $rooms = array();
        $services = array();

    }
    return $hotels;
}
function getHotelsSearch($gid)
{
    global $connection;
    $query = "SELECT * FROM hotels h WHERE city LIKE '%' '$gid' '%' ";
    $result = $connection->query($query);
    $hotels = array();
    $rooms = array();
    $services = array();
    while ($row = mysqli_fetch_array($result)) {

        $id = $row["id"];
        $query2 = "SElECT * FROM types WHERE hotel_id='$id'";
        $result2 = $connection->query($query2);
        // get gallery
        $query3 = "SElECT * FROM gallery WHERE hotel_id='$id'";
        $result3 = $connection->query($query3);
        $row3 = $result3->fetch_assoc();


        while ($row2 = mysqli_fetch_array($result2)) {
            $rooms[] = $row2;
        }

        $query4 = "SElECT * FROM services WHERE hotel_id='$id'";
        $result4 = $connection->query($query4);
        while ($row4 = mysqli_fetch_array($result4)) {
            $services[] = $row4;
        }


        $hotels[] = array($row, $rooms, $row3, $services);
        $rooms = array();
        $services = array();

    }
    return $hotels;
}

function getroomwithcat($gid = 0)
{
    global $connection;
    $query = "SELECT * FROM types WHERE hotel_id='$gid'";
    $result = $connection->query($query);
    $cats = array();
    $rooms = array();

    while ($row = mysqli_fetch_array($result)) {
        $id = $row["id"];
        $query2 = "SElECT * FROM rooms WHERE type_id='$id' AND status='true'";
        $result2 = $connection->query($query2);
        while ($row2 = mysqli_fetch_array($result2)) {
            $rooms[] = $row2;
        }
        $cats[] = array($row, $rooms);
        $rooms = array();
    }
    return $cats;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "login") {
    global $connection;
    echo $username = $_POST["username"];
    echo $password = $_POST["password"];
    $query = "SELECT * FROM guests WHERE username='$username' AND password='$password' ";
    $result = $connection->query($query);
    if ($result->num_rows > 0) {
        $_SESSION["guest"] = $username;
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION["guest_id"] = $row["id"];
        }
        header("Location: index.php");
    } else {
        echo $error = "Your Login Name or Password is invalid";

    }

}
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "signup") {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $query = "INSERT INTO guests(name,phone,username,password) VALUES('$name', '$phone','$username','$password')";
    $connection->query($query);
    $_SESSION["guest"] = $username;
    header("Location: index.php");

}
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "cancel") {
    global $connection;
    $book_id = $_POST["book_id"];
    $query = "UPDATE booking SET status='canceled' WHERE id='$book_id'";
    $connection->query($query);
    header("Location: dashboard.php");

}

function getuser($gid)
{
    global $connection;
    $query = "SELECT * FROM guests WHERE id='$gid'";
    $result = $connection->query($query);
    $books = array();
    $guest = array();
    while ($row = mysqli_fetch_array($result)) {
        $query2 = "SElECT * FROM booking WHERE guest_id='$gid' AND status='confirmed'";
        $result2 =$connection->query($query2);

        while ($row2 = mysqli_fetch_array($result2)) {

            $books[] = $row2;
        }
        $guest[] = array($row, $books);
        $books = array();
    }

    return $guest;
}