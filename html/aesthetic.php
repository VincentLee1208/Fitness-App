<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/aesthetic.css">
    <title>Look Good</title>
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
            <b>How To "Look Aesthetic"</b>
        </div>

        <main>
            <div class="info">
                For some people their goals in working out isn't to become the Hulk.  Nor is it to lift
                as much as they can possibly can.  
                <br><br>

                Instead, what they aim to achieve is to look AMAZING.
                <br><br>

                Not just look great, but to reach a level that is on par with those like famous actors.  
                Well I'm here to tell you that there is a straightforward but difficult path to that goal.
            </div>

            <div class="smalltitle1">
                <b>What Makes It Aesthetic?</b>
            </div>

            <div class="info">
                You might be wondering, what is it that makes a person's physique so much more aesthetic.  
                When looking at these two muscular people, you can say that they both look very strong and fit.
                <br><br>
                
                But at the same time, you can tell that one look more aesthetic than the other.
            </div>

            <div class="photo1">
                <img src="../images/nicefit.jpg" alt="ZacEfron" width=225 height=250>
            </div>

            <div class="photo2">
                <img src="../images/overmuscle.jpg" alt="Super Jacked" width=300 height=250>
            </div>

            <div class="info">
                As you've probably figured out from looking at those two photos, achieving an aesthetic body isn't 
                all about having big muscles.  
                <br><br>
                
                So what is it then that makes them look so appealing?
                <br><br>

                Symmetry, proportions, size, shape, and conditioning, all play a part in achieving an aesthetic physique.
                A strong looking body, with broad shoulders, a slim waist, legs to match, and a solid six pack to bring 
                it all together.  Here we'll give you some of our tips that can help you reach that Greek god physique that 
                you're striving for.
            </div>

            <hr>

            <div class="list">
                <b>1</b>
            </div>

            <div class="info">
                <div class="reasonsstart">
                    <b>Pay More Attention To Certain Muscles</b>
                </div>

                As I've said before, there are certain parts of your body that play a large role in getting an aesthetic boy,
                Namely, your shoulders, abs, waist, and quads.
                <br><br>

                Put some extra emphasis on training those areas in your workout program, and you'll have that V-shaped upper 
                body that people long for.  As you slowly move towards the physique you're aiming for, remember to switch up 
                the number of repetitions and sets that you perform in order to keep your body changing.  Stick with one program
                for too long and eventually your body will become accustomed to it.
            </div>

            <div class="liston">
                <b>2</b>
            </div>

            <div class="info">
                <div class="reasons">
                    <b>Train For Balance</b>
                </div>

                When we speak about balance, we're talking about your body proportions.  It never looks good to have stick thin legs
                with a monster upper body or tree trunk legs with a frail torso.  Since there is no steadfast rule to make sure that 
                you'll always stay perfectly proportionate when training, the only tip that I can give you is 
                <br><br> 

                "Train Everything". 
                <br><br>

                Never neglect a body part when training because that is what eventually leads to an unbalanced physique.  As long as
                you continue to work every muscle group, you will stay proportionate, with maybe a slight tweaking here and there on
                your part in terms of weight or intensity.
            </div>

            <div class="liston">
                <b>3</b>
            </div>

            <div class="info">
                <div class="reasons">
                    <b>Train For Symmetry</b>
                </div>

                Symmetry refers to the ratio between your left and right side.  If you were to split your body down the middle, are they
                the same on both sides?  Is your right bicep the same as your left bicep?  Or is your left quadricep the same size as your
                right?  One of the key factors to having an aesthetic physique is to have a symmetrical and balanced body. 
                <br><br>

                <div class="photo3">
                        <img src="../images/barbell.png" width=400 height=200>
                </div>

                It is inevitable that you will get tired as you go through your workout.  This fatigue will eventually cause your body to 
                compensate for certain muscles that can't handle the weight.  For example, if you were doing bicep curls with a single bar, 
                as your arms get tired, your dominant arm might begin to lift more of the weight in order to finish the set.  This will lead
                to muscle dissymmetry in the long run.
                <br><br>

                In order to counter this from happening, you should add unilateral exercises into your workout routine.  For those who don't
                know, unilateral exercises are exercises where you are only training one side at a time.  
                <br><br>

                <div class="photo4">
                    <img src="../images/dumbbell.png" width=400 height=200>
                </div>

                For example, instead of doing bicep curls with only a single bar and working both arms at the same time, do bicep curls with 
                dumbbells.  You would start the exercise by using your weaker side.  Whatever number of repetitions your weaker side reaches,
                you do the same on your dominant side.  This may seem a little easy for your stronger side at first, but eventually both muscles
                will catch up to one another.
            </div>

            <div class="liston1">
                <b>4</b>
            </div>

            <div class="info">
                <div class="reasons1">
                    <b>Look Defined</b>
                </div>

                No matter how nice your muscle structure is, it won't matter if there's a layer of fat covering it for people to see.  In order 
                to truly showcase your body, it has to be leaned out.  
                <br><br>

                This means that cardio is a necessity.  When lifting, keep your rest intervals between sets short.  It will keep your heartrate up
                and allow you to burn more calories.  Cardio can also come from other activities like running, swimming, or any other sports.
                <br><br>

                Your exercise plays a large role in getting lean but your diet plays an even larger role.  It gets quite in-depth so check out our 
                "diet" section on the right-side navigation bar and the "lose weight" section in the home page to get a really good understanding of
                what is required.
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
