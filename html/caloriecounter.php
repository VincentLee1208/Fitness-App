<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/caloriecounter.css">
    <title> Calorie Counter</title>
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
                <h1>Daily Calorie Counter</h1>
            </div>


            <img src="../images/buffguythinking.jpg" alt="buffguy" id="banner">


            <div class="subtxt">
            It can be difficult trying to figure out how much food to eat in order to reach your goal. Using the Daily Caloric<br> 
            Intake Calculator, you can determine a rough estimate about how much calories your body needs per day to maintain<br>
            the same size.  If losing fat is your goal, simply eat less than the estimated value or vice versa if your goal is to gain muscle mass.
            </div>

            <div class="calculator">

                <div class="name">
                    <h2>
                        Daily Caloric Intake Calculator
                    </h2>
                </div>

                <div class="input">

                    <form name="calculation">
                        Age:
                        <input type="text" id="age">
                        <br>

                        Current Weight:
                        <input type="text" id="weight">

                        <select id="weighttype">
                            <option value="pounds">Pounds</option>
                            <option value="kilos">Kilograms</option>
                        </select>
                        <br>

                        Height in centimeters:
                        <input type="text" id="height">
                        <br>

                        Exercise Level: *
                        <select id="exercise">
                            <option value="sedentary">Sedentary</option>
                            <option value="light">Light Exercise</option>
                            <option value="moderate">Moderate Exercise</option>
                            <option value="heavy">Heavy Exercise</option>
                            <option value="veryheavy">Very Heavy Exercise</option>
                        </select>
                        <br>

                        Gender:
                        <select id="gender">
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                        <br>

                        <input type="button" value="Calculate" onclick="calorieCalculate()">
                        <br>

                        Result: 
                        <input type="text" id="results">
                    </form> 
                    
                    <?php if(isset($_SESSION['username'])) : ?>
                        <button onclick="save()">Save Calories</button>
                    <?php endif; ?>
                </div>       
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <script type="text/javascript">
                
                    var result;

                    function calorieCalculate(){
                        var ag, aginput;
                        var wt, wtinput, wtselect;
                        var ht, htinput;
                        var gen, geninput;
                        var ex, exinput;
                        var metabolicrate;

                        geninput = document.getElementById("gender").value;

                        if(geninput === "female") {

                            ag = document.getElementById("age").value;

                            ag = ag*4.7;

                            

                            htinput = document.getElementById("height").value;
                            ht = htinput/2.54;

                            ht = ht*4.7;

                            

                            wtinput = document.getElementById("weight").value;

                            

                            wtselect = document.getElementById("weighttype").value;
                            if(wtselect === "pounds") {
                                wt = wtinput/2.2;
                            }
                            if(wtselect === "kilos") {
                                wt = wtinput;
                            }


                            wt = wt*4.35;


                            metabolicrate = wt + ht - ag + 655;



                            exinput = document.getElementById("exercise").value;


                            
                            if(exinput === "sedentary") {
                                ex = 1.3
                            }
                            if(exinput === "light") {
                                ex = 1.55;
                            }
                            if(exinput === "moderate") {
                                ex = 1.65;
                            }
                            if(exinput === "heavy") {
                                ex = 1.8;
                            }
                            if(exinput === "veryheavy") {
                                ex = 2.0;
                            }

                            result = metabolicrate*ex;
                            result = Math.round(result);

                            document.getElementById("results").value = result + " calories";
                        }

                        if(geninput === "male") {
                            ag = document.getElementById("age").value;

                            ag = ag*6.8;


                            htinput = document.getElementById("height").value;
                            
                            ht = htinput/2.54;

                            ht = ht*12.7;


                            wtinput = document.getElementById("weight").value;


                            wtselect = document.getElementById("weighttype").value;
                            if(wtselect === "pounds") {
                                wt = wtinput/2.2;
                            }
                            if(wtselect === "kilos") {
                                wt = wtinput;
                                
                            }

                            wt = wt*6.23;


                            metabolicrate = wt + ht + ag - 66;

                            

                            exinput = document.getElementById("exercise").value;
                            if(exinput === "sedentary") {
                                ex = 1.3;
                            }
                            if(exinput === "light") {
                                ex = 1.55;
                            }
                            if(exinput === "moderate") {
                                ex = 1.65;
                            }
                            if(exinput === "heavy") {
                                ex = 1.8;
                            }
                            if(exinput === "veryheavy") {
                                ex = 2.0;
                            }

                            result = metabolicrate*ex;
                            result = Math.round(result);

                            document.getElementById("results").value = result + " calories";
                        }


                    }
                    
                    function save() {
                        if(result != null) {
                            $.post("savecalories.php",
                            {
                                result : result
                            },
                            function() {
                                alert("Calories have been saved");
                            });
                        }else {
                            alert("No calories calculated yet");
                        }
                    }
                    
                </script>
            </div>


            <div class="leveldescrip">
                <b>*Exercise Level Description</b>
                <br>
                <ul>
                    <li>
                        <b>Sedentary-</b> Little or no exercise
                    </li>
                    
                    <li>
                        <b>Light Exercise-</b> Light exercise 1-3 days/week
                    </li>

                    <li>
                        <b>Moderate Exercise-</b> Moderate exercise 3-5 days/week
                    </li>

                    <li>
                        <b>Heavy Exercise-</b> Hard exercise 6-7 days/week
                    </li>

                    <li>
                        <b>Very Heavy Exercise-</b> Very hard exercise every day & physical job or 2x training
                    </li>
                </ul>
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
