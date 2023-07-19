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
        <input type="submit" value="themmoi" name="themmoi" id="">
</form><br>
</section>
    <footer>