<?php
    session_start();
    
    $db = mysqli_connect('localhost', 'root', '0812Chc.', 'registration');

    if(isset($_POST['delete'])) {
        
        if(!empty($_POST['deletemac'])) {
            foreach($_POST['deletemac'] as $id) {
                $sql = "DELETE FROM macros WHERE id = $id";
                mysqli_query($db, $sql);
            }
        }
        
        header("location: user.php");
    }
    
    if(isset($_POST['deletecal'])) {
        if(!empty($_POST['deletecalories'])) {
            foreach($_POST['deletecalories'] as $idcal) {
                $sql = "DELETE FROM calories WHERE id = $idcal";
                mysqli_query($db, $sql);
            }
        }
        header("location: user.php");
    }
    
    if(isset($_POST['deletebod'])) {
        if(!empty($_POST['deletebodyworkouts'])) {
            foreach($_POST['deletebodyworkouts'] as $idbod) {
                $sql = "DELETE FROM workouts WHERE id = $idbod";
                mysqli_query($db, $sql);
            }
        }
        
        header("location: user.php");
    }
    
    if(isset($_POST['deletepush'])) {
        if(!empty($_POST['deletepushworkouts'])) {
            foreach($_POST['deletepushworkouts'] as $idpush) {
                $sql = "DELETE FROM workoutspush WHERE id = $idpush";
                mysqli_query($db, $sql);
            }
        }
        
        header("location: user.php");
    }
    
    
?>