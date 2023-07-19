<section>
        <div class="sangpham">
            <?php
                $_SESSION['mycart'];
                    foreach($_SESSION['mycart'] as $cart ){
                        echo"<br>id sảng phẩm".$cart[0]."<br>";
                        echo"ảnh sảng phẩm".$cart[1]."<br>";
                        echo"tên sảng phẩm".$cart[2]."<br>";
                        echo"giá sảng phẩm".$cart[3]."<br>";
                    }
            ?>
        </div>
</section>