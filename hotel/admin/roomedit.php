<?php
include 'adminfunctions.php';
include 'header.php';
$_GET["roomedit"];
$rooms = getRooms($_GET["roomedit"]);
foreach($rooms as $room){

}
$types = getTypes();
?>

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">Add New Room </h3>
            <hr>


            <!--  ==================================VALIDATION ERRORS==================================  -->
            <!--  ==================================SESSION MESSAGES==================================  -->


            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">

                        <div class="portlet-body form">
                            <form method="POST" action="adminfunctions.php" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                <input name="form" type="hidden" value="roomedit">
                                <input name="room_id" type="hidden" value="<?php echo $room["id"]?>">
                                <div class="form-body">


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room Number : </b></label>

                                        <div class="col-sm-6">
                                            <input name="number" value="<?php echo $room["number"]?>" class="form-control input-lg" type="number" required placeholder="Room Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room Beds : </b></label>

                                        <div class="col-sm-6">
                                            <input name="beds" value="<?php echo $room["beds"]?>" class="form-control input-lg" type="number" min="1" max="2" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room Floor : </b></label>

                                        <div class="col-sm-6">
                                            <input name="floor" value="<?php echo $room["floor"]?>" class="form-control input-lg" type="number" min="0" required placeholder="Room Floor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room View : </b></label>

                                        <div class="col-sm-6">
                                            <select name="view" class="form-control input-lg" required>
                                                <option value="<?php echo $room["view"]?>" selected>
                                                    <?php echo $room["view"]?>
                                                </option>
                                                <option value="sea">sea</option>
                                                <option value="mountain">mountain</option>
                                                <option value="city">city</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Room View : </b></label>

                                        <div class="col-sm-6">
                                            <select name="status" class="form-control input-lg" required>
                                                <option value="<?php echo $room["status"]?>" selected>
                                                    <?php echo $room["status"]?>
                                                </option>
                                                <option value="true">true</option>
                                                <option value="false">false</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-6">
                                                <input type="submit" class="btn blue btn-block margin-top-10" value="Edit Room" />
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
    <!-- END CONTENT -->
    <!-- BEGIN FOOTER -->
    <?php include 'footer.php' ?>
        <!-- END FOOTER -->
