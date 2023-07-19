<style>
    /* gio hang */
.gioHang{
    
    width: 100%;
    margin-left: 0px;
    display: flex;
    
}
.the-H1{
    width: 725px;
    text-align: center;
    background-color: white;
    margin-bottom: 50px;
    margin-left: -20px;
    padding: 35px;
}
.SP{
    text-align: left;
}
.SP>strong{
    margin-bottom: 5px;
}
.gioHang>.tongHop>.SP>.item-SP>img{
    width: 70px;
    height: 73px;
    padding: 0px 20px 0px 20px;
}
.item-SP{
    display: flex;
    align-items: center;
    width: 752px;
    height: 109px;
    background-color: #fff;
    margin-bottom: 10px;
    justify-content: space-between;
    
}
.mot{
    margin-top: 10px;
}
.gioHang>.tongHop>.SP>.item-SP>span{
    height: 10px;
    font-size: 7px;
}
.tongHop{
    margin: 20px 219px 20px 195px;
    width: 775px;
    height: 790px;
    background-color: rgb(243, 243, 243);
    padding-left: 20px;
    

}
.item-buttom{
}
.item-buttom form{
    display: flex;
    margin: auto 50px auto 50px;
}
.nutcongchu{
    width: 25px;
    height: 25px;
    border-radius: 2px;
    border: 0px;
}
.item-buttom>div{
    width: 28px;
    height: 25px;
    text-align: center;
}
h3{
    font-size: 16px;
}
.thongTin-SP{
    text-align: left;
    width: 200px;
}
.thongTin-SP>h3{
    margin-bottom: 5px;
}
.number{
    border: 1px;
    background-color: aliceblue;
}
.monny{
    width: 75px;
}
.monny>p{
    font-size: 18px;
}
.thanhTien{
    text-align: center;
}
.thanhTien>.xam{
    color: rgb(175, 175, 175);
}
.thanhTien>.do{
    color: rgb(247, 54, 54);
}
.thanhTien>a>img{
    width: 20px;
    height: 20px;
}
/* vùng bên dưới của Sảng phẩm đã mua */
.item-CS{
    width: 630px;
    height: 274px;
    padding: 15px 15px 15px 0px;
    display: flex;
    margin: 30px auto;
}
.cs-mot>textarea{
    width: 235px;
    height: 110px;
}
.cs-mot{
}
.cs-hai{
    width: 350px;
    margin-left: 30px;
}
/* thẻ div thanh toán */
.thanhToan{
    width: 240px;
    height: 250px;
    border: 1px solid black;
    margin-left: -195px;
    margin-top: 130px;
    text-align: center;
}
.the-p{
    text-align: left;
    margin-left: 16px;
    font-size: 12px;
    width: 85%;
    margin-top: 15px;
}
.thanhToan>h2{
    font-size: 19px;
    color: rgb(114, 112, 112);
    margin-top: 25px;
    margin-bottom: 15px;
}
.item-tien{
    display: flex;
    justify-content: space-between;
}
.item-tien{
    width: 85%;
    margin: 20px auto 20px auto;
}
hr{
    background-color: aliceblue;
}
.nut{
    background-color: black;
    color: white;
    width: 80%;
    margin: 15px auto 0 auto;
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<section>
<div class="sangpham">
<div class="gioHang">
            <div class="tongHop">
                <div class="SP">
                    <div class="the-H1">
                        <h1>GIỎ HÀNG CỦA BẠN</h1>
                    </div>
                    <strong>Bạn đang có 3 sản phẩm trong giỏ hàng</strong>
                    <!-- sảng phẩn thứ nhất -->
                    <?php
                        $n=1;
                        $tongtien=0;
                                foreach ($kq as $sp ) {
                                    extract($sp);
                                    $linksp="index.php?act=chitietsp&idsp=".$id;
                                    echo 
                                    '
                                    <div class="item-SP mot">
                                        <img src="'.$img.'" alt="" srcset="">
                                        <div class="thongTin-SP">
                                            <h3>'.$tensp.'</h3>
                                            <span>Đen/'.$size.'</span>
                                        </div>
                                        <div class="item-buttom">
                                        <form action="index.php?act=addcart" method="post">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input class="nutcongchu" type="submit" name="chu1" value="-">
                                            <div class="number">'.$soluong.'</div>
                                            <input class="nutcongchu" type="submit" name="cong1" value="+">
                                        </form>
                                        </div>
                                        <div class="monny">
                                            <p>'.$gia.'</p>
                                        </div>
                                        
                                        <div class="thanhTien">
                                            <p class="xam">Thành tiền:</p>
                                            <p class="do">'.$gia*$soluong.'</p>
                                            <a href="#"><img src="img1/trash_icon.png" alt="" srcset=""></a>
                                        </div>
                                    </div>
                                ';
                                $tongtien+=$gia*$soluong ;
                                }
                                
                                
                        ?>
                </div>
                <div class="item-CS">
                    <div class="cs-mot">
                        <label>Ghi chú đơn hàng</label></br>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="cs-hai">
                        <h4>Chính sách Đổi/Trả</h4>
                        <li>Sản phẩm được đổi 1 lần duy nhất, không hỗ trợ trả.</li>
                        <li>Sản phẩm còn đủ tem mác, chưa qua sử dụng.</li>
                        <li>Sản phẩm nguyên giá được đổi trong 30 ngày trên toàn hệ thống.</li>
                        <li>Sản phẩm sale chỉ hỗ trợ đổi size (nếu cửa hàng còn) trong 7 ngày trên toàn hệ thống.</li>
                    </div>
                </div>
            </div>
            <!-- phần tahnh toán -->
            <?php
                echo '
                
                <div class="thanhToan">
                        <h2>Thông tin đơn hàng</h2>
                        <hr>
                    <div class="item-tien">                
                        <h3>Tổng tiền:</h3>
                        <p>'.$tongtien.'</p>
                    </div>
                    <hr>
                    <div class="the-p"><p>Bạn có thể nhập mã giảm giá ở trang thanh toán</p></div>
                    <a href="../html/thanhtoan.html">
                        <a href="index.php?act=thanhtoan"><div class="nut"><strong>THANH TOAN</strong></div></a>
                    </a>
                </div>
                
                ';
            ?>
            
        </div>
            
        </div>
</section>