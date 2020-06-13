<?php
include 'adminfunctions.php';
include 'header.php';
?>

    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">Create New Service </h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-body form">
                            <form method="POST" action="adminfunctions.php" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Service Name : </label>
                                        <div class="col-sm-6">
                                            <input name="service" value="" class="form-control input-lg" type="text" required placeholder="service Name">
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
                                <input type="hidden" name="form" value="serviceadd" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!---ROW-->

        </div>
    </div>

    <?php include 'footer.php' ?>
