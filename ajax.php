<?php 
include 'db.php';
$il_id=$_POST['il_id'];
if ($il_id != 0) {
    $ilceler = $db->query("SELECT * FROM ilceler WHERE il_id = $il_id")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($ilceler as $ilce) {
        //veri ekrana yazılarak index sayfasına geri döndürülüyor.
        echo '<option value='.$ilce['id'].'>'.$ilce['isim'].'</option>';
    }
}


 ?>