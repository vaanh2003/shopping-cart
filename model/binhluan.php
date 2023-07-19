<?php

function insert_binhluan($noidung,$idusser,$name,$idpro,$postdate){
    $sql = "INSERT INTO tbl_binhluan (noidung,iduser,name,idpro,postdate) VALUES ('$noidung','$iduser','$name','$idpro','$postdate')";
    pdo_execute($sql);
}
function getall_binhluan($idpro){
    $sql="SELECT * FROM tbl_binhluan WHERE idpro='".$idpro."'ORDER BY ID DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}

?>