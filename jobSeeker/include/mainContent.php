<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-1">Dashboard</h2>
                <p class="mb-0">Welcome to ፊደል Jobs Dashboard</p>
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
        <div class="row">
            <div class="col-lg-8 col-xxl-12">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card widget-stat ">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="fs-18 mb-2 wspace-no">Total Jobs</p>
                                        <h1 class="fs-36 font-w600 text-black mb-0">260</h1>
                                    </div>
                                    <span class="ml-3 bg-primary text-white">
                                        <i class="flaticon-381-promotion"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card widget-stat">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="fs-18 mb-2 wspace-no">Total Apply Jobs </p>
                                        <h1 class="fs-36 font-w600 d-flex align-items-center text-black mb-0">
                                            65</h1>
                                    </div>
                                    <span class="ml-3 bg-warning text-white">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <?php require 'job/main-job-list-content.php' ?>
        </div>
    </div>
</div>
</div>