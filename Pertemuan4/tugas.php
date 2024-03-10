<?php
$daftarData = [
    1 => [
        ['Hidayat', 'Jl Gading','089598218392','Teknologi Informasi'],
    ],
    2 => [
        ['Andrean', 'Jl Pakis','0888032483201','Teknik Sipil'],
    ]
    ];
    $kategori = 1;
    echo "AHMAD HIDAYAT PERMANA <br><br>";
    while ($kategori <= 2) {
        foreach ($daftarData[$kategori] as $data) {
            echo "<img src='bunga1.jpg'><br> Nama: {$data[0]},<br> Alamat: {$data [1]},<br> No Telepon: {$data[2]},<br> Jurusan: {$data[3]} <br><br>";
        }
        $kategori += 1;   
    }
?>