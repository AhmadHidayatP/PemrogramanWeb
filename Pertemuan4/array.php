<?php
// mencari nilai siswa yang lulus dengan menggunakan perulangan untuk mengecek apakah nilai lebih dari 70, 
// jika iya tambahkan ke dalam array $nilailulus kemudian ditampilkan
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilailulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) { 
        $nilailulus[] = $nilai; 
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilailulus);
echo "<br><br>";

// mencari nama karyawan yang memiliki pengalaman lebih dari 5 tahun dengan menggunakan perulangan untuk mengecek apakah 
// data karyawan lebih dari 5 tahun, jika iya tambahkan ke dalam array $karyawanPengalamanLimaTahun kemudian ditampilkan
$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
    ];
    $karyawanPengalamanLimaTahun = [];
    foreach ($daftarkaryawan as $karyawan) {
     if ($karyawan [1] > 5) {
    $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
    }
    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ". implode(', ', $karyawanPengalamanLimaTahun);
echo "<br><br>";


// Menampilkan daftar nilai mahasiswa dalam mata kuliah yang dipilih dan melakukan 
// perulangan foreach untuk setiap nilai dalam mata kuliah yang dipilih 
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
    ];
    $mataKuliah = 'Fisika';
    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai [1]} <br>";
    }
    echo "<br>";

// Mencetak daftar nilai siswa dalam ujian matematika dengan menjumlah total nilai data siswa 
// dengan jumlah data siswa dan di cetak
$dataSiswa = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
];
$rataRataKelas = array_sum($dataSiswa) / count($dataSiswa);
echo "Daftar nilai siswa yang di atas rata-rata kelas:<br>";
foreach ($dataSiswa as $nama => $nilai) {
    if ($nilai > $rataRataKelas) {
        echo "$nama: $nilai<br>";
    }
}
?>