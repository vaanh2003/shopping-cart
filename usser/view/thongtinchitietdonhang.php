<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
html{
    font-family:  'Roboto Condensed', sans-serif;
}
*{
    margin: 0;
    padding: 0;
}
.col-2>a>img{
    width: 250px;
}
.container{
    position: fixed;
    top: 0px;
    background-color: #fff;
    margin-right: auto;
    padding-left:80px;
    padding-bottom: 20px;
    width: 100%;
    top: -20px;

}
.col-8 .nav-list1{
    margin-left: 150px;
}
.row{
    display: flex;
    max-width: 100%;
    flex-wrap: wrap;
    margin-left: -15px;
    margin-right: -15px;
    margin-top: 40px;

}
header{
    padding: 10px 0 10px 0;
}
a{
    text-decoration: none;
    color: black;
}
a:hover{
    color: rgb(114, 109, 109);
}
col-2{
    flex: 0 0 16.6%;
    max-width: 16.6%;
}
col-3{
    flex: 0 0 25%;
    max-width: 25%;
}
col-8{
    flex: 0 0 66.6%;
    max-width: 66.6%;
}
col-8{
    flex: 0 0 100%;
    max-width: 100%;
}
.menu ul li{
    float:left;
    margin-left: 20px;
    list-style: none;
    font-size: 15px;
}
.menu{
    display: flex;
    justify-self: flex-end;
    align-items: center;
}
.lien-he{
    display: flex;
    margin-left: 73px;
    margin-top: 100px;
    margin-bottom: 30px;
    justify-content: space-between;
    margin-right: 30px;
}    
.lien-he .cua-hang .item-tieu-de>p{
    font-size: 13px;
    color: rgb(66, 65, 65);
    line-height: 1.8;
}
.tieu-de{
    margin-bottom: 30px;
}
.icon1>a>img{
    width: 35px;
    height: 35px;
}
.icon-hai>a>img{
    width: 200px;
}
.icon-tong{
    width: 100%;
}
.item-icon{
    margin-right: 20px;
}
/* trang Đăng nhập */
.user-tong{
    display: flex;
    width: 80%;
    margin: 150px auto 0 auto;
}
.item-menu-user{
    width: 20%;
}
.item-thongtin{
    background-color: white;
    width: 80%;
}
.anh-user{
    display: flex;
    align-items: center;
    margin-top: 20px;
}
.chucnang-user{
    margin-top: 40px;
}
.anh-user img{
    width: 40px;
}
.item-chucnang-1{
    align-items: center;
    display: flex;
}
.item-chucnang-1 a p{
    width: 150px;
}
.chucnang-user img{
    width: 30px;
}
.item-chucnang-2{
    padding-left: 40px;
    margin-top: 10px;
}
.donmua-user {
   
    margin-top: 10px;
    display: flex;
    align-items: center;
}
.donmua-user  a p{
    width: 130px;
}
.donmua-user img{
    width: 30px;
}
body{
    background-color: #f5f5f5;
}
.ten-thongtin{
    color: #4a4a4a;
    width: 95%;
    margin: 20px auto 0 auto;
    padding-bottom: 10px;
    border-bottom: 1px rgb(231, 231, 231) solid;
}
.p-db{
    font-size: 22px;
}
.Tong-nd{
    width: 90%;
    margin-top: 20px;
    margin-left: 50px;
}
.thongtin-user{
    width: 70%;
}
.item-thongtin-luu{
    width: 90%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
.item-thongtin-user{
    width: 90%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
.item-thongtin-user p{
    width: 17%;
    display: flex;
    justify-content: flex-end;
    padding-right: 10px;
}
.item-thongtin-luu p{
    width: 17%;
    display: flex;
    justify-content: flex-end;
    padding-right: 10px;
}
.item-thongtin-user input{
    width: 450px;
    height: 38px;
    border: #c1c1c1 solid 0.5px;
    border-radius: 2px;
}
.img-user{
    width: 25%;
    text-align: center;
}
.img-user img{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 0.5px solid rgb(228, 228, 228);
}
.nut-luu{
    width: 70px;
    height: 35px;
    border: none;
    color: white;
    background-color: black;
}
.ten-sdt{
    display: flex;
}
.p-nhat{
    color: #7a7a7a;
}
.img-nut-capnhat input{
    width: 70px;
    height: 35px;
    border: none;
    color: rgb(67, 38, 233);
    background-color: white;
    font-size: 16px;
}
/* chitiet đon hàng */
.don-hang{
    margin-bottom: 20px;
}
.thongtin-donhang{
    padding-top: 5px;
    padding-bottom: 5px;
    width: 10%;
    display: flex;
    justify-content: space-between;
}
.item-donhang{
    display: flex;
    width: 50%;
    
}
.item-donhanghai{
    width: 50%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.thongtin-user{
    margin-left:10px;

}
.thongtin-user p{
    margin-bottom: 5px;
}
.tong-thongtin-donhang{
    display: flex;
    width: 100%;
    
}
.item-thongtin-diachi{
    width: 35%;
    border-right: 0.5px solid rgb(191, 191, 191);
}
.item-thongtin-trangthai{
    width: 65%;
}
.item-thongtin-sp{
    margin-top: 50px;
    width: 90%;
    
}
.tien-donhang{
    border-top: 1px solid black;
    margin-top: 20px;
    padding-bottom: 30px;
}
.item-tien-donhang{
    display: flex;
    width: 40%;
    justify-content: space-between;
    margin: 0 auto;
}
.item-tien-donhang-db{
    display: flex;
    width: 40%;
    justify-content: space-between;
    margin: 0 auto;
    margin-top: 20px;
}
.item-tien-donhang-db .tp-db{
    font-size: 20px;
    color: rgb(255, 85, 0);
}
/*  */
.thongtin-donhang-sp{
    width: 90%;
    height: 80px;
    align-items: center;
    height: 70px;
    display: flex;
    justify-content: space-between;
    margin-top: 5px;
   
}
.thongtin-donhang p{
    font-size: 20px;
}
.item-donhang-sp{
    height: 100%;
    display: flex;
    align-items: center;
}
.item-donhang-sp img{
    height: 100%;
    margin-right: 5px;
} 
.item-donhang-sp p{
    font-size: 12.5px;
}
</style>
<section>
<div class="user-tong">
            <div class="item-menu-user">
                <div class="anh-user">
                    <img src="./img/good-review.png" alt="">
                    <p><?php echo''.$kq['user'].'';?></p>
                </div>
                <div class="chucnang-user">
                   <div class="item-chucnang-1">
                        <img src="./img/user.png" alt="">
                        <a href="index.php?act=thongtin"><p>Tài khoảng của tôi</p></a>
                        
                   </div>
                    <div class="item-chucnang-2">
                        <a href="index.php?act=thongtin"><p>Hồ sơ</p></a>
                        <a href="index.php?act=thongtindiachi"><p>Địa chỉ</p></a>
                        <a href="http://"><p>Đổi mật khẩu</p></a>
                    </div>
                </div>
                <div class="donmua-user">
                    <img src="./img/analysis.png" alt="">
                    <a href="index.php?act=thongtindonhang"><p>Đơn hàng đã mua</p></a>
                </div>
            </div>
            <div class="item-thongtin">
               <div class="ten-thongtin">
                    <p class="p-db">Chi tiết đơn hàng</p>
               </div>
               <div class="Tong-nd">
                    <div class="tong-thongtin-donhang">
                        <div class="item-thongtin-diachi">
                            <p>Địa chỉ</p>
                            <div class="thongtin-user">
                                <p>Tên người mua: <strong><?php echo ''. $dh['name'].''; ?></strong></p>
                                <p>Số điện thoại : <?php echo ''. $dh['sdt'].''; ?></p>
                                <p>Email :  <?php echo ''. $dh['gmail'].''; ?></p>
                                <p>Địa chỉ :  <?php echo ''. $dh['diachi'].''; ?></p>
                            </div>
                        </div>
                        <div class="item-thongtin-trangthai">
                            <p>Trạng thái</p>
                        </div>
                    </div>
                    <div class="item-thongtin-sp">
                        <p>Sảng phẩm</p>
                        <?php
                       
                       foreach ($kqq as $sp ){
                        if($sp['size']=="s"){
                            $tensize="S";
                        }else if($sp['size']=="m"){
                            $tensize="M";
                        }else{
                            $tensize="L";
                        }   

                        echo '
                        <div class="thongtin-donhang-sp">
                            <div class="item-donhang-sp">
                                <img src="'.$sp['img'].'" alt="">
                                <div>
                                    <p>'.$sp['tensp'].'</p>
                                    <p>Size: '.$tensize.'</p>
                                    <p>Số lượng: '.$sp['soluong'].'</p>
                                </div>
                            </div>
                            <p>'.$sp['gia'].'</p>
                        </div>
                        ';
                        $tienhang=$tienhang+$sp['gia']*$sp['soluong'];
                       }
                       
                       
                       ?>
                        
                        <div class="tien-donhang">
                            <div>
                                <div class="item-tien-donhang">
                                    <p>Tổng tiền hàng:</p>
                                    <p><?php echo ''.$tienhang.'';?></p>
                                </div>
                                <div class="item-tien-donhang">
                                    <p>Phí vận chuyển:</p>
                                    <p><?php echo ''.$phivanchuyen.'';?></p>
                                </div>
                                <div class="item-tien-donhang item-tien-donhang-db">
                                    <p>Tổng số tiền:</p>
                                    <p class="tp-db"><?php $tongtien=$tienhang-$phivanchuyen; 
                                    echo''.$tongtien.''; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

               </div>
            </div>
        </div>     
</section>