<?php
 function convertkuota($data)
 {
     $nilai_kuota = $data['valKuota'];
     $pilihan = $data['pilihan_kuota'];

     switch ($pilihan) {
         case "kilobyte" :
            $hasil = $nilai_kuota / 1024;
            break;
        case "megabyte" :
            $hasil = $nilai_kuota / 1024;
            break;
        case "gigabyte" :
            $hasil = $nilai_kuota / 1024;
            break;
        default:
            $hasil = "NULL";
            break;

 }
 return $hasil;
}
?>
