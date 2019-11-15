<?php
const DB_HOST = '52.26.64.212';
const DB_USER = 'wadmin';
const DB_PASS = 'bernardo05';
const DB_BASE = 'carrito';
$bd = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
if(!$bd) {
    echo 'mantenimiento.php';
    exit;
}
mysqli_set_charset($bd, 'utf8mb4');