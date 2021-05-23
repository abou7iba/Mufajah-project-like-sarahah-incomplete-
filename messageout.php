<?php 
    ob_start();
    $myid = $_GET['id'];
    require_once 'include/db.php';
    include_once 'include/nava.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/sent.css">
    <link rel="stylesheet" href="css/nav.css">

    <title>رسالة سرية</title>
</head>
<body dir="rtl">  
    <div class="messages">
    <center>
    <form action="" method="post">
    <br>
    <?php 
    $sql_users_sel = "SELECT phone , fname, lname FROM users WHERE id= '$myid' ";
    $res_user = mysqli_query($conn, $sql_users_sel);

    while($row = mysqli_fetch_assoc($res_user)){
        $tophone = $row['phone'];
        $name = $row['fname']." ".$row['lname'];
    }
        ?>
        <!-- &#128514; -->
        <input type="hidden" placeholder="الرقم اللي هتبعتله رساله" value="<?php echo $tophone; ?>" name="tophone">
        <p>اكتب رساله سريه الي <?php echo $name; ?> .. </p>
        <input type="text" placeholder="أكتب ومش هفضحك &#128514; " name="message" class="message"">
        <input type="submit" value="ابعت وربنا يستر &#128514; " name="sent" class="sent">
        <?php
            if(isset($_POST['sent'])){
                $myid = $_POST['tophone'];
                $message = $_POST['message'];
                $time = date("H:i");
                $date = date("j, n, Y");

                $sql_sent_ins = "INSERT INTO messages (phone, message, time, date, user_id) VALUES ('$myid', '$message','$time','$date','6')" ;
                mysqli_query($conn, $sql_sent_ins);
            }
            ?>
        </center>
        </form>
    </div>
    <?php ob_end_flush(); ?>
</body>
</html>