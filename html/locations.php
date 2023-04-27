<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/locations.css">
    <title>Locations</title>
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

                <div class="title">
                    <h1>Locations</h1>
                </div>



                <h2><b>Richmond Olympic Oval</b></h2>
                <div class="imgContainer">
                    <img class= "float" src="../locations/RichmondOval.jpg" alt="Richmond Oval" width="260" height="250">
                </div>
                <ul>
                    <li>
                        20,000 sq ft.
                    </li>
    
                    <li>
                        Olympic Lifting Area
                    </li>
    
                    <li>
                        Free Weight Area
                    </li>
    
                    <li>
                        Abundance of Cardio machines
                    </li>
    
                    <li>
                        Designated Stretching Area
                    </li>

                    <li>
                        Expensive Drop-In Price
                    </li>

                    <li>
                        High price for good quality equipment, good for dedicated lifters
                    </li>
                </ul>


    
                <div class = "float2">
                    <hr align="left" style ="border:1px solid black;" /><br>
                    <h2><b>Steve Nash Fitness World</b></h2>
                </div>

                <div class="imgContainer">
                    <img class= "float" src="../locations/SteveNash.JPG" alt="Steve Nash" width="260" height="250">
                </div>

                <ul>
                    <li>
                        Group Fitness Classes
                    </li>

                    <li>
                        Free Weight Area
                    </li>

                    <li>
                        Cardio Area
                    </li>

                    <li>
                        Designated Stretching Area
                    </li>

                    <li>
                        Lounge
                    </li>

                    <li>
                        Personal Trainers available
                    </li>

                    <li>
                        Medium price Commercial Gym, good for casual go-ers of the gym
                    </li>
                </ul>
                

                <div class = "float2">
                    <hr align="left" style ="border:1px solid black;" /><br>
                    <h2><b>Richmond Sport & Fitness</b></h2>
                </div>
    
                <div class="imgContainer">
                    <img class= "float" src="../locations/RSF.JPG" alt="RSF" width="260" height="250">
                </div>
                
                <ul>
                    <li>
                        Olympic Lifting Area
                    </li>

                    <li>
                        Free Weight Area
                    </li>

                    <li>
                        Aerobics Room
                    </li>

                    <li>
                        Boxing Area
                    </li>

                    <li>
                        Cardio Area
                    </li>

                    <li>
                        Women-Only Area
                    </li>

                    <li>
                        Open 24 hours on weekdays
                    </li>

                    <li>
                        Low price at the cost of medium quality equipment, good for serious lifters on a budget
                    </li>
                </ul>



                <div class = "float2">
                    <hr align="left" style ="border:1px solid black;" /><br>
                    <h2><b>Sport Central</b></h2>
                </div>
    
                <div class ="imgContainer">
                    <img class= "float" src="../locations/SportCentral.JPG" alt="Portrait" width="260" height="250">
                </div>
                
                <ul>
                    <li>
                        Free Weight Area
                    </li>

                    <li>
                        Female/55+ Training Area
                    </li>

                    <li>
                        Power Lifting Area
                    </li>

                    <li>
                        MMA Mat Area
                    </li>

                    <li>
                        Open 24/7
                    </li>

                    <li>
                        Group Classes
                    </li>

                    <li>
                        Another low price option for serious or casual lifters on a budget
                    </li>
                </ul>




                <div class = "float2">
                    <hr align="left" style ="border:1px solid black;" /><br>
                    <h2><b>Fit4Less</b></h2>
                </div>
    
                <div class ="imgContainer">
                    <img class= "float" src="../locations/Fit4Less.JPG" alt="Portrait" width="260" height="250">
                </div>
                
                <ul>
                    <li>
                        Cardio Area
                    </li>

                    <li>
                        Free Weight Area
                    </li>

                    <li>
                        Virtual classes
                    </li>

                    <li>
                        Low price option for casual gym go-ers
                    </li>
                </ul>
            
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