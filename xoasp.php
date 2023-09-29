
<?php 
include 'ketnoi.php';
session_start();
$user = $_SESSION['dangnhap'];
if($user['maquyen']!=2){
    
    header('location:index.php');
    
    
}
?>

<?php

if(isset($_REQUEST['masp']) and $_REQUEST['masp']!=""){
$masp=$_GET['masp'];
$sql = "DELETE FROM sanpham WHERE masp='$masp'";
if ($conn->query($sql) === TRUE) {
	header('location:quantri2.php');
} else {
echo '<script language="javascript">';
echo 'alert("Xóa thất bại")';
echo '</script>';
exit;
}
 
$conn->close();
}
?>