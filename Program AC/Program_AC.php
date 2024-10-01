<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="stylingAC.css?v=<?php echo time(); ?>">
<body>
    
    <div class="form">
        <form class="formAC" action = "Program_AC.php" method="post">
            <label class="suhuruangan">Suhu Ruangan:</label>
            <input class="indikator" type="number" name="suhu">
            <label class="kelembabanruangan">Kelembaban Ruangan:</label>
            <input class="indikator" type="number" name="lembab">
            <button class="submit" type="submit">AC</ACr></button>
        </form>
    


</body>
</html>

<div class = "output">

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $suhuRuangan = $_POST["suhu"];
     $kelembaban = $_POST["lembab"];

    if ($suhuRuangan < 25 && $kelembaban < 50) {
        echo "<p class = 'output'> AC Mati </p>";
    } elseif ($suhuRuangan >= 25 && $suhuRuangan <= 30 && $kelembaban < 50) {
        echo "<p class = 'output'> AC Menyala Rendah </p>";
    } elseif (($suhuRuangan >= 25 && $suhuRuangan <= 30 && $kelembaban >= 50) || ($suhuRuangan > 30 && $kelembaban < 50)) {
        echo "<p class = 'output'> AC Menyala Sedang </p>";
    } elseif ($suhuRuangan > 30 && $kelembaban >= 50) {
        echo "<p class = 'output'> AC Menyala Berat </p>";
    } else {
        echo "<p>Input Salah</p>";
    }
}
?>
</div>
</div>

