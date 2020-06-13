<?php
include '../includes/config.php';
$db = new DB();
$connection = $db->connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $connection;
   echo $username = $_POST["username"];
   echo $password = $_POST["password"];
         $query = "SELECT * FROM admins WHERE username='$username' AND password='$password' ";
    $result = $connection->query($query);
    if ($result->num_rows > 0) {
        $_SESSION["username"] = $username;
        while ($row = mysqli_fetch_array($result)) {
             $_SESSION["hotel_id"] = $row["hotel_id"];
        }
        header("Location: {$GLOBALS['url']}admin/home.php");
    } else {
        echo $error = "Your Login Name or Password is invalid";
        echo $result->num_rows;
    }

}
?>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="css/AdminLTE.min.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href=""><b>Admin</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form method="POST" action="login.php" accept-charset="UTF-8" class="login-form">
                    <div class="form-group has-feedback">
                        <input class="form-control" name="username" placeholder="Username" type="text">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input class="form-control" name="password" placeholder="Password" type="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-12 right">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->



    </body>
