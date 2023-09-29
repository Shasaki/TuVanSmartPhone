<?php 
include 'ketnoi.php';
session_start();
$user = $_SESSION['dangnhap'];
if($user['maquyen']!=2){
    
    header('location:index.php');
    
    
}
?>

<?php

if(isset($_REQUEST['mabinhluan']) and $_REQUEST['mabinhluan']!=""){
$mabinhluan=$_GET['mabinhluan'];
$sql = "DELETE FROM binhluan WHERE mabinhluan='$mabinhluan'";
if ($conn->query($sql) === TRUE) {
// echo '<script language="javascript">';
// echo 'alert("Xóa thành công")';
// echo '</script>';
// exit;
	header('location:quantri.php');
} else {
echo '<script language="javascript">';
echo 'alert("Xóa thất bại")';
echo '</script>';
exit;
}
 
$conn->close();
}
?>