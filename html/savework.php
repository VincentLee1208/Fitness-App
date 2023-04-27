<?php
    session_start();
    
    $db = mysqli_connect('localhost', 'root', '0812Chc.');
    mysqli_select_db($db, 'registration');
    
    
    if(isset($_SESSION['username'])) {
        if(!empty($_POST['workouts'])) {
            $name = $_SESSION['username'];
            
            foreach($_POST['workouts'] as $exercise) {
                $query = "INSERT INTO workouts (username, exercise) VALUES ('$name' , '$exercise')";
                mysqli_query($db, $query);
            }
            
        }
    }
    
   header('location: bodypart.php');
    
?>