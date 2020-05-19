<?php 
try {
    $db = new PDO("mysql:host=localhost;dbname=il_ilce;charset=utf8", 'root', '');
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>