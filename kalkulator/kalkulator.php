<!DOCTYPE html>
<html>
  <head>
    <title>Luas Persegi Panjang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="container">
      <h2>Hitung Luas Persegi Panjang</h2>
      <form method="post" action="kalkulator.php">
        <label for="panjang">Panjang:</label>
        <input type="number" id="panjang" name="panjang" value="0" step="1" min="0" required>
        <br>
        <label for="lebar">Lebar:</label>
        <input type="number" id="lebar" name="lebar" value="0" step="1" min="0" required>
        <br>
        <input type="submit" value="Hitung">
      </form>
    </div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai panjang dan lebar dari form
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    // Melakukan perhitungan luas persegi panjang
    $luas = $panjang * $lebar;

    // Menampilkan hasil perhitungan
    echo "<div class='container'>";
    echo "<h2>Hasil Perhitungan</h2>";
    echo "<p>Panjang: $panjang</p>";
    echo "<p>Lebar: $lebar</p>";
    echo "<p>Luas Persegi Panjang: $luas</p>";
    echo "</div>";
}
?>

  </body>
</html>