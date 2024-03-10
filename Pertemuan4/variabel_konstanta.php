<?php

    // menyimpan nilai berbentuk angka ke dalam variabel dan menampilkan outputnya ke menggunakan echo
    $angka1 = 10;
    $angka2 = 5;
    $hasil = $angka1 + $angka2;
    echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";

    // menggunakan nilai boolean dan menampilkannya
    $benar = true;
    $salah = false;
    echo "Variabel benar: $benar, Variabel salah: $salah";

    // penggunaan konstanta menggunakan fungsi define dengan nama NAMA_SITUS dan TAHUN_PENDIRIAN yang akan menampilkan pesan selamat datang
    define("NAMA_SITUS", "WebsiteKu.com");
    define("TAHUN_PENDIRIAN", 2023);

    echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";

 ?>