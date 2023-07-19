<div class="datbiet">
    <form action="index.php?act=adddm" method="post">
                <input type="text" name="tendm" id="">
                <input type="submit" value="themmoi" name="themmoi" id="">
    </form>
        <br>
    <div class="section2-danhmuc">
        <?php
            if(isset($kq)&&(count($kq)>0)){
                $i=1;
                foreach ($kq as $dm ) {
                    echo'
                    <div class="item-danhmuc"> 
                            <div class="danhmuc">
                                <img src="./img/anh1.webp" alt="">
                                <div class="thongso-danhmuc">
                                    <li>Tên danh mục : '.$dm['tendm'].'</li>
                                    <li>Số lượn sảng phẩm :'.$dm['soluong'].'</li>
                                    <li>Ưu tiên :'.$dm['uutien'].'</li>
                                    <li>Hiển thị :'.$dm['hienthi'].'</li>
                                </div>
                            </div>
                            <div class="cn-danhmuc">
                                <a href="index.php?act=updatedmform&id='.$dm['id'].'"><input type="submit" value="SỬA"></a>
                                <a href="index.php?act=deldm&id='.$dm['id'].'"><input type="submit" value="XÓA"></a>
                            </div>
                    </div>
                    
                    ';
                    $i++;

                }
            }
        ?>
    </div>
</div>

    </section>