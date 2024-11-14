<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Login</title>
	
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
	<link rel="stylesheet" href="log.css">
	
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>


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
						<a href="../Member/Become Member.php">Member</a>
					</li>
					<li class="member">
						<a href="../Admin-Panel/login.php">Admin</a>
					</li>

				</ul>
			</nav>
		</div>
	</header>


	<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>

	<!--=============================Sign Up html Css============================ -->


	<div class="container1" id="container1">
		<div class="form-container sign-up-container">
			<form action="process-signup.php" method="post" id="signup">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-instagram"></i></a>
				</div>
				<span class="loginSpan">or use your email for registration</span>
				<input type="text" class="inputLogin" placeholder="Name" name="name"/>
				<input type="email" class="inputLogin" placeholder="Email" name="email" />
				<input type="password" class="inputLogin" placeholder="Password" name="password" />
				<button name="submit" type="submit">Sign Up</button>
			</form>
		</div>
		<!--=============================Sign Up PHP============================ -->


        
		<div class="form-container sign-in-container">
			<form  method ="POST">
				<h1>User Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-instagram"></i></a>
				</div>
				<span class="loginSpan">or use your account</span>
				<input type="email" class="inputLogin" placeholder="Email" name="email"  value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"/>
				<input type="password" class="inputLogin" placeholder="Password" name="password" />
				<a href="#">Forgot your password?</a>
				<button name="login" type="submit">Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">

					<h1 class="h1">Welcome Back!</h1>
					<p>To keep connected with us please login with your personal details</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1 class="h1">Hi There!</h1>
					<p>Enter your personal details to open an account with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

<!-- sign php -->

	<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: ../index.php");
            exit;
        }
    }
    
    $is_invalid = true;
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
				Want to Know what we're up to? Sign up for the newslatter,
				 and join oure tribe.
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



	<script src="login.js" ></script>
</body>

</html>