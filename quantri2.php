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
    include'ketnoi.php'; 
        
        
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

            <div class="col-lg-3">

                 <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    
                    
                </div>


                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" disabled>Quản lý danh mục sản
                        phẩm </button>
                        <?php
                        $sql1 =  "SELECT * FROM `loaisanpham`";
                        $result2 = mysqli_query($conn,$sql1);
                        while ($row2 = mysqli_fetch_array($result2)) { 
                    ?>
                    <button type="button" class="list-group-item list-group-item-action" ><a href="loaisp2.php?maloaisp=<?= $row2['maloaisp']?>" class="nav-link"><?= $row2['tenloaisp'] ?></a></button>
                  <?php } ?>
                
                    

                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    
                    
                </div>

                

    

    <div class="row">
             
        <div class="col-lg-12 col-md-10 mb-12">
             <!-- -->
             <table class="table" style="width:100%">
                    <tr>
                        <th style="width:40%">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Thêm loại sản phẩm
                            </button>

                        </th>    
                        <th style="width:30%">
                            <button type="submit" name="xem" class="btn btn-primary btn-block" onclick="xem()" >
                                Thống kê kinh doanh
                            </button>
                            <script type="text/javascript">
                                        function xem() {
                                            location.href="http://localhost/NoiThat/xemthongke.php";
                                        }
                            </script>
                        </th>  
                        <th style="width:30%">
                        <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="add()" >Thêm sản phẩm</button>
                                    <script type="text/javascript">
                                        function add() {
                                            location.href="http://localhost/NoiThat/themsp.php";
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
                        <h5 class="modal-title" id="exampleModalLabel">Thêm Loại Sản Phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form action="themloaisp.php" method="post">
                          <div class="modal-body">
                                <div class="col form-group">
                                    <label>Tên loại sản phẩm</label>
                                    <input type="text" class="form-control" name="tenloai" placeholder="Nhập tên loại sản phẩm">
                                </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary" name="submit">Thêm</button>
                          </div>
                      </form>
                      
                    </div>
                  </div>
                </div>

             <table class="table table-striped" >
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th></th>
                    <th></th>
                </tr>
                        <?php
                        $query=mysqli_query($conn,"select * from `sanpham`");
                        while($row=mysqli_fetch_array($query)){
                        ?>
                                <tr>
                                    <td><?php echo $row['masp']; ?></td>
                                    <td><?php echo $row['tensp']; ?></td>
                                    <td><img class="card-img-top"  style="width: 100px; height: auto;"  src=" <?= $row['anhdaidien'] ?> "></td>
                                    <td><?php echo $row['giasp']; ?></td>
                            

                                    <td><a href="suasp.php?masp=<?php echo $row['masp']; ?>">Sửa</a></td>
                                    <td><a href="xoasp.php?masp=<?php echo $row['masp']; ?>">Xóa</a></td>
                                </tr>

                    <?php
                    }
                    ?>
                </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    

    <!-- Footer -->
    <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white" id="LienHe">Nội Thất H&T</br>Phone: 0975 900 365</p></div>
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