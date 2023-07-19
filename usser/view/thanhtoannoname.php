<style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
a{
    text-decoration: none;
    color: rgb(108, 173, 233);
}
.tong-thanh-toan{
    width: 100%;
    height: 1000px;
    margin: 0 auto;
    display: flex;
    
}
.item-thong-tin{
    width: 55%;
}
.item-mac-hang{
    width: 45%;
    background-color: #fafafa;
    border: 0.5px solid rgb(241, 241, 241);
}
.thong-tin{
    width: 550px;
    margin: 40px auto 0 auto;
}
.thong-tin>p{
    font-size: 30px;
}
.ghi-chu{
    display: flex;
    margin: 10px 0 10px 0;
}
.dhi-chu>a{
    margin: 0 5px 0 0;
    font-size: 10px;
}
p{
    margin: 0px;
}
.nhap-thong-tin>p{
    font-size: 20px;
    margin: 0 0 25px 0;
}
.dang-nhap{
    display: flex;
    margin: 0 0 5px 0;
}
.dang-nhap>p{
    font-size: 17px;
    color: rgb(107, 107, 107);
}
.nut-name{
    width: 559px;
    height: 48px;
    border-radius: 6px;
    border:1.25px solid rgb(131, 130, 130);
    padding-left: 15px;
}
.item-lien-he{
    display: flex;
}
.email .nut-email{
    width: 360px;
    height: 48px;
    border-radius: 6px;
    border:1.25px solid rgb(131, 130, 130);
    margin: 0 5px 0 0;
    padding-left: 15px;
}
.sdt .nut-lienhe{
    width: 172px;
    height: 48px;
    border-radius: 6px;
    border:1.25px solid rgb(131, 130, 130);
    padding-left: 15px;
}
.nut-diachi{
    width: 559px;
    height: 48px;
    border-radius: 6px;
    border:1.25px solid rgb(131, 130, 130);
    padding-left: 15px;
}
/* css sai */
.nut-namesai{
    width: 559px;
    height: 48px;
    border-radius: 6px;
    border:2px solid rgb(218, 36, 36);
    padding-left: 15px;
}
.email .nut-emailsai{
    width: 360px;
    height: 48px;
    border-radius: 6px;
    border:2px solid rgb(218, 36, 36);
    margin: 0 5px 0 0;
    padding-left: 15px;
}
.sdt .nut-lienhesai{
    width: 172px;
    height: 48px;
    border-radius: 6px;
    border:2px solid rgb(218, 36, 36);
    padding-left: 15px;
}
.nut-diachisai{
    width: 559px;
    height: 48px;
    border-radius: 6px;
    border:2px solid rgb(218, 36, 36);
    padding-left: 15px;
}
.loi-thongtin{
    color: rgb(218, 36, 36);
    font-size: 12px;
}
/* }end */
input{
    margin: 0 0 13px 0;
}
.tong-tinh-thanh{
    display: flex;
}
select{
    width: 190px;
    height: 45px;
    margin: 0 5px 0 0;
    border-radius: 6px;
}
/* phương thức vận chuyển */
.phuong-thuc-vc>p{
 font-size: 18px;
 margin: 25px 0 20px 0;
 font-family: 'Quicksand', sans-serif;
 font-weight: 600;
}
.item-vc{
    width: 575px;
    height: 200px;
    border: 1px solid rgb(182, 182, 182);
    border-radius: 10px;
}
.vc>img{
    width: 110px;
    height: 85px;
}
.vc>p{
    font-family: 'Quicksand', sans-serif;
}
.vc{
    text-align: center;
    margin: 40px 0 0 0;
}
/* phương thức tanh toán */
.phuong-thuc-tt>p{
    font-size: 18px;
    margin: 25px 0 20px 0;
    font-family: 'Quicksand', sans-serif;
    font-weight: 600;
}
.tt-mot{
    width: 575px;
    height: 80px;
    border: 1px solid rgb(173, 173, 173);
    border-radius: 6px;
    display: flex;
    /* canh giữa theo chiều dọc */
    align-items: center;
}
.nut-tt{
    width: 20px;
    height: 20px;
    border: 1px solid rgb(155, 155, 155);
    border-radius: 50%;
    margin: 0 12px 0 20px;
}
.tt-mot>img{
    width: 40px;
    height: 40px;
    margin-right: 10px;
}
.nut-tt:hover{
    background-color: rgb(125, 126, 126);
}
.sale{
    width: 170px;
    height: 50px;
    border: 0.5px solid rgb(209, 209, 209);
    border-radius: 7px;
    box-shadow: 1px 1px 1px rgb(214, 214, 214);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.grap{
    margin: 0 0 0 10px;
}
.grap>a{
    font-size: 13px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 900;
}
.grap>p{
    font-size: 10px;
    color: rgb(150, 149, 149);
    font-family: 'Quicksand', sans-serif;
    font-weight: 600;
}
.anh-sale{
    text-align: right;
    margin-right: 5px;
    align-items: center;
}
.anh-sale>.anh-grap{
    width: 55px;
    height: 20px;
}
.anh-sale>.anh-cham-thang{
    width: 20px;
    height: 20px;
}
/* thanh toán mặc hàng */
.item-mac-hang-sp{
    display: flex;
    height: 65px;
    width: 400px;
    
}
#db{
    font-size: 12.5px;
    color: rgb(146, 146, 146);
}
.thong-tin-sp{
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
}
.thong-tin-sp p{
    font-family: 'Rubik', sans-serif
}
.ten-mau-size p{
    font-family: 'Rubik', sans-serif;
}

.tong-mac-hang{
    width: 85%;
    margin: 50px auto 0px auto;
}
.item-mac-hang-sp{
    margin-bottom: 10px;
}
.item-anh{
    height: 50px;
    border: 2px solid #cbcbcb ;
    padding: 0 5px 13px 5px;
    border-radius: 10px;
    margin-right: 10px;

}
.item-mac-hang-sp div h4{
    margin: 0;
    padding: 0%;
}
.nut{
    background-color: #338dbc;
    color: white; 
    width: 165px;
    height: 40px;
    margin: 15px auto 0 auto;
    padding-top: 10px;
    padding-bottom: 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    border-radius: 10px;
    font-family: 'Rubik', sans-serif
}
.code-mac-hang{
    margin-top: 30px;
    width: 450px;
    display: flex;
    justify-content: space-between;
    border-top: 1px solid #c8c8c8;
    padding-top: 20px;
}
.code-mac-hang .text-mac-hang{
    width: 330px;
    height:45px ;
    border-radius: 7px;
    border:2px solid rgb(200, 199, 199);
}
.code-mac-hang .submit-mac-hang{
    width: 100px;
    border-radius: 7px;
    background-color: #c8c8c8;
    border: none;
    color: white;
    font-weight: 500;
}
.gia-mac-hang{
    border-top: 1px solid #c8c8c8;
    margin-top: 15px;
    padding-top: 15px;
    width: 450px;
}
.item-gia-mac-hang{
    width: 450px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}
.tong-gia-mac-hang{
    border-top: 1px solid #c8c8c8;
    margin-top: 15px;
    padding-top: 15px;
    width: 450px;
    display: flex;
    justify-content: space-between;
}
.the-p-db{
    font-family: 'Rubik', sans-serif;
    color: rgb(104, 104, 104);
}
.the-p-db-one{
    font-size: 17px;
    font-family: 'Rubik', sans-serif;
    color: rgb(104, 104, 104);
}
.gia-tong{
    font-family: 'Rubik', sans-serif;
    font-size: 22px;
}
</style>
<section>
        <div class="sangpham">
                <div class="tong-thanh-toan">
                <div class="item-thong-tin">
                        <div class="thong-tin">
                        <p>Hades</p>
                        <div class="ghi-chu">
                                <a href="../html/gioHang.html">Giỏ hàng</a>
                                <p>> Thông tin giao hàng</p>    
                        </div>
                        <div class="nhap-thong-tin">
                                <p>Thông tin giao hàng</p>
                                <div class="tong-thong-tin">
                                <div class="dang-nhap">
                                        <p>Bạn có tài khoản?</p>
                                        <a href="../html/dangNhap.html">Đăng nhập</a>
                                </div>
                                <form action="index.php?act=bill" method="post">
                                <div class="item-ten">
                                    <?php
                                    
                                    echo '
                                    <p class="loi-thongtin">'.$loiname.'</p>
                                    <input class="'.$nutname.'" type="text" placeholder="Họ và tên" name="name" value="'.$valuename.'">';
                                    ?>
                                        
                                </div>
                                <div class="item-lien-he">
                                        <div class="email">
                                        <?php
                                        echo '
                                            <p class="loi-thongtin">'.$loiemail.'</p>
                                            <input class="'.$nutemail.'" type="text" placeholder="Email" name="gmail" value="'.$valueemail.'">
                                            </div>
                                            <div class="sdt">
                                            <p class="loi-thongtin">'.$loilienhe.'</p>
                                            <input class="'.$nutlienhe.'" type="text" placeholder="Số điệt thoại" name="sdt" value="'.$valuelienhe.'"> 
                                            </div>
                                        ';
                                        
                                        ?>
                                </div>
                                <div class="item-dia-chi">
                                    <?php
                                    echo '
                                        <p class="loi-thongtin">'.$loidiachi.'</p>
                                        <input  class="'.$nutdiachi.'" type="text" placeholder="Địa chỉ" name="diachi" value="'.$valuediachi.'">
                                    ';
                                    ?>
                                        
                                </div>
                                </div>
                        </div>
                        <!-- phương thức vận chuyển -->
                        <div class="phuong-thuc-vc">
                                <p>Phương thức vận chuyển</p>
                                <div class="item-vc">
                                <div class="vc">
                                        <img src="img/vận chuyển.png" alt="" srcset="">
                                        <p>Vui lòng chọn tỉnh / thành để có danh sách phương thức vận chuyển.</p>
                                </div>
                                </div>
                        </div>
                        <!-- phương thức thanh toán -->
                        <div class="phuong-thuc-tt">
                                <p>Phương thức vận chuyển</p>
                                <div class="item-tt">
                                <div class="tt-mot">
                                        <div class="nut-tt"></div>
                                        <img src="img/cod.svg" alt="" srcset="">
                                        <p>Thanh toán khi giao hàng (COD)</p>
                                </div>
                                <div class="tt-mot tt-hai">
                                        <div class="nut-tt"></div>
                                        <img src="img/grabmoca.svg" alt="" srcset="">
                                        <p>Thanh toán qua ví Moca trên ứng dụng Grab</p>
                                        <div class="sale">
                                        <div class="grap">
                                                <a href="#">GIAM 30K</a>
                                                <p>Đơn từ 300k</p>
                                        </div>
                                        <div class="anh-sale">
                                                <img class="anh-grap" src="img/grab_moca_logo_03320376fa19424e87820598b9fe7f8b.png" alt="" srcset=""></br>
                                                <img class="anh-cham-thang" src="img/cham thang.png" alt="" srcset="">
                                        </div>
                                        </div>
                                </div>
                                </div>
                        </div>
                        
                        </div>
                        
                </div> 
                <div class="item-mac-hang">
                        <div class="tong-mac-hang">
                                
                                <?php
                                $tongtien=0;
                                        
                                        foreach ($_SESSION['mycart'] as $sp ){
                                                echo 
                                                '
                                                <div class="item-mac-hang-sp">
                                                        <img class="item-anh" src="'.$sp[1].'" alt="">
                                                        <div class="thong-tin-sp">
                                                                <div class="ten-mau-size">
                                                                <p>'.$sp[2].'</p>
                                                                <p id="db">XANH / '.$sp[5].'</p>
                                                                </div>
                                                                <p>'.$sp[3].'</p>
                                                        </div>
                                                </div>
                                        ';
                                        $tongtien+=$sp[3];
                                        // $sanpham[$n]=[$id,$img,$tensp,$gia];
                                        // array_push($_SESSION['mycart'],$sanpham[$n]);
                                        // $n=$n+1;
                                        }
                                        // echo '<div class="nut">
                                        //     <form action="index.php?act=bill" method="post">
                                        //         <input class="item1 mua" type="submit" name="addtocart" value="THANH TOAN">
                                        //     </form>
                                        // </div>';
                                
                                
                                 ?>
                               <div class="code-mac-hang">
                                <input class="text-mac-hang" type="text" placeholder="Mã giảm giá">
                                <input class="submit-mac-hang" type="submit" value="Sử dụng"> 
                                </div>
                                <div class="gia-mac-hang">
                                    <div class="item-gia-mac-hang">
                                        <p class="the-p-db">Tạm tính</p>
                                        <p><?php echo''.$tongtien.'';?></p>
                                    </div>
                                    <div class="item-gia-mac-hang">
                                        <p class="the-p-db">Phí Vận chuyển</p>
                                        <p><?php echo''.$phivanchuyen.'';?></p>
                                    </div>
                                </div>
                                <div class="tong-gia-mac-hang">
                                    <p class="the-p-db-one ">Tổng cộng</p>
                                    <p class="gia-tong "><?php $tongcongtien=$tongtien+$phivanchuyen; echo''.$tongcongtien.'';?></p>
                                </div>
                                
                                <a href="../html/thanhtoan.html">
                                    <input type="hidden" name="tongcongtien" value="<?php
                                    
                                    echo''.$tongtien.''

                                    ?>">
                                    <input class="nut" type="submit" value="Hoàng tất đơn hàng" name="hoangtat">
                                </a>
                                </form>
                            </div>
                        </div>
                </div>
        </div>
        </div>
<section>