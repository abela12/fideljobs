<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap"
        rel="stylesheet" />
    <!-- Line Awesome CDN Link -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .main-container {

        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .main-container h2 {
        margin: 0 0 80px 0;
        color: #8373e6;
        font-size: 30px;
        font-family: "Raleway", sans-serif;
        font-weight: 400;
    }

    .main-container p {
        width: 100%;

        margin: 0 0 20px 0;
        color: #8373e6;
        font-size: 15px;
        font-family: "Raleway", sans-serif;
        font-weight: 200;
    }

    .radio-buttons {
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }

    .custom-radio input {
        display: none;
    }

    .radio-btn {
        margin: 10px;
        width: 180px;
        height: 200px;
        border: 3px solid transparent;
        display: inline-block;
        border-radius: 10px;
        position: relative;
        text-align: center;
        box-shadow: 0 0 20px #c3c3c367;
        cursor: pointer;
    }

    .radio-btn>i {
        color: #ffffff;
        background-color: #8373e6;
        font-size: 20px;
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%) scale(4);
        border-radius: 50px;
        padding: 3px;
        transition: 0.2s;
        pointer-events: none;
        opacity: 0;
    }

    .radio-btn .hobbies-icon {
        width: 80px;
        height: 80px;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .radio-btn .hobbies-icon i {
        color: #8373e6;
        line-height: 80px;
        font-size: 60px;
    }

    .radio-btn .hobbies-icon h3 {
        color: #8373e6;
        font-family: "Raleway", sans-serif;
        font-size: 16px;
        font-weight: 400;
        text-transform: uppercase;
    }

    .custom-radio input:checked+.radio-btn {
        border: 3px solid #8373e6;
    }

    .custom-radio input:checked+.radio-btn>i {
        opacity: 1;
        transform: translateX(-50%) scale(1);
    }

    .bootstrap-select .bs-ok-default::after {
        width: 0.3em;
        height: 0.6em;
        border-width: 0 0.1em 0.1em 0;
        transform: rotate(45deg) translateY(0.5rem);
    }

    .btn.dropdown-toggle:focus {
        outline: none !important;
    }
    </style>
</head>
<?php include 'database/database.php' ?>
<?php
if (isset($_POST['send'])) {
    echo $radio = $_POST['radio'];
    echo "<br>";
    echo $school = $_POST['school'];
    echo $degree = $_POST['degree'];
    echo $areaOfStudy = $_POST['areaOfStudy'];
}

?>

<body>
    <div class="container">
        <div class="main-container">
            <h2>What is your level of experience in this field? <i class="fas fa-camera"></i>
                <i class="las la-car-alt"></i>
            </h2>
            <form action="demo.php" method="post">
                <div class="radio-buttons">
                    <label class="custom-radio">
                        <input type="radio" name="radio" value="entery" checked />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">
                                <i class="las la-motorcycle"></i>
                                <h3>Entery Level</h3>
                                <!-- <p> i am relatively new</p> -->
                            </div>
                        </span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="radio" value="Intermediate" />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">
                                <i class="las la-car"></i>

                                <h3>Intermediate

                                </h3>
                                <!-- <p> I have substantial experience</p> -->
                            </div>
                        </span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="radio" value="expert" />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">
                                <i class="las la-truck-monster"></i>
                                <h3>Expert</h3>
                                <!-- <p> I have comprehensive and deep expertise in this field</p> -->

                            </div>
                        </span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="radio" />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">
                                <i class="las la-user-secret"></i>
                                <h3>
                                    Others


                                </h3>
                            </div>
                        </span>
                    </label>
                </div>

                <div class="card my-3">
                    <div class="card-body">
                        <div class="card-title">Title & Overview</div>
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control"
                                placeholder="Example: Web,Mobile & Software Dev">
                        </div>
                        <div class="form-group">
                            <label for="overview">Overview</label>
                            <textarea class="form-control" name="overview" id="overview"
                                placeholder="Highlight your top skills,experience, adn interests. This is one of the first things clients will see on your profile"
                                cols="15" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Add Education</div>
                        <div class="form-group">
                            <label for="school">School</label>
                            <input type="text" name="school" id="school" class="form-control">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Write Summary about yourself?</div>
                        <div class="form-group">

                            <textarea class="form-control" name="summary" id="summary" cols="30" rows="10"></textarea>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Expertise</div>
                        <div class="form-group">

                            <label for="skill"></label>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Add employment</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="employmentLocation">City</label>
                                    <input type="text" class="form-control" name="employmentLocation"
                                        id="employmentLocation" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="employmentTitle">Title</label>
                                    <input type="text" class="form-control" name="employmentTitle"
                                        id="employmentLocation" placeholder="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mx-auto">
                    <label class="text-white mb-3 lead">Where do you live?</label>

                    <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm " class="selectpicker w-100">
                        <option>Addis Abeba</option>
                        <option value="">Bole</option>
                        <option value="">Arada</option>
                    </select><!-- End -->
                </div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Contact</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="form-group">
                            <label for="degree">Degree(Optional)</label>
                            <input type="text" class="form-control" name="degree" id="degree" placeholder="EX:Bachelor">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <div class="row">
                            <h3>What's your expected graduation date?</h3>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="Month">Month</label>
                                    <input type="text" name="month" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <input type="text" name="year" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <h3>What's your University, Field of study and Highest education Level?</h3>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="highestEducationLevel">Highest Education Level</label>
                                <input type="text" class="form-control" name="highestEducationLevel"
                                    id="highestEducationLevel" placeholder="Ex: Computer Science">

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fieldOfStudy">Field Of Study</label>
                                <select class="form-control" name="fieldOfStudy" id="fieldOfStudy">
                                    <option value="Computer Science">Computer Science</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        ...
                    </div>
                </div>
                <button class="btn btn-primary mt-4" type="submit" name="send">Send</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    $(function() {
        $('.selectpicker').selectpicker();
    });
    </script>
</body>

</html>