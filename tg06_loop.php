<?php
/*1.buat loop 1 sampai 20 kali mengunakan for loop
  2.cetak nama di perulangan ke 2
  3.cetak no_hp di perulangan ke 5
  4.cetak alamat di perulangan ke 7

*/
$nama = "Eko Cahyono";
$no_hp = "0857-8284-3308";
$alamat = "Sepatan, Tangerang";


for ($a=1; $a <= 20 ; $a++) { 
     echo "<br>";
    if ($a ==2) {
        echo "$a : $nama";
    }elseif ($a==5) {
        echo "$a :  $no_hp";
    } elseif($a==7){
        echo "$a :  $alamat";
    }else {
        echo "$a : ";
    }
    
}
?>