<div class="datbiet">
    <form action="index.php?act=nhaphang_add" method="post"  enctype="multipart/form-data">
            <select name="idsp" id="">
                <option value="0">Chọn sảng phẩm</option>
                <?php   
                    if(isset($dssp)&& (count($dssp)>0)){
                        foreach ($dssp as $sp ) {
                            echo '<option value="'.$sp['id'].'">'.$sp['tensp'].'</option>';
                        }
                    }
                ?>
            </select>
            <p>tên sảng phẩm:</p>
            <input type="text" name="ten" id="">
            <p>nơi nhập hàng:</p>
            <input type="text" name="noinhap" id="">
            <p>Số lượng:</p>
            <input type="text" name="soluongs" id="">
            <input type="text" name="soluongm" id="">
            <input type="text" name="soluongl" id="">
            <p>Giá:</p>
            <input type="text" name="gia" id="">
            <input type="submit" value="themmoi" name="themmoi" id="">
    </form><br>
    <div class="section2-themsp">
        <?php
        
            if(isset($kq)&&(count($kq)>0)){
                $i=1;
                foreach ($kq as $item ) {
                    echo'
                        <div class="item-themsp"> 
                            <div class="themsp">
                                <p><strong>Tên id</strong> :'.$item['idsp'].'</p>
                                <p><strong>Tên sảng phẩm</strong>:'.$item['tensp'].'</p>
                                <p><strong>nơi nhập</strong> :'.$item['noinhaphang'].'</p>
                                <p><strong>số lượng</strong> :'.$item['soluong'].'</p>
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