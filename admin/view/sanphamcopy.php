<div class="datbiet">
    <form action="index.php?act=sanpham_add" method="post"  enctype="multipart/form-data">
            <select name="iddm" id="">
                <option value="0">Chọn danh mục</option>
                <?php   
                    if(isset($dsdm)&& (count($dsdm)>0)){
                        foreach ($dsdm as $dm ) {
                            echo '<option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                        }
                    }
                ?>
            </select>
            <input type="text" name="tensp" id="">
            <input type="file" name="hinh" id="">

            <?php
                if(isset($uploadOk)&&($uploadOk==0)){
                    echo"Yêu cầu nhập đúng file hình ảnh!";
                }
            ?>
            <input type="text" name="gia" id="">
            <input type="text" name="xuat" id="">
            <input type="submit" value="themmoi" name="themmoi" id="">
    </form><br>
    <form action="index.php?act=sanpham&show=timkiem" method="post">
            <input type="text" name="key" placeholder="Tìm kiếm sản phẩm">
            <input type="submit" name="timkiem" value="Tìm Kiếm">
    </form><br>
    <div class="section2-sangpham">
        <?php
        
            if(isset($kq)&&(count($kq)>0)){
                $i=1;
                foreach ($kq as $item ) {
                    echo'
                        <div class="item-sangpham"> 
                            <div class="sangpham">
                                <img src="../'.$item['img'].'">
                                <div class="thongso-sangpham">
                                
                                    <li>Tên sảng phẩm :<br>'.$item['tensp'].'</li>
                                    <li>Giá sẳng phẩm :'.$item['gia'].'</li>
                                    <li>Số lượn size S :'.$item['soluongs'].'</li>
                                    <li>Số lượn size M :'.$item['soluongm'].'</li>
                                    <li>Số lượn size L :'.$item['soluongl'].'</li>
                                </div>
                            </div>
                            <div class="cn-sangpham">
                                <a href="index.php?act=updatedmform&id='.$item['id'].'"><input type="submit" value="SỬA"></a>
                                <a href="index.php?act=delsp&id='.$item['id'].'"><input type="submit" value="XÓA"></a>
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
    <footer>