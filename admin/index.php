<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/user.php";
    include "../model/pdo.php";
    include "../model/donhang.php";
    $dssp = getall_sanpham();
    connectdb();
    include "view/headercopy.php";
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'danhmuc':
                $kq=getall_dm();
                include"view/danhmuc.php";
                break;
            case 'delsp':
                if(isset($_GET['id'])){
                    $idsp=$_GET['id'];
                    $id=getall_onenspdanhmuc($idsp);
                    $kq=getall_onensoluongdm($id['iddm']);
                    $kqdm=$kq['soluong']-1;
                    updatedanhmucsoluongchu($id['iddm'],$kqdm);
                }
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    delsp($id);
                }

                $kq=getall_sanpham();
                include"view/sanphamcopy.php";
                break;
            case 'sanpham_add':
                if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $gia=$_POST['gia'];
                    $xuat=$_POST['xuat'];
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $img=$target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                    }
                    if($uploadOk == 1){
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        insert_sanpham($iddm,$tensp,$gia,$img,$xuat);
                    }
                    header('location:index.php?act=sanpham');
                    
                }
                if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $kqdm=getall_onendanhmuc($iddm);
                    $kqdmm=$kqdm['soluong']+1;
                    updatedanhmucsoluong($iddm,$kqdmm);
                }
                //tải lên danh sách danh mục
                $dsdm = getall_dm();
                // tải lên danh sách sản phẩm
                $kq = getall_sanpham();
                include"view/sanphamcopy.php";
                break; 
            case 'deluser':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    deluser($id);
                }
                $kq=getall_user();
                include"view/dangkycopy.php";
                break;
            case 'deldm':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                deldm($id);
            }
            $kq=getall_dm();
            include"view/danhmuc.php";
            break; 
            case 'updatedmform':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $kqone = getonedm($id);
                    // danh sách danh mục
                    $kq=getall_dm();
                    include"view/updatedmform.php";
                }
                if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $tendm=$_POST['tendm'];
                    updatedm($id,$tendm);
                    // danh sách danh mục
                    $kq=getall_dm();
                    include"view/danhmuc.php";
                }
                break;
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tendm=$_POST['tendm'];
                    themdm($tendm);
                }
                $kq=getall_dm();
                include"view/danhmuc.php";
                break; 
            case 'adduser':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $role=$_POST['role'];
                    themuser($name,$email,$user,$pass,$role);
                }
                $kq=getall_user();
                include"view/dangkycopy.php";
                break;    
            case 'sanpham':
                if((isset($_POST['key']))&&($_POST['key']!="")){
                    $key=$_POST['key'];                                  
                    $kq = get_sp_by_key($key);
                }else{
                    $key="";
                    if(isset($_POST['show'])) {
                    $key = $_POST['show'];                    
                    // $kq=get_sp_by_key($key);
                                  
                    }
                    $kq = getall_sanpham();
                }

                //tải lên danh sách danh mục
                $dsdm = getall_dm();
                
                // tải lên danh sách sản phẩm
                // $kq = getall_sanpham();              
                include"view/sanphamcopy.php";
                //timkiem
                break;
                // THỬ NGHIỆM
            // case 'timkiem':
            //     $dsdm = getall_dm();
                
            //     // tải lên danh sách sản phẩm
            //     $kq = getall_addsanpham();
            case 'nhaphang_add':
                if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                    $idsp=$_POST['idsp'];
                    $tensp=$_POST['ten'];
                    $noinhaphang=$_POST['noinhap'];
                    $soluongs=$_POST['soluongs'];
                    $soluongm=$_POST['soluongm'];
                    $soluongl=$_POST['soluongl'];
                    $gia=$_POST['gia'];
                    insert_nhaphang($idsp,$tensp,$noinhaphang,$soluongs,$soluongm,$soluongl,$gia);
                    }
                if(isset($_POST['idsp'])){
                    $id=$_POST['idsp'];
                    $kq=getall_onenhaphang($id);
                    $soluongs=$_POST['soluongs'];
                    $soluongm=$_POST['soluongm'];
                    $soluongl=$_POST['soluongl'];
                    $soluongmois=$soluongs+$kq['soluongs'];
                    $soluongmoim=$soluongm+$kq['soluongm'];
                    $soluongmoil=$soluongl+$kq['soluongl'];
                    // $soluongmoi= $_GET[$soluong]+$_GET[$soluongcu];
                    // số lượng đang là chuổi,.... số hượng củ đang là mảng
                    updatesps($id,$soluongmois);
                    updatespm($id,$soluongmoim);
                    updatespl($id,$soluongmoil);
                    // danh sách danh mục
                    // include"view/danhmuc.php";
                }
                //tải lên danh sách danh mục
                $dssp = getall_sanpham();
                // tải lên danh sách sản phẩm
                $kq = getall_nhaphang();
                header('location:index.php?act=nhaphang');
                break;
            case 'thanhtoan_add':
                if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
                    $idsp=$_POST['idsp'];
                    $soluong=$_POST['soluong'];
                    $img=$_POST['img'];
                    // insert_nhaphang($idsp,$soluong);
                    }
                if(isset($_POST['idsp'])){
                    $id=$_POST['idsp'];
                    $kq=getall_onenhaphang($id);
                    $soluon=$_POST['soluong'];
                    $soluongmoi=$soluong-1;
                    // $soluongmoi= $_GET[$soluong]+$_GET[$soluongcu];
                    // số lượng đang là chuổi,.... số hượng củ đang là mảng
                    updatesp($id,$soluongmoi);
                    // danh sách danh mục
                    // include"view/danhmuc.php";
                    var_dump($soluon);
                }
                
                //tải lên danh sách danh mục
                $dssp = getall_sanpham();
                // tải lên danh sách sản phẩm
                $kq = getall_nhaphang();
                include"view/thanhtoan.php";
                break;
            case 'dangkycopy':
                $kq=getall_user();
                include "view/dangkycopy.php";
                break;
            case 'thoat':
                if(isset($_SESSION['role'])){
                    unset($_SESSION['role']);
                }
                header('location: login.php');
                break;
            case 'nhaphang':
                $kq = getall_nhaphang();
                include"view/themhang.php";
                break;
            case 'thongke':
                // $spdonhang=0;
                // $n=0;
                // $doanhthu=0;
                // $kq=getall_tongtiendonhang();
                // $sp= getall_sanphamdh();
                // $ngay=getall_thangdonhang(11,27);
                // foreach ($kq as $tongtien ){
                //     $doanhthu+=$tongtien['tongtien'];
                //     $n=$n+1;
                // }
                // foreach ($ngay as $idsp ){
                //     $spdonhang=$spdonhang+1;
                // }
                // // var_dump($doanhthu);
                // // var_dump($n);
                // var_dump($idsp['tongtien']);
                // include"view/thongke.php";
                $doanhthu=0;
                $soluongsp=0;
                $soluongdh=0;
                $ngay="";   
                if((isset($_POST['thongke']))&&($_POST['thongke'])){
                    $thang=$_POST['thang'];
                    $ngay=$_POST['ngay'];
                    if($thang==1){
                        if($thang==1&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                               if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 2
                    if($thang==2){
                        if($thang==2&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 3
                    if($thang==3){
                        if($thang==3&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 4
                    if($thang==4){
                        if($thang==4&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 5
                    if($thang==5){
                        if($thang==5&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 6
                    if($thang==6){
                        if($thang==6&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 7
                    if($thang==7){
                        if($thang==7&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 8
                    if($thang==8){
                        if($thang==8&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 9
                    if($thang==9){
                        if($thang==9&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 10
                    if($thang==10){
                        if($thang==10&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                    // tháng 11
                    if($thang==11){
                        if($thang==11&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                        
                    }
                    // tháng 12
                    if($thang==12){
                        if($thang==12&&$ngay==""){
                            $kq=getall_theothang($thang);
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }
                        }else{
                            $kq=getall_thangdonhang($thang,$ngay);;
                            foreach ($kq as $theothang ){
                                if($theothang['trangthai']==4){
                                    $doanhthu+=$theothang['tongtien'];
                                    $soluongdh++;
                                    $id=$theothang['id'];
                                    $soluong=getall_spdonhang($id);
                                    foreach ($soluong as $sl ){
                                        $soluongsp+=$sl['soluong'];
                                    }
                                }
                            }  
                        }
                    }
                }else{
                    $kq=getall_donhang();
                    foreach ($kq as $theothang ){
                        if($theothang['trangthai']==4){
                            $doanhthu+=$theothang['tongtien'];
                            $soluongdh++;
                            $id=$theothang['id'];
                            $soluong=getall_spdonhang($id);
                            foreach ($soluong as $sl ){
                                $soluongsp+=$sl['soluong'];
                            }
                        }
                    }
                }
                include"view/thongke.php";
                break;
            case 'thanhtoan':
                $kq=getall_donhangdangxl(1);
                include"view/thanhtoan.php";
                break;
            case 'thanhtoandaxuly':
                $kq=getall_donhangdangxl(2);
                include"view/thanhtoandaxong.php";
                break;
            case 'thanhtoandangvc':
                $kq=getall_donhangdangxl(3);
                include"view/thanhtoandangvanchuyen.php";
                break;
            case 'thanhtoanthanhcong':
                $kq=getall_donhangdangxl(4);
                include"view/thanhtoanthanhcong.php";
                break;
            case 'trangthai':
                header('location:index.php?act=thanhtoan');
                if(isset($_POST['daxong'])&&($_POST['daxong'])){
                    $id=$_POST['id'];
                    $trangthai=2;
                    updatestrangthai($id,$trangthai);
                    var_dump($id);
                    header('location:index.php?act=thanhtoandaxuly');
                }
                if(isset($_POST['daxong2'])&&($_POST['daxong2'])){
                    $id=$_POST['id'];
                    $trangthai=3;
                    updatestrangthai($id,$trangthai);
                    var_dump($id);
                    header('location:index.php?act=thanhtoandangvc');
                }
                if(isset($_POST['daxong3'])&&($_POST['daxong3'])){
                    $id=$_POST['id'];
                    $trangthai=4;
                    updatestrangthai($id,$trangthai);
                    var_dump($id);
                    header('location:index.php?act=thanhtoanthanhcong');
                }
                break;
            case 'taikhoan':
                include"view/taikhoan.php";
                break;
                if($_SESSION['mycart']==array()){
                    array_push($_SESSION['mycartmoi'],$spadd);
                }else{
                    foreach ($_SESSION['mycart']as $sp ) {
                        if($idsp==$sp[0]){
                            $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$soluongchu=$sp[4]+1]; 
                            array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                            $b=2;
                        }
                        else{
                            $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$sp[4]];
                            array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                        }
                        $i++;
                    }
                    if($b==0){

                    }
                
                }
            case 'donhang':
                include"view/donhang.php";
                break;
            
            default:
                include "view/homecopy.php";
                break;
        }
    }else{
        include "view/homecopy.php";
    }
    include "view/footercopy.php";
}
?>

