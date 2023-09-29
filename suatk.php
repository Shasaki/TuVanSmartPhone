
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
                <div class="collapse navbar-collapse" id ="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">
                                Trang Chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        <?php  if(!isset($_SESSION['dangnhap'])) {?>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#DSSP">Sản Phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="#UngHo">Ủng Hộ</a></li>
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
include 'ketnoi.php';
$matk=$_GET['matk'];
$query=mysqli_query($conn,"select * from `taikhoan` where matk='$matk'");
$row=mysqli_fetch_assoc($query);
?>


<div class="container">
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        
                        <h4 class="card-title mt-2">Sửa Tài Khoản</h4>
                    </header>
                    <article class="card-body">


                        <form action="" method="Post">
                            
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" class="form-control" value="<?php echo $row['hoten']; ?>" name="hoten"
                                    pattern="{1,}" title="Nhập ít nhất 1 chữ">
                                </div>
                            </div>

                                                        <div class="form-row">
                                <div class="col form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" value="<?php echo $row['sdt']; ?>" name="sdt"
                                    pattern="[0-9].{9,12}" title="Chỉ được nhập số và nhập đúng số">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gioitinh" value="Nam" checked="true">
                                    <span class="form-check-label"> Nam </span>
                                </label>

                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gioitinh" value="Nữ">
                                    <span class="form-check-label"> Nữ</span>
                                </label>
                            </div>

                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email"
                                    pattern="^[A-Za-z0-9.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$"
                                     title="Nhập đúng định dạng email" >
                                </div>
                            </div> 

                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" value="<?php echo $row['diachi']; ?>" name="diachi"
                                    pattern="{1,}" title="Nhập ít nhất 1 chữ" >
                                </div>
                            </div> 


                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Tài khoản</label>
                                    <input type="text" class="form-control" value="<?php echo $row['taikhoan']; ?>"  name="taikhoan" pattern="[A-Za-z0-9].{2,}" title="Chỉ được nhập số,chữ thường, chữ hoa và ít nhất 3 kí tự">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Mật khẩu</label>
                                    <input type="text" class="form-control" value="<?php echo ($row['matkhau']); ?>" name="matkhau" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$" title="Phải chứa 8 ký tự trở lên có ít nhất một số, chữ hoa, chữ thường, kí tự đặc biệt">
                                </div>
                            </div>
                             <th>
                            <label for="exampleFormControlSelect1">Trạng thái</label>
                            <select name="trangthai" class="form-select" aria-label="Default select example">
                                  <option value="1"> 1</option>
                                  <option value="2"> 2</option>

                            </select>
                            </th>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Mã quyền</label>
                                <select class="custom-select" name="maquyen">

                                    <?php
                                        $maquyen = mysqli_query($conn, " SELECT * FROM phanquyen ");
                                        while ($quyen = mysqli_fetch_array($maquyen)) {
                                        ?>
                                    <option value="<?php echo $quyen['maquyen'] ?>"><?php echo $quyen['tenquyen'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>        
                            


                            <!-- xác nhận -->
                            
                   
                            <div class="form-group">
                                <button type="submit"  class="btn btn-primary btn-block" name="update_user">Lưu Lại</button>
                            </div>                         
                        </form>
                    </article>
                   
                    </div>
                </div>
            </div>

        </div>
    </div>


<?php
if (isset($_POST['update_user'])){
$matk=$_GET['matk']; 
$hoten=$_POST['hoten'];
$gioitinh=$_POST['gioitinh'];
$sdt=$_POST['sdt'];
$email=$_POST['email'];
$diachi=$_POST['diachi'];
$taikhoan=$_POST['taikhoan'];
$matkhau=$_POST['matkhau'];
$trangthai=$_POST['trangthai'];
$maquyen=$_POST['maquyen'];
// Create connection
//$conn = new mysqli("localhost", "root", "", "noithat");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `taikhoan` SET matk='$matk', hoten='$hoten',gioitinh='$gioitinh',sdt='$sdt',email='$email',diachi='$diachi', taikhoan='$taikhoan', matkhau='$matkhau',trangthai='$trangthai', maquyen='$maquyen'  WHERE matk='$matk'";
 

if ($conn->query($sql) === TRUE) {
echo '<script language="javascript">';
echo 'alert("Sửa thành công")';
echo '</script>';
exit;
} else {
echo '<script language="javascript">';
echo 'alert("Sửa thất bại")';
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

