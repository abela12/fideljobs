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
<!-- Image Live Preview -->
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
    //insert ajax request data
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
    //Update ajax request data
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
// Insert Dynamic Language👼

var i = 1;

$("#addLanguage").click(function() {
    i++;
    if (i < 6) {
        console.log(i);
        $('#dynamic_field').append('<tr id="row' + i +
            '"><td><input type="text" name="languageName[]" placeholder="enter language" class="form-control name_list" required/></td><td>  <div class="form-groupp"><select name="languageStatus[]" id="" class="form-control"><option value="Expert">Expert</option><option value="Fluent">Fluent</option><option value="Intermediate">Intermediate</option><option value="Beginner">Beginner</option></select></div></td><td><button type="button" name="remove" id="' +
            i + '" class="btn btn-danger btn-sm btn_remove">X</button></td></tr>');
    }
});


$(document).on('click', '.btn_remove', function() {
    var button_id = $(this).attr("id");
    i = i - 1;
    $('#row' + button_id + '').remove();
    console.log(i);

});

$("#submit").on('click', function() {
    var formdata = $("#add-language").serialize();
    console.log(formdata);
    $.ajax({
        url: "action/addLanguage.php",
        type: "POST",
        data: formdata,
        processData: false,
        cache: false,
        success: function(result) {
            if (result == 'invalid') {
                // invalid file format.
                $("#err").html("Invalid File !").fadeIn();
            } else {


                swal("Good job!", "You Language Successfully Inserted!", "success")
                    .then(
                        function() {
                            //  location.reload();
                        });
                $(".bd-example-modal-lg").modal('hide');
                // alert(result);
                $("#add-language")[0].reset();
            }
        }
    });
});
</script>