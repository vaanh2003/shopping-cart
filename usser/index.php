<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    session_start();
    ob_start();
    if(!isset($_SESSION['mycart']))$_SESSION['mycart']=[];
    if(!isset($_SESSION['mycartmoi']))$_SESSION['mycartmoi']=[];
    include "model/connectdb.php";
    include "model/pdo.php";
    include "model/user.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/cart.php";
    include "model/donhang.php";
    include "model/kiemloi.php";
    $dsdm=getall_dm();
    $trangthai=1;
    $tienhang=0;
    $gtuser="";
    $chuacotk="";
    $chuacomk="";
    $fontloi="font1";
    $fontloihai="font1";
    $nutname="nut-name";
    $nutlienhe="nut-lienhe";
    $nutdiachi="nut-diachi";
    $nutemail="nut-email";
    $loiname="";
    $loidiachi="";
    $loilienhe="";
    $loiemail="";
    $valuename="";
    $valuediachi="";
    $valuelienhe="";
    $valueemail="";
    $tria=2;
    $trib=0;
    $tric=0;
    $trid=2;
    $tensize="";
    include "view/header.php";
    if(isset($_SESSION['iduser'])&&($_SESSION['iduser']!="")){
        $iduser=$_SESSION['iduser'];
    }
    if(isset($_SESSION['iddh'])&&($_SESSION['iddh']!="")){
        $iddh=$_SESSION['iddh'];
    }
    $phivanchuyen=25000;   
    $sphome1=getall_spforsection(1);
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'sanpham':
                if((isset($_POST['sua']))&&($_POST['sua'])){
                    include"view/sanpham.php";
                }
               // tải lên danh sách sản phẩm
               $kq = getall_sanpham();
               include"view/sanpham.php";
               break;
            case 'chitietsp':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $idsp=$_GET['idsp'];
                    $onesp=getall_one($_GET['idsp']);
                    include "view/chitietsp.php";
                }else{
                    include "view/section.php";
                }
            break;
            case 'thoat':
                unset ($_SESSION['role']);
                unset ($_SESSION['iduser']);
                unset ($_SESSION['username']);
                header('location:index.php');
                $k=0;
                $j=0;
                $u=0;
                break;
            case 'login':
                if((isset($_POST['login']))&&($_POST['login'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    if($user!=""&& $pass!=""){
                        $kq=getuserinfo($user,$pass);
                        if($kq!= array()){
                            $role=$kq[0]['role'];
                            if($role==1){
                                $_SESSION['role']=$role;
                                header('location:admin/index.php');
                            }if($role==0){
                                $_SESSION['role']=$role;
                                $_SESSION['iduser']=$kq[0]['id'];
                                $_SESSION['username']=$kq[0]['user'];
                                header('location:index.php');
                            } 
                        }
                        else{
                            $kquser=getuserinfouser($user);
                            if($kquser!=array()){
                                $gtuser=$_POST['user'];
                                $chuacomk="Sai mật khẩu";
                                $fontloihai="font1loi";
                            }
                            else{
                                $chuacotk="Thông tin đăng nhập không đúng";
                            }
                           
                        }  
                    }else if($user!=""&& $pass==""){
                        $gtuser=$_POST['user'];
                        $chuacomk="Bạn chưa nhập mật khẩu";
                        $fontloihai="font1loi";
                    }
                    else{
                        $chuacotk="Bạn chưa nhập tài khoảng";
                        $chuacomk="Bạn chưa nhập mật khẩu";
                        $fontloi="font1loi";
                        $fontloihai="font1loi";
                    }
                }   
                include "view/dangnhap.php";
                break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    dangkytk($user,$pass,$name,$email);
                    $thongbao = "Đăng ký thành công !";
                    $kq=getall_user();
                    header('location:index.php?act=login');
                }
                include "view/dangky.php";
                break;
            case 'addcart':
                $i=1;
                $n=1;
                $a=1;
                $c=0;
                $b=0;
                $l=0;
                $tsize="";
                $soluongchu="";
                if(isset($_SESSION['iduser'])&&($_SESSION['iduser']!="")){
                    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                        $idsp=$_POST['id'];
                        $size=$_POST['size'];
                        $img=$_POST['img'];
                        $tensp=$_POST['tensp'];
                        $gia=$_POST['gia'];
                        $soluong=1;
                        $slkho=getall_onenhaphang($idsp);
                        $spcart=getall_cartuser($iduser);
                        if($spcart==array()){
                            if($slkho['soluongs']>0&&$size=="s"){
                                insert_nhapcart($idsp,$img,$tensp,$gia,$iduser,$soluong,$size);
                            }
                            if($slkho['soluongm']>0&&$size=="m"){
                                insert_nhapcart($idsp,$img,$tensp,$gia,$iduser,$soluong,$size);
                            }
                            if($slkho['soluongl']>0&&$size=="l"){
                                insert_nhapcart($idsp,$img,$tensp,$gia,$iduser,$soluong,$size);
                            }
                        }else{
                        //    if(){
                            var_dump($size);
                           
                            var_dump($tsize);
                                foreach ($spcart as $sp ) {
                                    if($sp['size']=="s"){
                                        $tsize="soluongs";
                                    }else if($sp['size']=="m"){
                                        $tsize="soluongm";
                                    }else{
                                        $tsize="soluongl";
                                    }
                                    // var_dump($tsize);
                                    // aaaaaaaaaaaaaaa
                                    if($sp['idsp']==$idsp&&$sp['size']==$size){
                                           if($sp['soluong']<$slkho[''.$tsize.'']){
                                                $c=2;
                                                $sp['soluong']++;
                                                updatesoluongcart($sp['id'],$sp['soluong']) ;
                                           }
                                           else{
                                                $c=2;
                                           }
                                    }
                                    // var_dump($tsize);
                                }
                                if($size=="s"){
                                    $tsize="soluongs";
                                }else if($size=="m"){
                                    $tsize="soluongm";
                                }else{
                                    $tsize="soluongl";
                                }
                                // var_dump($c);
                                var_dump($tsize);
                                if($c==0&&$slkho[''.$tsize.'']>0){
                                    var_dump($c);
                                    insert_nhapcart($idsp,$img,$tensp,$gia,$iduser,$soluong,$size);
                                }   
                        //    }
                        }
                        
                        header('location:index.php?act=addcart');
                        
                    }
                    if(isset($_POST['chu1'])&&($_POST['chu1'])){
                        $idspchu=$_POST['id'];
                        $kqlsl=getall_onenspcart($idspchu);
                        if($kqlsl['soluong']>1){
                            $soluongmoi=$kqlsl['soluong']-1;
                            updatesoluongcart($idspchu,$soluongmoi);
                        }
                        else{
                            delspcart($idspchu);
                        }
                        header('location:index.php?act=addcart');
                    }
                    if(isset($_POST['cong1'])&&($_POST['cong1'])){
                        $idspchu=$_POST['id'];
                        $kqlsl=getall_onenspcart($idspchu);
                        if($kqlsl['size']=="s"){
                            $tsize="soluongs";
                        }else if($kqlsl['size']=="m"){
                            $tsize="soluongm";
                        }else{
                            $tsize="soluongl";
                        }
                        $slkho=getall_onenhaphang($kqlsl['idsp']);
                        // var_dump($slkho);
                        if($slkho[''.$tsize.'']>($kqlsl['soluong']+1)){
                            $soluongmoi=$kqlsl['soluong']+1;
                            
                        }else{
                            $soluongmoi=$slkho[''.$tsize.''];
                        }
                        
                        updatesoluongcart($idspchu,$soluongmoi);
                        header('location:index.php?act=addcart');
                    }
                    $kq=getall_cartuser($iduser);
                    if(getall_cartuser($iduser)!=array()){
                        include "view/cart.php";
                    }
                    else{
                        
                    } 
                    
                }else{
                    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                        $idsp=$_POST['id'];
                        $img=$_POST['img'];
                        $tensp=$_POST['tensp'];
                        $gia=$_POST['gia'];
                        $size=$_POST['size'];
                        $soluong=1;
                        
                        $slkho=getall_onenhaphang($idsp);
                        $spadd=[$idsp,$img,$tensp,$gia,$soluong,$size];
                        if($_SESSION['mycart']==array()){
                            $spadd=[$idsp,$img,$tensp,$gia,$soluong,$size];
                            array_push($_SESSION['mycartmoi'],$spadd);
                            $l++;
                            
                        }
                        else{
                            foreach ($_SESSION['mycart'] as $sp ) {
                                if($idsp==$sp[0]&&$size==$sp[5]){
                                    if($sp[5]=="s"){
                                        $tsize="soluongs";
                                    }else if($sp[5]=="m"){
                                        $tsize="soluongm";
                                    }else{
                                        $tsize="soluongl";
                                    }
                                    var_dump($tsize);
                                    if($sp[4]<$slkho[''.$tsize.'']){
                                    $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$soluongchu=$sp[4]+1,$sp[5]];
                                    array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                                    $b=2;
                                    }else{
                                    $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$sp[4],$sp[5]];
                                    array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                                    $b=2;
                                    }
                                }
                                else{
                                    $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$sp[4],$sp[5]];
                                    array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                                        
                                }
                                $i++;
                            }
                            if($size=="s"){
                                $tsize="soluongs";
                            }else if($size=="m"){
                                $tsize="soluongm";
                            }else{
                                $tsize="soluongl";
                            }
                            var_dump($tsize);
                            if($b==0&&$slkho[''.$tsize.'']>0){
                                array_push($_SESSION['mycartmoi'],$spadd);
                            }
                        }
                        
                        $_SESSION['mycart'] = array();
                        foreach ($_SESSION['mycartmoi'] as $sppp ) {
                            $cart=[$sppp[0],$sppp[1],$sppp[2],$sppp[3],$sppp[4],$sppp[5]];
                            array_push($_SESSION['mycart'],$cart);
                            $n++;
                        } 
                        $_SESSION['mycartmoi'] = array();
                        header('location:index.php?act=addcart');
                    }
                    // dấu trừ
                    if(isset($_POST['chu1'])&&($_POST['chu1'])){
                        $idspchu=$_POST['id'];
                        $size=$_POST['size'];
                        foreach ($_SESSION['mycart'] as $sp ) {
                            if($sp[0]==$idspchu){
                                if($sp[4]>1&&$size==$sp[5]){
                                    $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$soluongchu=$sp[4]-1,$sp[5]];
                                    array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                                }
                                else{
                                    $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$sp[4],$sp[5]];
                                    array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                                } 
                            }else{
                                $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$sp[4],$sp[5]];
                                array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                            }
                            $i++;
                            
                        } 
                        // var_dump($_SESSION['mycartmoi']); 
                        $_SESSION['mycart'] = array(); 
                        foreach ($_SESSION['mycartmoi'] as $sppp ) {
                            $cart=[$sppp[0],$sppp[1],$sppp[2],$sppp[3],$sppp[4],$sppp[5]];
                            array_push($_SESSION['mycart'],$cart);
                            $n++;
                        } 
                        $_SESSION['mycartmoi'] = array();
                        header('location:index.php?act=addcart');
                    }
                    // dấu cộng
                    if(isset($_POST['cong1'])&&($_POST['cong1'])){
                        $idsp=$_POST['id'];
                        $size=$_POST['size'];
                        if($size=="s"){
                            $tsize="soluongs";
                        }else if($size=="m"){
                            $tsize="soluongm";
                        }else{
                            $tsize="soluongl";
                        }
                        $slkho=getall_onenhaphang($idsp);
                        $idspchu=$_POST['id'];
                        foreach ($_SESSION['mycart'] as $sp ) {
                            if($sp[0]==$idspchu&&$size==$sp[5]){
                                if($slkho[''.$tsize.'']>$sp[4]){
                                    $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$soluongchu=$sp[4]+1,$sp[5]];
                                }
                                else{
                                    $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$slkho[''.$tsize.''],$sp[5]];
                                }
                            }else{
                                $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$sp[4],$sp[5]];
                            }
                            array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                            $i++;
                            
                        } 
                        // var_dump($_SESSION['mycartmoi']); 
                        $_SESSION['mycart'] = array(); 
                        foreach ($_SESSION['mycartmoi'] as $sppp ) {
                            $cart=[$sppp[0],$sppp[1],$sppp[2],$sppp[3],$sppp[4],$sppp[5]];
                            array_push($_SESSION['mycart'],$cart);
                            $n++;
                        } 
                        $_SESSION['mycartmoi'] = array();
                            header('location:index.php?act=addcart');
                    }
                    if(isset($_POST['xoa'])&&($_POST['xoa'])){
                        $size=$_POST['size'];
                        $idspchu=$_POST['id'];
                        foreach ($_SESSION['mycart'] as $sp ) {
                            if($sp[0]==$idspchu&&$size==$sp[5]){
                            }else{
                                $cartmoi[$i]=[$sp[0],$sp[1],$sp[2],$sp[3],$sp[4],$sp[5]];
                                array_push($_SESSION['mycartmoi'],$cartmoi[$i]);
                            }
                            
                        } 
                        // var_dump($_SESSION['mycartmoi']); 
                        $_SESSION['mycart'] = array(); 
                        foreach ($_SESSION['mycartmoi'] as $sppp ) {
                            $cart=[$sppp[0],$sppp[1],$sppp[2],$sppp[3],$sppp[4],$sppp[5]];
                            array_push($_SESSION['mycart'],$cart);
                            $n++;
                        } 
                        $_SESSION['mycartmoi'] = array();
                            header('location:index.php?act=addcart');
                    }
                    if($_SESSION['mycart']!=array()||$_SESSION['mycart']==""){
                        include "view/cartnoname.php";
                    }
                    else{

                    }
                    
                    // $_SESSION['mycart'] = array();
                }
                break;
                
            case 'bill':
                $n=1;
                $idretun="";
                $g=0;
                if(isset($_SESSION['iduser'])&&($_SESSION['iduser']!="")){
                       
                    if(isset($_POST['hoangtat'])&&($_POST['hoangtat'])){
                        
                        $iduser=$_SESSION['iduser'];
                        $name=$_POST['name'];
                        $gmail=$_POST['gmail'];
                        $sdt=$_POST['sdt'];
                        $diachi=$_POST['diachi'];
                        $tongtien=$_POST['tongcongtien'];
                        $nam=date('Y');
                        $thang=date('m');
                        $ngay=date('d');
                        $gio=date('H:i:s');
                        if($name!=""&&$gmail!=""&&$sdt!=""&&$diachi!=""){
                            if(!is_email($gmail)){
                                $nutemail="nut-emailsai";
                                $loiemail="Không đúng định dạng gmail";
                                $loilienhe=".";
                                $valuelienhe=$sdt;
                                $valuename=$name;
                                $valuediachi=$diachi;
                                include "view/thanhtoannoname.php";
                            }else{
                                $tric=2;
                            }
                            if(!is_phone($sdt)||mb_strlen($sdt)!=10){
                                $nutlienhe="nut-lienhesai";
                                $loilienhe="Số điẹn thoại bạn nhập không đúng";
                                $loiemail=".";
                                $valuename=$name;
                                $valuediachi=$diachi;
                                $valueemail=$gmail;
                                include "view/thanhtoannoname.php";
                            }else{
                                $trib=2;
                            }
                            if($tria==2&&$trib==2&&$tric==2&&$trid==2){
                                $idretun=insert_donhang($name,$gmail,$sdt,$diachi,$iduser,$tongtien,$nam,$thang,$ngay,$gio,$trangthai);
                                updateuser($iduser,$diachi);
                                updatesdt($iduser,$sdt);
                                updategmail($iduser,$gmail);
                                updatename($iduser,$name);
                                $kquser=getall_onenuser($iduser);
                                $g=1;
                                // if($kquser['address']==array()){
                                //     updateuser($iduser,$diachi,$sdt,$name,$gmail);
                                // }
                                $kq=getall_cartuser($iduser);
                                foreach ($kq as $sp ) {
                                    extract($sp);
                                    $sanpham[$n]=[$id,$img,$tensp,$gia,$idsp,$size,$soluong];
                                    array_push($_SESSION['mycart'],$sanpham[$n]);
                                    $n=$n+1;
                                } 
                                foreach ($_SESSION['mycart'] as $dh ){
                                    $id=$dh[0];
                                    $tensp=$dh[2];
                                    $img=$dh[1];
                                    $gia=$dh[3];
                                    $idsp=$dh[4];
                                    $size=$dh[5];
                                    $soluong=$dh[6];
                                    if($size=="s"){
                                        $tsize="soluongs";
                                    }else if($size=="m"){
                                        $tsize="soluongm";
                                    }else{
                                        $tsize="soluongl";
                                    }
                                    // var_dump($size);
                                    // var_dump($tsize);
                                    insert_sangpham_donhang($tensp,$img,$gia,$idsp,$idretun,$soluong,$size);
                                    $soluongcu=getall_onenhaphang($idsp);
                                    $soluongmoi=$soluongcu[''.$tsize.'']-$soluong;
                                    if($size=="s"){
                                        updatesps($idsp,$soluongmoi);
                                    }else if($size=="m"){
                                        updatespm($idsp,$soluongmoi);
                                    }
                                    else{
                                        updatespl($idsp,$soluongmoi);
                                    }
                                }
                                foreach ($_SESSION['mycart'] as $dh ){
                                    $id=$dh[0];
                                    delspdonhang($id);
                                }
                                $_SESSION['mycart'] = array(); 
                            }
                       }else{
                        // tên người dùng nhâp
                        if($name==""){
                            $loiname="Bạn chưa nhập tên";
                            $nutname="nut-namesai";
                        }else{
                            $valuename=$name;
                        }
                        // gmail người dùng nhâpj
                        if($gmail==""){
                            $nutemail="nut-emailsai";
                            $loiemail="Bạn chưa nhập email";
                            $loilienhe=".";
                        }else{
                            $valueemail=$gmail;
                        }
                        // số điện thoại người dùng nhâpj vào
                        if($sdt==""){
                            $nutlienhe="nut-lienhesai";
                            $loilienhe="Bạn chưa nhập số điện thoại";
                            // $loiemail=".";
                        }else{
                            $valuelienhe=$sdt;
                        }
                        // đựo chỉ của người mau nhập vào
                        if($diachi==""){
                            $nutdiachi="nut-diachisai";
                            $loidiachi="Bạn chưa nhập địa chỉ";
                        }else{
                            $valuediachi=$diachi;
                        }
                         $kq=getall_cartuser($iduser);
                        include "view/thanhtoan.php";
                       }
                        
                    }
                    $kqq=getall_onedonhang($idretun);
                        include "view/camon.php";
                  
                    // 
                    
                        
                }else{
                    
                    if(isset($_POST['hoangtat'])&&($_POST['hoangtat'])){
                        $name=$_POST['name'];
                        $gmail=$_POST['gmail'];
                        $sdt=$_POST['sdt'];
                        $diachi=$_POST['diachi'];
                        $tongtien=$_POST['tongcongtien'];
                        $nam=date('Y');
                        $thang=date('m');
                        $ngay=date('d');
                        $gio=date('H:i:s');
                       if($name!=""&&$gmail!=""&&$sdt!=""&&$diachi!=""){
                            if(!is_email($gmail)){
                                $nutemail="nut-emailsai";
                                $loiemail="Không đúng định dạng gmail";
                                $loilienhe=".";
                                $valuelienhe=$sdt;
                                $valuename=$name;
                                $valuediachi=$diachi;
                                include "view/thanhtoannoname.php";
                            }else{
                                $tric=2;
                            }
                            if(!is_phone($sdt)||mb_strlen($sdt)!=10){
                                $nutlienhe="nut-lienhesai";
                                $loilienhe="Số điẹn thoại bạn nhập không đúng";
                                $loiemail=".";
                                $valuename=$name;
                                $valuediachi=$diachi;
                                $valueemail=$gmail;
                                include "view/thanhtoannoname.php";
                            }else{
                                $trib=2;
                                // var_dump($loilienhe);
                            }
                            if($tria==2&&$trib==2&&$tric==2&&$trid==2){
                                $idretun=insert_donhangnoname($name,$gmail,$sdt,$diachi,$tongtien,$nam,$thang,$ngay,$gio,$trangthai);
                                // var_dump($kq);   
                                foreach ($_SESSION['mycart'] as $dh ){
                                    $tensp=$dh[2];
                                    $img=$dh[1];
                                    $gia=$dh[3];
                                    $idsp=$dh[0];
                                    $soluong=$dh[4];
                                    $size=$dh[5];
                                    if($size=="s"){
                                        $tsize="soluongs";
                                    }else if($size=="m"){
                                        $tsize="soluongm";
                                    }else{
                                        $tsize="soluongl";
                                    }
                                    insert_sangpham_donhang($tensp,$img,$gia,$idsp,$idretun,$soluong,$size);
                                    $soluongcu=getall_onenhaphang($idsp);
                                    $soluongmoi=$soluongcu[''.$tsize.'']-$soluong;
                                    if($size=="s"){
                                        updatesps($idsp,$soluongmoi);
                                    }else if($size=="m"){
                                        updatespm($idsp,$soluongmoi);
                                    }
                                    else{
                                        updatespl($idsp,$soluongmoi);
                                    }
                                }
                                $_SESSION['mycart'] = array(); 
                                $kqq=getall_onedonhang($idretun);
                                include "view/camon.php"; 
                            }
                       }else{
                        // tên người dùng nhâp
                        if($name==""){
                            $loiname="Bạn chưa nhập tên";
                            $nutname="nut-namesai";
                        }else{
                            $valuename=$name;
                        }
                        // gmail người dùng nhâpj
                        if($gmail==""){
                            $nutemail="nut-emailsai";
                            $loiemail="Bạn chưa nhập email";
                            $loilienhe=".";
                        }else{
                            $valueemail=$gmail;
                        }
                        // số điện thoại người dùng nhâpj vào
                        if($sdt==""){
                            $nutlienhe="nut-lienhesai";
                            $loilienhe="Bạn chưa nhập số điện thoại";
                            // $loiemail=".";
                        }else{
                            $valuelienhe=$sdt;
                        }
                        // đựo chỉ của người mau nhập vào
                        if($diachi==""){
                            $nutdiachi="nut-diachisai";
                            $loidiachi="Bạn chưa nhập địa chỉ";
                        }else{
                            $valuediachi=$diachi;
                        }
                        
                        include "view/thanhtoannoname.php";
                       }
                    }
                    
                }
                break;
            case 'spdm':
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $kqspdm=getall_spfordm($_GET['iddm']);
                }
                    include "view/sanphamdm.php";
                break;
            case 'thongtin':
                $kq=getall_onenuser($iduser);
                include "view/thongtinuser.php";
            break;
            case 'thongtindiachi':
                $kq=getall_onenuser($iduser);
                include "view/thongtindiachi.php";
            break;
            case 'thongtindonhang':
                $kq=getall_onenuser($iduser);
                $kqq=getall_donhanguser($iduser);
                include "view/thongtindonhang.php";
            break;
            case 'thongtinchitietdonhang':
                if(isset($_GET['iddh'])&&($_GET['iddh']>0)){
                    $iddh=$_GET['iddh'];
                }
                $kq=getall_onenuser($iduser);
                $dh=getall_onedonhang($iddh);
                $kqq=getall_spdonhang($iddh);
                include "view/thongtinchitietdonhang.php";
            break;
            case 'camon':
                include "view/camon.php";
            break;
            case 'tang-giam-sl':

                include "view/cart.php";
            break;
            case 'dangnhap':
                include "view/dangnhap.php";
                break;
            case 'giohang':
                include "view/giohang.php";
                break;
            case 'home':
                include "view/home.php";
                break;
            case 'thanhtoan':
                if(isset($_SESSION['iduser'])&&($_SESSION['iduser']!="")){
                    $kq=getall_cartuser($iduser);
                    $kquser=getall_onenuser($iduser);
                    if($kquser['address']==array()){
                        $hoten="";
                        $gmail="";
                        $sodienthoai="";
                        $diachi="";
                    }else{
                        $hoten=$kquser['namedh'];
                        $gmail=$kquser['gmaildh'];
                        $sodienthoai=$kquser['sdt'];
                        $diachi=$kquser['address'];
                    }
                    include "view/thanhtoan.php";
                }else{
                    ($_SESSION['mycart']);
                    include "view/thanhtoannoname.php";   
                }
                break;
            case 'viewcart':
                include "view/viewcart.php";
                break;
            case 'xoacart':
                include "view/xoacart.php";
                break;
        default:
                
                break;
        }
    }else{
        include "view/section.php";
    }
    include "view/footer.php";
?>