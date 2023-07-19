<?php
    function themdm($tendm){
        $conn=connectdb();
        $sql = "INSERT INTO tbl_danhmuc (tendm) VALUES ('".$tendm."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function updatedm($id,$tendm){
        $conn=connectdb();
        $sql = "UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function getonedm($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id );
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function deldm($id){
        $conn=connectdb();
        $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    
    function getall_dm(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getall_onendanhmuc($id){
        $sql="SELECT soluong FROM tbl_danhmuc WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function getall_onenspdanhmuc($id){
        $sql="SELECT iddm FROM tbl_sanpham WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function getall_onensoluongdm($id){
        $sql="SELECT soluong FROM tbl_danhmuc WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function updatedanhmucsoluong($id,$kqdm){
        $conn=connectdb();
        $sql = "UPDATE tbl_danhmuc SET soluong='".$kqdm."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function updatedanhmucsoluongchu($id,$kqdm){
        $conn=connectdb();
        $sql = "UPDATE tbl_danhmuc SET soluong='".$kqdm."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function getall_spfordm($id){
        $sql="SELECT * FROM tbl_sanpham WHERE iddm='".$id."'ORDER BY ID DESC";
        $listbl=pdo_query($sql);
        return $listbl;
    }
?>