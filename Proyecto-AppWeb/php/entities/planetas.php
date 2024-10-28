<?php

use LDAP\Result;

class Planetas {
    public $id;
    public $nombre;
    public $imgs;
}

function getAllPlanetas(){
    $listaPlanetas = [];
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path."/animalesWeb/AnimalesWEB/php/connection/db.php");
    $sql = "SELECT id, nombre, imgs FROM planetas";
    $result = $connection->query($sql);
    if($result->num_rows > 0) {
        while($rows = $result->fetch_assoc()){
            $object = new Planetas();
            $object->id = $rows ["id"];
            $object->nombre = $rows ["nombre"];
            $object->imgs = $rows ["imgs"];
            $listaPlanetas[] = $object;
        }
    }
    return $listaPlanetas;
}
?>