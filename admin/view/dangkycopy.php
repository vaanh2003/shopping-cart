<div class="section2-taikhoan">
    <?php
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $user ) {
                echo'
                <div class="item-taikhoan">
                    <div class="taikhoan">
                        <p><strong>Tên</strong> :'.$user['name'].' </p>
                        <p><strong>email</strong> :'.$user['email'].'</p>
                        <p><strong>Tên đăng nhập</strong> : '.$user['user'].'</p>
                        <p><strong>Pass</strong> :'.$user['pass'].'</p>
                        <p><strong>Chức danh</strong> : '.$user['role'].'</p>
                    </div>
                    <input type="submit" value="SỬA">
                    <a href="index.php?act=deluser&id='.$user['id'].'"><input type="submit" value="XÓA"></a></td>
                </div>
                ';
                $i++;

            }
        }
    ?>
        </div>
    </section>