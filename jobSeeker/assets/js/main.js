// Insert Dynamic Language👼

var i = 1;

$("#addLanguage").click(function () {
  i++;
  if (i < 6) {
    console.log(i);
    $("#dynamic_field").append(
      '<tr id="row' +
        i +
        '"><td><input type="text" name="languageName[]" placeholder="enter language" class="form-control name_list" required/></td><td>  <div class="form-groupp"><select name="languageStatus[]" id="" class="form-control"><option value="Expert">Expert</option><option value="Fluent">Fluent</option><option value="Intermediate">Intermediate</option><option value="Beginner">Beginner</option></select></div></td><td><button type="button" name="remove" id="' +
        i +
        '" class="btn btn-danger btn-sm btn_remove">X</button></td></tr>'
    );
  }
});

$(document).on("click", ".btn_remove", function () {
  var button_id = $(this).attr("id");
  i = i - 1;
  $("#row" + button_id + "").remove();
  console.log(i);
});

$("#submit").on("click", function () {
  var formdata = $("#add-language").serialize();
  console.log(formdata);
  $.ajax({
    url: "action/addLanguage.php",
    type: "POST",
    data: formdata,
    processData: false,
    cache: false,
    success: function (result) {
      if (result == "invalid") {
        // invalid file format.
        $("#err").html("Invalid File !").fadeIn();
      } else {
        swal(
          "Good job!",
          "Your Language Successfully Inserted!",
          "success"
        ).then(function () {
          //  location.reload();
        });
        $(".bd-example-modal-lg").modal("hide");
        // alert(result);
        $("#add-language")[0].reset();
      }
    },
  });
});

// 🚀 Insert Dynamic Social Media 🍦
var k = 1;

$("#addSocialMediaBtn").click(function () {
  k++;
  if (k < 6) {
    console.log(k);
    $("#social_media").append(
      '<tr id="row' +
        i +
        '"> <div class="form-group"><td><input type="text" class="form-control" name="socialMediaUrl[]"placeholder="url" class="form-control name_list" required /></td></div><div class="form-group"><td><select name="socialMedia[]" id="" class="form-control"><option value="FaceBook">FaceBook</option><option value="InstaGram">InstaGram</option><option value="YouTube">YouTube</option></select></td></div><td><button type="button" name="remove" id="' +
        i +
        '"class="btn btn-danger btn-sm btn_remove_social">X</button></td></tr>'
    );
  }
});

$(document).on("click", ".btn_remove_social", function () {
  var button_id = $(this).attr("id");
  i = i - 1;
  $("#row" + button_id + "").remove();
  console.log(i);
});

$("#addSocialBtn").on("click", function () {
  var formdata = $("#add-social").serialize();
  console.log(formdata);
  $.ajax({
    url: "action/addSocialMedia.php",
    type: "POST",
    data: formdata,
    processData: false,
    cache: false,
    success: function (result) {
      if (result == "invalid") {
        // invalid file format.
        $("#err").html("Invalid File !").fadeIn();
      } else {
        swal(
          "Good job!",
          "You Social Media Successfully Inserted!",
          "success"
        ).then(function () {
          //  location.reload();
        });
        $(".add-social-media").modal("hide");
        // alert(result);
        $("#add-social")[0].reset();
      }
    },
  });
});

// 🚀 Insert Dynamic Certificate  🍦
var l = 1;

$("#addCertificateBtn").click(function () {
  l++;
  if (l < 6) {
    console.log(l);
    $("#addCertificateTable").append(
      '<tr id="row' +
        i +
        '">  <div class="form-group"><td><input type="text" class="form-control" name="certificateName[]" placeholder="certificate Name" class="form-control name_list" required /></td></div> <div class="form-group"><td><input type="text" class="form-control" name="certificateLink[]" placeholder="certificate link" class="form-control name_list" required /></td></div><td><button type="button" name="remove" id="' +
        i +
        '"class="btn btn-danger btn-sm btn_remove_certificate">X</button></td></tr>'
    );
  }
});

$(document).on("click", ".btn_remove_certificate", function () {
  var button_id = $(this).attr("id");
  i = i - 1;
  $("#row" + button_id + "").remove();
  console.log(i);
});

$("#addCertificate").on("click", function () {
  var formdata = $("#add-certificate").serialize();
  console.log(formdata);
  $.ajax({
    url: "action/addCertificate.php",
    type: "POST",
    data: formdata,
    processData: false,
    cache: false,
    success: function (result) {
      if (result == "invalid") {
        // invalid file format.
        $("#err").html("Invalid File !").fadeIn();
      } else {
        swal(
          "Good job!",
          "You Social Media Successfully Inserted!",
          "success"
        ).then(function () {
          //  location.reload();
        });
        $(".add-certificate").modal("hide");
        // alert(result);
        $("#add-certificate")[0].reset();
      }
    },
  });
});

$("#sendOne").on("click", function () {
  // var formdata = $("#add-education").serialize();
  console.log("formdata");
});
