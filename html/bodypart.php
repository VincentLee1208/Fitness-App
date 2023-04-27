<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bodypart.css">
    <title> Body Part Split</title>
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
            <a href = "exerciseshome.php">Workouts</a>
            <a href = "stretches.php">Stretches</a>

            <font size = "+2"><b>Nutrition</b></font> <br>
            <a href = "nutrition.php">Diet</a> <br>
            <a href = "caloriecounter.php">Calorie Calculator</a>
        </nav>

        <div class="title">
            <h1>
                Body Part Split
            </h1>
        </div>

        <div class="subtxt">

            In the charts below, we have listed out some of the useful exercises that can be performed in order to work certain muscle groups.  Do be aware that it is not advised to do every exercise in the table, and instead, choose 3-4 exercises from each section. 
            Some lifts are "Key Lifts", indicated by a "*" symbol, signifying that those should most likely be included in your workout unless told otherwise by a medical worker.<br><br>
            
            If you have any more questions, feel free to send us an email in our Contact Us Page.
            <br><br>
            
            <?php if (!isset($_SESSION['username'])) : ?>
                You can save your sample workout by logging into the website.  Not a member yet? <a href="../registration/register.php">Sign up</a>
            <?php endif; ?>
            
                
        </div>

        <main>

            <b>Jump To:</b><br>

            <a href = "#chest">Chest</a>
            <a href = "#triceps">Triceps</a>
            <a href = "#back">Back</a>
            <a href = "#biceps">Biceps</a>
            <a href = "#shoulders">Shoulders</a>
            <a href = "#legs">Legs</a> 
            <a href = "#core">Core</a>

            <form method="POST" action="savework.php" >
                <div id="chest">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Chest</h3>
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
                                <b>Barbell Bench Press*</b><br>
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8-10 reps 
                            </td>
                            
                            <td>
                                <input id="bbp" name="workouts[]" type="checkbox" value="Barbell Bench Press">
                            </td>
    
                        </tr>
    
                        <tr>
                            <td>
                                <b>Flat Dumbbell Bench Press</b><br>
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8-10 reps 
                            </td>
                            
                            <td>
                                <input id="fdbp" name="workouts[]" type="checkbox" value="Flat Dumbbell Bench Press">
                            </td>
    
                        </tr>
    
                        <tr>
                            <td>
                                <b>Incline Dumbbell Bench Press*</b><br>
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8-10 reps 
                            </td>
                            
                            <td>
                                <input id="idbp" name="workouts[]" type="checkbox" value="Incline Dumbbell Bench Press">
                            </td>
    
                        </tr>
    
                        <tr>
                            <td>
                                <b>Dumbbell Chest Fly</b><br>
                            
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 3 Sets of 10-15 reps 
                            </td>
                            
                            <td>
                                <input id="dcf" name="workouts[]" type="checkbox" value="Dumbbell Chest Fly">
                            </td>
    
                        </tr>
    
                        <tr>

                            <td>
                                <b>Cable Fly</b><br>
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 3 Sets of 10 - 15 reps 
                            </td>
                            
                            <td>
                                <input id="cf" name="workouts[]" type="checkbox" value="Cable Fly">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <b>Decline Cable Fly</b><br>
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 3 Sets of 10-15 reps 
                            </td>
                            
                            <td>
                                <input id="dcf" name="workouts[]" type="checkbox" value="Decline Cable Fly">
                            </td>
                        </tr>
                        
    
                    </table>
                </div>
    
                
    
                <div id="triceps">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Triceps</h3>
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
                                <b>Tricep Rope Pushdown</b><br>
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 3 Sets of 10-12 reps
                            </td>
                            
                            <td>
                                <input id="trp" name="workouts[]" type="checkbox" value="Tricep Rope Pushdown">
                            </td>
                            
                        </tr>
    
                        <tr>

                            <td>
                                <b>Skullcrushers</b><br>  
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 3 Sets of 10-12 reps
                            </td>
                            
                            <td>
                                <input id="sc" name="workouts[]" type="checkbox" value="Skullcrushers">
                            </td>
                        </tr>
    
                        <tr>

                            <td>
                                <b>Tricep Dips</b><br>  
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 10-12 reps
                            </td>
                            
                            <td>
                                <input id="td" name="workouts[]" type="checkbox"  value="Tricep Dips">
                            </td>
                        </tr>
    
                        <tr>

                            <td>
                                <b>Overhead Tricep Rope Extension</b><br>  
                            </td>
            
                            <td>
                                <b>Repetitions:</b> 3 Sets of 10-12 reps
                            </td>
                            
                            <td>
                                <input id="otre" name="workouts[]" type="checkbox" value="Overhead Tricep Rope Extension">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <b>Diamond Pushups</b><br>  
                            </td>
                
                            <td>
                                <b>Repetitions:</b> 3 Sets of 10-12 reps
                            </td>
                            
                            <td>
                                <input id="dp" name="workouts[]" type="checkbox" value="Diamond Pushups">
                            </td>
                        </tr>
                    </table>
                </div>
    
                <div id="back">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Back</h3> 
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
                           
                            <td width="254">
                                <b>Wide Grip Lat Pulldown</b><br>
                            </td>
    
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8-12 reps
                            </td>
                            
                            <td>
                                <input id="wglp" name="workouts[]" type="checkbox" value="Wide Grip Lat Pulldown">
                            </td>
                                
                        </tr>
    
                        <tr>
                            <td width="254">
                                <b>Close Grip Lat Pulldown</b><br>
                            </td>
        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8-12 reps
                            </td>
                            
                            <td>
                                <input id="cglp" name="workouts[]" type="checkbox" value="Close Grip Lat Pulldown">
                            </td>
    
                        </tr>
    
                        <tr>

                            <td width="254">
                                <b>Close Grip Cable Row</b><br>
                            </td>
            
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8-12 reps
                            </td>
                            
                            <td>
                                <input id="cgcr" name="workouts[]" type="checkbox" value="Close Grip Cable Row">
                            </td>
        
                        </tr>
    
                        <tr>

        
                            <td width="254">
                                <b>Wide Grip Cable Row</b><br>
                            </td>
                
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8-12 reps
                            </td>
                            
                            <td>
                                <input id="wgcr" name="workouts[]" type="checkbox" value="Wide Grip Cable Row">
                            </td>
                        </tr>
    
                        <tr>

            
                            <td width="254">
                                <b>Single Arm Dumbbell Row</b><br>
                            </td>
                    
                            <td>
                                <b>Repetitions:</b> 4 Sets of 10-12 reps
                            </td>
                            
                            <td>
                                <input id="sadr" name="workouts[]" type="checkbox" value="Single Arm Dumbbell Row">
                            </td>
                        </tr>
    
                        <tr>

                
                            <td width="254">
                                <b>Pullups</b><br>
                            </td>
                        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 10-12 reps
                            </td>
                            
                            <td>
                                <input id="pull" name="workouts[]" type="checkbox" value="Pullups">
                            </td>
                        </tr>
                    </table>
    
                </div>
            
                <div id="biceps">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Biceps</h3> 
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
            
                            <td width>
                                <b>Hammer Curls</b><br>
                            </td>
                    
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps per arm
                            </td>
                            
                            <td>
                                <input id="hc" name="workouts[]" type="checkbox" value="Hammer Curls">
                            </td>
                        </tr>
    
                        <tr>
                
                            <td width>
                                <b>Bicep Curls</b><br>
                            </td>
                        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps per arm
                            </td>
                            
                            <td>
                                <input id="bc" name="workouts[]" type="checkbox" value="Bicep Curls">
                            </td>
                        </tr>
    
                        <tr>
                    
                            <td width>
                                <b>Incline Bicep Curls</b><br>
                            </td>
                            
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps per arm
                            </td>
                            
                            <td>
                                <input id="ibc" name="workouts[]" type="checkbox" value="Incline Bicep Curls">
                            </td>
                        </tr>
    
                        <tr>
                            <td width>
                                <b>Cable Rope Curls</b><br>
                            </td>
                                
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps per arm
                            </td>
                            
                            <td>
                                <input id="crc" name="workouts[]" type="checkbox" value="Cable Rope Curls">
                            </td>
                        </tr>
    
                        <tr>
                            
                            <td width>
                                <b>Preacher Curls</b><br>
                            </td>
                                    
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps per arm
                            </td>
                            
                            <td>
                                <input id="pc" name="workouts[]" type="checkbox" value="Preacher Curls">
                            </td>
                        </tr>
    
                    </table>
                </div>
    
                <div id="shoulders">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Shoulders</h3> 
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
                                <b>Overhead Press</b><br>
                            </td>
                                        
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="ohp" name="workouts[]" type="checkbox" value="Overhead Press">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <b>Dumbbell Shoulder Press*</b>
                            </td>
                                            
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="dsp" name="workouts[]" type="checkbox" value="Dumbbell Shoulder Press">
                            </td>
                        </tr>
    

    
                        <tr>
  
                            <td>
                                <b>Arnold Shoulder Press</b>
                            </td>
                                                    
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="asp" name="workouts[]" type="checkbox" value="Arnold Shoulder Press">
                            </td>
                        </tr>
    
                        <tr>
                                                
                            <td>
                                <b>Lateral Raises</b>
                            </td>
                                                        
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="lr" name="workouts[]" type="checkbox" value="Lateral Raises">
                            </td>
                        </tr>
    
                        <tr>
                            <td width="254">
                                <b>Front Raises</b>
                            </td>
                                                            
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="fr" name="workouts[]" type="checkbox" value="Front Raises">
                            </td>
                        </tr>
    
                        <tr>
                            <td width="254">
                                <b>Rear Delt Cable Pulls</b>
                            </td>
                                                                
                            <td>
                                <b>Repetitions:</b> 3 Sets of 8 - 12 reps
                            </td>
                            
                            <td>
                                <input id="rdcp" name="workouts[]" type="checkbox" value="Rear Delt Cable Pulls">
                            </td>
                        </tr>
    
                    </table>
                </div>
    
                <div id="legs">
                    <table border="1">
                        <tr>
                            <th colspan="3">
                                <h3>Legs</h3> 
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
                                <b>Barbell Back Squats*</b>
                            </td>
                                            
                            <td>
                                <b>Repetitions:</b> 5 Sets of 5 Followed by 3 Sets of 3
                            </td>
                            
                            <td>
                                <input id="bbs" name="workouts[]" type="checkbox" value="Barbell Back Squat">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <b>Deadlifts*</b>                            
                            </td>
                                                
                            <td>
                                <b>Repetitions:</b> 4 Sets of 8 - 10 reps
                            </td>
                            
                            <td>
                                <input id="dl" name="workouts[]" type="checkbox" value="Deadlifts">
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
                                <input id="dgs" name="workouts[]" type="checkbox" value="Dumbbel Goblet Squats">
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
                                <input id="qe" name="workouts[]" type="checkbox" value="Quad Extensions">
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
                                <input id="hamc" name="workouts[]" type="checkbox" value="Hamstring Curls">
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
                                <input id="hkr" name="workouts[]" type="checkbox" value="Hanging Knee Raises">
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
                                <input id="rt" name="workouts[]" type="checkbox" value="Russian Twists">
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
                                <input id="decs" name="workouts[]" type="checkbox" value="Decline Situps">
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
                                <input id="plank" name="workouts[]" type="checkbox" value="Plank">
                            </td>
                        </tr>
    
                    </table>
                </div>
                
                <?php if(isset($_SESSION['username'])) : ?>
                    <input type="submit" name="Save" value="Save Selected Workouts">
                <?php endif; ?>
            </form>


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