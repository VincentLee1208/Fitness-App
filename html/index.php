<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/index.css">
    <title>Home</title>
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

        <main>

            <img src="../images/homebanner.jpg" alt="Banner" width="1290" height="270">

            <div class="question">
                <b>Who Are We?</b>
            </div>

            <div class="answer">
                <p> 
                    Activity Enthusiasts is a group of fitness lovers who often get together to work out.
                    We aim to teach others about how to reach their fitness goals.
                    There is plenty of information on our website for those who are looking to get started
                    in becoming more fit.<br><br>
                    If you're interested in joining Activity Enthusiasts, send us a message and we'll get
                    back to you.
                </p>
            </div>

            <br>
            <div class="question2">
                <b>What's Your Goal?</b>
            </div>

            <div class="row">
                <div class="column">
                    <a href="bulk.php">
                        <img src="../images/gain.jpg" alt="gainmuscle" width="160" height="160">
                    </a>
                </div>

                <div class="column">
                    <a href="cut.php">
                        <img src="../images/lose.jpg" alt="loseweight" width="160" height="160">
                    </a>
                </div>

                <div class="column">
                    <a href="gain.php">
                        <img src="../images/strength.jpg" alt="gainstrength" width="160" height="160">
                    </a>
                </div>

                <div class="column">
                    <a href="aesthetic.php">
                        <img src="../images/aesthetic.jpg" alt="gainstrength" width="160" height="160">
                    </a>
                </div>
            </div>

            <div class="choose">
                    <a href="bulk.php" alt="Gain Muscle">Gain Muscle</a>
                    <a href="cut.php" alt="Lose Weight">Lose Weight</a>
                    <a href="gain.php" alt="Gain Strength" class="one">Gain Strength</a>
                    <a href="aesthetic.php" alt="Get Aesthetic">Be Aesthetic</a>
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