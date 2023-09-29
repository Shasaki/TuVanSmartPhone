
<?php 
include 'ketnoi.php';
session_start();
$user = $_SESSION['dangnhap'];
if($user['maquyen']!=2){
    
    header('location:index.php');
    
    
}
?>

<?php

if(isset($_REQUEST['matk']) and $_REQUEST['matk']!=""){
$matk=$_GET['matk'];
$sql = "DELETE FROM taikhoan WHERE matk='$matk'";
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