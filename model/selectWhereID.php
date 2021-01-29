<?php 

function selectWhereID($id){

    $bdd =new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT * FROM pilote WHERE id=:id;";
    $sql = $bdd->prepare($str);
    $sql->bindParam(":id", $id);
    $sql->execute();
    return $sql;
}

?>