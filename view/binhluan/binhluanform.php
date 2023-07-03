<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .red{
            color: red;
            font-size: 24px;
        }
        .binhluan table {
            width: 100%;
            text-align: center;
        }
        .binhluan table td:nth-child(1) {
            width: 70%;
        }
        .binhluan table td:nth-child(2) {
            width: 10%;
            /* text-align: center; */
        }
        .binhluan table td:nth-child(3) {
            width: 55%;
        }
    </style>
</head>
<body>

<div class="row mb ">
    
    <div class="boxtitle">BÌNH LUẬN</div>
    <?php
        if(isset($_SESSION['user'])){
    ?>
    <div class="boxcontent2 binhluan">
    <table>  
            <tr class="">
                <th>Nội dung</th>
                <th>Id user</th>
                <th>Ngày bình luận</th>
            </tr>
            <?php
            // echo "Nội dung bình luận ở đây ".$idpro;
                foreach ($dsbl as $bl) {
                    extract($bl);
                    $linkdm = "index.php?act=sanpham&iddm=".$id;
                    echo '<tr class="mb10"><td>'.$noidung.'</td>';
                    echo '<td>'.$iduser.'</td>';
                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                }
            ?>
    </table>   
            
    </div>
    <div class="boxfooter searchbox">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <input class="mb10" type="text" name="noidung">
            <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
    </div>
    <?php
        if(isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
            $noidung = $_POST['noidung'];
            $noidung = $_POST['noidung'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h::i::a d/m/Y');
            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    ?>
    <!-- <div class="red"> -->
    <?php }
    else echo'<div><h1 class="red">Bạn phải đăng nhập mới được bình luận.</h1></div>' ?>
    <!-- </div> -->

</div>
    
</body>
</html>