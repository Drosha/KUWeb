<?php 

    $to = "info@kitchen-update.com"; // to email
    $subject = "Form Request";

    $data = filter_var_array($_POST, FILTER_SANITIZE_EMAIL | FILTER_SANITIZE_STRING);

    //form data
    $first_name = $data['name'];
    $last_name = $data['surname'];
    $phone = $data['phone'];
    $from = $data['email'];
    $sbj = $data['need'];
    $msg = $data['message'];
    $city = $data['city'];
    $zip = $data['zip'];

    $message = "Name: $last_name,  $first_name. Message: $msg  \n\n Info: $from Phone: $phone Subj: $sbj \n\n $city - $zip"; 

    //send email
    if (
        !empty($first_name) &&
        !empty($last_name) &&
        !empty($phone) &&
        !empty($from) &&
        !empty($sbj) &&
        !empty($msg) &&
        !empty($city) &&
        !empty($zip)
    ) {
        mail($to, $subject, $message);
    }

    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    
    echo '<script language="javascript">';
    echo 'alert("Thank you. We will contact you shortly.")';
    echo '</script>';
    
    echo '<script language="javascript">';
    echo 'window.history.back()';
    echo '</script>';

    exit;
?>