<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/nutrition.css">
    <title>Nutrition</title>
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
            <b>The Impact of Diet</b>
        </div>

        <main>
            <div class="subtxt">
                Your diet plays a large role in reaching your fitness goals.  If you want to lose weight, it doesn't matter
                how much you exercise if your diet is not on-point.  Likewise, it is much harder to gain muscles without eating
                correctly either.
                <br><br>

                After reading below, you'll have a clear understanding of what you need to eat and drink in order to achieve
                the physique and strength goals that you have.
            </div>

            <div class="smalltitle">
                <b>Cutting VS Bulking</b>
            </div>

            <div class="cutbulk">
                The idea of cutting and bulking is a sort of phase cycle that many lifters follow.  It allows you to slowly increase
                the amount of muscle mass and the strength you have, and then cut back down to a lean physique while maintaining most
                of the newly gained lean mass.<br><br>

                <img src="../images/eating.jpg" alt="bulk" height="200" width="250">

                The straight forward definition of bulking means that you are "purposefully" trying to gain weight for the sake
                being able to lift more weight and gain muscle mass.  In order to do so, you have to eat at a caloric surplus, 
                meaning that you have to eat more calories than your body can burn off.  Slowly you will begin to gain weight, both
                fat and muscle, and eventually, you reach the cutting phase.<br><br>
                
                Once you have reached the desired size or strength you were looking for, you can begin to "cut".  Most people associate
                losing weight with doing absurd amounts of running or other types of cardiovascular type exercises.  However, that isn't 
                the only way.  At the very base of it all, the idea of cutting is just to consume less calories than you can burn off.<br><br>

                However, there might be times where just counting calories isn't enough.  Time to learn about macros....

            </div>


            <hr>

            <div class="smalltitle">
                <b>What Are Macros?</b>
            </div>

            <div class="macro">
                Tracking macros, also known as macronutrients, is the act of tracking the nutritional values of the foods you eat in addition
                to the calories it contains.  For example, 100 calories of an avocado (good fats) is better than 100 calories of a doughnut (carbs).
                <br><br>
                
                Now why might you need to do this you ask?  Well this is very important when it comes to dieting for people trying to follow a 
                specific diet such as ketogenic(low carbs, high fats), or for someone who is specifically trying to lose or gain weight while
                lifting.  One example would be, if you were cutting and you didn't consume enough protein for your body, you would actually start
                to burn off your muscle in addition to the fat, making the process pointless.
            </div>

            <hr>

            <div class="smalltitle">
                <b>What are MY Macros?</b>
            </div>

            <div class="mine">
                Whether you are a male or female, there is typically a generic macro layout that you should follow for when cutting, bulking, or
                maintenance.  These numbers work for most people with a few slight tweaks based on your body type.
            </div>

            <div class="row">
                <div class="column1">
                    <img src="../images/cut.jpeg" alt="cutmacros" width="450" height="275">
                </div>

                <div class="column">
                    <img src="../images/maintenance.jpeg" alt="maintbulk" width="450" height="275">
                </div>
            </div>

            <div class="label1">
                <b>Cutting</b>
            </div>

            <div class="label2">
                <b>Maintenance & Bulking</b>
            </div>

            <div class="mine2">
                With these charts here, you can see the general percentage of carbs, protein, and fats you should be having to reach you fitness 
                goals.  However, as I stated before, there might be some slight tweaks required depending on your body type.
                <br><br>

                For example, if your body is the type to put on weight quick and have a very difficult time losing, it might be a better idea to 
                lower the amount of carbs you intake and replace it with protein instead.
                <br><br>

                If you want to find out an estimated amount of carbs, protein, and fats you should be consuming based on your exercise level and
                other factors, try out our Macro Calculator below.
            </div>

            <div class="calculator">

                <div class="name">
                    <h2>Macro Calculator</h2>
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
    
                            Exercise Level:
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
    
                            Goal:
                            <select id="goals">
                                <option value="cut">Cut</option>
                                <option value="maint">Maintain</option>
                                <option value="bulk">Bulk</option>
                            </select>
                            <br>
    
                            <input type="button" value="Calculate" onclick="macroCalculate()" name="Calculate">
                            <br>
    
                            Result:
                            <br>
                            <input type="text" id="carbsres"> 
                            <input type="text" id="carbsgrams">
                            Carbs
                            <br>
    
                            <input type="text" id="proteinres">
                            <input type="text" id="proteingrams">
                            Protein
                            <br>
    
                            <input type="text" id="fatsres">
                            <input type="text" id="fatsgrams">
                            Fats
                            
                        </form>
                        
                        <?php if(isset($_SESSION['username'])) : ?>
                            <button onclick="save()">Save Macros</button>
                        <?php endif; ?>

                </div>
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <script type="text/javascript">
                
                    var carbs, carbsgram = 0;
                    var protein, proteingram = 0;
                    var fats, fatsgram = 0;
                    var goalinput = "";
            
                    function macroCalculate() {
                        var ag, aginput;
                        var wt, wtinput, wtselect;
                        var ht, htinput;
                        var geninput;
                        var ex, exinput;
                        var bmr;
                        var goal;
                    

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
                                wt = wtinput;
                            }

                            if(wtselect === "kilos") {
                                wt = wtinput*2.2;
                            }

                            wt = wt*4.35;

                            bmr = wt + ht - ag;

                            exinput = document.getElementById("exercise").value;

                            
                            if(exinput === "sedentary") {
                                ex = 1.2
                            }
                            if(exinput === "light") {
                                ex = 1.3;
                            }
                            if(exinput === "moderate") {
                                ex = 1.4;
                            }
                            if(exinput === "heavy") {
                                ex = 1.6;
                            }
                            if(exinput === "veryheavy") {
                                ex = 1.8;
                            }

                            bmr = bmr*ex + 655;

                            goalinput = document.getElementById("goals").value;

                            if(goalinput === "cut") {
                                bmr = bmr*0.8;
                                protein = bmr*0.45;
                                protein = Math.round(protein);
                                proteingram = protein/4;
                                proteingram = Math.round(proteingram);
                                carbs = bmr*0.45;
                                carbs = Math.round(carbs);
                                carbsgram = carbs/4;
                                carbsgram = Math.round(carbsgram);
                                fats = bmr*0.05;
                                fats = Math.round(fats);
                                fatsgram = fats/9;
                                fatsgram = Math.round(fatsgram);

                                document.getElementById("proteinres").value = protein + " calories";
                                document.getElementById("proteingrams").value = proteingram + " grams";
                                document.getElementById("carbsres").value = carbs + " calories";
                                document.getElementById("carbsgrams").value = carbsgram + " grams";
                                document.getElementById("fatsres").value = fats + " calories";
                                document.getElementById("fatsgrams").value = fatsgram + " grams";

                            }

                            if(goalinput === "maint") {
                                bmr = bmr;
                                protein = bmr*0.35;
                                protein = Math.round(protein);
                                proteingram = protein/4;
                                proteingram = Math.round(proteingram);
                                carbs = bmr*0.52;
                                carbs = Math.round(carbs);
                                carbsgram = carbs/4;
                                carbsgram = Math.round(carbsgram);
                                fats = bmr*0.13;
                                fats = Math.round(fats);
                                fatsgram = fats/9;
                                fatsgram = Math.round(fatsgram);

                                document.getElementById("proteinres").value = protein + " calories";
                                document.getElementById("proteingrams").value = proteingram + " grams";
                                document.getElementById("carbsres").value = carbs + " calories";
                                document.getElementById("carbsgrams").value = carbsgram + " grams";
                                document.getElementById("fatsres").value = fats + " calories";
                                document.getElementById("fatsgrams").value = fatsgram + " grams";
                            }

                            if(goalinput === "bulk") {
                                bmr = bmr*1.1;
                                protein = bmr*0.35;
                                protein = Math.round(protein);
                                proteingram = protein/4;
                                proteingram = Math.round(proteingram);
                                carbs = bmr*0.52;
                                carbs = Math.round(carbs);
                                carbsgram = carbs/4;
                                carbsgram = Math.round(carbsgram);
                                fats = bmr*0.13;
                                fats = Math.round(fats);
                                fatsgram = fats/9;
                                fatsgram = Math.round(fatsgram);

                                document.getElementById("proteinres").value = protein + " calories";
                                document.getElementById("proteingrams").value = proteingram + " grams";
                                document.getElementById("carbsres").value = carbs + " calories";
                                document.getElementById("carbsgrams").value = carbsgram + " grams";
                                document.getElementById("fatsres").value = fats + " calories";
                                document.getElementById("fatsgrams").value = fatsgram + " grams";
                            }
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
                                wt = wtinput;
                            }

                            if(wtselect === "kilos") {
                                wt = wtinput*2.2;
                            }

                            wt = wt*6.23;

                            bmr = wt + ht - ag;

                            exinput = document.getElementById("exercise").value;

                            
                            if(exinput === "sedentary") {
                                ex = 1.2
                            }
                            if(exinput === "light") {
                                ex = 1.3;
                            }
                            if(exinput === "moderate") {
                                ex = 1.4;
                            }
                            if(exinput === "heavy") {
                                ex = 1.6;
                            }
                            if(exinput === "veryheavy") {
                                ex = 1.8;
                            }

                            bmr = bmr*ex + 65;

                            goalinput = document.getElementById("goals").value;

                            if(goalinput === "cut") {
                                bmr = bmr*0.8;
                                protein = bmr*0.45;
                                protein = Math.round(protein);
                                proteingram = protein/4;
                                proteingram = Math.round(proteingram);
                                carbs = bmr*0.45;
                                carbs = Math.round(carbs);
                                carbsgram = carbs/4;
                                carbsgram = Math.round(carbsgram);
                                fats = bmr*0.05;
                                fats = Math.round(fats);
                                fatsgram = fats/9;
                                fatsgram = Math.round(fatsgram);

                                document.getElementById("proteinres").value = protein + " calories";
                                document.getElementById("proteingrams").value = proteingram + " grams";
                                document.getElementById("carbsres").value = carbs + " calories";
                                document.getElementById("carbsgrams").value = carbsgram + " grams";
                                document.getElementById("fatsres").value = fats + " calories";
                                document.getElementById("fatsgrams").value = fatsgram + " grams";

                            }

                            if(goalinput === "maint") {
                                bmr = bmr;
                                protein = bmr*0.35;
                                protein = Math.round(protein);
                                proteingram = protein/4;
                                proteingram = Math.round(proteingram);
                                carbs = bmr*0.52;
                                carbs = Math.round(carbs);
                                carbsgram = carbs/4;
                                carbsgram = Math.round(carbsgram);
                                fats = bmr*0.13;
                                fats = Math.round(fats);
                                fatsgram = fats/9;
                                fatsgram = Math.round(fatsgram);

                                document.getElementById("proteinres").value = protein + " calories";
                                document.getElementById("proteingrams").value = proteingram + " grams";
                                document.getElementById("carbsres").value = carbs + " calories";
                                document.getElementById("carbsgrams").value = carbsgram + " grams";
                                document.getElementById("fatsres").value = fats + " calories";
                                document.getElementById("fatsgrams").value = fatsgram + " grams";
                            }

                            if(goalinput === "bulk") {
                                bmr = bmr*1.1;
                                protein = bmr*0.35;
                                protein = Math.round(protein);
                                proteingram = protein/4;
                                proteingram = Math.round(proteingram);
                                carbs = bmr*0.52;
                                carbs = Math.round(carbs);
                                carbsgram = carbs/4;
                                carbsgram = Math.round(carbsgram);
                                fats = bmr*0.13;
                                fats = Math.round(fats);
                                fatsgram = fats/9;
                                fatsgram = Math.round(fatsgram);

                                document.getElementById("proteinres").value = protein + " calories";
                                document.getElementById("proteingrams").value = proteingram + " grams";
                                document.getElementById("carbsres").value = carbs + " calories";
                                document.getElementById("carbsgrams").value = carbsgram + " grams";
                                document.getElementById("fatsres").value = fats + " calories";
                                document.getElementById("fatsgrams").value = fatsgram + " grams";
                            }
                            
                        }

                    }
                    
                    function save() {
                        if(carbs != null && protein != null && fats != null) {
                            $.post('savemacros.php',
                            {
                                carbs : carbs,
                                carbsgram : carbsgram,
                                protein : protein,
                                proteingram : proteingram,
                                fats : fats,
                                fatsgram : fatsgram,
                                goalinput : goalinput
                            },
                            function() {
                                alert("Macros have been saved");
                            });
                            
                        }else{
                            alert("No macros calculated yet");
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