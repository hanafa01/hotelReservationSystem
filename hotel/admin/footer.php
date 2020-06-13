</div>
</div>
</div>
</section>
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>&#169; Hana Fakhouri 2018</strong>
</footer>

</div>
<script>
    base_url = "/admin/";
    config_url = "/admin/";
</script>
<!-- jQuery 2.1.4 -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="js/jQuery-2.1.4.min.js"></script>
<!--<script src="assets/js/app.min.js"></script>-->
<script src="js/sortables.js"></script>
<script src="js/app.js"></script>
<script src="js/app-test.js"></script>

<!-- Bootstrap 3.3.5 -->
<script src="js/bootstrap.min.js"></script>
<script src="js/pace.js"></script>
<!-- Select2 -->
<script src="js/select2.min.js"></script>

<!-- DataTables -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>


<!-- plugin for gallery image view Ragu -->
<script src="js/jquery.colorbox-min.js"></script>
<!-- application script for Charisma demo Ragu -->
<script src="js/charisma.js"></script>
<script src="js/chosen.jquery.min.js"></script>

<script src="js/angular.min.js"></script>

<!-- FastClick
<script src="../../plugins/fastclick/fastclick.min.js"></script>-->
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>

<script src="js/custom-script.js"></script>

<script src="js/immanucustom-script.js"></script>


<script src="js/jquery.raty.min.js"></script>

<!--time picker-->
<script src="js/bootstrap-timepicker.min.js"></script>
<!--[validation js]-->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="js/parsley.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--[validation js]-->
<script>
    $(function() {
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>
<!--time picker-->
<!--Cancellation Time Picker-->
<script>
    $(function() {
        $("#timepicker_cancellation").timepicker({
            showInputs: false,
            //defaultTime: false,
            showMeridian: false,


        });
    });
</script>
<!--time picker-->


<!-- CK Editor -->
<script>
    $(function() {
        //Initialize Select2 Elements
        $(".select2").select2();

        $('.datatable').DataTable({
            "ordering": $(this).data("ordering"),
            "order": [
                [0, "desc"]
            ]
        });

    });
</script>

<script>
    function doconfirm() {
        job = confirm("Are you sure to delete permanently?");
        if (job != true) {
            return false;
        }
    }
</script>
<script>
    //Multi Select Box
    $(document).ready(function() {

        $(".js-example-basic-multiple").select2();

    });
</script>
<script type="text/javascript">
</script>






</body>

</html>