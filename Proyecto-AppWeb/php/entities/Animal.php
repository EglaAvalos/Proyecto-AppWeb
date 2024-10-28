<?php

use LDAP\Result;

class Animal {
    public $id;
    public $nombre;
    public $especie;
    public $color;
}

function getAll(){
    $listaAnimales = [];
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path."/animalesWeb/AnimalesWEB/php/connection/db.php");
    $sql = "SELECT id, nombre, especie, color FROM animal";
    $result = $connection->query($sql);
    if($result->num_rows > 0) {
        while($rows = $result->fetch_assoc()){
            $object = new Animal();
            $object->id = $rows ["id"];
            $object->nombre = $rows ["nombre"];
            $object->especie = $rows ["especie"];
            $object->color = $rows ["color"];
            $listaAnimales[] = $object;
        }
    }
    return $listaAnimales;
}
?>