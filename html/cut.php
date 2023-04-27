<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/cut.css">
    <title>Get Lean</title>
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
            <b>How To "Get Lean"</b>
        </div>

        <main>
            <div class="info">
                Your diet plays the largest role when it comes to shedding that stubborn body fat so make sure you've read the diet section
                before moving on below.  It'll help you understand what is going on, and how to act so that your cut can happen as efficiently
                as possible.
                <br><br>

                Losing weight is actually very simple.

                <div class="formula">
                    <b>Calories Consumed <  Calories Burned = Lose Weight</b>
                </div>

                Sounds easy right?  Well that all depends on you.  If you have that strong willpower to make it to the end, cutting will be no 
                problem for you at all.  For those who have a bit of a harder time trying to stay on track, here are a couple of tips that you can
                follow to make it a little easier for yourself.

                <div class="smalltitle">
                    <b>9 Tips To Help You Cut</b>
                </div>

                <div class="photo">
                    <img src="../images/lean.jpg" alt="leanphoto" width=250 height=350>
                </div>

                <div class="future">
                    <ol>
                        <li>
                            <b>Drink Water.</b>  And I mean reaaallly drink water.  Although it might make you seem bloated at first, this water 
                            intake will increase your metabolism, making your burn calories more efficiently, keep hunger away for longer, and a good
                            0 calorie alternative for what might have been a soft drink.
                        </li>

                        <li>
                            <b>Let The Cheat Meal Go.</b>  It's very difficult to never slip up while cutting.  Every once in a while, you will end up
                            having a meal that is well above the calories you should be consuming, also known as a "cheat meal".  If this happens, don't 
                            tell yourself that it's okay and that you'll get back to the diet later.  This will just lead to more cheat meals.  Get back 
                            on track, focus up, and move on.
                        </li>

                        <li>
                            <b>Cook Your Meals.</b>  When you're eating out, it's actually very difficult to tell how much calories or macros are in the food
                            that you're eating.  By cooking your own meals, you'll have total knowledge and control over what goes in your body.
                        </li>

                        <li>
                            <b>Avoid Sugar.</b>  When cutting, basically eliminate sugar from your diet completely.  It's better for you. Trust me.
                        </li>

                        <li>
                            <b>Do Cardio.</b>  Doing some cardio exercises will help increase the amount of calories that you're burning while also bringing 
                            up your metabolism.  Cardio also doesn't have to just be running.  Swimming is a wonderful option if you have the resources for it.
                            Even lifting weight for higher repetitions can count as cardio.
                        </li>

                        <li>
                            <b>Build Muscle.</b>  A lot of people associate cutting with just getting smaller completely.  That shouldn't be the case.  If you
                            can put on muscle mass while cutting down the fat on your body, you'll get the results you want much faster.  This can be kind of 
                            tricky to the new lifters so make sure that you know what you're supposed to be eating.
                        </li>

                        <li>
                            <b>Have Some Caffeine.</b>  Since you'll be eating less food, a moderate amount of caffeine is a good option to keep you energized
                            and going.  It will also increase your metabolism.  Just don't overdo it though.
                        </li>

                        <li>
                            <b>Have Enough Protein.</b>  Now that your body is looking for energy reserves to allow you to function, it will turn to your body's 
                            composition as fuel.  Your body, unfortunately, can't exactly tell the difference between fat and muscle.  If you don't have enough 
                            protein to sustain your muscles, your body will eventually start eating away at it for fuel.
                        </li>

                        <li>
                            <b>Be Ready.</b>  Many people fail to cut because they're not fully committed or understand what goes into it.  They flip back and forth
                            between cutting and not, and that just leads to nowhere.  Make sure you're will is steeled and ready to make it through to the end.
                        </li>
                    </ol>
                </div>
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