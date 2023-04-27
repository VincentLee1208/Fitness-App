<?php
    session_start();
    
    $db = mysqli_connect('localhost', 'root', '0812Chc.');
    mysqli_select_db($db, 'registration');
    
    
    if(isset($_SESSION['username'])) {
        if(!empty($_POST['workoutspush'])) {
            $name = $_SESSION['username'];
            
            foreach($_POST['workoutspush'] as $exercise) {
                $query = "INSERT INTO workoutspush (username, exercise) VALUES ('$name' , '$exercise')";
                mysqli_query($db, $query);
            }
            
        }
    }
    
   header('location: pushpull.php');
    
?>