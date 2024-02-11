<?php
session_start(); // Don't forget to start the session

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "eyeglass");

    // check if credentials are okay, and email is verified
    $sql = "SELECT * FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $res = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $res['user_id'];
        $_SESSION['name'] = $res['name'];
    
        // Debug statement
        echo 'Name in session: ' . $_SESSION['name'];
    
        header('Location: userindex.php');
        exit;
    }
    

    if (mysqli_num_rows($result) == 0) {
        die("Email not found.");
    }

    $user = mysqli_fetch_object($result);

    if (!password_verify($password, $user->password)) {
        die("Password is not correct");
    }

    if ($user->email_verified_at == null) {
        die("Please verify your email <a href='email-verification.php?email=" . $email . "'>from here</a>");
    }

    echo "<p>Your login logic here</p>";
    exit();
}
?>
