<?php
session_start();
include 'connection.php';

if (isset($_POST['submit'])) {
    // Extracting form data
    extract($_POST);

    // Assuming $mid, $product, $price, $user_id, and other variables are already defined
    // ...

    // Handling the prescription type
$user_id=$_SESSION['user_id'];
    $prescription = '';
    if ($prescription_type == 'text') {
        $prescription = $text_prescription;
    } elseif ($prescription_type == 'image') {
        // Handle image upload, adjust the code based on your needs and configuration
        if (isset($_FILES['image_prescription']) && $_FILES['image_prescription']['error'] == 0) {
            // Example: move_uploaded_file($_FILES['image_prescription']['tmp_name'], 'upload_directory/' . $_FILES['image_prescription']['name']);
            $prescription = 'upload_directory/' . $_FILES['image_prescription']['name'];
        }
    }
    $mid= $_POST['mid'];
    // Insert into user_address table
    $q = "INSERT INTO user_address (full_name, mobile_number, address, user_id, date, prescription) VALUES ('$fname', '$phone', '$address', '$user_id', CURDATE(), '$prescription')";
    $address_id = insert($q);
    $q2="insert into tbl_order values(null,'$mid',curdate(),'$address_id','pending')";
    $q1=insert($q2);
    // Assuming redirect function is defined
    redirect('userindex.php');
} else {
    // Handle the case when the form is not submitted
    // ...
}
?>
