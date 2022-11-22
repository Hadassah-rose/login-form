<?php
//getting values from html table
if (isset($_POST["submit"])) {
    $dhost = "localhost";
    $dpath = "root";
    $dpass = "";
    $dname = "registration";
    $conn = mysqli_connect($dhost, $dpath, $dpass, $dname);

    if (!$conn) {
        # code...
        die("could not connect");
    } else {
        # code...
        // echo ("connected successfully");
        $name = $_POST['name'];
        $id_no = $_POST['id_no'];
        $reg_no = $_POST['reg_no'];
        $DOB = $_POST['DOB'];
        $address = $_POST['address'];
        //$gender = $_POST['gender'];
        $tel_no = $_POST['tel_no'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("insert into students(name,id_no,reg_no,DOB,address,tel_no,email,password)
        values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sisssiss", $name, $id_no, $reg_no, $DOB, $address, $tel_no, $email, $password);
        $stmt->execute();
        echo "Registration successful...";

    }


}



//create a connection
//$conn = new mysqli('localhost', 'root', '', 'registration');
//if ($conn->connect_error) {
//  die('connection failed :' . $conn->connect_error);
//} else {
//  $stmt = $conn->prepare("insert into students(name,id_no,reg_no,DOB,address,gender,tel_no,email,password)
//values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
//$stmt->bind_param("sissssiss", $name, $id_no, $reg_no, $DOB, $address, $gender, $tel_no, $email, $password);
//$stmt->execute();
//echo "Registration successful...";
//$stmt->close();
//$conn->close();
//}
?>