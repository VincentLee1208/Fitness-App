<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/exerciseshome.css">
    <title>Workouts</title>
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
            <b> Which Split is Best For You?</b>
        </div>

        <div class ="banner">
            <img src ="../images/banner.jpg" alt = "Banner" height = "225" width = "900">
        </div>

        <main>

            <div class = "subtxt">
                Figuring out what kind of split works for you is really important when you start lifting.  Read on to see what fits your agenda!
            </div>
        
            <p>In the writing below, I will cover the pros and cons of both the "Body Part Split" and the "Push/Pull/Lower Split".  Once you know and understand this information, you will be able to 
                select the training split that best aligns with your goals.  Taking schedule, lifestyle, nutrition, goals, and rest into account, each of the two splits offer something different.
            </p>

            <h2><b><u>Body Part Split</u></b></h2>

            <p>The body part split involves structuring your workouts depending on the muscle groups that you want to train.  For example, if you wanted to train your chest, you would choose compound and
                accessory lifts that uses the chest muscles as the primary movers.  The actual workout schedule can be performed is a variety of ways, meaning that you can potentially train every single day
                The most common rotation for the body part split is as follows:
            </p>

            <ul>
                <li>
                    <b>Monday: </b> Chest and Triceps
                </li>

                <li>
                    <b>Tuesday: </b> Back and Biceps
                </li>

                <li>
                    <b>Wednesday: </b> Shoulders
                </li>

                <li>
                    <b>Thursday: </b> Legs
                </li>

                <li>
                    <b>Friday: </b> Core
                </li>

                <li>
                    <b>Saturday: </b> Light Cardio
                </li>

                <li>
                    <b>Sunday: </b> Rest Day
                </li>
            </ul>

            <div class="procon">
            <table>
                <tr>
                    <th>
                        Pros
                    </th>

                    <th>
                        Cons
                    </th>
                </tr>

                <tr>
                    <td>
                        <ul>
                            <li>
                                Maximize the number of isolation and compound lifts you can perform
                            </li>
                        </ul>
                    </td>

                    <td>
                        <ul>
                            <li>
                                Usually only hits the same muscle group once a week, providing the lowest frequency of stress
                            </li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>
                        <ul>
                            <li>
                                Good for repairing muscle size, increase strength, and fixing symmetry imbalances
                            </li>
                        </ul>
                    </td>

                    <td>
                        <ul>
                            <li>
                                Not as ideal for reinforcing a movement pattern
                            </li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>
                        <ul>
                            <li>
                                Very time efficient as you can successfully stimulate a muscle group in even 30 minutes or less
                            </li>
                        </ul>
                    </td>

                    <td>
                        <ul>
                            <li>
                                Supersetting(Performing one exercise immediately after another) is less beneficial as muscle fatigue will build up 
                                as you use the same muscle groups.  This can be overcome by lifting with antagonist(back & chest) or non-competing (shoulders & legs)
                                muscle groups.
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            </div>

            <a href = "bodypart.php" alt ="Body Part Split"><button class="button" style="vertical-align:middle"><span>Body Part Split Exercises</span></button></a>

            <hr style ="border:1px solid black;" />

            <h2><b><u>Push/Pull/Lower Split</u></b></h2>

            <p>
                The Push/Pull/Legs split structures workouts based on similar movement patterns.  For push day, you will train your chest, shoulders, and triceps
                as they are the main muscle group used in vertical and horizontal pressing movements.  On pull days, the back and biceps are worked instead and on leg day, 
                the quads, hamstrings, glutes, lower back, and calves are all trained.  A sample workout schedule would follow:
            </p>

            <ul>
                <li>
                    <b>Monday: </b> Push
                </li>
    
                <li>
                    <b>Tuesday: </b> Pull
                </li>
    
                <li>
                    <b>Wednesday: </b> Legs
                </li>
    
                <li>
                    <b>Thursday: </b> Rest Day
                </li>
    
                <li>
                    <b>Friday: </b> Push 
                </li>
    
                <li>
                    <b>Saturday: </b> Pull
                </li>
    
                <li>
                    <b>Sunday: </b> Core/Cardio
                </li>
            </ul>

            <div class="procon">
                <table>
                    <tr>
                        <th>
                            Pros
                        </th>
        
                        <th>
                            Cons
                        </th>
                    </tr>
        
                    <tr>
                        <td>
                            <ul>
                                <li>
                                    Can increase the per-workout volume for muscle groups
                                </li>
                            </ul>
                        </td>
    
                        <td>
                            <ul>
                                <li>
                                    Since all exercises uses similar muscle groups, muscular fatigue
                                    can accumulate quickly
                                </li>
                            </ul>
                        </td>
                    </tr>
        
                    <tr>
                        <td>
                            <ul>
                                <li>
                                    If tolerable, training 6 days a week will allow you to hit the same muscles groups twice a week,
                                    providing you with a moderate muscle stimulus frequency
                                </li>
                            </ul>                            
                        </td>
        
                        <td>
                            <ul>
                                <li>
                                    Unless your rest, nutrition, and workout programming are all very on-point, working out six days
                                    a week can easily become too large of a burden.
                                </li>
                            </ul>
                        </td>
                    </tr>
        
                    <tr>
                        <td>
                            <ul>
                                <li>
                                    Allows you to train using multiple planes of motion(vertical & horizontal)
                                </li>
                            </ul>
                        </td>
        
                        <td>
                            <ul>
                                <li>
                                    Supersetting is even trickier as all the muscle groups being worked out on that given day are all
                                    complementary, meaning that any supersetting will negatively impact the amount of weight you can lift
                                    in the second exercise.
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            
            
            <a href = "pushpull.php" alt = "Push Pull Split"><button class="button" style="vertical-align: middle"><span>Push/Pull/Lower Split Exercises</span></button></a>
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