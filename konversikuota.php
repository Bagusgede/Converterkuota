<?php
 function convertkuota($data)
 {
     $nilai_kuota = $data['valKuota'];
     $pilihan = $data['pilihan_kuota'];

     switch ($pilihan) {
         case "kilobyte" :
            $hasil = round($nilai_kuota / 1024, 2);
            break;
        case "megabyte" :
            $hasil = round($nilai_kuota / 1024 / 1024, 2);
            break;
        case "gigabyte" :
            $hasil = round($nilai_kuota / 1024 / 1024 / 1024, 2);
            break;
        default:
            $hasil = "NULL";
            break;

 }
 return $hasil;
}
?>
