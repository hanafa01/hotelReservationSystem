<?php
include '../includes/config.php';
if(!isset($_SESSION["username"])){
    header("Location: {$GLOBALS['url']}admin/login.php");
}else{
    header("Location: {$GLOBALS['url']}admin/home.php");
}
