<?php
    function insert_sanpham($iddm,$tensp,$gia,$img,$xuat){
        $conn=connectdb();
        $sql = "INSERT INTO tbl_sanpham (iddm, tensp, gia, img,xuat) VALUES ('$iddm', '$tensp', '$gia', '$img','$xuat')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function insert_nhaphang($idsp,$tensp,$noinhaphang,$soluong,$gia){
        $conn=connectdb();
        $sql = "INSERT INTO tbl_nhaphang (idsp,tensp,noinhaphang,soluong,gia) VALUES ('$idsp','$tensp','$noinhaphang','$soluong','$gia')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getall_nhaphang(){
        $conn=connectdb();
        $sql="SELECT * FROM tbl_nhaphang order by id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }

    function getall_sanpham(){
        $conn=connectdb();
        $sql="SELECT * FROM tbl_sanpham order by id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getall_one($id){
        $sql="SELECT * FROM tbl_sanpham WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function getall_onenhaphang($id){
        $sql="SELECT * FROM tbl_sanpham WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function delsp($id){
        $conn=connectdb();
        $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function updatesp($id,$soluongmoi){
        $conn=connectdb();
        $sql = "UPDATE tbl_sanpham SET soluongs='".$soluongmoi."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function updatesps($id,$soluongmoi){
        $conn=connectdb();
        $sql = "UPDATE tbl_sanpham SET soluongs='".$soluongmoi."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function updatespm($id,$soluongmoi){
        $conn=connectdb();
        $sql = "UPDATE tbl_sanpham SET soluongm='".$soluongmoi."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function updatespl($id,$soluongmoi){
        $conn=connectdb();
        $sql = "UPDATE tbl_sanpham SET soluongl='".$soluongmoi."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function get_sp_by_key($key) {
        $conn=connectdb();
        $sql="SELECT * FROM tbl_sanpham WHERE tensp like '%$key%'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getall_spforsection($id){
        $sql="SELECT * FROM tbl_sanpham WHERE xuat='".$id."'ORDER BY ID DESC";
        $listbl=pdo_query($sql);
        return $listbl;
    }
?>