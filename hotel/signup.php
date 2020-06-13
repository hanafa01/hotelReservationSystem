<?php
include 'includes/hotelfunctions.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
    </head>

    <body class=" login">
        <div class="menu-toggler sidebar-toggler"></div>
        <!-- BEGIN LOGO -->
        <div class="logo">

        </div>
        <!-- END LOGO -->

        <div class="content">
            <form method="POST" action="includes/hotelfunctions.php" accept-charset="UTF-8" class="login-form">
                <input type="hidden" name="form" value="signup">
                <h3 class="form-title font-green">Sign UP</h3>

                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>



                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">name</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="name" name="name" /> </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">phone</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="phone" name="phone" /> </div>

                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <input type="submit" name="submit" class="btn green uppercase btn-block" />
                </div>


            </form>
            <!-- END LOGIN FORM -->

        </div>
        <div class="copyright">&#169; Hana Fakhouri 2018 &copy; All Copyright Reserved.</div>

    </body>

    </html>