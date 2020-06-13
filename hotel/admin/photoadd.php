<?php
include 'adminfunctions.php';
include 'header.php';

?>

    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">Create New photos </h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-body form">
                            <form method="POST" action="adminfunctions.php" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                <input name="form" type="hidden" value="photosadd">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Picture</label>
                                        <div class="col-sm-6">
                                            <input name="img" type="file" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-6">
                                                <input type="submit" class="btn blue btn-block margin-top-10" value="Add Image" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!---ROW-->

        </div>
    </div>

    <?php include 'footer.php' ?>
