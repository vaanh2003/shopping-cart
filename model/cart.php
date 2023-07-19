
<?php
    function insert_nhapcart($idsp,$img,$tensp,$gia,$iduser,$soluong,$size){
            $conn=connectdb();
            $sql = "INSERT INTO tbl_cart (idsp,img,tensp,gia,iduser,soluong,size) VALUES ('$idsp','$img','$tensp','$gia','$iduser','$soluong','$size')";
            // use exec() because no results are returned
            $conn->exec($sql);
        }
    function getall_cartuser($iduser){
        $sql="SELECT * FROM tbl_cart WHERE iduser='".$iduser."'ORDER BY ID DESC";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    function getall_cart(){
        $conn=connectdb();
        $sql="SELECT * FROM tbl_cart order by id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getall_onenspcart($id){
        $sql="SELECT * FROM tbl_cart WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function updateslspcart($idspchu,$soluongmoi){
        $conn=connectdb();
        $sql = "UPDATE tbl_cart SET soluong='".$soluongmoi."' WHERE id=".$idspchu;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function delspcart($id){
        $conn=connectdb();
        $sql = "DELETE FROM tbl_cart WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function updatesoluongcart($id,$soluong){
        $conn=connectdb();
        $sql = "UPDATE tbl_cart SET soluong='".$soluong."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
?>