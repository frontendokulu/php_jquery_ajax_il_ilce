<?php 
include 'db.php';
$il_id=$_POST['il_id'];
$ilceler = $db->query("SELECT * FROM ilceler WHERE il_id = $il_id")->fetchAll(PDO::FETCH_ASSOC);
foreach ($ilceler as $ilce) {
    echo '<option value='.$ilce['id'].'>'.$ilce['isim'].'</option>';
}

 ?>