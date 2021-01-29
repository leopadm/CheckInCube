<?php function getAdmin()
{
    $bdd =new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT * FROM logAdmin;";
    $sql = $bdd->prepare($str);
    $sql->execute();
    return $sql;
}
    