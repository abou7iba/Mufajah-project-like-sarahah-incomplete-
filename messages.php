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
<?php
     $my_phone = "";
    $sql_users_sel = "SELECT * FROM users WHERE id='$my_id' ";
    $res_user = mysqli_query($conn, $sql_users_sel);
    while($row = mysqli_fetch_assoc($res_user)){
        $my_phone = $row['phone'];
        $user_id = $row['id'];
        }
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
    <link rel="stylesheet" href="css/message.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>الرسائل</title>
</head>
<body dir="rtl">  

            <!--  Copid link to Share -->
            <input type="text" name="" style="border: none;background: none; width: 100%; text-align: center;" id="inptocopy" value="<?php echo 'http://abouhiba.dx.am/messageout.php?id='.$my_id; ?>" >
            <br>
            <button id="btnCopy">نسخ الرابط الخاص بي </button>
            <br>
            <script type="text/javascript">
                const inptocopy = document.getElementById("inptocopy");
                const btnCopy = document.getElementById("btnCopy");

                btnCopy.onclick = function(){
                    inptocopy.select();
                    document.execCommand("Copy");
                }
            </script>
            <!--  Copid link to Share -->
            <!-- &#9993; -->
        <h1>الرسائل المستلمه &#9993; </h1>
        <?php 
        $sql_mess_sel = "SELECT * FROM messages WHERE phone='$my_phone' ";
        $res = mysqli_query($conn, $sql_mess_sel);
        while($row = mysqli_fetch_assoc($res)){
            $message = $row['message'];
        ?>
<div class="wrapper">
        <div class="row row1">
            <section>
            <p><?php echo $message;  ?></p>
                <div class="details">                    
                <span class="date"><i class="far fa-clock"></i><br><?php echo  $row['time'] ?></span>

                <span class="date"><i class="fas fa-calendar-week"></i> <br><?php echo  $row['date'];?>  </span>
                
                <span>                <div class="bottom">
                    <a href="messages.php?del=<?php echo $row['id']; ?>"  ><i class="fas fa-trash-alt"></i></a>

                    <?php 
                     if(isset($_GET['del'])){
                        $de_id = $_GET['del'];
                        mysqli_query($conn, "DELETE FROM messages WHERE id='$de_id'");
                        header("location: messages.php");
                         }
                    ?>
                </div></span></div>
          
            </section>
        </div>
    </div> 
    <hr>
    <?php }?>
    <?php ob_end_flush(); ?>

    </div>
    </div>
</body>
</html>
