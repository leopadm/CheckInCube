<?php function getTable()
{
    $bdd =new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT * FROM pilote_data;";
    $sql = $bdd->prepare($str);
    $sql->execute();
    return $sql;
}
    
?>