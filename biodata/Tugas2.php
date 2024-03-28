<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<div class="container">
    <h2>Form Biodata</h2>

    <?php
    $nama = $umur = $alamat = $email = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $nama = test_input($_POST["nama"]);
        $umur = test_input($_POST["umur"]);
        $alamat = test_input($_POST["alamat"]);
        $email = isset($_POST["email"]) ? test_input($_POST["email"]) : '';
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama;?>">
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="text" name="umur" id="umur" value="<?php echo $umur;?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" rows="5" cols="40"><?php echo $alamat;?></textarea>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php echo $email;?>">
        </div>
        
        <input type="submit" name="submit" value="Submit" class="submit-btn">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='result'>";
        echo "<h3>Hasil:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Umur: " . $umur . "<br>";
        echo "Alamat: " . $alamat . "<br>";
        echo "Email: " . $email . "<br>";
        echo "</div>"; 
    }
    ?>
</div>

</body>
</html>
