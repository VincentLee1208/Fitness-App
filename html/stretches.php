<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stretches.css">
    <title>Stretches</title>
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
            <b>Why Is Stretching Important?</b>
        </div>

        
    

        <main>
            <div class="subtxt">
                Stretching is a very large part of working out and recovering.  When pushing your muscles to the limit, stretching is necessary to relieve the tension and elongate
                the contracted muscles.  By allowing yourself to move with a greater range of motion, you will be able to work your muscles to their full capacity.<br><br> 

                We have accumulated a couple of stretches that would be very beneficial to perform daily in order to keep your body in the best condition possible.  Remember to perform
                these stretches slowly and not to force anything that may feel uncomfortable or even painful.
            </div>

            <br><br>

            <div class="photo">
                <img src="../images/9090.jpg" alt="9090 strecth" width="700px" height="600px">
            </div>
            <br>

            <div class="list">
                <b>1</b>
            </div>

            <div class="info">
                <div class="stretchname">
                    <b>90/90 Stretch</b>
                </div>

                <ul>
                    <li>
                        Sit with your right knee bent at a 90 degree angle in front of you while<br>
                         keeping the foot flexed.
                    </li>

                    <li>
                        Allow your leg to rest completely flat on the floor.
                    </li>

                    <li>
                        Put your left knee to the left of your body and bend it so that your foot is<br>
                         facing behind you.  Remember to keep both feet flexed.
                    </li>

                    <li>
                        While keeping your right buttcheek on the ground, try to push the left buttcheek<br> as close to the ground and possible.
                    </li>

                    <li>
                        Hold for 30 seconds to 2 minutes
                    </li>

                    <li>
                        Repeat movements on the other side.
                    </li>
                </ul>
                

                <i>Stretches hips</i>
            </div>


            <div class="photo">
                    <img src="../images/frog.jpg" alt="9090 stretch" width="700px" height="600px">
            </div>
            <br>
    
            <div class="list">
                <b>2</b>
            </div>
    
            <div class="info">
                <div class="stretchname">
                    <b>Frog Stretch</b>
                </div>

                <ul>
                    <li>
                        Start on all fours.
                    </li>

                    <li>
                        Slide your knees as wide as possible.
                    </li>

                    <li>
                        Turn your toes outwards and rest the inner edge of you feet on the floor.
                    </li>

                    <li>
                        Shift your weight back and forth from your arms and into your hips
                    </li>

                    <li>
                        Perform for 30 seconds to 2 minutes.
                    </li>
                </ul>

                <i>Stretches groin and adductors</i>
            </div>


            <div class="photo">
                    <img src="../images/hipflexor.jpg" alt="9090 stretch" width="700px" height="600px">
            </div>
            <br>
    
            <div class="list">
                <b>3</b>
            </div>

            <div class="info">
                <div class="stretchname">
                    <b>Lunging Hip Flexor Stretch</b>
                </div>
    
                <ul>
                    <li>
                        Kneel on your right knee. 
                    </li>
    
                    <li>
                        Put your left foot flat on the ground in front or you with your knee bent.
                    </li>
    
                    <li>
                        Lean forward and push your right hip towards the floor.
                    </li>
    
                    <li>
                        Squeezing your butt will allow you to stretch your hip flexor even more.
                    </li>
    
                    <li>
                        Hold for 30 seconds to 2 minutes.
                    </li>
                </ul>
    
                <i>Stretches hip flexors, quads, and glutes</i>
            </div>


            <div class="photo">
                    <img src="../images/wallangel.jpg" alt="9090 stretch" width="700px" height="600px">
            </div>
            <br>
    
            <div class="list">
                <b>4</b>
            </div>

            <div class="info">
                <div class="stretchname">
                    <b>Wall Angel Stretch</b>
                </div>
    
                <ul>
                    <li>
                        Plant your back against a while with your elbows creating a 'W' shape.
                    </li>

                    <li>
                        Try to keep your heels as close to the wall as possible while also making sure that<br>
                        your hips and spine are pressed against it as well
                    </li>

                    <li>
                        If you are unable to put your heels against the wall, walk slightly furth away from the wall<br>
                        and bend the knees like in a wall sit.
                    </li>

                    <li>
                        While keeping your hips, spine, and shoulderblades all against the wall, begin to slowly straighten<br>
                        your arms directly over your head, making sure that your elbows stay in contact with the wall the entire<br>
                        time.
                    </li>

                    <li>
                        Repeat motion for 30 seconds to 2 minutes.
                    </li>
                </ul>
    
                <i>Stretches shoulders and fixes posture</i>
            </div>


            <div class="photo">
                    <img src="../images/cat.jpg" alt="9090 stretch" width="700px" height="600px">
            </div>
            <br>
    
            <div class="list">
                <b>5</b>
            </div>

            <div class="info">
                <div class="stretchname">
                    <b>Cat-Camel Stretch</b>
                </div>
    
                <ul>
                    <li>
                        Get on all fours with your knees at hip-width apart and hands directly below your shoulders.
                    </li>

                    <li>
                        Tighten your core muscles and arch your spine towards the ground.
                    </li>

                    <li>
                        Hold the position for 10 or more seconds.
                    </li>

                    <li>
                        Slowly round your back so that your spine arches towards the sky.
                    </li>

                    <li>
                        Hold the position for another 10 or more seconds.
                    </li>

                    <li>
                        Repeat stretch 5 or 6 times.
                    </li>
                </ul>
    
                <i>Stretches lumbar, thoracic, and cervical spine</i>
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

