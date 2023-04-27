<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/members.css">
    <title>Members</title>
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

                <h1>Members</h1>

                <hr style ="border:1px solid black;" />


                <h2><b>Nam Dang</b></h2>
                <img class= "float" src="../images/member1.JPG" alt="Portrait" width="225" height="260">
                <div class="info">
                    <p>
                        One of the newer members to the group, Nam Dang has made leaps and bounds regarding his strength from where he first started.  As a former hockey player,
                        he knows all about the grind and what it takes to get into shape.  His main passion is playing card games and that's where he gets his gym motivation from.
                        Sending people to the shadow realm is hard work, so he warms up by tossing heavy weights.
                        <br><br>
                        PR: 145lbs Bench Press, 185lbs Squat, 175lbs Deadlift
                    </p>
                </div>

                <div class = "float2">
                    <hr style ="border:1px solid black;" />
                    <h2><b>Jack Hou</b></h2>
                </div>

                <img class= "float" src="../images/member2.JPG" alt="Portrait" width="225" height="260">
                <div class="info">
                    <p>
                        Jack Hou is one of those guys where you would just look at him and feel bad about your inferior genetics.  Don't worry we've all been there.  He stays lean
                        all year round and can't put on anything but pure muscle.  From a rising football player to ultimate frisbee fanatic, his powerful frame gets him through any 
                        physical activity.
                        <br><br>
                        PR: 225lbs Bench Press, 300lbs Squat, 250lbs Deadlift
                    </p>
                </div>

                <div class = "float2">
                    <hr style ="border:1px solid black;" />
                    <h2><b>Michelle Ling</b></h2>
                </div>

                <img class= "float" src="../images/member3.jpg" alt="Portrait" width="225" height="260">
                <div class="info">
                    <p>
                        As the only female who is in the group, Michelle certainly holds her own in the lifting world.  She doesn't let the heavy weights scare her and goes at it like
                        an absolute beast.  She can be quite scary when she gets into her lifting mentality so watch out for her around the gym.  She'll eat you up for breakfast.
                        <br><br>
                        PR: 100lbs Bench Press, 145lbs Squat, 145lbs Deadlift
                    </p>
                </div>

                <div class = "float2">
                    <hr style ="border:1px solid black;" />
                    <h2><b>Keaton Wong</b></h2>
                </div>

                <img class= "float" src="../images/member4.jpg" alt="Portrait" width="225" height="260">
                <div class="info">
                    <p>
                        With his lean and fit body, Keaton has what it takes to be a star athlete.  An aspiring business student by day, and a gym rat by night, he's a well rounded 
                        individual that can do it all.  
                        <br><br>
                        PR: 175lbs Bench Press, 275lbs squat, 250lbs Deadlift
                    </p>
                </div>

                <div class = "float2">
                    <hr style ="border:1px solid black;" />
                    <h2><b>Jerry Zhao</b></h2>
                </div>

                <img class= "float" src="../images/member5.jpg" alt="Portrait" width="225" height="260">
                <div class="info">
                    <p>
                        Jerry might not look enormous, but he's packing a lot of power in that body.  As a veteran lifter, he knows his way around the gym.  What to do, how to do it, when 
                        to do it, he knows everything.  He's basically a walking gym guide.  If you ever have any questions, go to this guy.  He'll help you out.
                        <br><br>
                        PR: 225lbs Bench Press, 315lbs Squat, 405lbs Deadlift
                    </p>
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