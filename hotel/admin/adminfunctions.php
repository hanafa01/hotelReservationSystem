<?php
include '../includes/config.php';
$db = new DB();
$connection = $db->connection();
if (!isset($_SESSION["username"])) {
    header("Location: {$GLOBALS['url']}admin/login.php");
}



// Add new room type
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "typeadd") {
    global $connection;
    $type = $_POST["type"];
    $price = $_POST["price"];
    $hotel_id = $_SESSION["hotel_id"];
    $query = "INSERT INTO types(hotel_id,type,price) VALUES('$hotel_id', '$type', '$price')";
    if ($connection->query($query)) {
        header("Location: {$GLOBALS['url']}admin/roomcat.php");
    } else {

        header("Location: {$GLOBALS['url']}admin/typeadd.php");
    }
}

// Delete room type
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "typedelete") {
    global $connection;
    $type_id = $_POST["type_id"];
    $hotel_id = $_SESSION["hotel_id"];
    $query = "DELETE FROM types WHERE id='$type_id' AND hotel_id='$hotel_id'";
    if ($connection->query($query)) {
        header("Location: {$GLOBALS['url']}admin/roomcat.php");
    } else {

        header("Location: {$GLOBALS['url']}admin/roomcat.php");
    }
}

// Retrieve room types
function getTypes()
{
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT * FROM types WHERE hotel_id='$hotel_id'";
    $result = $connection->query($query);
    $types = array();
    while ($row = mysqli_fetch_array($result)) {
        $types[] = $row;
    }
    return $types;
}

// Add new room
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "roomadd") {
    global $connection;
    $number = $_POST["number"];
    $beds = $_POST["beds"];
    $floor =$_POST["floor"];
    $view = $_POST["view"];
    $status = "true";
    $type_id=$_POST["type_id"];
    $hotel_id = $_SESSION["hotel_id"];
   echo $query = "INSERT INTO rooms(hotel_id,type_id,number,floor,view,beds,status) VALUES('$hotel_id', '$type_id', '$number','$floor','$view','$beds','$status')";
    if ($connection->query($query)) {
        header("Location: {$GLOBALS['url']}admin/roomshow.php");
    } else {
         header("Location: {$GLOBALS['url']}admin/roomadd.php");

    }
}

// Delete room
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "roomdelete") {
    global $connection;
    $room_id = $_POST["room_id"];
    $hotel_id = $_SESSION["hotel_id"];
    $query = "DELETE FROM rooms WHERE id='$room_id' AND hotel_id='$hotel_id'";
    if ($connection->query($query)) {
        header("Location: {$GLOBALS['url']}admin/roomshow.php");
    } else {

     echo   mysqli_error($connection);
       // header("Location: {$GLOBALS['url']}admin/roomshow.php");

    }
}
// Edit room
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "roomedit") {
    global $connection;
    $room_id = $_POST["room_id"];
    $hotel_id = $_SESSION["hotel_id"];
    $number = $_POST["number"];
    $beds = $_POST["beds"];
    $floor =$_POST["floor"];
    $view = $_POST["view"];
    $status = $_POST["status"];

     $query = "UPDATE  rooms SET number='$number',beds='$beds',floor='$floor',view='$view',status='$status' WHERE id='$room_id' AND hotel_id='$hotel_id'";
    if ($connection->query($query)) {
       header("Location: {$GLOBALS['url']}admin/roomshow.php");
    } else {
        echo mysqli_error($connection);

    }


}
// Retrieve Rooms
function getRooms($id=0)
{
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    if($id==0) {
        $query = "SELECT * FROM types t,rooms r WHERE r.hotel_id='$hotel_id' AND r.type_id=t.id ";
    }else{

        $query = "SELECT * FROM types t,rooms r WHERE r.hotel_id='$hotel_id' AND r.type_id=t.id AND r.id='$id' ";
    }
    $result = $connection->query($query);
    $rooms = array();
    while ($row = mysqli_fetch_array($result)) {
        $rooms[] = $row;
    }
    return $rooms;
}

//
// Add new image
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "photosadd") {
    global $connection;
    $image = $_FILES['img']['name'];
    $target = "../uploads/".basename($image);
    $hotel_id = $_SESSION["hotel_id"];
    $query = "INSERT INTO photos(hotel_id,src) VALUES('$hotel_id', '$image')";
    $connection->query($query);
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        header("Location: {$GLOBALS['url']}admin/photos.php");
    } else {

    header("Location: {$GLOBALS['url']}admin/photoadd.php");
    }
}
// retrieve images
function getphotos()
{
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT * FROM photos WHERE hotel_id='$hotel_id'";
    $result = $connection->query($query);
    $types = array();
    while ($row = mysqli_fetch_array($result)) {
        $types[] = $row;
    }
    return $types;
}

// Delete image
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "photosdelete") {
    global $connection;
    $photos_id = $_POST["photos_id"];
    $hotel_id = $_SESSION["hotel_id"];
    $query = "DELETE FROM photos WHERE id='$photos_id' AND hotel_id='$hotel_id'";
    if ($connection->query($query)) {
        header("Location: {$GLOBALS['url']}admin/photos.php");
    } else {

        echo mysqli_error($connection);
  
    }
}

// retrieve services
function getServices()
{
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT * FROM services WHERE hotel_id='$hotel_id'";
    $result = $connection->query($query);
    $types = array();
    while ($row = mysqli_fetch_array($result)) {
        $types[] = $row;
    }
    return $types;
}

// Add new service
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "serviceadd") {
    global $connection;
    $service = $_POST["service"];
    $hotel_id = $_SESSION["hotel_id"];
    $query = "INSERT INTO services(hotel_id,service) VALUES('$hotel_id', '$service')";
    if ($connection->query($query)) {
        header("Location: {$GLOBALS['url']}admin/services.php");
    } else {

        header("Location: {$GLOBALS['url']}admin/serviceadd.php");
    }
}

// Delete room type
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "servicedelete") {
    global $connection;
    $service_id = $_POST["service_id"];
    $hotel_id = $_SESSION["hotel_id"];
    $query = "DELETE FROM services WHERE id='$service_id' AND hotel_id='$hotel_id'";
    if ($connection->query($query)) {
        header("Location: {$GLOBALS['url']}admin/services.php");
    } else {

        header("Location: {$GLOBALS['url']}admin/services.php");
    }
}

// retrieve booking
function getBooking()
{
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT * FROM rooms r,users g,booking b WHERE  b.room_id=r.id AND b.user_id=g.id AND b.hotel_id='$hotel_id'";
    $result = $connection->query($query);
    $types = array();
    while ($row = mysqli_fetch_array($result)) {
        $types[] = $row;
    }
    return $types;
}

// retrieve booking
function getPayments()
{
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT * FROM payments p,booking b WHERE p.hotel_id='$hotel_id' AND b.payment_id = p.id";
    $result = $connection->query($query);
    $types = array();
    $total = 0;
    while ($row = mysqli_fetch_array($result)) {
        $types[] = $row;
        $total = $total + $row["total"] ;
    }
    $types["total"] = $total;
    return $types;
}

function totalRooms(){
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT COUNT(*) AS numberOfRows FROM rooms WHERE hotel_id='$hotel_id'";
    $result = $connection->query($query);
    $row = mysqli_fetch_array($result);
    $res = $row['numberOfRows'];
    return $res;
}

function roomsReport(){
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT COUNT(*) AS numberOfRows FROM rooms WHERE hotel_id='$hotel_id' AND status='true'";
    $result = $connection->query($query);
    $rooms = array();
    while ($row = mysqli_fetch_array($result)) {
        $rooms[] = $row;
    }
    return $rooms;
}

function roomsCat(){
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT COUNT(*) AS numberOfRows FROM rooms WHERE hotel_id='$hotel_id' AND status='false'";
    $result = $connection->query($query);
    $row = mysqli_fetch_array($result);
    $res = $row['numberOfRows'];
    return $res;
}
function totalBooks(){
    global $connection;
    $hotel_id = $_SESSION["hotel_id"];
    $query = "SELECT COUNT(*) AS numberOfRows FROM booking WHERE hotel_id='$hotel_id' AND status='confirmed' ";
    $result = $connection->query($query);
    $row = mysqli_fetch_array($result);
    $res = $row['numberOfRows'];
    return $res;
}