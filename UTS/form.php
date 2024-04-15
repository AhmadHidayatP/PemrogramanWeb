<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Login dahulu!')</script>";
    header('Location: login.php');
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">  
    <title>Form Peminjaman Buku</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
  <script>
    $(document).ready(function(){
  $("#logout").click(function(){
    $("table").fadeOut("slow"); 
    $("table").fadeOut(3000, function() {
      window.location.href = "logout.php"; 
    });
    });
  });
</script>
</head>

<body>
    <div class="main">
        <form id="formPinjam" action="#" method="POST">
            <table> 
                <tr>
                    <td>
                        Nama Lengkap
                    </td>
                    <td>
                        :
                        <input type="text" size="30" id="nama" name="nama_peminjam" required>
                        <span id="nama-error" style="color: red;"></span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Judul Buku
                    </td>
                    <td>
                        :
                        <input type="text" size="30" id="judul" name="judul_buku" required>
                        <span id="judul-error" style="color: red;"></span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal Peminjaman
                    </td>
                    <td>
                        :
                        <input type="date" style="width:240px" id="tgl_pinjam" name="tanggal_pinjam" required>
                        <span id="pinjam-error" style="color: red;"></span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal Pengembalian
                    </td>
                    <td>
                        :
                        <input type="date" style="width:240px" id="tgl_kembali" name="tanggal_kembali" required>
                        <span id="kembali-error" style="color: red;"></span><br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right">
                        <input id="logout" type="button" name="logout" value="Logout">
                        <input id="submit" type="submit" name="submit" value="Pinjam Buku">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaPeminjam = $_POST["nama_peminjam"]; 
    $judulBuku = $_POST["judul_buku"];
    $tanggalPinjam = $_POST["tanggal_pinjam"];
    $tanggalKembali = $_POST["tanggal_kembali"];

      echo "<script>alert('Peminjaman Berhasil!')</script>";
      echo "<table style='margin-left: 1em;' id='hasil'; display: none;>";
      echo "<tr><td>Nama Peminjam  : $namaPeminjam</td></tr>";
      echo "<tr><td>Judul Buku     : $judulBuku</td></tr>";
      echo "<tr><td>Tanggal Pinjam : $tanggalPinjam</td></tr>";
      echo "<tr><td>Tanggal Kembali: $tanggalKembali</td></tr>";
      echo "</table>";
    }   
?>
</body>
</html>