<?php 
include 'publicheader.php';



if (isset($_POST['submit'])) 
{
  extract($_POST);
  $q0="SELECT * FROM `users` WHERE email='$email'";
  $q01=select($q0);
  if (sizeof($q01)>0) 
  {
    alert("The email you entered already Exists. Please choose a different Username.");
    return redirect("publicindex.php");
  }
  else
  {
  $q="insert into users values(null,'$name','$phone','$email','$password')";
  insert($q);
  
   return redirect ('publicindex.php');
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