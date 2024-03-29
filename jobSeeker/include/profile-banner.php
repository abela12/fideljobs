<?php

$jobseeker_id  = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM `jobseekerbio` WHERE `jobseeker_id` = '$jobseeker_id'");
$num_row = mysqli_num_rows($sql);
if ($num_row > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        $coverImage = $row['coverImage'];
        $profileImage = $row['profileImage'];
        $Title = $row['Title'];
        $aboutYourSelf = $row['aboutYourSelf'];
?>

<div class="profile card card-body px-3 pt-3 pb-0">

    <div class="profile-head">
        <div class="photo-content">
            <div class="cover-photo" style="background: url(./<?php echo htmlspecialchars($coverImage) ?>);"></div>
        </div>
        <div class="profile-info">
            <div class="profile-photo">
                <img src="./<?php echo htmlspecialchars($profileImage) ?>" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="profile-details">
                <div class="profile-name px-3 pt-2">
                    <h4 class="text-primary mb-0">Avel </h4>
                    <p><?php echo htmlspecialchars($Title) ?></p>
                </div>
                <div class="profile-email px-2 pt-2">
                    <h4 class="text-muted mb-0">avel@gmail.com</h4>
                    <p>Email</p>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                            height="18px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                            </g>
                        </svg></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>

                        <li class="dropdown-item" data-toggle="modal" data-target=".update-bio"><i
                                class="fa fa-camera text-primary mr-2"></i> Update Bio
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    }
} else {
    ?>
<div class="profile card card-body px-3 pt-3 pb-0">

    <div class="profile-head">
        <div class="photo-content">
            <div class="cover-photo" style="background: url(./assets/images/profile/profile.png);"></div>
        </div>
        <div class="profile-info">
            <div class="profile-photo">
                <img src="./assets/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="profile-details">
                <div class="profile-name px-3 pt-2">
                    <h4 class="text-primary mb-0">Avel Coder</h4>
                    <p><?php echo $_SESSION['id'] ?></p>
                </div>
                <div class="profile-email px-2 pt-2">
                    <h4 class="text-muted mb-0"><?php echo $_SESSION['email'] ?></h4>
                    <p>Email</p>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                            height="18px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                            </g>
                        </svg></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>

                        <li class="dropdown-item" data-toggle="modal" data-target=".edit-bio-modal"><i
                                class="fa fa-camera text-primary mr-2"></i> Edit Bio
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
?>