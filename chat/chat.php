<?php 
    ob_start();
    session_start();
    require_once '../include/db.php';

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
    <link rel="stylesheet" href="chat.css">
    <script src="jquery-3.6.0.min.js"></script>
    <title>دردشة</title>
</head>
<body dir="rtl">
    <center>
<div id="chatmufajah">
    <h3>شات موقع مُفاجأة</h3>
    <a href="http://abouhiba.dx.am/whoami.php">برمجة أحمد أبوهيبه</a><br>
    <input type="hidden" name="اعلان">
    <span style="color:red;" class="user-a"> اسم المستخدم - </span> 
    <span style="color:green;"class="user-b" > الرسالة -  </span>
    <span style="color:#1a508b;"class="user-c">وقت الرسالة </span><br>
    <hr>
    <div id="messages">
        
    



    </div>
    <div id="sendDiv">
        <textarea name="" placeholder="رسالتك هنا ..." id="message" cols="40" rows="2"></textarea>
        <button id="sendbtn" onclick="sendMessage()">ارسال</button>
    </div>
    <div id="login">
        <center>
            <!-- <label for=""><b>اسم المستخدم : </b></label><br> -->
        <input type="text" placeholder="اسمك هنا ... " id="username" size="50" ></center>
        <button id="lgnbtn" onclick="login()">بدء الدردشة</button><br><br>
    </div>
    <a href="http://abouhiba.dx.am/include/signup.php">موقع مُفاجأة</a>

</div>
</center>

    <script src="showMessage.js"></script>
    <script src="postMessage.js"></script>
    <script src="signinout.js"></script>
    <?php ob_end_flush(); ?>

</body>
</html>