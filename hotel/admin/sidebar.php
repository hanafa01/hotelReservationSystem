<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <div class="user-panel">
            <div class="pull-left image">
                <img src="account.png" class="user-image left-sid" >
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION["username"] ?> </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle-o"></i> <span>Rooms Types</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="roomcat.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
                    <li><a href="typeadd.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle-o"></i> <span>Rooms</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="roomshow.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
                    <li><a href="roomadd.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle-o"></i> <span>Services</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="services.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
                    <li><a href="serviceadd.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle-o"></i> <span>Photos</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="photos.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
                    <li><a href="photoadd.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
                </ul>
            </li>
            <li>
                <a href="booking.php"><i class="fa fa-circle-o" aria-hidden="true"></i><span>Booking</span></a>
            </li>
            <li>
                <a href="payments.php"><i class="fa fa-dollar" aria-hidden="true"></i><span>Payments</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper" style="min-height: 654px;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            </div>
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
