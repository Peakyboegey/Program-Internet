<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .status-lulus {
            color: green;
            font-weight: bold;
        }
        .status-tidak-lulus {
            color: red;
            font-weight: bold;
        }
        .recommendation {
            color: orange;
        }
    </style>
</head>
<body>

<?php

$siswa = [
    ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
    ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
    ["nama" => "Cici", "matematika" => 70, "bahasa_inggris" => 60, "ipa" => 75],
    ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
    ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55]
];


foreach ($siswa as &$data) {
    $rataRata = ($data["matematika"] + $data["bahasa_inggris"] + $data["ipa"]) / 3;
    $data["rata_rata"] = round($rataRata, 2);

    
    if ($rataRata >= 75) {
        $data["status"] = "Lulus";
    } else {
        $data["status"] = "Tidak Lulus";

        
        $nilai_terendah = min($data["matematika"], $data["bahasa_inggris"], $data["ipa"]);
        if ($nilai_terendah == $data["matematika"]) {
            $data["rekomendasi"] = "Perbaiki Matematika";
        } elseif ($nilai_terendah == $data["bahasa_inggris"]) {
            $data["rekomendasi"] = "Perbaiki Bahasa Inggris";
        } else {
            $data["rekomendasi"] = "Perbaiki IPA";
        }
    }
}


echo "<table>";
echo "<tr>
        <th>Nama</th>
        <th>Matematika</th>
        <th>Bahasa Inggris</th>
        <th>IPA</th>
        <th>Rata-rata</th>
        <th>Status</th>
        <th>Rekomendasi</th>
      </tr>";

foreach ($siswa as $data) {
    $statusClass = ($data['status'] == "Lulus") ? "status-lulus" : "status-tidak-lulus";
    echo "<tr>
            <td>{$data['nama']}</td>
            <td>{$data['matematika']}</td>
            <td>{$data['bahasa_inggris']}</td>
            <td>{$data['ipa']}</td>
            <td>{$data['rata_rata']}</td>
            <td class='$statusClass'>{$data['status']}</td>";
    
    if (isset($data['rekomendasi'])) {
        echo "<td class='recommendation'>{$data['rekomendasi']}</td>";
    } else {
        echo "<td>-</td>";
    }
    
    echo "</tr>";
}
echo "</table>";


$lulus = 0;
$tidakLulus = 0;
foreach ($siswa as $data) {
    if ($data["status"] == "Lulus") {
        $lulus++;
    } else {
        $tidakLulus++;
    }
}
echo "<p><strong>Total Lulus:</strong> $lulus</p>";
echo "<p><strong>Total Tidak Lulus:</strong> $tidakLulus</p>";

?>

</body>
</html>
