<?php 
session_start();
include('server.php'); 
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Sign Up</title>
</head>

<body>
    <div id="wrapper">

        <header>
            <div class="logo">
                <a href="../html/index.html">
                    <img src = "../images/logo.jpg" alt="Logo" width="50" height="50">
                </a>
            </div>

            <div class = "navbar">
                <a href="../html/members.html">Members</a>
                <a href="../html/locations.html">Locations</a>
                <a href="../html/contact.html">Contact Us</a>
                
                <?php if(!isset($_SESSION['username'])) : ?>
                    <a href="login.php">Sign In</a>
                <?php endif; ?>
                
                <?php if (isset($_SESSION['username'])) : ?>
                    <a href="../html/user.php">My Account</a>
                <?php endif; ?>
            </div>
        </header>

        <nav>
            <font size = "+2"><b>Training</b></font>
            <a href="../html/exerciseshome.html">Workouts</a>
            <a href = "../html/stretches.html">Stretches</a>

            <font size = "+2"><b>Nutrition</b></font> <br>
            <a href = "../html/nutrition.html">Diet</a> <br>
            <a href = "../html/caloriecounter.html">Calorie Calculator</a>
        </nav>
        
        <div class="title">
            <h1>
                Sign Up
            </h1>
        </div>

        <main>
            <form method="post" action="register.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                
                <div class="input-group">
  	                <label>Email</label>
  	                <input type="email" name="email" value="<?php echo $email; ?>">
  	            </div>
  	
  	            <div class="input-group">
  	                <label>Password</label>
  	                <input type="password" name="password_1">
  	            </div>
  	
  	            <div class="input-group">
  	                <label>Confirm password</label>
  	                <input type="password" name="password_2">
  	            </div>
  	
  	            <div class="input-group">
  	                <button type="submit" class="btn" name="reg_user">Register</button>
  	            </div>
  	            
  	            <p>
  		            Already a member? <a href="login.php">Sign in</a>
  	            </p>
            </form>
            
        </main>

        <footer>
            <p>
                Always consult with a healthcare professional prior to starting any diet or workout program.  This website is for <br>purely informative 
                and educational purposes and should not be used as an alternative to a qualified healthcare professional.
            </p>
        </footer>

    </div>
</body>

</html>