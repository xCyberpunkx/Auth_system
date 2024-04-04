<link rel="stylesheet" href="../style/style.css">
<?php
include 'dbconf.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$department = $_POST["department"];
$skills = implode(", ", $_POST['skills']);
$experience = $_POST["experience"];

$sql = "INSERT INTO users (username, email, password, department, skills, experience) VALUES ('$username', '$email', '$password', '$department', '$skills', '$experience')";
if ($conn->query($sql) == true)
{
    echo "Registration Completed!<br>";
    echo "<a href='login.php' class='button'>Click Here to login!</a><br>";

}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();