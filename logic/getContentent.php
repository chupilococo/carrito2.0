<?php
const Secciones=[
    'index'     =>'secciones/welcome.php',
    'productos' =>'secciones/productos.php',
    'contacto'  =>'secciones/contacto.php',
    404         =>'secciones/404.php',
    'merci'     =>'secciones/graciela.php',
];
function getContent(){
    $seccion='index';
    if(isset($_GET['s'])){
        $seccion=$_GET['s'];
    };
    if(!array_key_exists($seccion,Secciones)){
        $seccion=404;
    };
    $aux=Secciones[$seccion]; //Esto esta solo para que le IDE no me putée por poner un array en un include
    return require_once($aux);
}
