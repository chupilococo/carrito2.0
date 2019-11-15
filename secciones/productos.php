<?php
require_once ('logic/base.php');
require_once('logic/items.php');
$body='';
if(isset($_GET['item'])){
    $id=$_GET['item'];
    $producto=getItemById($bd,$id);
    $coments=getComentsByID($bd,$id);
    $comentarios="<div>";

    if($coments){
        foreach( $coments as $coment ){
            $comentarios.="
                <div>
                    <h3>$coment[usuario] :</h3>
                    <p>$coment[comentario]</p>
                </div>
            ";
        }
    }else{
        $comentarios.="
                <div>
                    <h3>No hay comentarios todavia</h3>
                </div>
            ";

    }
    $comentarios.="</div>";
    if($producto){
        $imgs=explode("|",$producto['imgs']);
        $img1=$imgs[0]?$imgs[0]:'//www.fillmurray.com/200/200';
        $img2=$imgs[1]?$imgs[1]:'//www.fillmurray.com/200/200';
        $img3=$imgs[2]?$imgs[2]:'//www.fillmurray.com/200/200';

        $body.="<div class='producto-view'>
                    <div class='producto-view-imgs'>
                        <img src='$img1' alt='Imagen del producto'/>
                        <img src='$img2' alt='Imagen del producto'/>
                        <img src='$img3' alt='Imagen del producto'/>
                    </div>
                    <div class='producto-view-info'>
                        <p class='producto-view-texto'>$producto[short_descripcion]</p>
                        <p class='producto-view-texto'>$producto[long_descripcion]</p>
                        <p class='producto-view-precio'>Precio:<i class='fas fa-dollar-sign'></i> <span>$producto[precio]</span> </p>
                    </div>
                </div>
                <div class='producto-view'>
                    <h2>Comentarios</h2>
                        $comentarios;
                </div>
                
                ";
    }else{
        header("location:./?s=404");
    }
}else{
    $productos=getItems($bd);
    var_dump($productos);
    foreach ($productos as $id => $producto ){
        $img=explode("|",$producto['imgs'])[0]?explode("|",$producto['imgs'])[0]:'//www.fillmurray.com/200/200';
        $body .= "<div class='producto' >
                    <h3>".$producto['nombre']."</h3>
                    <img src='$img' alt='imagen del producto'>
                        <p>".$producto['short_descripcion']."</p>
                        <a class='btn-ver' href='?s=productos&item=".$id."'> ver </a>
                  </div>";
    }
}
?>
    <section class="productos" >
        <h2>Productos</h2>
            <?=$body?>
    </section>