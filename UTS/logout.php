<?php
session_start();
session_destroy();

echo "<script>alert('Berhasil logout!')</script>";
echo '<script>window.location.href="login.php"</script>';
exit;
?>