<?php
// $pizza  = "piece1 piece2 . piece3 piece4 piece5. piece6";
// $pieces = explode(".", $pizza);

// foreach ($pieces as $key)
//     echo $key;
?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-1">Dashboard</h2>
                <p class="mb-0">Job Details</p>
            </div>
            <div class="d-none d-lg-flex align-items-center">
                <div class="text-right">
                    <h3 class="fs-20 text-black mb-0"><?php
                                                        date_default_timezone_set("Africa/Accra");
                                                        echo date("h:i:sa");
                                                        ?></h3>
                    <span class="fs-14"><?php
                                        echo "Today is " . date("Y/m/d") . "<br>";

                                        ?></span>
                </div>
                <a class="ml-4 text-black p-3 rounded border text-center width60" href="#">
                    <i class="las la-cog scale5"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="ml-0 ml-sm-4 ml-sm-0">
                        <div class="row">
                            <div class="col-12">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">Attach your resume</label>
                                            <input type="file" name="resume" id="resume" class="form-control">
                                            <small class="help-block text-danger"> Max file upload size 5mb, use only
                                                PDF or MS
                                                Word(doc, docx) file
                                                formats</small>
                                        </div>
                                    </div>



                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="">Cover letter (optional)</label>
                                            <textarea name="summernote" class="summernote form-control" id="" cols="30"
                                                rows="10"></textarea>
                                            <small class="help-block text-danger"> Please do not try to add images or
                                                any kind of attachments to the cover letter!</small>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">submit Application</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>