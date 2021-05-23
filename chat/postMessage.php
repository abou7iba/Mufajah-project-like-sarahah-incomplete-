<?php 
    ob_start();
    session_start();
    require_once '../include/db.php';
    if(isset($_POST['message'])){
        $time = date("H:i");
        mysqli_query($conn,"INSERT INTO chat VALUES('', '".$_POST['message']."', '".$_SESSION['username']."','$time') ");
    }
?>
    <?php ob_end_flush(); ?>
