<?php
include 'Kalkulator.php';

$angka1 = @$_POST['angka1Input'];
$angka2 = @$_POST['angka2Input'];
$kalk = @$_POST['calInserted'];

$kalkulator = new Kalkulator($angka1, $angka2, $kalk);
echo $kalkulator->kalkMethod();
?>