<?php 
session_start();
?>

<?php 
include 'ketnoi.php';
$user = $_SESSION['dangnhap'];
if( $user['maquyen'] == 1 )
header("Location: ./index.php"); 

 if (isset($_GET['matt']) && !empty($_GET['matt'])) {
    $sql1 ="SELECT * FROM `thanhtoan`,sanpham WHERE thanhtoan.masp = sanpham.masp AND matt =". $_GET['matt'];
     $sql2=mysqli_query($conn,$sql1 );
    while ($row = mysqli_fetch_array($sql2)) {
        $sl = $row['soluongtt'];
        $msp =$row['masp'];
        $slsp =$row['soluong'];
        $mtk =$row['matk'];
        $tongtien =$row['tongtien'];
        
    }
      
   date_default_timezone_set('asia/ho_chi_minh');
   $today = date("Y-m-d H:i:s");

   $sql3 ="UPDATE `sanpham` SET `soluong`=($slsp - $sl) WHERE `masp` ='".$msp."' ";
   mysqli_query($conn,$sql3 );

   $sql4 ="INSERT INTO `lichsumuahang` (`malichsu`,`masp`,`matk`,`ngaythanhtoan`,`soluong`,`tongtien`) VALUE (null,'".$msp."','".$mtk."','".$today."','".$sl."','".$tongtien."')";
   mysqli_query($conn,$sql4 );

   $sql ="UPDATE `thanhtoan` SET `trangthaitt`='Đã Thanh Toán' ,`tongtien`='0' WHERE matt = " . $_GET['matt'];
   mysqli_query($conn,$sql );
   header("Location:xulydonhang.php");
}
?>