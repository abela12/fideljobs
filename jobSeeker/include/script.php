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
                $("#loader").show();
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
                    $("#edit-bio-modal").modal('hide');
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
</script>
<script>
$(document).ready(function() {

    //Main Load more jobs
    $('.load-more').click(function() {
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var rowperpage = 3;
        row = row + rowperpage;

        if (row <= allcount) {
            $("#row").val(row);

            $.ajax({
                url: 'job/main-fetch-jobs.php',
                type: 'post',
                data: {
                    row: row
                },
                beforeSend: function() {
                    $(".load-more").text("Loading...");
                },
                success: function(response) {

                    // Setting little delay while displaying new jobs
                    setTimeout(function() {
                        // appending posts after last job with class="jobs"
                        $(".jobs:last").after(response).show().fadeIn("slow");

                        var rowno = row + rowperpage;

                        // checking row value is greater than allcount or not
                        if (rowno > allcount) {

                            // Change the text and background
                            $('.load-more').text("Hide");
                            $('.load-more').css("background", "darkorchid");
                        } else {
                            $(".load-more").text("Load more");
                        }
                    }, 2000);

                }
            });
        } else {
            $('.load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='jobs' element after 3 element
                $('.jobs:nth-child(3)').nextAll('.jobs').remove();

                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $('.load-more').text("Load more");
                $('.load-more').css("background", "#309255");

            }, 2000);


        }

    });
    //My Feed Load more jobs
    $('.feed-load-more').click(function() {
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var rowperpage = 3;
        row = row + rowperpage;

        if (row <= allcount) {
            $("#row").val(row);

            $.ajax({
                url: 'job/my-feed-jobs.php',
                type: 'post',
                data: {
                    row: row
                },
                beforeSend: function() {
                    $(".feed-load-more").text("Loading...");
                },
                success: function(response) {

                    // Setting little delay while displaying new jobs
                    setTimeout(function() {
                        // appending posts after last job with class="jobs"
                        $(".jobs:last").after(response).show().fadeIn("slow");

                        var rowno = row + rowperpage;

                        // checking row value is greater than allcount or not
                        if (rowno > allcount) {

                            // Change the text and background
                            $('.feed-load-more').text("Hide");
                            $('.feed-load-more').css("background", "darkorchid");
                        } else {
                            $(".feed-load-more").text("Load more");
                        }
                    }, 2000);

                }
            });
        } else {
            $('.feed-load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='jobs' element after 3 element
                $('.jobs:nth-child(3)').nextAll('.jobs').remove();

                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $('.feed-load-more').text("Load more");
                $('.feed-load-more').css("background", "#309255");

            }, 2000);


        }

    });

});
$("#skill-list").select2({

    maximumSelectionLength: 15

});
</script>