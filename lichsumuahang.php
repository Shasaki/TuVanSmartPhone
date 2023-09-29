<?php 
session_start();
?>

<?php  
include './ketnoi.php';


    if (!isset($_SESSION['taikhoan'])) {  
        header("Location: dangnhap.php");   
    } 
    
    $sql1 =  "SELECT sp.tensp ,sp.anhdaidien, ls.soluong, ls.tongtien, ls.ngaythanhtoan
            FROM taikhoan AS tk, lichsumuahang AS ls, sanpham AS sp
            WHERE tk.matk= ".$_SESSION['taikhoan']."  
            AND ls.matk = tk.matk AND sp.masp = ls.masp";

    $result1 = mysqli_query($conn,$sql1);
  
?>

<!DOCTYPE html>
<html lang="vi">
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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="./index.php" ><img src="./Images/LogoIndex1.png" width="160px" height="60px"></a>
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
                        <li class="nav-item"><a class="nav-link" href="#LienHe">Liên Hệ</a></li>
                        <li class="nav-item"><a class="nav-link" href="./dangnhap.php">Đăng Nhập</a></li>
                        <?php }else { ?> 
                            <?php $user=$_SESSION['dangnhap']; ?>
                                <?php if($user['maquyen']==1) {?>
                                </li>
                               
                                <li class="nav-item"><a class="nav-link" href="giohang.php">Giỏ hàng</a></li>
                                <li class="nav-item"><a class="nav-link" href="thongtincanhan.php">Xin chào 
                                <?php echo $user['hoten']  ?> </a></li>  
                                <li class="nav-item"><a class="nav-link" href="dangxuat.php"> <u> Đăng Xuất</u> </a></li>
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


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h3 class="my-4">Thông Tin Của Bạn</h3>
                

                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" disabled>
                         Thông tin của bạn
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" onclick="view()">
                        Lịch sử mua hàng
                    </button>
                    <script type="text/javascript">
                                function view() {
                                    location.href="http://localhost/NoiThat/lichsumuahang.php";
                                }
                            </script>

                </div>

            </div>
            <!-- /.col-lg-3 -->

    <div class="col-lg-9">
<div class="container">
    <div class="card-body text-center">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tên sản phẩm</th>  
                <th scope="col">Ảnh sản phẩm</th>       
                <th scope="col">Số lượng</th>                       
                <th scope="col"> Tổng tiền </th>
                <th scope="col">Ngày thanh toán</th>
       
            </tr>
        </thead>
        <tbody>

        <?php  
                  while ($row = mysqli_fetch_array($result1)) { ?>
            <tr>
                
           
                <td scope="row"><?= $row['tensp'] ?></td>
                <td scope="row">
                <img  style="width: 200px; height: auto;" src="<?= $row['anhdaidien'] ?>" alt="">
                </center></td>
                <td scope="row "><?= $row['soluong'] ?></td>         
                <td scope="row"><?=number_format($row['tongtien'],0,",",".") ?> VNĐ</td>
                <td scope="row "><?= $row['ngaythanhtoan'] ?></td> 
               
            </tr>
            <?php 
                  }
                ?>
          
        </tbody>
    </table>


   
    </div>
        <!-- /.row -->
    </div>

    </div>
        </div>
    </div>
    
   

    <!-- Footer -->
    <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white" id="LienHe">Nội thất H&T </br>Phone: 0975 900 365</p></div>
  </footer>
        <!-- Bootstrap core JS-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
  <script src="./Boottrap/js/scripts.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>