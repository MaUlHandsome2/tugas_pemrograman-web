<h4>Data Array biasa yang pakek indeks</h4>
<?php
$fruit = array ("aple","orange","grape"); //ini yang array beerindeks//
foreach ($fruit as $value){
    echo "$value <br>";
}
?>
<br><h4>Data Array assosiatif ( yang menggunakan kunci nama )</h4>
<?php
$biodataku = array ("Nama" => "Yulia Rahmawati","Umur"=> "19","Alamat"=> "Baret Orong","Hobi"=> "Ngemil"); //ini array assosiatif//
foreach($biodataku as $key => $value){
   echo "$key : $value <br>";
}
?>
<br><h4>Data array yang menggunakan objek</h4>
<?php
class Novelku{
    public $Pengarang;
    public $JudulBuku;
    public function __construct($Pengarang,$JudulBuku){
        $this->Pengarang = $Pengarang;
        $this->JudulBuku = $JudulBuku;
    }
}
$mynovel = new Novelku ("Tere Liye","Pulang");
foreach ($mynovel as $x =>$y){
    echo "$x : $y <br>";
}