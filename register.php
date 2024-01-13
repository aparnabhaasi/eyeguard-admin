<?php 
include 'publicheader.php';
//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
 
    //Load Composer's autoloader
    require 'vendor/autoload.php';
 


if (isset($_POST['submit'])) 
{
  extract($_POST);
  $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
		$phone = $_POST["phone"];

  $mail = new PHPMailer(true);
 
        try {
            //Enable verbose debug output
            $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
 
            //Send using SMTP
            $mail->isSMTP();
 
            //Set the SMTP server to send through
            $mail->Host = 'smtp.gmail.com';
 
            //Enable SMTP authentication
            $mail->SMTPAuth = true;
 
            //SMTP username
            $mail->Username = 'eyeguard.in@gmail.com';
 
            //SMTP password
            $mail->Password = 'dlmo cjsc mspg ewkp';
 
            //Enable TLS encryption;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 
            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->Port = 587;
 
            //Recipients
            $mail->setFrom('eyeguard.in@gmail.com', 'www.eyeguard.com');
 
            //Add a recipient
            $mail->addAddress($email, $name);
 
            //Set email format to HTML
            $mail->isHTML(true);
 
            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
 
            $mail->Subject = 'Email verification';
            $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
 
            $mail->send();
            // echo 'Message has been sent';
 
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
 
            $conn = mysqli_connect("localhost", "root", "", "eyeglass");
 
            // insert in users table
            $sql = "INSERT INTO users(name,phone, email, password, verification_code, verified_at) VALUES ('" . $name . "', '" . $phone . "', '" . $email . "', '" . $encrypted_password . "', '" . $verification_code . "', 'pending')";
            mysqli_query($conn, $sql);
 
          
			redirect("email-verification.php?email=" . $email);
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>

<div class="text-left">
						
						<div class="container">
							<h5 class="text-center mb-4">Register Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-50">
								<form action="" method="post">
									<div class="form-group">
										<label class="mb-2">Name</label>
										<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										
									</div>
                  <div class="form-group">
										<label class="mb-2">Phone</label>
										<input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										
									</div>
                  <div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									
									<button type="submit" name="submit" class="btn btn-primary submit mb-4">Sign Up</button>
									<div class="form-check mb-2">
										<!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
										<!-- <a href="register.php"><label class="form-check-label" for="exampleCheck1">Dont have an account?</label></a> -->
									</div>
								</form>
							</div>
							<!---->
						</div>