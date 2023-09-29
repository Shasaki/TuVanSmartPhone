<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
    
    <?php
  include 'ketnoi.php';
  
  //tao truy van hinh anh khac cua san pham
 
  $masp= $_GET['chonsanpham'];
  $thang= $_GET['thang'];
  $query = mysqli_query($conn, "SELECT sp.masp, sp.tensp ,sp.anhdaidien, SUM(ls.soluong) , SUM(ls.tongtien)
                                FROM taikhoan AS tk, lichsumuahang AS ls, sanpham AS sp 
                                WHERE ls.matk = tk.matk AND sp.masp = ls.masp AND sp.masp = '$masp'
                                and month(ls.ngaythanhtoan) = '$thang'
                                GROUP BY ls.masp ORDER BY ls.soluong DESC");


  ?>


    <!-- Navigation -->
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
                        <li class="nav-item"><a class="nav-link" href="#LienHe">Liên Hệ</a></li>
                        <li class="nav-item"><a class="nav-link" href="./dangnhap.php">Đăng Nhập</a></li>
                        <?php }else { ?> 
                            <?php $user=$_SESSION['dangnhap']; ?>
                                <?php if($user['maquyen']==1) {?>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#LienHe">Liên Hệ</a></li>
                                 <li class="nav-item"><a class="nav-link" href="giohang.php">Giỏ hàng</a></li>
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


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            
            <!-- /.col-lg-3 -->

          

                

    

    <div class="row">
             
        <div class="col-lg-12 col-md-10 mb-12">
             <!-- -->
             <form action="./xemthongke2.php" method="get">
             <table class="table" style="width:100%">
                    <tr>
                        <th>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Chọn Sản Phẩm</label>
                                <select class="custom-select" name="chonsanpham">

                                    <?php
                                        $sp = mysqli_query($conn, " SELECT * FROM sanpham ");
                                        while ($ten = mysqli_fetch_array($sp)) {
                                        ?>
                                    <option value="<?php echo $ten['masp'] ?>"><?php echo $ten['tensp'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </th>
                        <th>
                            <label for="exampleFormControlSelect1">Chọn Tháng</label>
                            <select name="thang" class="form-select" aria-label="Default select example">
                                  <option value="1">Tháng 1</option>
                                  <option value="2">Tháng 2</option>
                                  <option value="3">Tháng 3</option>

                                  <option value="4">Tháng 4</option>
                                  <option value="5">Tháng 5</option>
                                  <option value="6">Tháng 6</option>

                                  <option value="7">Tháng 7</option>
                                  <option value="8">Tháng 8</option>
                                  <option value="9">Tháng 9</option>

                                  <option value="10">Tháng 10</option>
                                  <option value="11">Tháng 11</option>
                                  <option value="12">Tháng 12</option>
                            </select>
                        </th>

                        <th style="width:30%">
                            <label for="exampleFormControlSelect1">______</label>
                            <button type="submit" class="btn btn-primary btn-block" >
                                Xem Ngay
                            </button>
                            
                        </th>  
                        
                    </tr>
            </table>
            </form>




            <!-- Modal -->
            <div>
            <table class="table table-striped" >
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    
                </tr>
                        
               <?php
               while ($row = mysqli_fetch_array($query)) {
   
            ?>

              <tr>
                    <td><?php echo $row['masp']; ?></td>
                    <td><?php echo $row['tensp']; ?></td>
                    <td><img class="card-img-top"  style="width: 100px; height: auto;"  src=" <?= $row['anhdaidien'] ?> "></td>
                    <td><?php echo $row['SUM(ls.tongtien)']; ?></td>
                    <td><?php echo $row['SUM(ls.soluong)']; ?></td>
                                    
                </tr>    
            
          </table>
       
          <?php } ?>

             </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

     </div>
  <!-- /.container -->

  

</body>

   
</html>