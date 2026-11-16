<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan tugas6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h3>1) Pengulanggan 1 - 10</h3>
    <div class="genap-box">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        ?>
    </div>

    <br><hr><br>

    <h3>Latihan soal2</h3>
<p>2) Tabel </p>

<table class="perkalian">
    
    <tr>
        <td class="putih">bilangan</td>
        <?php
        for ($k = 1; $k <= 10; $k++) {
            echo "<td class='hijau'>$k</td>";
        }
        ?>
    </tr>

    
    <?php
    for ($baris = 1; $baris <= 10; $baris++) {
        echo "<tr>";

        
        echo "<td class='hijau kolom-awal'>$baris</td>";

        
        for ($kolom = 1; $kolom <= 10; $kolom++) {
            $hasil = $baris * $kolom;

            
            if ($hasil % 2 == 1) {
                $kelas = "kuning";
            } else {
                $kelas = "biru";
            }

            echo "<td class='$kelas'>$hasil</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>