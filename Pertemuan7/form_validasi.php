<!DOCTYPE html>
<html>

<head>
  <title>Form Input dengan Validasi (AJAX)</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <h1>Form Input dengan Validasi</h1>
  <form id="myForm" method="post" action="proses_validasi.php">
    <label for="nama">Nama: </label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>
    <input type="submit" value="Submit">
  </form>
  <script>
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        $("#nama-error").text(""); // Clear previous error messages
        $("#email-error").text("");

        if (nama === "") {
          $("#nama-error").text("Nama harus diisi.");
          valid = false;
        }

        if (email === "") {
          $("#email-error").text("Email harus diisi.");
          valid = false;
        }
        if (password.length < 8) {
          $("#password-error").text("Password minimal 8 karakter.");
          valid = false;
        }

        if (valid) {
          $.ajax({
            url: "proses_validasi.php",
            type: "POST", // Use POST method for form data
            data: {
              nama: nama,
              email: email,
              password: password
            },
          });
        }
      });
    });
  </script>
</body>

</html>
