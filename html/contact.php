<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/contact.css">
    <title> Contact Us</title>
</head>

<body>
    <div id="wrapper">

        <header>
            <div class="logo">
                <a href="index.php">
                    <img src = "../images/logo.jpg" alt="Logo" width="50" height="50">
                </a>
            </div>

            <div class = "navbar">
                <a href="members.php">Members</a>
                <a href="locations.php">Locations</a>
                <a href="contact.php">Contact Us</a>
                
                <?php if(!isset($_SESSION['username'])) : ?>
                    <a href="../registration/login.php">Sign In</a>
                <?php endif; ?>
                
                <?php if (isset($_SESSION['username'])) : ?>
                    <a href="user.php">My Account</a>
                <?php endif; ?>
            </div>
        </header>

        <nav>
            <font size = "+2"><b>Training</b></font>
            <a href="exerciseshome.php">Workouts</a>
            <a href = "stretches.php">Stretches</a>

            <font size = "+2"><b>Nutrition</b></font> <br>
            <a href = "nutrition.php">Diet</a> <br>
            <a href = "caloriecounter.php">Calorie Calculator</a>
        </nav>

        <div class = "title">
        <h1><b>Contact Us</b></h1> 

        <hr style = "border:1px solid black">
        </div>
        
        <div class = "subtxt">
            <p>We'd love to hear from you.  Send us an email with any ideas or comments!</p>
        </div>

        </div>
        
        <main>

            <div class="info">
                <p>
                    <b>Activity Enthusiast Admin:</b>
                    Vincent Lee
                    <br><br>
                    <b>Address:</b>
                    100 W 49th Ave, Vancouver, BC, V5Y 2Z6
                    <br><br>
                    <b>Web Developer:</b>
                    Vincent Lee
                    <br><br>
                    <b>Email:</b> 
                    <a href="mailto: wlee44@langara.bc.ca">wlee44@langara.bc.ca</a>
                </p>
            </div>
            

            <div class="contact">
                <form method="POST" action="../contact.php">
                    <input type="text" name="sender" placeholder="Enter Name">

                    <br><br>
                    <input type="text" name="senderEmail" placeholder="Enter Email">

                    <br><br>
                    <textarea rows="6" cols="40" name="message" placeholder="Comments"></textarea>

                    <br><br>
                    <input type="submit" name="submit">
                </form>
            </div>

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
