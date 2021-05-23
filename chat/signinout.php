<?php
    ob_start();
    session_start();
    $_SESSION['username'] = $_POST['username'];
?>
<?php ob_end_flush(); ?>
