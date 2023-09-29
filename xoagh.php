
<?php 
include 'ketnoi.php';
 if (isset($_GET['matt']) && !empty($_GET['matt'])) {
    $xoa = mysqli_query($conn, "DELETE FROM thanhtoan WHERE matt = " . $_GET['matt'] );

    header("Location: ./giohang.php");
}
?>
