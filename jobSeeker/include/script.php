<script src="assets/vendor/global/global.min.js"></script>
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="assets/js/custom.min.js"></script>
<script src="assets/js/deznav-init.js"></script>


<!-- Counter Up -->
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Apex Chart -->
<script src="assets/vendor/apexchart/apexchart.js"></script>

<!-- Chart piety plugin files -->
<script src="assets/vendor/peity/jquery.peity.min.js"></script>

<!-- Dashboard 1 -->
<script src="assets/js/dashboard/dashboard-1.js"></script>

<!-- Datatable -->
<script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins-init/datatables.init.js"></script>
<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<script type='text/javascript'>
    function cover_image(event) {

        var reader = new FileReader();
        reader.onload = function() {
            var output = output = document.getElementById('img');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>