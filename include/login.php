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
    <title>تسجيل الدخول</title>
</head>
<body>
    <div class="login">
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="post">
            <center>
            <!-- &#128525; -->
                <h1> &#128525; اهلا بيكم في موقع مُفاجأة  </h1>
                <h3> &#128521; يالا سجل دخول دلوقتي وشوف حابيبك بيقولولك اي </h3>
                <input type="text" placeholder="رقم موبايلك" name="txtphone" required maxlength="11" minlength="11">
                <input type="password" placeholder="كلمة السر" name="txtpass" required  >
                <input type="submit" value="تسجيل الدخول" name="login">
                <?php
 
                if(isset($_POST['login'])){
                        $txtphone       =  $_POST['txtphone'];
                        $txtpass        =  $_POST['txtpass'];
                        //  Sql 
                        $sql_log_sel = "SELECT * FROM users WHERE phone='$txtphone' AND password = '$txtpass' ";
                        $res = mysqli_query($conn, $sql_log_sel);
                        while($row = mysqli_fetch_assoc($res)){
                            $_SESSION['id'] = $row['id'];
                            $phone = $row['phone'];
                            $pass = $row['password'];
                            $name = $row['fname']. " ".$row['lname'];
                            $err = "";
                            $suc = "";

                            if($txtphone == $phone){
                                if($txtpass == $pass){
                                    $err = "";
                                    $suc = "&#128525; "."اهلا بعودتك ".$name."<br>";
                                    header('REFRESH:1;URL=../index.php'); 
                                }else{
                                    $err = "كلمة السر غلط حاول تاني معلش ... ";
                                    $suc = "";
                                }
                            }else{
                                $err = "رقم الموبايل غلط حاول  تاني الله يباركلك وركز &#128514;";
                                $suc = "";
                            }


                        //     if($txtphone = $phone && $txtpass == $pass){
                        //         echo "&#128525; "."اهلا بعودتك ".$name."<br>";
                        //         header('REFRESH:1;URL=../index.php'); 
                        //     }
                        //     elseif($txtphone !== $phone){
                        //         echo "رقم الموبايل غلط جرب تاني ";
                        //         header('REFRESH:2;URL=login.php');
                        //     }
                        //     elseif($txtpass  !== $pass){
                        //         echo "اهلا " .$name." كلمة السر غلط جرب تاني ";
                        //         header('REFRESH:2;URL=login.php');
                        //     }
                        //     else{
                        //         echo "كلمة السر او رقم الموبايل غلط جرب تاني";
                        //     }
                        // }
                        echo $err;
                        echo $suc;    
                    }
                        
                    }
                ?>
        </form>
        <button><a href="signup.php">تسجيل حساب جديد</a></button>

        </center>
        <?php ob_end_flush(); ?>

    </div>
</body>
</html>