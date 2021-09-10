<script src="assets/vendor/global/global.min.js"></script>
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="assets/js/custom.min.js"></script>
<script src="assets/js/deznav-init.js"></script>
<script src="assets/vendor/select2/js/select2.full.min.js"></script>
<script src="assets/js/plugins-init/select2-init.js"></script>


<!-- Counter Up -->
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Apex Chart -->
<script src="assets/vendor/apexchart/apexchart.js"></script>

<!-- Chart piety plugin files -->
<script src="assets/vendor/peity/jquery.peity.min.js"></script>

<!-- Dashboard 1 -->
<script src="assets/js/dashboard/dashboard-1.js"></script>
<script src="assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="assets/js/plugins-init/sweetalert.init.js"></script>


<!-- Datatable -->
<script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins-init/datatables.init.js"></script>

<!-- Summernote -->
<script src="assets/vendor/summernote/js/summernote.min.js"></script>
<!-- Summernote init -->
<script src="assets/js/plugins-init/summernote-init.js"></script>
<!-- Main JavaScript -->
<script src="assets/js/main.js"></script>

<script src="assets/vendor/tagcomplete/tagcomplete.js"></script>

<!-- Javascript Maxlength Validation For Bio Description -->

<!-- Bootstrap Alert Automatic Fade In -->
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(800, 0).slideUp(800, function() {
        $(this).remove();
    });
}, 2000);
</script>

<script>
$(document).ready(function(e) {
    // For Job Type Select From
    $('#job_apply_type').on('change', function() {
        var category_id = this.value;
        console.log("it works");
        $.ajax({
            url: "job/select_job_type.php",
            type: "POST",
            data: {
                category_id: category_id
            },
            cache: false,



            success: function(result) {
                $("#job_type_list").html(result);
            }
        });
    });
    // For Salary Type Select From
    $('#job_salary_type').on('change', function() {
        var category_id = this.value;
        console.log("it works");
        $.ajax({
            url: "job/select_salary_type.php",
            type: "POST",
            data: {
                category_id: category_id
            },
            cache: false,



            success: function(result) {
                $("#job_salary_list").html(result);
            }
        });
    });

    // For Job Description
    $('.summernote').summernote();
    popover: {
        image: [

            // This is a Custom Button in a new Toolbar Area
            ['custom', ['examplePlugin']],
            ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
            ['float', ['floatLeft', 'floatRight', 'floatNone']],
            ['remove', ['removeMedia']]
        ]
    }
    // Job Deadline Date Limit
    var today = new Date().toISOString().split("T")[0];
    document.getElementsByName("job_deadline")[0].setAttribute("min", today);
});
</script>
<script>
$("#skill-list").select2({

    maximumSelectionLength: 15

});
</script>