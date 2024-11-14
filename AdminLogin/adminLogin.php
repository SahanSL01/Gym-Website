<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
	<link rel="stylesheet" href="adminLogin.css">


</head>

<body>


	<!-- HEADER -->
	<header class="header" id="home">
		<div class="container">
			<nav class="header-navigation" aria-label="navigation">
				<div class="logo"><span class="yellow">Universal </span>| Fitness</div>

				<img src="img/nav-icon.svg" alt="navigation icon" class="nav-icon" width="30" height="30" />

				<ul>
					<li>
						<a href="../index.php">Home</a>
					</li>
					<li>
						<a href="../AboutUs/About us second part.html">About</a>
					</li>
					<li>
						<a href="../index.php#courses">Courses</a>
					</li>
					<li>
						<a href="../index.php#trainers">Trainers</a>
					</li>
					<li>
						<a href="../index.php#contact">Contact</a>
					</li>
					<li class="">
						<a href="../Member/Become Member.php">Membership</a>
					</li>
					<li class="member">
						<a href="">Admin</a>
					</li>

				</ul>
			</nav>
		</div>
	</header>


    
	<!--=============================Sign Up html Css============================ -->


	<div class="container1" id="container1">
		<div class="form-container sign-up-container">
			<form action="signUp.php" method="post">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-instagram"></i></a>
				</div>
				<span class="loginSpan">or use your email for registration</span>
				<input type="text" class="inputLogin" placeholder="Name" name="name"/>
				<input type="email" class="inputLogin" placeholder="Email" name="email" />
				<input type="password" class="inputLogin" placeholder="Password" name="pwd" />
				<button name="submit" type="submit">Sign Up</button>
			</form>
		</div>
	<!--=============================Sign Up PHP============================ -->



	<?php
	if (isset($_POST["submit"])) {
	   $fullName = $_POST["fullname"];
	   $email = $_POST["email"];
	   $password = $_POST["password"];
	   $passwordRepeat = $_POST["repeat_password"];
	   
	   $passwordHash = password_hash($password, PASSWORD_DEFAULT);

	   $errors = array();
	   
	   if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
		array_push($errors,"All fields are required");
	   }
	   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		array_push($errors, "Email is not valid");
	   }
	   if (strlen($password)<8) {
		array_push($errors,"Password must be at least 8 charactes long");
	   }
	   if ($password!==$passwordRepeat) {
		array_push($errors,"Password does not match");
	   }
	   require_once "database.php";
	   $sql = "SELECT * FROM users WHERE email = '$email'";
	   $result = mysqli_query($conn, $sql);
	   $rowCount = mysqli_num_rows($result);
	   if ($rowCount>0) {
		array_push($errors,"Email already exists!");
	   }
	   if (count($errors)>0) {
		foreach ($errors as  $error) {
			echo "<div class='alert alert-danger'>$error</div>";
		}
	   }else{
		
		$sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
		$stmt = mysqli_stmt_init($conn);
		$prepareStmt = mysqli_stmt_prepare($stmt,$sql);
		if ($prepareStmt) {
			mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
			mysqli_stmt_execute($stmt);
			echo "<div class='alert alert-success'>You are registered successfully.</div>";
		}else{
			die("Something went wrong");
		}
	   }
	  
	}
	?>
        
		<div class="form-container sign-in-container">
			<form action="signIn.php" method ="POST">
				<h1>Admin</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-instagram"></i></a>
				</div>
				<span class="loginSpan">Admin only</span>
				<input type="email" class="inputLogin" placeholder="Email" name="email" />
				<input type="password" class="inputLogin" placeholder="Password" name="pwd" />
				<br>
				<button name="login" type="submit">Admin Login</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
<!--
				<div class="overlay-panel overlay-left">
					<h1 class="h1">Welcome Back!</h1>
					<p>To keep connected with us please login with your personal details</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
-->
				<div class="overlay-panel overlay-right">
					<h1 class="h1">Admin Panel</h1>
					<p>Enter your personal details to goes the Admin panels</p>
					<!--<button class="ghost" id="signUp">Sign Up</button>-->
				</div>
			</div>
		</div>
	</div>


	<?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>




	<!-- FOOTER -->
	<footer class="section-footer" id="footer">
		<div class="footer-box container3">
			<div class="contact-details">
				<h2 class="margin-bottom"><span class="yellow">Universal </span>Fitness</h2>

				<ul class="contact-data">
					<li class="location">100 Nugegoda, Sri Lanka</li>
					<li class="phone">+9411 4505500</li>
					<li class="email">Universal@Fitness.com</li>
					<li class="social">
						<img src="logo-whatsapp.svg" alt="whatsapp icon" width="35" height="35" />

						<img src="logo-facebook.svg" alt="facebook icon" width="35" height="35" />

						<img src="logo-instagram.svg" alt="instagram icon" width="35" height="35" />

						<img src="logo-twitter.svg" alt="twitter icon" width="35" height="35" />
					</li>
				</ul>
			</div>

			<nav class="footer-nav" aria-label="navigation">
				<div class="nav-name">Quick Links</div>
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#courses">Courses</a></li>
					<li><a href="#trainers">Trainers</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

			<div class="newsletter">
				<div class="newsletter__title">News Letter</div>
				<div class="newsletter__text">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium,
					nisi!
				</div>
				<form class="newsletter__input">
					<input type="text" class="form" placeholder="Universal@Fitness.com" />
					<img src="send.svg" alt="send icon" class="send-icon" width="36" height="36" />
				</form>
			</div>

			<div class="legel">
				<p class="text">Copyright &copy; 2023 Universal Fitness All Rights Reserved&nbsp;</p>
				<a href="">
					<img src="foot.png" alt="" class="github" width="35" height="35" />
				</a>
			</div>
		</div>
	</footer>



	<script src="adminLogin.js" ></script>
</body>

</html>