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









        <div>


             <!-- -->
             <table class="table" style="width:100%">
                    <tr>
                        <th style="width:70%" >
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Duyệt bình luận
                            </button>

                        </th> 
                        <th style="width:10%">
                        <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="add()" >Thêm tài khoản </button>
                            <script type="text/javascript">
                                function add() {
                                    location.href="http://localhost/NoiThat/themtk.php";
                                }
                            </script>
                        </th>
                    </tr>
            </table>   


            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Duyệt Bình Luận</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form action="" method="post">
                          <div class="modal-body">
                                <div class="col form-group">
                                    

                                    <table class="table" style="width:100%">
                                    <tr>
                                        
                                        <th>Họ tên</th>
                                        <th>Sản phẩm</th>
                                        <th>Bình luận</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                
                                    <?php
                                    $query5=mysqli_query($conn,"SELECT bl.mabinhluan,bl.binhluan,tk.hoten,bl.thoigian,sp.anhdaidien
                                               FROM binhluan AS bl,taikhoan AS tk, sanpham AS sp
                                               WHERE bl.trangthai = 1
                                               AND  bl.matk = tk.matk
                                               AND bl.masp=sp.masp");
                                    while($row5=mysqli_fetch_array($query5)){
                                    ?>
                                            <tr>
                                                
                                                <td><?php echo $row5['hoten']; ?></td>
                                                <td>
                                                <img  style="width: 40px; height: auto;" src="<?= $row5['anhdaidien'] ?>" alt="">
                                                </td>
                                                <td><?php echo $row5['binhluan']; ?></td>


                                                <td><a href="duyetbl.php?mabinhluan=<?php echo $row5['mabinhluan']; ?>">Duyệt</a></td>
                                                <td><a href="xoabl.php?mabinhluan=<?php echo $row5['mabinhluan']; ?>">Xóa</a></td>
                                            </tr>



                                            <?php
                                            }
                                            ?>
                                            </table>

                                </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                          </div>
                      </form>
                      
                    </div>
                  </div>
                </div>

        	<table class="table" style="width:100%">
                <tr>
                    <th>Mã TK</th>
                    <th>Họ và Tên</th>
                    <th>Giới tính</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Trạng thái</th>
                    <th>Mã quyền</th>
                    <th></th>
                    <th></th>
                </tr>
                
    <?php
    $query=mysqli_query($conn,"select * from `taikhoan`");
    while($row=mysqli_fetch_array($query)){
    ?>
            <tr>
                <td><?php echo $row['matk']; ?></td>
                <td><?php echo $row['hoten']; ?></td>
                <td><?php echo $row['gioitinh']; ?></td>
                <td><?php echo $row['sdt']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['diachi']; ?></td>
                <td><?php echo $row['taikhoan']; ?></td>
                <td><?php echo $row['matkhau']; ?></td>
                <td><?php echo $row['trangthai']; ?></td>
                <td><?php echo $row['maquyen']; ?></td>

                <td><a href="suatk.php?matk=<?php echo $row['matk']; ?>">Sửa</a></td>
                <td><a href="xoatk.php?matk=<?php echo $row['matk']; ?>">Xóa</a></td>
            </tr>



            <?php
            }
            ?>
            </table>
            
        </div>






        

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