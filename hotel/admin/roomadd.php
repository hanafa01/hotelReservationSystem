<?php
include 'adminfunctions.php';
include 'header.php';
$types = getTypes();
?>

    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">Add New Room </h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">

                        <div class="portlet-body form">
                            <form method="POST" action="adminfunctions.php" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                <input name="form" type="hidden" value="roomadd">
                                <div class="form-body">


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room Number : </b></label>

                                        <div class="col-sm-6">
                                            <input name="number" value="" class="form-control input-lg" type="number" required placeholder="Room Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room Beds : </b></label>

                                        <div class="col-sm-6">
                                            <input name="beds" value="" class="form-control input-lg" type="number" min="1" max="2" required placeholder="Room Beds">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room Floor : </b></label>

                                        <div class="col-sm-6">
                                            <input name="floor" value="" class="form-control input-lg" type="number" min="0" required placeholder="Room Floor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room View : </b></label>

                                        <div class="col-sm-6">
                                            <select name="view" class="form-control input-lg" required>
                                                <option value="">Select One</option>
                                                <option value="sea">sea</option>
                                                <option value="mountain">mountain</option>
                                                <option value="city">city</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room Type : </b></label>

                                        <div class="col-sm-6">
                                            <select name="type_id" id="type_id" class="form-control input-lg" required>
                                                <option value="">Select One</option>
                                                <?php foreach ($types as $type) { ?>
                                                    <option value="<?php echo $type["id"] ?>">
                                                        <?php echo $type["type"] ?>
                                                    </option>
                                                    <?php }?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-6">
                                                <input type="submit" class="btn blue btn-block margin-top-10" value="Create New Room" />
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
