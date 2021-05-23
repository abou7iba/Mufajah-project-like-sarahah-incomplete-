<?php
    ob_start();
    session_start();
    if(isset($_SESSION['id']))
        header('LOCATION: ../index.php');
    else
        echo "";
    require_once 'db.php';
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
    <link rel="stylesheet" href="../css/log.css">
    <title> حساب جديد</title>
</head>
<body>
    <div class="signup">
    <center>
        <form action="" method="post">
            <!-- &#128640; -->
            <h1> &#128525; اهلا بيكم في موقع مُفاجأة  </h1>
            <h3>&#128640; التسجيل مجاني - سهل - سريع</h3>
            <br>
            <input type="text" placeholder="اسمك الأول" name="txtfname" required maxlength="30" minlength="3">
            <input type="text" placeholder="اسمك الأخير" name="txtlname" required maxlength="30" minlength="3">
            <input type="text" placeholder=" رقم موبايلك"  name="txtphone" required maxlength="11" minlength="11">
            <input type="password" placeholder="الرقم السري" name="txtpassword" required maxlength="20" minlength="6">
            <input type="submit" value="تسجيل" name="signup">
            <!-- PHP Code to sign up -->
            <?php
            if(isset($_POST['signup'])){
                $fname = htmlspecialchars($_POST['txtfname']);
                $lname = htmlspecialchars($_POST['txtlname']);
                $txtphone =  htmlspecialchars($_POST['txtphone']);
                $txtpassword = htmlspecialchars($_POST['txtpassword']);

                // val phone 
                if(is_numeric($txtphone)){
                    // insert Data to database
                    $sql_sign_ins = "INSERT INTO users (fname, lname,  phone, password) VALUES ('$fname', '$lname', '$txtphone', '$txtpassword')" ;
                    mysqli_query($conn, $sql_sign_ins);
                    // echo Message to success signup
                    echo " &#128525; مبرووك علينا بقيت فرد من العيله ";
                    header('REFRESH:2;URL=login.php');
                }else{
                    echo " &#128514; لازم رقم التليفون يكون رقم ";
                }
            }

            ?>
        </form>
        <span><button><a href="login.php">تسجيل الدخول</a></button></span>
            </center>
    </div>
    <?php ob_end_flush(); ?>
</body>
</html>