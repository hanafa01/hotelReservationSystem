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
                        <div class="portlet-title">
                            <div class="caption font-dark">
                            </div>
                            <div class="tools"> </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_1">

                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($types as $type) { ?>

                                        <tr>
                                            <form method="POST" action="admincontroller.php">
                                                <td>
                                                    <?php echo $type["type"] ?>
                                                </td>
                                                <td>
                                                    <?php echo $type["price"] ?>
                                                </td>

                                                <td>
                                                    <input type="submit" class="btn btn-danger btn-sm delete_button" onclick="return confirm('Are you sure you want to delete')" value="DELETE" />
                                                    <input type="hidden" name="room_id" value="<?php echo $type["id"] ?>"/>
                                                    <input type="hidden" name="form" value="typedelete" />
                                                </td>
                                            </form>
                                        </tr>

                                        <?php }?>
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
                            <h4 class="modal-title" id="myModalLabel"> <i class='fa fa-trash'></i> Delete !</h4>
                        </div>
                        <div class="modal-body">
                            <strong>Are you sure you want to Delete ?</strong>
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="http://ehotel.thesoftking.com/currency-delete" class="form-inline">
                                <input type="hidden" name="_token" value="TD7Cn11WDGkVEFltV7LCi71n52iPinb8maA193Vo">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" class="abir_id" value="0">

                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>
