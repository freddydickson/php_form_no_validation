<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];

//connection
$conn = new mysqli('localhost', 'root', '', 'sqldb');
if($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(firstName, lastName, email, gender, password)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $gender, $password);
    $stmt->execute();
    echo "<h4>Registration Successful.....</h4>";
    $stmt->close();
    $conn->close();
}
?>