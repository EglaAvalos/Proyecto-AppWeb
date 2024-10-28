<?php

use LDAP\Result;

class Musica {
    public $id;
    public $nombre;
    public $artista;
    public $genero;
    public $duracion;

}

function getAllMusica(){
    $listaMusica = [];
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path."/animalesWeb/AnimalesWEB/php/connection/db.php");
    $sql = "SELECT id, nombre, artista, genero, duracion FROM musica";
    $result = $connection->query($sql);
    if($result->num_rows > 0) {
        while($rows = $result->fetch_assoc()){
            $object = new Musica();
            $object->id = $rows ["id"];
            $object->nombre = $rows ["nombre"];
            $object->artista = $rows ["artista"];
            $object->genero = $rows ["genero"];
            $object->duracion = $rows ["duracion"];
            $listaMusica[] = $object;
        }
    }
    return $listaMusica;
}
?>