<h2>latihan while</h2>
<?php
$a = 4;
while ($a < 10){
    echo "angka yang muncul yaitu :".$a;
    echo "<br>";
    $a++;
}
?>
<br>
<h2>latihan while break</h2>
<?php
$i = 1;
while ( $i <= 6 ) {
    if($i==4)break;
    echo" Angka - ".$i;
    echo "<br>";
    $i++;
}
?>
<br>
<h2>latihan while continue PHP</h2>
<?php      
$hitung = 0;    
while ($hitung < 5 ){
    $hitung++;
    if($hitung == 3)continue;
    echo $hitung;
    echo "<br>";
}
?>
<br><h2>alternative sintax</h2>
    <?php
    $hit = 3;
    while($hit < 6 ):
        echo "angka - ".$hit;
        echo "<br>";
        $hit++;
    endwhile;
    ?>
      