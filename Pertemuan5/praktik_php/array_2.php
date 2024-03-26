<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
    <?php
        $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan' ];
        echo "<table border=1><tr><td>";
        echo "Nama: {$Dosen ['nama']} <br>";
        echo "</td></tr>";
        echo "<tr><td>";
        echo "Domisili: {$Dosen ['domisili']} <br>";
        echo "</td></tr>";
        echo "<tr><td>";
        echo "Jenis Kelamin {$Dosen ['jenis_kelamin']} <br>";
        echo "</td></tr>";
    ?>
</body>

</html>