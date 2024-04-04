<link rel="stylesheet" href="../style/style.css">
<?php
include('dbconf.php');
session_start();
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='container'>";
        echo "<h2>User Profile</h2>";
        echo "Username: " . $row['username'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Department: ". $row['department'] . "<br>";
        echo "Skills: ". $row['skills'] . "<br>";
        echo "Experience: ". $row['experience'] . "<br>";
        echo "<a href='logout.php' class='button'>Logout</a>";
        echo "</div>";
    }
} else {
    header("Location: login.php");
    exit();
}


