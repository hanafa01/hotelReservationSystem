<?php
include 'adminfunctions.php';
include 'header.php';
$books = getBooking();
?>



    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">Mange Booking </h3>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                            </div>
                            <div class="tools"></div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_1">

                                <thead>
                                    <tr>

                                        <th>Booking Number</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Room Name</th>
                                        <th>Booking Date Start - End</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($books as $book) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $book["id"] ?>
                                            </td>

                                            <td>
                                                <?php echo $book["name"] ?>
                                            </td>
                                            <td>
                                                <?php echo $book["phone"] ?>
                                            </td>
                                            <td>
                                                <?php echo $book["number"] ?>
                                            </td>
                                            <td>
                                                <?php echo $book["start_date"] ?> -
                                                    <?php echo $book["end_date"] ?>
                                            </td>
                                            <td>
                                                <?php echo $book["status"] ?>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ROW-->
            <div class="text-center">

            </div>

            <!-- Modal for DELETE -->
            <div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><i class='fa fa-money'></i> Payment !</h4>
                        </div>

                        <div class="modal-body">
                            <strong>Are you sure User Paid Successfully..! </strong>
                        </div>

                        <div class="modal-footer">
                            <form method="post" class="form-inline">
                                <input type="hidden" name="_token" value="nFXP6sIbrjGyAEBCWdO5SlYzwxkFjs9HwDrpUNMV">
                                <input type="hidden" name="id" class="abir_id" value="0">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close
                                </button>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-check"></i> Yes Sure..!
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <?php include 'footer.php' ?>