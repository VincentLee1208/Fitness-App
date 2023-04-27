<?php
    session_start();
    
    $db = mysqli_connect('localhost', 'root', '0812Chc.');
    mysqli_select_db($db, 'registration');
    
    $name = $_SESSION['username'];
    
    $calories = $_POST['result'];
    $date = date("Y/m/d");
    
    $query = "INSERT INTO calories (date, username, calories) VALUES ('$date', '$name', '$calories')";
    
    mysqli_query($db, $query);
?>