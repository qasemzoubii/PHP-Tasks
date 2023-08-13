<!-- process_login.php -->
<?php
session_start();

$valid_username = 'Qasem';
$valid_password = 'qasem123';
$valid_email = 'qasem@gmail.com';




if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $submitted_username = $_POST['username'];
    $submitted_password = $_POST['password'];
    $submitted_email = $_POST['email'];


if ($submitted_username === $valid_username && $submitted_password === $valid_password && $submitted_email === $valid_email) {

        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $submitted_username;

        header('Location: calculator.php');
    
    } else {
        // Invalid credentials, show an error message
        echo "Invalid username or password. <a href='login.php'>Please try again.</a>";
    }
}
?>
