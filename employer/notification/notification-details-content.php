<?php
if (isset($_GET['notificationId'])) {
    $notificationId = intval($_GET['notificationId']);
}


?>


<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header  border-0 pb-0">
            <h4 class="card-title">Notifications</h4>
        </div>
        <?php
        // select employer notification
        $select_notification = mysqli_query($conn, "SELECT * FROM `notification` WHERE `id` = '$notificationId'");
        $notification_num_count = mysqli_num_rows($select_notification);
        if ($notification_num_count > 0) {
            $count = $notification_num_count;
        } else {
            $count = 0;
        }
        ?>

        <div class="card-body">
            <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height270">
                <ul class="timeline">
                    <?php
                    if ($count > 0) {

                        while ($data = mysqli_fetch_assoc($select_notification)) {
                            $id = $data['id'];
                            $post_time = $data['date'];
                            $message = $data['message'];
                            $title = $data['title'];


                            $time = new DateTime($post_time);
                            $date = $time->format('n.j.Y');
                            $time = $time->format('H:i');


                    ?>
                    <li>
                        <div class="timeline-badge primary"></div>

                        <a class="timeline-panel text-muted" href="javascript:void()">
                            <span> <strong><?php echo timePosted($post_time) ?></strong></span>
                            <h3><?php echo $title ?></h3>
                            <h6 class="mb-0"><?php echo htmlspecialchars($message) ?> </h6>
                        </a>
                    </li>

                    <?php
                        }
                    } else {
                        echo "No Notification";
                    }

                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>