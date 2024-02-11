<?php
include 'publicheader.php';

if (isset($_POST["verify_email"])) {
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];

    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "eyeglass");

    // mark email as verified
    $sql = "UPDATE users SET verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) == 0) {
        die("Verification code failed.");
    }

    // Use JavaScript to redirect to the login page
    echo "<script>window.location.href = 'publicheader.php#login';</script>";
    exit();
}
?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="text-left">

    <div class="container">
        <h5 class="text-center mb-4">Enter Verification Code</h5>
        <div class="login p-5 bg-dark mx-auto mw-50">
            <form method="POST">
                <div class="form-group">

                    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
                    <input type="text" name="verification_code" class="form-control"
                        placeholder="Enter verification code" required />
                    <div>

                        <input type="submit" name="verify_email" class="btn  btn-primary" style="margin-top:20px"
                            value="Verify Email">
                    </div>
            </form>

        </div>
    </div>

</div>

</body>

</html>
