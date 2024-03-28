<!DOCTYPE html>
<html>
<head>
    <title>Variabel</title>
</head>
<body>
<?php
// penulisan array dapat dibuat seperti berikut
    $nama[] = "anies";
    $nama[] = "Prabowo";
    $nama[] = "Ganjar";

//menghitung jumlah elemen array
$jum_array = count($nama);
echo "jumlah elemen array = ". $jum_array;
echo "<br>";
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";
?>
</body>
</html>