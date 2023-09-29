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
        <title>Trang Quản Trị Nội Thất H&T</title>
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
                            <!-- <a class="nav-link" href="./quantri.php">
                                Trang Chủ
                                <span class="sr-only">(current)</span>
                            </a> -->
                        <?php  if(!isset($_SESSION['dangnhap'])) {?>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#DSSP">Sản Phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tài Khoản</a></li>
                        <li class="nav-item"><a class="nav-link" href="./dangnhap.php">Đăng Nhập</a></li>
                        <?php }else { ?> 
                        <?php $user=$_SESSION['dangnhap']; ?>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="quantri2.php">Sản Phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="quantri.php">Tài Khoản</a></li>
                        <li class="nav-item"><a class="nav-link" href="xulydonhang.php">Đơn Hàng</a></li>
                        <li class="nav-item"><a class="nav-link" href="dangxuat.php">Xin chào 
                        <?php echo $user['hoten']  ?> <u> Đăng Xuất</u> </a></li>  
                       
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
    <center>
        <div class="col-lg-7 col-md-10 mb-7">
             <!-- -->
            





             <table class="table">
        <thead>
            <tr>

                <th scope="col">Mã thanh toán</th>
                <th scope="col">Tên sản phẩm</th>  
                <th scope="col">Tên tài khoản </th>   
                <th scope="col">Số điện thoại</th>        
                <th scope="col">Địa chỉ</th>    
                <th scope="col"> Trạng thái </th>
                <th scope="col">Giá sản phẩm</th>        
                <th scope="col">Số lượng</th>                       
                <th scope="col"> Tổng tiền </th>
                <th scope="col">Thanh toán</th>
                <th scope="col">In đơn</th>
                <th scope="col">Xóa</th>

       
            </tr>
        </thead>
        <tbody>
    <?php
    $query=mysqli_query($conn,"select tt.matt, sp.tensp ,tk.hoten, tk.sdt, tk.diachi, tt.trangthaitt, sp.giasp, tt.soluongtt, tt.tongtien, tk.matk from thanhtoan as tt, sanpham as sp, taikhoan as tk where tt.masp = sp.masp and tt.matk = tk.matk");
    while($row=mysqli_fetch_array($query)) { ?>
            <tr>
                
           
                <th scope="row"><?= $row['matt'] ?></th>
                <td scope="row"><?= $row['tensp'] ?></td>
                <td scope="row"><?= $row['hoten'] ?></td>
                <td scope="row"><?= $row['sdt'] ?></td>
                <td scope="row"><?= $row['diachi'] ?></td>
                <td scope="row"><?= $row['trangthaitt'] ?></td>
                <td scope="row"><?= number_format($row['giasp'],0,",",".")?> VNĐ</td>
                <td scope="row"><?= $row['soluongtt'] ?></td>         
                <td scope="row"><?=number_format($row['tongtien'],0,",",".") ?> VNĐ</td>
                <td scope="row"><a href="thanhtoan.php?matt=<?= $row['matt'] ?>" >Xác nhận Thanh Toán</a></td>  
                <td scope="row"><a href="inhd.php?matk=<?= $row['matk'] ?>" >In</a></td>              
                <td scope="row"><a href="xoadh.php?matt=<?= $row['matt'] ?>" >Xóa</a></td>
                 
                
               
            </tr>

<?php
}?>
</table>

          
        </div>
</center>  





        

</body>
<!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white" id="UngHo">Nội Thất H&T
 </br>Phone: 0975 900 365</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./Boottrap/js/scripts.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>