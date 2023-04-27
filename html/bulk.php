<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bulk.css">
    <title> Gain Size</title>
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
            <b>How To "Get Big"</b>
        </div>

        <div class="photo">
            <img src="../images/smalltobig.jpg" alt="banner" width=600 height=200>
        </div>

        <main>
            <div class="info">
                Before you read on, make sure you have read the diet page on the navigation bar on the right so that you fully understand the diet 
                portion of putting on muscle mass.
                <br><br>

                Ready to go on now? Okay! Well to set things as simple as possible, 
                
                <div class="formula">
                    <b>More Strength = More Muscle Mass</b>
                </div>

                Now you might be thinking, "Duh I already knew that. That's just common sense".  However, what a lot of people don't realize is that
                the exercises that they are doing aren't the most beneficial for gaining strength.  
                <br><br>

                Doing isolation exercises, such as curls, until your arms are about to fall off won't make them bigger.  Instead, what you should be 
                performing are "Compound Lifts".  These include things such as squats, deadlifts, benchpress, and overhead press.  If you don't know 
                what some of these are, go check out our workouts page in the right-side navigation column.  
                <br><br>

                The reason these compound lifts are so beneficial for putting on muscle mass is because they allow you to lift the most amount of weight 
                possible.  Rather than lifting lower weights a million times, slowly increasing the heavy load on these compound lifts will lead you to 
                gain more muscle mass.

                <div class="smalltitle">
                    <b>7 Things To Keep In Mind</b>
                </div>

                <div class="future">
                    <ol>
                        <li>
                            <b>Do Compounds.</b> These compound exercises are going to be the leading factor to gaining muscle mass.  They work multiple 
                            muscles at a time and allow you to lift heavy.  Make sure you have them in your workout program.
                        </li>

                        <li>
                            <b>Increase Weight.</b>  As you workout more and more, slowly increase the weight on the bar.  Aim to lift more than you could 
                            last time.  Make sure you have maintain proper form.
                        </li>

                        <li>
                            <b>Use Barbells.</b>  This goes hand-in-hand with compound exercises for the most part as they all use the barbell.  It is good
                            to keep in mind the different other exercises you can perform with a barbell as well.  It allows you to put on more weight as well
                            as the additional exercise of having to balance the weights.  Make sure you start light and keep proper form.
                        </li>

                        <li>
                            <b>Increase Frequency.</b>  The more often you work out a muscle group, the more stress it will be under and that will allow it
                            to grow.  Become more familiar with the movements and you will start being able to lift much more than before.  Make sure you check 
                            out our workout page for some sample workouts that you can try out for yourself.
                        </li>

                        <li>
                            <b>Eat More.</b>  Without the proper fuel to support your body while exercising so much, you will not be able to gain muscle mass and
                            could even lose what you started with.  Make sure you have the proper amount of carbs, protein, and fats, which you can calculate with 
                            our Macro Calculator in the diet section.
                        </li>

                        <li>
                            <b>Rest.</b>  Your body requires proper rest in order to recover from your workouts and allow them to grow stronger and bigger.  If
                            work them every single day, they never get a chance to take a break.  Make sure you have a couple rest days in your program to get 
                            the most beneficial workout.
                        </li>

                        <li>
                            <b>Be Consistent.</b>  Unless you're a completely new lifter and have what we call "newbie gains", it starts to get a lot harder to put
                            on size as you continue to workout.  You might not see results immediately but they will come.  Make sure to keep at it and persevere.
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

</html>
