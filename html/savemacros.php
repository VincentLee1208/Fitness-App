<?php
    session_start();
    
    $db = mysqli_connect('localhost', 'root', '0812Chc.');
    mysqli_select_db($db, 'registration');
    
    $name = $_SESSION['username'];
    
    
    $carbs = $_POST['carbs'];
    $carbsgram = $_POST['carbsgram'];
    $protein = $_POST['protein'];
    $proteingram = $_POST['proteingram'];
    $fats = $_POST['fats'];
    $fatsgram = $_POST['fatsgram'];
    $goalinput = $_POST['goalinput'];
    $date = date("Y/m/d");
    
    $query = "INSERT INTO macros (username, date, goalinput, carbs, carbsgram, protein, proteingram, fats, fatsgram) VALUES ('$name', '$date', '$goalinput', '$carbs', '$carbsgram', '$protein', '$proteingram', '$fats', '$fatsgram')";
    mysqli_query($db, $query);
    
    
    
?>