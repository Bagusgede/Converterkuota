<?php
require_once "konversikuota.php";
if (isset($_POST['submit'])) {
    $hasil = convertkuota($_POST);
    $pilihan_kuota = $_POST['pilihan_kuota'];
}
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversi kuota</title>
</head>
<body>
    <form action="" method = "post">
        <label for="valKuota">Masukan Nilai Kuota</label>
        <input type="text" name="valKuota" id="valKuota">

        <div>
            <label for="kilobyte"><input type="radio" name="pilihan_kuota" id="kilobyte" value="kilobyte">Kilobyte</label>
            <label for="megabyte"><input type="radio" name="pilihan_kuota" id="megabyte" value="megabyte">Megabyte</label>
            <label for="gigabyte"><input type="radio" name="radio" id="gigabyte" value="gigabyte">Gigabyte</label>
        </div>
        <br>
        <button type="submit" name="submit">Convert</button>
    </form>
    <?php 
        if(isset($hasil)) :
    ?>
        <h3>
            Hasil Konversi ke <?=$pilihan_kuota;?> adalah <?=$hasil;?>
        </h3>
        <?php endif;?>
</body>
</html>