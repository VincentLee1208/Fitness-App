<?php include('server.php') ?>

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
                <a href="../html/index.php">
                    <img src = "../images/logo.jpg" alt="Logo" width="50" height="50">
                </a>
            </div>

            <div class = "navbar">
                <a href="../html/members.php">Members</a>
                <a href="../html/locations.php">Locations</a>
                <a href="../html/contact.php">Contact Us</a>
                
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
            <a href = "../html/exerciseshome.php">Workouts</a>
            <a href = "../html/stretches.php">Stretches</a>

            <font size = "+2"><b>Nutrition</b></font> <br>
            <a href = "../html/nutrition.php">Diet</a> <br>
            <a href = "../html/caloriecounter.php">Calorie Calculator</a>
        </nav>
        
        <div class="title">
            <h1>
                Sign Up
            </h1>
        </div>
        
        <main>
            <form method="post" action="login.php">
  	            <?php include('errors.php'); ?>
  	            <div class="input-group">
  		            <label>Username</label>
  		            <input type="text" name="username" >
  	            </div>
  	            <div class="input-group">
  		            <label>Password</label>
  		            <input type="password" name="password">
  	            </div>
  	            <div class="input-group">
  		            <button type="submit" class="btn" name="login_user">Login</button>
  	            </div>
  	            <p>
  		            Not yet a member? <a href="register.php">Sign up</a>
  	            </p>
            </form>
        </main>
    
    </div>
        
</body>

</html>