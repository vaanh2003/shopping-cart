<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    include "../../model/connectdb.php";
    include "../../model/user.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=getall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>bình luận</h2>
    

    <div class="nhapbinhluan">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <input type="hidden" name="">
            <input type="text" name="noidung">
            <input type="submit" value="Bình luận" name="guibinhluan">
        </form>
    </div>
    <div>
       <?php
       
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung=$_POST['noidung'];
            $idpro=$_POST['idpro'];
            $idusser= $_SESSION['iduser'];
            $name = $_SESSION['username'];
            $postdate=date('h:i:sa d/m');
           insert_binhluan($noidung,$idusser,$name,$idpro,$postdate);
           header("Location: ".$_SERVER['HTTP_REFERER']);
        }
       
       ?> 
       <div class="binhluan">
        <table>
            <?php
            foreach ($dsbl as $bl){
                extract($bl);
                echo '
                    <tr><td>"'.$noidung.'"</td>
                    <td>"'.$name.'"</td>
                    <td>"'.$postdate.'"</td></tr>
                ';

            }
            ?>
        </table>
    </div>
    </div>
</body>
</html>