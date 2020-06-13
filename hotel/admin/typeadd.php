<?php
include 'adminfunctions.php';
include 'header.php';
?>

    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">Create New Room Category </h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-body form">
                            <form method="POST" action="adminfunctions.php" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Room Category Name : </label>
                                        <div class="col-sm-6">
                                            <input name="type" value="" class="form-control input-lg" type="text" required placeholder="Room Category Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Room Price : </label>

                                        <div class="col-sm-4">
                                            <input name="price" value="" class="form-control input-lg" type="number" required placeholder="Room Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <input type="submit" class="btn blue btn-block margin-top-10" value="Create New Room Category" />
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="form" value="typeadd" />
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!---ROW-->
        </div>
    </div>

    <?php include 'footer.php' ?>