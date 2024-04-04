<link rel="stylesheet" href="../style/style.css">
<?php
include('dbconf.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            echo "Login successful. Welcome, " . $row['username']. "<br><a href='profile.php' class='button'>See Your information</a><br>";
            
       
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "User not found<br>";
        echo "<a href='registration.php' class='button'>Sign Up</a><br>";
    }
}
