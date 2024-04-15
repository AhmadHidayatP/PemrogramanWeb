<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: form.php');
    exit;
}
if (isset($_COOKIE['remember_me'])) {
    $username = $_COOKIE['remember_me'];
    $password = base64_decode($_COOKIE['remember_me_password']); 
  
    if ($username === 'admin' && $password === 'admin') {
      $_SESSION['username'] = $username;
      header('Location: form.php');
      exit;
    }
  }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['username'] = $username;
        if ($rememberMe) {
            $encodedPassword = base64_encode($password);
            setcookie('remember_me', $username, time() + (60 * 60 * 24 * 30)); 
            setcookie('remember_me_password', $encodedPassword, time() + (60 * 60 * 24 * 30));
          }
        header('Location: form.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">  
    <title>Login Page</title>
    <style>
        body {
            font-family: "Raleway Thin", sans-serif;
        }
        table {
            height: 300px;
        }
        tr {
            height: 20px;
        }
    </style>
</head>
<body>
    <div class="main">
        <form action= "#" method="POST">
            <table>
                <tr>
                    <td colspan=2 align="center" style="letter-spacing: 4px;">
                        <h2>LOGIN</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        :
                        <input type="text" size="30" id="username" name="username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        :
                        <input type="password" size="30" id="password" name="password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="remember_me">
                            <input type="checkbox" id="remember_me" name="remember_me"> Remember me
                        </label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right">
                        <input id="submit" type="submit" name="submit" value="Login">
                        <?php if (isset($error)): ?>
                            <p style="color: red;"><?php echo $error; ?></p>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>