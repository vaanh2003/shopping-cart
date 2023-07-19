<?php
    // function themdm($tendm){
    //     $conn=connectdb();
    //     $sql = "INSERT INTO tbl_danhmuc (tendm) VALUES ('".$tendm."')";
    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    // }
    // function updatedm($id,$tendm){
    //     $conn=connectdb();
    //     $sql = "UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;
    //     // Prepare statement
    //     $stmt = $conn->prepare($sql);
    //     // execute the query
    //     $stmt->execute();
    // }
    // function getonedm($id){
    //     $conn=connectdb();
    //     $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id );
    //     $stmt->execute();
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $kq = $stmt->fetchAll();
    //     return $kq;
    // }
    // function deldm($id){
    //     $conn=connectdb();
    //     $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;
    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    // }
    function themuser($name,$email,$user,$pass,$role){
        $conn=connectdb();
        $sql = "INSERT INTO tbl_user (name,email,user,pass,role) VALUES ('$name','$email','$user','$pass','$role')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    // function checkuser($user,$pass){
    //     $conn=connectdb();
    //     $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."'");
    //     $stmt->execute();
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $kq = $stmt->fetchAll();
    //     if(count($kq)>0){
    //         return $kq[0]['role'];
    //     }else{
    //         return 0;
    //     }
        
    // }
    function getuserinfo($user,$pass){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
        
    }
    function getuserinfouser($user){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
        
    }
    function dangkytk($user,$pass,$name,$email){
        $conn=connectdb();
        $sql = "INSERT INTO tbl_user (user,pass,name,email)
        VALUES ('$user', '$pass', '$name', '$email')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function getall_user(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_user");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function deluser($id){
        $conn=connectdb();
        $sql = "DELETE FROM tbl_user WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getall_onenuser($id){
        $sql="SELECT * FROM tbl_user WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    
    // function updateuser($iduser,$diachi,$sdt,$name,$gmail){
    //     $conn=connectdb();
    //     $sql = "UPDATE tbl_user SET namedh='".$name."'AND address='".$diachi."' AND sdt='".$sdt."'AND gmaildh='".$gmail."' WHERE id=".$iduser;
    //     // Prepare statement
    //     $stmt = $conn->prepare($sql);
    //     // execute the query
    //     $stmt->execute();
    // }
    function updateuser($iduser,$diachi){
        $conn=connectdb();
        $sql = "UPDATE tbl_user SET  address='".$diachi."' WHERE id=".$iduser;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function updatename($iduser,$name){
        $conn=connectdb();
        $sql = "UPDATE tbl_user SET  namedh='".$name."' WHERE id=".$iduser;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function updatesdt($iduser,$sdt){
        $conn=connectdb();
        $sql = "UPDATE tbl_user SET  sdt='".$sdt."' WHERE id=".$iduser;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function updategmail($iduser,$gmail){
        $conn=connectdb();
        $sql = "UPDATE tbl_user SET  gmaildh='".$gmail."' WHERE id=".$iduser;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    

?>