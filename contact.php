<?php      
    $Name = $_POST["name"];
    $Number = $_POST["number"];
    $Email = $_POST["email"];
    $Service = $_POST["service"];
    $Comment = $_POST["comment"]; 
    $conn = mysqli_connect("localhost", "root", "", "pestcontrol") or die("connection failed");
    $sql = "INSERT INTO contact(name, number, email, service, comment) VALUES ('{$Name}','{$Number}','{$Email}','{$Service}','{$Comment}')";
    $result = mysqli_query($conn, $sql) or die("Query Failed!");
    header("location: http://localhost:8080/pestcontrol/");
    mysqli_close($conn);

?>      