<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Nilai Baru</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #CDE8E5;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .input-form {
      background-color: #F7EEDD;
      padding: 25px;
      border-radius: 8px;
      max-width: 350px;
      width: 100%;
      box-sizing: border-box;
    }

    .input-label {
      font-weight: 700;
      margin-bottom: 10px;
      display: block;
      color: #555;
    }

    .input-field {
      width: 100%;
      padding: 4px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      transition: border-color 0.3s;
    }

    .input-field:focus {
      border-color: #007BFF;
      outline: none;
    }

    .submit-btn {
      background-color: #7AB2B2;
      color: #fff;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 700;
      width: 100%;
      margin-top: 10px;
    }

    .submit-btn:hover {
      background-color: #0056b3;
    }

    .result-box {
      background-color: #FFF;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 350px;
      width: 100%;
      box-sizing: border-box;
      margin-top: 20px;
    }

    .result-box p {
      margin: 12px 0;
      font-size: 15px;
    }

    .result-box strong {
      font-weight: 700;
    }
  </style>
</head>
<body>

<div>
  <form id="formInputNilai" class="input-form" method="POST" action="">
    <label for="inputNama" class="input-label">Nama:</label>
    <input type="text" id="inputNama" name="inputNama" class="input-field" required>

    <label for="inputNim" class="input-label">NIM:</label>
    <input type="text" id="inputNim" name="inputNim" class="input-field" required>

    <label for="inputNilai" class="input-label">Nilai:</label>
    <input type="number" id="inputNilai" name="inputNilai" class="input-field" min="0" max="100" required>

    <input type="submit" class="submit-btn" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["inputNama"];
    $nim = $_POST["inputNim"];
    $nilai = intval($_POST["inputNilai"]);

    // Menentukan Grade berdasarkan nilai
    if ($nilai >= 90) {
      $grade = "A";
    } elseif ($nilai >= 80) {
      $grade = "B+";
    } elseif ($nilai >= 70) {
      $grade = "B";
    } elseif ($nilai >= 60) {
      $grade = "C+";
    } elseif ($nilai >= 55) {
      $grade = "C";
    } elseif ($nilai >= 50) {
      $grade = "D";
    } else {
      $grade = "E";
    }
  ?>
    <div class="result-box">
      <p><strong>Nama:</strong> <?php echo $nama; ?></p>
      <p><strong>NIM:</strong> <?php echo $nim; ?></p>
      <p><strong>Nilai:</strong> <?php echo $nilai; ?></p>
      <p><strong>Grade:</strong> <?php echo $grade; ?></p>
    </div>
  <?php
  }
  ?>

</div>

</body>
</html>
