<?php
    ob_start();
    require_once 'include/db.php';
    require_once 'include/nav.php';
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
    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <link rel="stylesheet" href="css/nav.css">
    <title>الصفحة الرئيسية</title>
</head>
<body dir="rtl">
    <div class="home">
            <center>
            <!--  Copid link to Share -->
            <input type="text" name="" style="border: none;background: none; width: 100%; text-align: center;" id="inptocopy" value="<?php echo 'http://abouhiba.dx.am/messageout.php?id='.$my_id; ?>" >
            <br>
            <button id="btnCopy">نسخ الرابط الخاص بي </button>
            <script type="text/javascript">
                const inptocopy = document.getElementById("inptocopy");
                const btnCopy = document.getElementById("btnCopy");

                btnCopy.onclick = function(){
                    inptocopy.select();
                    document.execCommand("Copy");
                }
            </script>
            <!--  Copid link to Share -->
            </center>
            <?php ob_end_flush(); ?>

</body>
</html>
