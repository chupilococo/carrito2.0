<?php
function getItems($bd){
        $query = "select
                    i.id as id,
                    i.long_descripcion as long_descripcion,
                    i.short_descripcion as short_descripcion,
                    i.nombre as nombre,
                    i.precio as precio,
                    i.FK_usuario as FK_usuario,
                    GROUP_CONCAT(ii.img_path SEPARATOR '|') as imgs
                from
                    items i
                LEFT JOIN items_imgs ii on
                    i.id = ii.FK_item;";
        $res = mysqli_query($bd, $query);
        $salida = [];
        while($fila = mysqli_fetch_assoc($res)) {
            $salida[$fila['id']] = $fila;
        }
        return $salida;
};


function getItemById($bd, $id){
    $id=mysqli_real_escape_string($bd, $id);
    $query="select
                    i.id as id,
                    i.long_descripcion as long_descripcion,
                    i.short_descripcion as short_descripcion,
                    i.nombre as nombre,
                    i.precio as precio,
                    i.FK_usuario as FK_usuario,
                    GROUP_CONCAT(ii.img_path SEPARATOR '|') as imgs
                from
                    items i
                JOIN items_imgs ii on
                    i.id = ii.FK_item
                where i.id=$id;";
    $res= mysqli_query($bd,$query);
    if($fila= mysqli_fetch_assoc($res)) {
        return $fila;
    }
    return  null;
};


function getComentsByID($bd,$id){
    $id=mysqli_real_escape_string($bd, $id);
    $query="SELECT
                c.coment as comentario,
                u.nombre as usuario
            FROM
                comentarios c
            JOIN usuarios u on
                c.FK_usuario = u.id
                where c.FK_item=$id;";
    $res= mysqli_query($bd,$query);
    $salida=[];
    while($fila = mysqli_fetch_assoc($res)) {
        $salida[] = $fila;
    }
    return  $salida;
}