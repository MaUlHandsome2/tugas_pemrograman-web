<h2>latihan do while</h2>
<?php
$menghitung = 3;
do{
echo "hitunglah dari angka ".$menghitung;
echo "<br>";
$menghitung++;
}while($menghitung < 10);
?>
<br>
<h2>latihan break do while</h2>
<?php
$a = 2;
do{
    if($a == 5) break;
    echo "itung angka - ".$a;
    echo "<br>";
    $a++;
}while($a < 15);
?>
<h2>latihan continue do while</h2>
<?php
$hitungan_angka = 3;
do {
    $hitungan_angka++;
    if($hitungan_angka==10)continue;
    echo "angka = ".$hitungan_angka;
    echo "<br>";
}while($hitungan_angka < 15);