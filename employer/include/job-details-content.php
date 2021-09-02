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
                                <div class="right-box-padding">
                                    <div class="toolbar mb-4" role="toolbar">
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light px-3"><i
                                                    class="fa fa-heart"></i></button>
                                            <button type="button" class="btn btn-primary light px-3"><i
                                                    class="fa fa-exclamation-circle"></i></button>
                                            <button type="button" class="btn btn-primary light px-3"><i
                                                    class="fa fa-trash"></i></button>
                                        </div>


                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light dropdown-toggle v"
                                                data-toggle="dropdown">More <span class="caret m-l-5"></span>
                                            </button>
                                            <div class="dropdown-menu"> <a class="dropdown-item"
                                                    href="javascript: void(0);">saved jobs</a> <a class="dropdown-item"
                                                    href="javascript: void(0);">report</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="read-content">
                                        <div class="media pt-3">
                                            <img class="mr-2 rounded" width="50" alt="image"
                                                src="assets/images/avatar/1.jpg">
                                            <div class="media-body mr-2">
                                                <h5 class="text-primary mb-0 mt-1">Job by Dashen Bank S.C</h5>
                                                <p class="mb-0 text-danger">Dead line 20 Aug 2021</p>
                                            </div>
                                            <span>share</span>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_SERVER['PHP_SELF'] ?>"
                                                class="btn btn-primary px-3 light"><i class="fa fa-facebook"></i> </a>



                                            <a rel="nofollow"
                                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $_SERVER['PHP_SELF'] ?>"
                                                class="btn btn-primary px-3 light ml-2"><i class="fa fa-linkedin"></i>
                                            </a>

                                            <a rel="nofollow"
                                                href="https://telegram.me/share/url?url=<?php echo $_SERVER['PHP_SELF'] ?>"
                                                rel="nofollow" class="btn btn-primary px-3 light ml-2"><i
                                                    class="fa fa-telegram"></i></a>
                                        </div>
                                        <hr>
                                        <div class="media mb-2 mt-3">
                                            <div class="media-body"><span class="pull-right">07:23 AM</span>
                                                <h5 class="my-1 text-primary">Senior Officer, Learning & Development
                                                </h5>
                                                <p class="read-content-email">
                                                    company email, <strong>info@example.com</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="read-content-body">
                                            <div class="basic-list-group col-md-12 col-sm-12">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        Category <h6 class="badge badge-xl light badge-warning">
                                                            Accounting and Finance, Banking and Insurance</h6>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Location <span class="badge badge-primary badge-pill">Addis
                                                            Abeba</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Career Level: <span class="badge badge-primary badge-pill">Full
                                                            time</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Salary <span class="badge badge-primary badge-pill"> As per the
                                                            Bank`s attractive salary scale</span>
                                                    </li>

                                                </ul>
                                            </div>

                                            <h3 class="my-3 text-primary">
                                                Job Description
                                            </h3>
                                            <p class="mb-2">The Senior Officer, Learning and Development is responsible
                                                for assessing current and future training and development needs of the
                                                Bank. The job holder prioritizes needs, prepares training and
                                                development action plan and implements same upon securing approval.
                                                He/she also designs and recommends training programs and training
                                                methods, coordinates and organizes training and evaluates the training
                                                outcome and impact.
                                            </p>
                                            <h3 class="my-3 text-primary">
                                                Job Requirements
                                            </h3>
                                            <p class="mb-2">The Senior Officer, Learning and Development is responsible
                                                <br>
                                                for assessing current and future training and development needs of the
                                                Bank. <br> The job holder prioritizes needs, prepares training and
                                                development action plan and implements same upon securing approval. <br>
                                                He/she also designs and recommends training programs and training
                                                methods, coordinates and organizes training and evaluates the training
                                                outcome and impact.
                                            </p>

                                            <div class="profile-skills mb-5">
                                                <h4 class="text-primary mb-2">Skills 💪</h4>
                                                <a href="javascript:void()"
                                                    class="btn btn-primary light btn-xs mb-1">Java</a>
                                                <a href="javascript:void()"
                                                    class="btn btn-primary light btn-xs mb-1">Wordpress</a>
                                                <a href="javascript:void()"
                                                    class="btn btn-primary light btn-xs mb-1">Photoshop</a>

                                            </div>

                                            <hr>
                                        </div>
                                        <div class="read-content-attachment">
                                            <h6><i class="fa fa-download mb-2"></i> Attachments
                                                <span>(download)</span>
                                            </h6>
                                            <div class="row attachment">

                                                <div class="col-auto">
                                                    <a href="javascript:void()" class="text-muted">Attachment File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary " type="button">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>