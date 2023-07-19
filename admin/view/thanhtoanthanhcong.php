<style>
    .link-trangthai{
    display: flex;
    width: 85%;
    margin: 0 auto 20px auto;
    justify-content: space-between;
    
}
.xuat-dh-admin{
    display: flex;
    width: 85%;
    margin: 0 auto;
    justify-content: space-between;
    height: auto;
    border: solid black 1px;
    padding: 0 5px 10px 5px ;
    align-items: center;
}
.xuat-dh-sanpham{
    position: relative;
}
.con-xuat-dh-sanpham{
    position: absolute;
    display: none;
    left: -100%;
}
.item-xuat-dh-sanpham{
    display: flex;
    color: black;
    background-color: rgb(255, 255, 255);
    width: 350px;
    left: -100%;
    border: 2px solid black;
    border-radius: 5px;
    justify-content: space-between;
    align-items: center;
    padding: 0 5px 0 5px;
    
    
}
.item-xuat-dh-sanpham-img{
    display: flex;
    align-items: center;
}
.item-xuat-dh-sanpham img{
    height: 70px;
}
.xuat-dh-sanpham:hover{
    color: rgb(222, 20, 20);
}
.xuat-dh-sanpham:hover .con-xuat-dh-sanpham{
    display: inline-block;
}
.xuat-dh-diachi{
    display: flex;
}
a{
    color:black;
}
.vanchuyenthanhcong{
    font-weight: 600;
}
</style>
<div class="xuat-dh">
            <div class="link-trangthai">
                <a class="dangxuly" href="index.php?act=thanhtoan"><p>Đang xữ lý</p></a>
                <a class="daxuly" href="index.php?act=thanhtoandaxuly"><p>Đã xữ lý</p></a>
                <a class="dangvanchuyen" href="index.php?act=thanhtoandangvc"><p>Đang vận chuyển</p></a>
                <a class="vanchuyenthanhcong" href="index.php?act=thanhtoanthanhcong"><p>Đã vận chuyển thành công</p></a>
            </div>
            <?php
                foreach ($kq as $item ) {
                    $id= $item['id'];   
                    $spdonhang=getall_spdonhang($id);
                    echo'
                    <div class="xuat-dh-admin">
                    <div>
                    <p>Đơn hàng : 000'.$item['id'].'</p>
                    </div>
                    <div class="xuat-dh-diachi">
                        <p>Thông tin:</p>
                        <div class="item-xuat-dh-diachi">
                            <p>Tên người mua: '.$item['name'].'</p>
                            <p>Số điện thoại: '.$item['sdt'].'</p>
                            <p>Địa chỉ: '.$item['diachi'].'</p>
                            <p>Email: '.$item['gmail'].'</p>
                            <p>Ngày mua: '.$item['ngay'].'/'.$item['thang'].'/'.$item['nam'].'</p>
                        </div>
                    </div>
                        
                        
                    ';
                    echo '<div class="xuat-dh-sanpham">
                    <p>Xem sảng phẩm</p>';
                    foreach ($spdonhang as $item ) {
                        echo'
                            <div class="con-xuat-dh-sanpham">
                                <div class="item-xuat-dh-sanpham">
                                    <div class="item-xuat-dh-sanpham-img">
                                        <img src="../'.$item['img'].'" alt="">
                                        <div>
                                            <p>'.$item['tensp'].'</p>
                                            <p>Size: '.$item['size'].'</p>
                                            <p>Số lượng: '.$item['soluong'].'</p>
                                        </div>
                                    </div>
                                    <p>giá: 200000</p>
                                </div>
                            </div>
                        ';
                    }
                    echo'</div>
                           
                    </div>
                    ';
                }
                
            
        ?>
                
                
</div>

    </section>