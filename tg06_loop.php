<?php
/*1.buat loop 1 sampai 20 kali mengunakan for loop
  2.cetak nama di perulangan ke 2
  3.cetak no_hp di perulangan ke 5
  4.cetak alamat di perulangan ke 7

*/
$nama = "Eko Cahyono";
$no_hp = "0857-8284-3308";
$alamat = "Sepatan, Tangerang";


for ($i=1; $i <= 20 ; $i++) { 
     echo "<br>";
    if ($i ==2) {
        echo "$i : $nama";
    }elseif ($i==5) {
        echo "$i :  $no_hp";
    } elseif($i==7){
        echo "$i :  $alamat";
    }else {
        echo "$i : ";
    }
    
}
?>