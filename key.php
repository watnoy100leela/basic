<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include("config.inc.php");

$firstname = $_POST["text_fristname"];
$name = $_POST["text_name"];
//$lastname = $_POST["text_lastname"];
//sex = $_POST["text_sex"];
//birthdate =  $_POST["text_birthdate"];
//$address =  $_POST["text_address"];
//tel =  $_POST["text_tel"];
//email =  $_POST["text_email"];

$sql = "INSERT INTO tbl_member(id, firstname) VALUES ('', '$firstname')";

if(mysqli_query($conn, $sql)) {
    echo "เพิ่มข้อมูลสำเร็จ";
}else{
    echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn -> close();
?>