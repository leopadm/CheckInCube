<?php function getPilote()
{
    $bdd =new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT * FROM pilote;";
    $sql = $bdd->prepare($str);
    $sql->execute();
    return $sql;
}
    
?>