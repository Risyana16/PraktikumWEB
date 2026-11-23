<?php
require_once 'kucing.php';
require_once 'anjing.php';

$kucing = new Kucing();
$kucing->setNama("Mochi");
$kucing->setUmur(2);

$anjing = new Anjing();
$anjing->setNama("kimoy");
$anjing->setUmur(3);

$daftarHewan = [$kucing, $anjing];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
</head>
<body>
    <h2>Data Hewan</h2>
    <?php foreach ($daftarHewan as $hewan): ?>
        <p>
            <strong>Nama:</strong> <?= htmlspecialchars($hewan->getNama()) ?><br>
            <strong>Umur:</strong> <?= htmlspecialchars((string)$hewan->getUmur()) ?> tahun<br>
            <strong>Jenis:</strong> <?= htmlspecialchars($hewan->getJenis()) ?><br>
            <strong>Suara:</strong> <?= htmlspecialchars($hewan->getSuara()) ?>
        </p>
        <hr>
    <?php endforeach; ?>
</body>
</html>