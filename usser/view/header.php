<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <!-- code viết phần menu -->
    <header>
        <div class="tong-header">
            <div class="item-logo">
                <a href="./index.php">
                    <img src="./img/Screenshot 2022-11-05 121513.png" alt="">
                </a>
            </div>
            <div class="item-menu">
                <ul>
                    <a href="index.php?act=danhmuc">
                        <li>Project</li>
                        <img src="./img/trosuong.png" alt="">
                    </a>
                    <div class="cha-danhmuc-sp">
                        <a href="index.php?act=sanpham">
                            <li>Sản phẩm</li>
                            <img src="./img/trosuong.png" alt="">
                        </a>
                        <div class="danhmuc-sp">
                            <?php
                            
                            foreach ($dsdm as $sp ) {
                                echo' <a href="index.php?act=spdm&iddm='.$sp['id'].'"><li>'.$sp['tendm'].'</li></a></br>';
                            }
                            
                            ?>
                       
                           
                        </div>
                        
                    </div>
                    <a href="">
                        <li>Hướng dẫn</li>
                        <img src="./img/trosuong.png" alt="">
                    </a>
                    <a href="index.php?act=danhmuc">
                        <li>CSKH</li>
                        <img src="./img/trosuong.png" alt="">
                    </a>
                    
                </ul>
            </div>
            <div class="item-chucnang">
                <?php
                                    if(isset($_SESSION['username'])&&($_SESSION['username']!="")){
                                        echo '<li class="nav-item"><a href="index.php?act=thongtin">'.$_SESSION['username'].'</a></li>';
                                        echo '<li class="nav-item"><a href="index.php?act=thoat">thoát</a></li>';
                                    }else{
                                
                                echo '<a href="index.php?act=dangnhap"><img src="./img/user.png" alt=""></a>';
                                }?>
                <a href=""><img src="./img/magnifying-glass.png" alt=""></a>
                <a href="index.php?act=addcart"><img src="./img/shopping-cart.png" alt=""></a>
                <a href=""><img src="./img/settings.png" alt=""></a>
            </div>
        </div>
    </header>
    <!-- end -->