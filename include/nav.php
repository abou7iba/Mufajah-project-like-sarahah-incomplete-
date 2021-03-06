<?php
    session_start();
    require_once 'include/db.php';
    $my_id = $_SESSION['id'];
    if(isset($my_id))
        echo "";
    else
        header('LOCATION: include/login.php');
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
    <link rel="stylesheet" href="../css/nav.css">
    <title></title>
</head>
<body dir="rtl">
    <nav>
        <input type="checkbox" name="" id="res-menu">
        <label for="res-menu">
            <i class="fa fa-bars" id="sign-one"></i>
            <i class="fa fa-times" id="sign-two"></i>
        </label>
        <h1> <a href="">مُفاجأة</a></h1>
        <ul>
            <li><a href="index.php">الصفحة الرئيسية</a></li>
            <li><a href="profile.php?id=<?php echo $my_id;?>">صفحتي</a></li>
            <li><a href="messageout.php?id=<?php echo $my_id;?>">رسالة خارجية </a></li>
            <li><a href="messages.php">الرسائل</a></li>
            <li><a href="sentmes.php">أرسل رسالة</a></li>
            <li><a href="chat/chat.php">الشات</a></li>
            <li><a href="#">سياسية الخصوصية</a></li>
            <li><a href="whoami.php">من نحن </a></li>
            <li><a href="include/logout.php">تسجيل الخروج</a></li>
        </ul>
    </nav><br>
</body>
</html>
<?php ob_end_flush(); ?>