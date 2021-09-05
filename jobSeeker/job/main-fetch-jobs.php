<?php

// Database
include '../../database/database.php';

$row = $_POST['row'];
$rowperpage = 3;

// Selecting Jobs
$query = 'SELECT * FROM job limit ' . $row . ',' . $rowperpage;
$result = mysqli_query($conn, $query);

$html = '';
while ($data = mysqli_fetch_assoc($result)) {
    $id = $data['id'];
    $user_id = $data['user_id'];
    $job_title = $data['job_title'];
    $job_email = $data['job_email'];
    $job_description = $data['job_description'];
    $job_short_description = $data['job_short_description'];

    $short_description = substr($job_short_description, 0, 160) . "...";

    $job_tags = $data['job_tags'];
    $job_experience = $data['job_experience'];
    $job_type = $data['job_type'];
    $job_apply_type = $data['job_apply_type'];
    $job_experience_level = $data['job_experience_level'];
    $job_external_url = $data['job_external_url'];
    $job_sector = $data['job_sector'];
    $job_salary_type = $data['job_salary_type'];
    $job_salary_currency = $data['job_salary_currency'];
    $job_salary_min = $data['job_salary_min'];
    $job_salary_max = $data['job_salary_max'];
    $job_career_level = $data['job_career_level'];
    $job_qualifications = $data['job_qualifications'];
    $job_preferred_sex = $data['job_preferred_sex'];
    $job_location = $data['job_location'];
    $job_deadline = $data['job_deadline'];
    $job_post_date = $data['job_post_date'];
    list($year, $month, $day) = explode("-", $data['job_deadline']);
    $monthNum  = 3;
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = $dateObj->format('F'); // March
    $job_status = $data['job_status'];

    $html .= '<div class="jobs card-body margin-top">';
    $html .= '<div class="card-header border-0  pb-0">';
    $html .= '<h3 class="fs-20 text-black mb-0"></h3>';
    $html .= '<div class="dropdown ml-auto">';
    $html .= '<div class="btn-link" data-toggle="dropdown">';
    $html .= '    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <circle fill="#000000" cx="12" cy="5" r="2"></circle>
        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
        <circle fill="#000000" cx="12" cy="19" r="2"></circle>
    </g>
</svg>';
    $html .= '</div>';
    $html .= '<div class="dropdown-menu dropdown-menu-right">';
    $html .= '<a class="dropdown-item text-black" href="javascript:;">Details</a>';
    $html .= '<a class="dropdown-item text-black" href="javascript:;">Details</a>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">';
    $html .= '<div class="mb-4 mb-md-0 mr-5">';
    $html .= '<div class="job-post-item-header d-flex align-items-center">';
    $html .= '<h2 class="mr-3 text-black h3">' . $job_title . '</h2>';
    $html .= '<div class="badge-wrap">';
    $html .= ' <span
        class="bg-warning  text-white badge  badge-sm py-2 px-3">' . $job_type . '</span>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<div class="job-post-item-body d-block d-md-flex">';
    $html .= '<p>.' . $short_description . '</p>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<div class="ml-auto d-flex">';
    $html .= '<a href="job-details.php?=job_id' . $id . '" class="btn btn-outline-warning btn-sm py-2 mr-1">Apply Job</a>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
}
echo $html;