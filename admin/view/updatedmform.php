<div class="section2-taikhoan">
    <h2>Sửa danh mục</h2>
    <?php
        // echo var_dump($kqone) ;
    ?>
    <div class="bang">
        <form action="index.php?act=updatedmform" method="post">
            <input type="text" name="tendm" id="" value="<?=$kqone[0]['tendm']?>">
            <input type="hidden" name="id" value="<?=$kqone[0]['id']?>">
            <input type="submit" value="cập nhập" name="capnhat" id="">
        </form>
        <br>
        <table border="1">
            <tr class="item1">
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Ưu tiên</th>
                <th>Hiển thị</th>
                <th>Hành động</th>
            </tr>
            <?php
            ?>
            <?php
                if(isset($kq)&&(count($kq)>0)){
                    $i=1;
                    foreach ($kq as $dm ) {
                        echo'<tr class="item2">
                        <td>'.$i.'</td>
                        <td>'.$dm['tendm'].'</td>
                        <td>'.$dm['uutien'].'</td>
                        <td>'.$dm['hienthi'].'</td>
                        <td><a href="index.php?act=updatedmform&id='.$dm['id'].'">sửa</a>|<a href="index.php?act=deldm&id='.$dm['id'].'">xóa</a></td>
                        </tr>';
                        $i++;

                    }
                }
            ?>
           
        </table>
    </div>
</div>
</section>