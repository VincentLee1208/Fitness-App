<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/pushpull.css">
    <title>Push/Pull</title>
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
            <h1>
                Push/Pull/Lower Split
            </h1>

        </div>

        <div class="subtxt">

                In the charts below, we have created a sample workout that you could complete if you are trying to follow a push/pull/lower program.  Be sure to use a weight that will allow you
                to complete the suggested number of repetitions while maintaining proper form to avoid injury.<br><br>

                If you have any more questions, feel free to send us an email in our Contact Us Page.
                <br><br>
                
                <?php if (!isset($_SESSION['username'])) : ?>
                    You can save your sample workout by logging into the website.  Not a member yet? <a href="../registration/register.php">Sign up</a>
                <?php endif; ?>

        </div>

        <main>
            

            <b>Jump To:</b><br>

            <a href = "#push">Push</a>
            <a href = "#pull">Pull</a>
            <a href = "#legs">Lower</a>
            <a href = "#core">Core</a>
            
            <form method="POST" action="savepush.php" >
                <div id="push">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Push</h3>
                            </th>
                        </tr>
                        
                        <tr>
                            <th>    
                                <b>Exercise</b>
                            </th>
            
                            <th>
                                <b>Repetitions</b>
                            </th>
                                    
                            <th>
                                <b>Save to Workouts</b>
                            </th>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Barbell Bench Press*</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="bbp" name="workoutspush[]" type="checkbox" value="Barbell Bench Press">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Overhead Press*</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="ohp" name="workoutspush[]" type="checkbox" value="Overhead Press">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Incline Dumbbell Bench Press</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="idbp" name="workoutspush[]" type="checkbox" value="Incline Dumbbell Bench Press">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Arnold Shoulder Press</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="asp" name="workoutspush[]" type="checkbox" value="Arnold Shoulder Press">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Dumbbell Chest Fly</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="dcf" name="workoutspush[]" type="checkbox" value="Dumbbell Chest Fly">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Lateral Raises</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="lr" name="workoutspush[]" type="checkbox" value="Lateral Raises">
                            </td>
                        </tr>
                    </table>
                </div>
    
                <div id="pull">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Pull</h3>
                            </th>
                        </tr>
                        
                        <tr>
                            <th>    
                                <b>Exercise</b>
                            </th>
            
                            <th>
                                <b>Repetitions</b>
                            </th>
                                        
                            <th>
                                <b>Save to Workouts</b>
                            </th>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Wide Grip Lat Pulldown</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="wglp" name="workoutspush[]" type="checkbox" value="Wide Grip Lat Pulldown">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Close Grip Cable Row</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="cgcr" name="workoutspush[]" type="checkbox" value="Close Grip Cable Row">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Single Arm Dumbbell Row</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="sadr" name="workoutspush[]" type="checkbox" value="Single Arm Dumbbell Row">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Hammer Curls</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="hc" name="workoutspush[]" type="checkbox" value="Hammer Curls">
                            </td>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Cable Rope Curls</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="crc" name="workoutspush[]" type="checkbox" value="Cable Rope Curls">
                            </td>
                        </tr>
                    </table>
                </div>
    
                <div id="legs">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                Lower
                            </th>
                        </tr>
                        
                        <tr>
                            <th>    
                                <b>Exercise</b>
                            </th>
                
                            <th>
                                <b>Repetitions</b>
                            </th>
                                        
                            <th>
                                <b>Save to Workouts</b>
                            </th>
                        </tr>
        
                        <tr>
        
                            <td>
                                <b>Barbell Back Squat</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="bbs" name="workoutspush[]" type="checkbox" value="Barbell Back Squat">
                            </td>
                        </tr>
        
                        <tr>
    
                            <td>
                                <b>Deadlifts</b>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="dl" name="workoutspush[]" type="checkbox" value="Deadlifts">
                            </td>
                        </tr>
        
                        <tr>
               
                            <td>
                                <b>Dumbbell Goblet Squats</b>                            
                            </td>
                                                        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="dgs" name="workoutspush[]" type="checkbox" value="Dumbbel Goblet Squats">
                            </td>
                        </tr>
        
                        <tr>
                    
                            <td>
                                <b>Quad Extensions</b>                            
                            </td>
                                                            
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="qe" name="workoutspush[]" type="checkbox" value="Quad Extensions">
                            </td>
                        </tr>
        
                        <tr>
                                                        
                            <td>
                                <b>Hamstring Curls</b>                            
                            </td>
                                                                
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="hamc" name="workoutspush[]" type="checkbox" value="Hamstring Curls">
                            </td>
                        </tr>
                    </table>
                </div>
    
                <div id="core">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Core</h3> 
                            </th>   
                        </tr>
                
                        <tr>
                            <th>
                                <b>Exercise</b>
                            </th>
                        
                            <th>
                                <b>Repetitions</b>
                            </th>
                            
                            <th>
                                <b>Save to Workouts</b>
                            </th>
                        </tr>
            
                        <tr>
                               
                            <td>
                                <b>Hanging Knee Raises</b>                            
                            </td>
                                                                    
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 15 reps
                            </td>
                            
                            <td>
                                <input id="hkr" name="workoutspush[]" type="checkbox" value="Hanging Knee Raises">
                            </td>
                        </tr>
                            
                        <tr>
                            <td>
                                <b>Russian Twists</b>                            
                            </td>
                                                                        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 15 reps
                            </td>
                            
                            <td>
                                <input id="rt" name="workoutspush[]" type="checkbox" value="Russian Twists">
                            </td>
                        </tr>
            
                        <tr>
                                        
                            <td>
                                <b>Decline Situps</b>                            
                            </td>
                                                                        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 15 reps
                            </td>
                            
                            <td>
                                <input id="decs" name="workoutspush[]" type="checkbox" value="Decline Situps">
                            </td>
                        </tr>
            
                        <tr>
                                              
                            <td>
                                <b>Plank</b>                            
                            </td>
                                                                        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 30-60 secs
                            </td>
                            
                            <td>
                                <input id="plank" name="workoutspush[]" type="checkbox" value="Plank">
                            </td>
                        </tr>
                    </table>
                </div>
            
                <?php if(isset($_SESSION['username'])) : ?>
                    <input type="submit" name="Save" value="Save Selected Workouts">
                <?php endif; ?>
            </form>

            <br>

            <div class="back">
                If you would like to go back to the top,
                <a href="#wrapper">click here</a>
                <br>
                If you would like to take a look at the other split,
                <a href="exerciseshome.php">click here</a>
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