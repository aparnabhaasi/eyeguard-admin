<?php 
include 'publicheader.php';

if (isset($_POST['submit'])) {
    extract($_POST);

    $q = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $res = select($q);

    if ($res && count($res) > 0) {
        // Assuming 'user_id' is a column in your 'users' table
        $_SESSION['user_id'] = $res[0]['user_id'];

        // Redirect to index.php after successful login
        redirect('userindex.php');
        exit;
    } else {
        echo "<script>alert('Invalid username and password.');</script>";
    }
} else {
    echo "<script>alert('Invalid request.');</script>";
}
?>
