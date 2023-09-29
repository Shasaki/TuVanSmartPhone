<?php 
session_start();
?>

<?php 
include './ketnoi.php';
$user = $_SESSION['dangnhap'];
if( $user['maquyen'] == 1 )
header("Location: ./index.php"); 

 if (isset($_GET['matt']) && !empty($_GET['matt'])) {
    $xoa = mysqli_query($conn, "DELETE FROM thanhtoan WHERE matt = " . $_GET['matt'] );
    header("Location:xulydonhang.php");
}
?>