<?php
session_start();
session_destroy();
header("Location: {$GLOBALS['url']}admin/login.php");
?>
