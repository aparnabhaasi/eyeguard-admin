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
        // Assuming 'user_id' is a column in your 'users' table
        $res = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $res['user_id'];

        // Redirect to index.php after successful login
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
