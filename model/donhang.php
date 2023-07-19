<?php

function insert_donhang($name,$gmail,$sdt,$diachi,$iduser,$tongtien,$nam,$thang,$ngay,$gio,$trangthai){
    $sql = "INSERT INTO tbl_donhang (name,gmail,sdt,diachi,iduser,tongtien,nam,thang,ngay,gio,trangthai) VALUES ('$name','$gmail','$sdt','$diachi','$iduser','$tongtien','$nam','$thang','$ngay','$gio','$trangthai')";
    // use exec() because no results are returned
    return pdo_exacute_return_lastInsertID($sql);
}
function insert_donhangnoname($name,$gmail,$sdt,$diachi,$tongtien,$nam,$thang,$ngay,$gio,$trangthai){
    $sql = "INSERT INTO tbl_donhang (name,gmail,sdt,diachi,tongtien,nam,thang,ngay,gio,trangthai) VALUES ('$name','$gmail','$sdt','$diachi','$tongtien','$nam','$thang','$ngay','$gio','$trangthai')";
    // use exec() because no results are returned
    return pdo_exacute_return_lastInsertID($sql);
}
function insert_sangpham_donhang($tensp,$img,$gia,$idsp,$idretun,$soluong,$size){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_spdonhang    (tensp,img,gia,idsp,iddonhang,soluong,size) VALUES ('$tensp','$img','$gia','$idsp','$idretun','$soluong','$size')";
    // use exec() because no results are returned
    $conn->exec($sql);  
}
function delspdonhang($id){
    $conn=connectdb();
    $sql = "DELETE FROM tbl_cart WHERE id=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
}
function getall_onedonhang($id){
    $sql="SELECT * FROM tbl_donhang WHERE id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function getall_donhangdangxl($id){
    $sql="SELECT * FROM tbl_donhang WHERE trangthai='".$id."'ORDER BY ID DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}
function getall_donhang(){
    $conn=connectdb();
    $sql="SELECT * FROM tbl_donhang order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getall_tongtiendonhang(){
    $conn=connectdb();
    $sql="SELECT tongtien FROM tbl_donhang order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
// function getall_onespdonhang($id){
//     $sql="SELECT * FROM tbl_spdonhang WHERE iddonhang=".$id;
//     $sp=pdo_query_one($sql);
//     return $sp;
// }
function getall_spdonhang($id){
    $sql="SELECT * FROM tbl_spdonhang WHERE iddonhang='".$id."'ORDER BY ID DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}
function getall_donhanguser($id){
    $sql="SELECT * FROM tbl_donhang WHERE iduser='".$id."'ORDER BY ID DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}
function getall_sanphamdh(){
    $conn=connectdb();
    $sql="SELECT * FROM tbl_spdonhang order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
// phần code bậy thử nghiệm
function getall_thangdonhang($thang,$id){
    $sql="SELECT * FROM tbl_donhang WHERE thang='".$thang."' AND ngay='".$id."'ORDER BY ID DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}
function getall_theothang($thang){
    $sql="SELECT * FROM tbl_donhang WHERE thang='".$thang."' ORDER BY ID DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}
function updatestrangthai($id,$trangthai){
    $conn=connectdb();
    $sql = "UPDATE tbl_donhang SET trangthai='".$trangthai."' WHERE id=".$id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}
?>

