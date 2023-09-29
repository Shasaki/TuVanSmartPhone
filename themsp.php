
<?php 
include 'ketnoi.php';
session_start();
$user = $_SESSION['dangnhap'];
if($user['maquyen']!=2){
    
    header('location:index.php');
    
    
}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nội Thất H&T</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./Bootstrap/css/styles.css" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="./index.php" ><img src="./Images/LogoIndex1.png" width="150px" height="60px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">
                                Trang Chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        <?php  if(!isset($_SESSION['dangnhap'])) {?>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#DSSP">Sản Phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="#UngHo">Liên Hệ</a></li>
                        <li class="nav-item"><a class="nav-link" href="./dangnhap.php">Đăng Nhập</a></li>
                        <?php }else { ?> 
                            <?php $user=$_SESSION['dangnhap']; ?>
                                <?php if($user['maquyen']==1) {?>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#DSSP">Sản Phẩm</a></li>
                                <li class="nav-item"><a class="nav-link" href="#UngHo">Liên Hệ</a></li>
                                <li class="nav-item"><a class="nav-link" href="dangxuat.php">Xin chào 
                                <?php echo $user['hoten']  ?> <u> Đăng Xuất</u> </a></li>  
                                <?php }?>
                                <?php if($user['maquyen']==2) {?>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="quantri2.php">Sản Phẩm</a></li>
                                 <li class="nav-item"><a class="nav-link" href="quantri.php">Tài Khoản</a></li>
                                <li class="nav-item"><a class="nav-link" href="dangxuat.php">Xin chào 
                                <?php echo $user['hoten']  ?> <u> Đăng Xuất</u> </a></li>  
                                <?php }?>

                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
		<?php
// Kết nối Database
//include 'ketnoi.php';
//$id=$_GET['id'];
//$query=mysqli_query($conn,"select * from `taikhoan` where id='$id'");
///$row=mysqli_fetch_assoc($query);
?>
	<div class="container">
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        
                        <h4 class="card-title mt-2">Thêm Sản Phẩm</h4>
                    </header>
                    <article class="card-body">


                        <form action="" method="Post">
                            
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="tensp" placeholder="Nhập tên sản phẩm">
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Giá sản phẩm</label>
                                    <input type="text" class="form-control" name="giasp" placeholder="Nhập giá sản phẩm">
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Số lượng </label>
                                    <input type="text" class="form-control" name="soluong" placeholder="Nhập số lượng">
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Mô tả </label>
                                    <input type="text" class="form-control" name="mota" placeholder="Nhập mô tả">
                                    
                                </div>
                            </div>

                            <div class="mb-3">
                              <label for="formFile" class="form-label">Ảnh đại điện</label>
                              <input class="form-control" type="file" id="formFile" name="anhdaidien">
                            </div>

                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Chất liệu</label>
                                    <input type="text" class="form-control" name="chatlieu" placeholder="Nhập Chất liệu">
                                    
                                </div>
                            </div>

                             <div class="form-row">
                                <div class="col form-group">
                                    <label>Màu Sắc</label>
                                    <input type="text" class="form-control" name="mausac" placeholder="Nhập Màu Sắc">
                                    
                                </div>
                            </div>

                             <div class="form-row">
                                <div class="col form-group">
                                    <label>Kích thước</label>
                                    <input type="text" class="form-control" name="kichthuoc" placeholder="Nhập Kích thước">
                                    
                                </div>
                            </div>

                             <div class="form-row">
                                <div class="col form-group">
                                    <label>Xuất xứ</label>
                                    <input type="text" class="form-control"  name="xuatxu" placeholder="Nhập Xuất xứ">
                                    
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Bảo hành</label>
                                    <input type="text" class="form-control"  name="baohanh" placeholder="Nhập Bảo hành">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Loại Sản Phẩm</label>
                                <select class="custom-select" name="loaisp">

                                    <?php
                                        $maloai = mysqli_query($conn, " SELECT * FROM loaisanpham ");
                                        while ($loai = mysqli_fetch_array($maloai)) {
                                        ?>
                                    <option value="<?php echo $loai['maloaisp'] ?>"><?php echo $loai['tenloaisp'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            
                             <div class="form-group">
                                <label for="exampleFormControlSelect1">Khuyến Mãi</label>
                                <select class="custom-select" name="tenkm">
                                    <?php
                                        $makm = mysqli_query($conn, " SELECT * FROM khuyenmai ");
                                        while ($km = mysqli_fetch_array($makm)) {
                                        ?>
                                    <option value="<?php echo $km['makm'] ?>"><?php echo $km['tenkm'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>






                            <!-- xác nhận -->
                            
                   
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="add_sp">Thêm Sản Phẩm</button>
                            </div>                         
                        </form>
                    </article>
                   
                    </div>
                </div>
            </div>

        </div>
    </div>

    

<?php
if (isset($_POST['add_sp'])){

$tensp=$_POST['tensp'];
$giasp=$_POST['giasp'];
$soluong=$_POST['soluong'];
$mota=$_POST['mota'];
$anhdaidien=$_POST['anhdaidien'];
$chatlieu=$_POST['chatlieu'];
$mausac=$_POST['mausac'];
$kichthuoc=$_POST['kichthuoc'];
$xuatxu=$_POST['xuatxu'];
$baohanh=$_POST['baohanh'];
$loaisp=$_POST['loaisp'];
$tenkm=$_POST['tenkm'];

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "INSERT INTO `sanpham` (`masp`, `tensp`, `giasp`, `soluong`, `mota`, `anhdaidien`, `chatlieu`, `mausac`, `kichthuoc`,`xuatxu`,`baohanh`,`trangthai`,`maloaisp`,`makm`)
    VALUE(null,'$tensp','$giasp','$soluong','$mota','./Images/$anhdaidien','$chatlieu','$mausac','$kichthuoc','$xuatxu','$baohanh',
    1,'$loaisp','$tenkm')";
 
if ($conn->query($sql) === TRUE) {
echo '<script language="javascript">';
echo 'alert("Thêm thành công")';
echo '</script>';
exit;
} else {
echo '<script language="javascript">';
echo 'alert("Thêm thất bại")';
echo '</script>';
exit;
}
 
$conn->close();
}
?>




</body>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./Boottrap/js/scripts.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>




