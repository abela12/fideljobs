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
<script src="assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="assets/js/plugins-init/sweetalert.init.js"></script>


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
<script src="assets/vendor/tagcomplete/tagcomplete.js"></script>

<!-- Javascript Maxlength Validation For Bio Description -->
<script type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    } else {
        limitCount.value = limitNum - limitField.value.length;
    }
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
<script>
$(document).ready(function(e) {
    $("#form").on('submit', (function(e) {
        e.preventDefault();
        console.log("hello");
        $.ajax({
            url: "action.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                //$("#preview").fadeOut();
                $("#err").fadeOut();
            },
            success: function(data) {
                if (data == 'invalid') {
                    // invalid file format.
                    $("#err").html("Invalid File !").fadeIn();
                } else {
                    swal("Good job!", "You bio successfully registered!", "success")
                        .then(
                            function() {
                                location.reload();
                            });
                    $("#add").modal('hide');

                    // view uploaded file.
                    $("#preview").html(data).fadeIn();
                    $("#form")[0].reset();

                }
            },
            error: function(e) {
                $("#err").html(e).fadeIn();
            }
        });
    }));
    $("#updateForm").on('submit', (function(e) {
        e.preventDefault();
        console.log("hello");
        $.ajax({
            url: "updateBio.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                //$("#preview").fadeOut();
                $("#err").fadeOut();
            },
            success: function(data) {
                if (data == 'invalid') {
                    // invalid file format.
                    $("#err").html("Invalid File !").fadeIn();
                } else {
                    swal("Good job!", "You bio successfully registered!", "success")
                        .then(
                            function() {
                                location.reload();
                            });
                    $(".update-bio").modal('hide');

                    // view uploaded file.
                    $("#preview").html(data).fadeIn();
                    $("#form")[0].reset();

                }
            },
            error: function(e) {
                $("#err").html(e).fadeIn();
            }
        });
    }));
});
// $(document).ajaxStop(function() {
//     window.location.reload();
// });
</script>
<!-- <script type="text/javascript">
$(document).ready(function() {


    $('#btnadd').click(function(e) {
        e.preventDefault();
        console.log("button clicked");
        // let fname = $("#fname").val();
        // let lname = $("#lname").val();
        // let image = "hello";

        // mydata = {
        //     fName: fname,
        //     lName: lname,
        //     Image: image
        // };
        // console.log(mydata);
        $.ajax({
            url: "data.php",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                console.log(data);
            }
        });

    });

    //insert ajax request data
    $("#submit").click(function(e) {
        if ($("#formData")[0].checkValidity()) {
            e.preventDefault();

            $.ajax({
                url: "action.php",
                type: "POST",
                data: $("#formData").serialize() + "&action=insert",
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'profile added successfully',
                    });
                    $("#add").modal('hide');
                    $("#formData")[0].reset();

                }
            });
        }
    });







});
</script> -->