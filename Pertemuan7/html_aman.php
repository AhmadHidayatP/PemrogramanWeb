<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="nama">Nama: </label>
        <input type="text" name="input"><br><br>
        <label for="email">Email: </label>
        <input type="text" name="email"><br><br>
        <input type="submit" value="submit"><br><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES,'UTF-8');
    // Memeriksa apakah input adalah email yang valid
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Lanjutkan dengan pengolahan email yang aman
        echo "Email ini ".$email." aman<br>";
    } else {
    // Tangani input yang tidak valid
    echo "Email ini ".$email." tidak valid<br>";
    }
    echo $input;
}
?>