<?php
    ob_start();
    require_once '../include/db.php';
    $ch_query = mysqli_query($conn,"SELECT * FROM chat");
    while($row = mysqli_fetch_assoc($ch_query)){
        $user = $row['username'];
        $message = $row['message'];
        $time = $row['time'];
        ?>
        <span style="color:red;" class="user-a"><?php echo $user." : "; ?></span> 
        <span style="color:green;"class="user-b" ><?php echo $message." : "; ?></span>
        <span style="color:#1a508b;"class="user-c"><?php echo $time; ?></span><br>
<?php } ?>
<?php ob_end_flush(); ?>
