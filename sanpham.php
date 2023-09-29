<?php
session_start();
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
  <?php
  include 'ketnoi.php';
  //tao truy van hinh anh san pham
  $result = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `masp` = ".$_GET['masp']);
  //tao truy van thong tin san pham
  $result1 = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `masp` = ".$_GET['masp']);
  //tao truy van thong tin san pham
  $result2 = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `masp` = ".$_GET['masp']);
  //tao truy van hinh anh khac cua san pham
  $hinhanh = mysqli_query($conn, "SELECT * FROM `hinhanh` WHERE `masp` = ".$_GET['masp']);


  ?>
  <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="./index.php"><img src="./Images/LogoIndex1.png" width="160px" height="60px"></a>
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
  <center>
  <div class="container">

    

      <div >

        <div class="card mt-4">
        <?php
                while ($row = mysqli_fetch_array($result)) {
   
         ?><center>
          <img  style="width: 400px; height: auto;" src="<?= $row['anhdaidien'] ?>" alt=""></center>
          <div class="card-body">
            <h3 class="card-title"><?= $row['tensp'] ?></h3>
            <h4><?=number_format($row['giasp'])?> VND</h4>
          



          </div>
          <?php } ?>
        </div>
        <!-- Mua hàng -->
        <div class="card card-outline-secondary my-4">
              <?php
                     while ($row1 = mysqli_fetch_array($result2)) {
         
                  ?>

              <form action="giohang.php" method="Post" >
                <div class="col form-group">
                <br>
                <table style="width:100%">
                  <tr>
                    <td style="width:30%"></td>
                    <td style="width:40%"></td>
                    <td style="width:10%">Số lượng: </td>
                    <td style="width:20%">
                      <input type="number" value="1" name="soluong" size="2" class="form-control" min="1" max="10"/>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>---------------------------------</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button style="width:100%" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit" name="submit" >Mua Ngay</button>
                    </td>
                  </tr>
                </table>
                  
                  
                  <input type="number" value="<?=$row1['giasp']?>" name="giasp" size="2" class="d-none" />
                  <input type="number" value="<?=$row1['soluong']?>" name="soluongsp" size="2" class="d-none" />
                  <input type="number" value="<?=$row1['masp']?>" name="masp" size="2" class="d-none" />
                  <br/>
                  <!--<label>Địa chỉ </label>
                  <textarea type="text" value="" name="diachi" class="form-control">  </textarea><br/> -->
                  
                </div>
                       
                </form>
              <?php } ?>

        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
        
            <table class="table">
              <thead>
              <?php
                while ($row2 = mysqli_fetch_array($hinhanh)) {
   
              ?>
                <th class="w-25">
                    <img src="<?= $row2['anhchitiet'] ?>" class="img-fluid img-thumbnail"
                        alt="">
                </th>
                <?php } ?>
           

        </div>
          <div class="card-header">
            <h2>Chi Tiết Sản Phẩm</h2>
          </div>

          <div class="container">
          <table class="table" style="width:100%">
            <thead>
            </thead>
            <tbody>
            <?php
               while ($row1 = mysqli_fetch_array($result1)) {
   
            ?>

              <tr>
                <th scope="row" style="width:20%">Mô tả: </th>         
                <td><?= $row1['mota'] ?></td>
              </tr>
              <tr>
                <th scope="row" style="width:20%">Chất liệu: </th>
                <td><?= $row1['chatlieu'] ?></td>
              </tr>
              <tr>
                <th scope="row" style="width:20%">Màu sắc: </th>
                <td><?= $row1['mausac'] ?></td>
              </tr>
              <tr>
                <th scope="row" style="width:20%">Kích thước: </th>
                <td><?= $row1['kichthuoc'] ?></td>
              </tr>           
              <tr>
                <th scope="row" style="width:20%">Xuất xứ: </th>
                <td><?= $row1['xuatxu'] ?></td>
              </tr>
              <tr>
                <th scope="row" style="width:20%">Bảo hành: </th>
                <td><?= $row1['baohanh'] ?></td>
              </tr>
              <tr>
                <th style="text-align: left;" scope="row" style="width:20%">Bình luận:</th>
                <td></td>
            </tr>
            </tbody>
          </table>
       
          <?php } ?>





        
                   
            <?php
              $binhluan= mysqli_query($conn, "SELECT bl.binhluan,tk.hoten,bl.thoigian
               FROM binhluan AS bl,taikhoan AS tk, sanpham AS sp
               WHERE bl.trangthai = 2
               AND    bl.matk = tk.matk
               AND    bl.masp=sp.masp
               AND    bl.masp = ".$_GET['masp']);

               while ($row1 = mysqli_fetch_array($binhluan)) {                  
            ?>
            
          
          <div style="text-align: left;"> &ensp; o <b> <?= $row1['hoten'] ?> </b><i>(Lúc <?= $row1['thoigian'] ?> ) </i>&emsp;&emsp;&emsp;&emsp;&emsp;   <?= $row1['binhluan'] ?>   </div><br>
          <?php } ?>

          <br>
          <form action="" method="Post">
          <table >
                      <thead>
                        <tr>
                        <th style="width:10%"></th>
                        <th style="width:50%"></th>
                        <th style="width:20%"></th>
                        <th style="width:20%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td colspan="3">
                            <textarea  id="w3review" name="binhluanngay" rows="4" cols="120"> </textarea>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <br>
                            <button type="submit" style="width:100%" class="btn btn-primary btn-block" name="add_comment">Bình Luận</button>
                          </td>

                        </tr>
                      </tbody>
                    </table>
                    <br>
          </form>

<?php
if (isset($_POST['add_comment'])){
$matk=$_SESSION['taikhoan']; 
$masp=$_GET['masp'];
$binhluanngay=$_POST['binhluanngay'];
date_default_timezone_set('asia/ho_chi_minh');
$today = date("d.m.Y g:i a");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$thembinhluan = "INSERT INTO `binhluan`(`mabinhluan`,`binhluan`,`thoigian`,`matk`,`masp`)
                  VALUE(null,'$binhluanngay','$today','$matk','$masp')";
 

if ($conn->query($thembinhluan) === TRUE) {
echo '<script language="javascript">';
echo 'alert("Đã ghi nhận bình luận. Vui lòng chờ quản trị viên kiểm duyệt!")';
echo '</script>';
exit;
} else {
echo '<script language="javascript">';
echo 'alert("Bình luận thất bại")';
echo '</script>';
exit;
}
 
$conn->close();
}
?>





      </div>
      <!-- /.col-lg-9 -->

    </div>
</center>
    
  </div>
  <!-- /.container -->

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