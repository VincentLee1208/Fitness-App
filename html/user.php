<?php 
    session_start();
    $db = mysqli_connect('localhost', 'root', '0812Chc.', 'registration');
    $name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/user.css">
    <title>My Account</title>
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
                <b>Welcome <?php  echo $_SESSION['username'] ?></b>
            </div>
            
            <div class="macros">
                <h3>Saved Macros</h3>
                
                <form method ="POST" action = "delete.php">
                
                <?php
                    echo "<table class='macros'><tr><th>Date</th> <th>Goal</th> <th>Carbs Calories</th> <th>Carbs Grams</th> <th>Protein Calories</th> <th>Protein Grams</th> <th>Fats Calories</th> <th>Fats Grams</th> <th>Delete</th></tr>";
                    
                    if($db-> connect_error) {
                        die("Connection failed: " . $db-> connect_error);
                    }
    
                    $sql = "SELECT * FROM macros";
                    
                    $result = mysqli_query($db, $sql);
                    
                    if($result->num_rows > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            if($row["username"] == $name) {
                                echo "<tr><td>".$row["date"]."</td><td>".$row["goalinput"]."</td><td>".$row["carbs"]."</td><td>".$row["carbsgram"]."</td><td>".
                                $row["protein"]."</td><td>".$row["proteingram"]."</td><td>".$row["fats"]."</td><td>".$row["fatsgram"]."</td><td><input type='checkbox' value=".$row["id"]. " name='deletemac[]'></td></tr>";
                            }
                        }
                    }
                    
                    echo "</table>";
                    
                ?>
                
                    <input type="submit" name="delete" id="delete" value="Delete Selected">
                </form>
                
            </div>
            
            <div class = "calories">
                <h3>Saved Calories</h3>
                
                <form method ="POST" action = "delete.php">
                    
                    <?php
                        echo  "<table class='calories'><tr><th>Date</th> <th>Calories</th> <th>Delete</th></tr>";
                        
                        if($db->connect_error) {
                            die("Connection failed: " . $db-> connect_error);
                        }
                        $sql = "SELECT * FROM calories";
                        
                        $result = mysqli_query($db, $sql);
                        
                        if($result->num_rows > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                if($row["username"] == $name) {
                                    echo "<tr><td>".$row["date"]."</td><td>".$row["calories"]."</td><td><input type='checkbox' value=".$row["id"]. " name='deletecalories[]'></td></tr>";
                                }
                            }
                        }
                        
                        echo "</table>";
                        
                    ?>
                    
                    <input type="submit" name="deletecal" id="deletecal" value="Delete Selected">
                </form>
            </div>
            
            <div class = "bodyworkout">
                <h3>Body Part Split Exercises</h3>
                    
                <form method="POST" action ="delete.php">
                    
                    <?php 
                        echo "<table class='workouts'><tr><th>Exercise</th> <th>Delete</th></tr>";
                        
                        if($db->connect_error) {
                            die("Connection failed: " . $db-> connect_error);
                        }
                        
                        $sql = "SELECT * FROM workouts";
                        
                        $result = mysqli_query($db, $sql);
                        
                        if($result->num_rows > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                if($row["username"] == $name) {
                                    echo "<tr><td>".$row["exercise"]."</td><td><input type='checkbox' value=".$row["id"]." name='deletebodyworkouts[]'></td></tr>";
                                }
                            }
                        }
                        
                        echo "</table>";
                    ?>    
                    
                    <input type="submit" name="deletebod" id="deletebod" value="Delete Selected">
                </form>    
            </div>
            
            <div class = "pushpullworkout">
                <h3>Push/Pull Exercises</h3>
                
                <form method="POST" action ="delete.php">
                    
                    <?php
                        echo "<table class='workoutspush'><tr><th>Exercise</th> <th>Delete</th></tr>";
                        
                        if($db->connect_error) {
                            die("Connection failed: " . $db-> connect_error);
                        }
                        
                        $sql = "SELECT * FROM workoutspush";
                        
                        $result = mysqli_query($db, $sql);
                        
                        if($result->num_rows > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                if($row["username"] == $name) {
                                    echo "<tr><td>".$row["exercise"]."</td><td><input type='checkbox' value=".$row["id"]." name='deletepushworkouts[]'></td></tr>";
                                }
                            }
                        }
                        
                        echo "</table>";
                    ?>    
                    
                    <input type="submit" name="deletepush" id="deletepush" value="Delete Selected">
                </form>
            </div> 
            
            <form action="logout.php">
                <input type="submit" name="submit" id="logout" value="Logout">
            </form>
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
        
        