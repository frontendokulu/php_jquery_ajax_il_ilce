<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Türkiye İl İlçe - Jquery Ajax </title>
    <!-- CSS only -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container ">
        <div class="row mt-3">
            <div class="col">
                <h3>Jquery Ajax Kullanarak İllere Göre İlçe Seçimi</h3>
            </div>
        </div>
        <div class="row mt-3">

            <div class="col">
                <select class="form-control" id="il">
                    <option value="0">Bir İl Seçiniz</option>
                    <?php $iller = $db->query("SELECT * FROM iller")->fetchAll(PDO::FETCH_ASSOC); ?>
                    <?php foreach ($iller as $il) { ?>
                        <option value="<?=$il['id']?>"><?=$il['isim']?></option>
                    
                    <?php } ?>
                </select>
            </div>
        </div>
       <div class="row mt-3">
            <div class="col">
                <select class="form-control" id="ilce"></select>
            </div>
        </div>
    </div>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#ilce').hide();
            $('#il').change(() => {
                var il_id = $('#il option').filter(':selected').val();
                // console.log(il_id);
                $.ajax({
                    type    : "POST",
                    url     :'ajax.php',
                    data    :{
                        "il_id" : il_id,
                    },
                    success : function(e){
                        $('#ilce').show();
                        $('#ilce').html(e)
                    }
                });
            });
        });
    </script>
</body>
</html>