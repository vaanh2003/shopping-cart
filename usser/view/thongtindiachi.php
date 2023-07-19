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
    margin: 50px auto 0 auto;
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
    width: 150px ;
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
    padding-bottom: 20px;
}
.donmua-user a p{
    width: 150px ;
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
    display: flex;
    width: 100%;
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
                    <p class="p-db">Hồ Sơ Của Tôi</p>
                    <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
               </div>
               <div class="Tong-nd">
                    <div class="thongtin-user">
                        <p class="p-db">Địa chỉ</p>
                        <div>
                            <div class="ten-sdt">
                                <p><?php echo''.$kq['name'].'';?> / </p>
                                <p class="p-nhat"><?php echo''.$kq['name'].'';?></p>
                            </div>
                            <p class="p-nhat"><?php echo''.$kq['address'].'';?></p>
                        </div>
                    </div>
                    <div class="img-nut-capnhat">
                       <input type="submit" value="Cập nhật">
                    </div>
               </div>
            </div>
        </div>     
</section>