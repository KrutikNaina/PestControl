<?php      
    $Name = $_POST["name"];
    $Number = $_POST["phone"];
    $conn = mysqli_connect("localhost", "root", "", "pestcontrol") or die("connection failed");
    $sql = "INSERT INTO enquiry(name, phone) VALUES ('{$Name}','{$Number}')";
    $result = mysqli_query($conn, $sql) or die("Query Failed!");
    header("location: http://localhost:8080/pestcontrol/");
    mysqli_close($conn);

?>      