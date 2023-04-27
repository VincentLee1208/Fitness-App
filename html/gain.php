<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/gain.css">
    <title>Gain Strength</title>
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
        
        
        <div class="title">
            <b>How To "Get Strong"</b>
        </div>

        <main>
            <div class="info">
                There is a common misconception that the bigger you are, the stronger you are.  Although that may be the case in some circumstances, and
                the extra mass does help with lifting, the more muscle mass you have does not directly correlate to how strong you are.
                <br><br>

                Take a gymnast for example.  Probably one of the strongest athletes there are, pound for pound lifting ability.  Although they may be 
                significantly smaller than someone who is a pure bodybuilder, their ability to easily lift more than their entire body weight over and over again
                is very impressive.
                <br><br>

                In the writing below, we'll explain the differences between building size vs building strength as well as how you can train in order to reach
                your highest lifting capabilities.
            </div>

            <div class="photo">
                <img src="../images/svs.png" alt="banner" width="800" height="220">
            </div>

            <div class="smalltitle1">
                <b>Muscle Building vs Strength Building</b>
            </div>

            <div class="info">
                When training to build size, the purpose of your exercises should be to reach muscle hypertrophy.  In order to do this, your training should consist
                of more volume.  You should be lifting a weight that is 70-85% of your one rep maximum, and perform between 20-36 repetitions per exercise.  This will
                allow your muscle to be put under enough stress that it will grow larger.  
                <br><br> 

                This type of exercise will also slowly increase your strength over a long period of time.  However, in order to reach the highest lifting strength, 
                there is a different approach that you should take when training.
            </div>

            <hr>

            <div class="photo">
                <img src="../images/learn.jpg" alt="banner" width="800" height="220">
            </div>

            <div class="smalltitle2">
                <b>How To Build Strength</b>
            </div>

            <div class="info">
                If your goal is to purely become stronger, there is a better workout program that you can follow.  
                <br><br>

                By lowering the amount of total repetitions from 20-36 to 10-20, you will be able to lift at 80-90% 
                of you one rep max.  This heavier lifting weight will increase your strength much faster than the traditional mass 
                building workout program.  
                <br><br>

                Since these heavy lifts are much more demanding, the rest period between each of your sets also need
                to increase.  Rest 3-5 minutes between every set of the main lift to ensure that your nervous system has 
                enough time to recover.

            </div>

            <hr>

            <div class="smalltitle3">
                <b>What Comes First?</b>
            </div>

            <div class="info2">

                <div class="photo2">
                    <img src="../images/think.jpg" alt="thinking" width=190 height=210>
                </div>
                
                If you are a relatively new lifter, this doesn't apply to you as any workout program you do will increase both your size and strength considerably.  The stress
                your muscle receives from the basic training is enough to force you to grow.
                <br><br>
        
                However,
                for those who have been reached a satisfactory level of strength, you may be wondering which program you should be doing.  Personally, I believe that strength 
                should be the main goal.  
                <br><br>
                
                On your way to reaching the strength that you are looking for, you will also gain mass, albeit more slowly.  After having reached 
                your strength goals, you can then pursue your hypertrophy goals much more easily.
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