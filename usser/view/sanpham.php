<section>
        <div class="sangpham">
            <?php
            $n=1;
                    foreach ($sphome1 as $sp ) {
                        extract($sp);
                        $linksp="index.php?act=chitietsp&idsp=".$id;
                        echo 
                        '
                        <a href="'.$linksp.'">
                            <div class="item-sp">
                                <img src="'.$img.'" alt="">
                                    <div class="gia">
                                    ';
                        if($soluongs>0||$soluongm>0||$soluongl>0){
                            echo ' 
                                <p class="p1">'.$tensp.'</p>
                                <p class="p2">'.$gia.'</p>
                        ';  
                        }else{
                            echo'
                                <p class="p1">'.$tensp.'</p>
                                <div class="hethang">
                                    Hết hàng
                                </div>
                            ';
                        }
                        
                                        
                        echo ' 
                                </div>
                            </div>
                        </a>';         
                    }
                    // var_dump( $_SESSION['mycart']);
                    // foreach($_SESSION['mycart'] as $cart ){
                    //     echo"<br>id sảng phẩm".$cart[0]."<br>";
                    //     echo"ảnh sảng phẩm".$cart[1]."<br>";
                    //     echo"tên sảng phẩm".$cart[2]."<br>";
                    //     echo"giá sảng phẩm".$cart[3]."<br>";
                    // }
                    // echo '<a href="../view/thunghiem.php"> qua day</a>';
            ?>
            
        </div>
</section>