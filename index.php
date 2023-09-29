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
                                 <li class="nav-item"><a class="nav-link" href="xulydonhang.php">Đơn Hàng</a></li>
                                <li class="nav-item"><a class="nav-link" href="dangxuat.php">Xin chào 
                                <?php echo $user['hoten']  ?> <u> Đăng Xuất</u> </a></li>  
                                <?php }?>

                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->

    <?php 
     $search = isset($_GET['name']) ? $_GET['name'] : "";
     if ($search) {
         $where = "WHERE `tensp` LIKE '%" . $search . "%'";
     }
    include'ketnoi.php'; 
        
     //phan trang       
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:6;
        $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;


        //tim kiem
        if ($search) {
            $products = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `tensp` LIKE '%" . $search . "%' ORDER BY `masp` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
            $totalRecords = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `tensp` LIKE '%" . $search . "%'");
        } else {
            $products = mysqli_query($conn, "SELECT * FROM `sanpham` ORDER BY `masp` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
            $totalRecords = mysqli_query($conn, "SELECT * FROM `sanpham`");
        }
        ///

        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);


        $sql1 =  "SELECT * FROM `loaisanpham`";
        $result2 = mysqli_query($conn,$sql1);


        ?>

     <!--Tìm Kiếm-->
    <form class="form-inline " method="GET" >
                <div class="container">
                <div class="card-body">
             
                <label class="form-control mr-sm-3" >Tìm kiếm sản phẩm</label>
                <input class="form-control mr-sm-3" size="80" type="text" placeholder="Search" aria-label="Search" value="<?=isset($_GET['name']) ? $_GET['name'] : ""?>" name="name">
                <input type="submit" value="Tìm kiếm" class="btn btn-primary"/>
             
                </div>
                </div>
    </form>
        <div class="container">
            <!-- Heading Row-->
            <div class="row align-items-center my-2">
                <div class="col-lg-7"><video controls autoplay muted width="620px" height="420px"> <source src="./Videos/NoiThat.mp4" ></video></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Nội Thất H&T</h1>
                    <p>Nội thất H&T chúng tôi luôn mong muốn mang lại cho các bạn một không gian sống tinh tế, hoàn hảo, nâng tầm giá trị cũng như thẩm mỹ cho ngôi nhà. Cũng nhờ hiểu được nhu cầu và thị hiếu của người tiêu dùng, sản phẩm của Nội Thất H&T chú trọng và thiết kế theo những phong cách riêng dẫn đầu xu hướng nhằm tạo ra một không gian sống thật thoải mái, ấm cúng, tiện nghi và mới mẻ.</p>
                    <!--nút tư vấn-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     Liên Hệ Ngay
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nội Thất H&T <br> Phone: 0975 900 365 (Gặp Hậu) <br>
                            Gmail: 18004110@student.vlute.edu.vn (Gặp Tài)</h5>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK Nha</button>
                        </div>
                        </div>
                      </div>
                    </div>                   
                </div>
            </div>           
            <!-- Call to Action-->

        <div class="row">

            <div class="col-lg-3">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">  
                </div>
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" disabled id="DSSP">Danh mục sản
                        phẩm </button>
                        <?php
                while ($row2 = mysqli_fetch_array($result2)) { 
                    ?>
                    <button type="button" class="list-group-item list-group-item-action" ><a href="loaisp.php?maloaisp=<?= $row2['maloaisp']?>" class="nav-link"><?= $row2['tenloaisp'] ?></a></button>
                  <?php } ?>                           
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    
                    
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                

    

                <div class="row">
             
                <?php
                while ($row = mysqli_fetch_array($products)) {
   
                    ?>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="sanpham.php?masp=<?= $row['masp']?>"><img class="card-img-top" width="300px" height="280px" src=" <?= $row['anhdaidien'] ?> " alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="sanpham.php?masp=<?= $row['masp']?>"><?= $row['tensp'] ?></a>
                                </h4>
                                <h5><?= number_format($row['giasp'],0,",",".") ?> đ</h5>
                                
                            </div>                         
                        </div>
                    </div>

                    <?php } ?>
                  

               




                </div>
                <!-- /.row -->
    

                <div> 
                     <?php include 'chuyentrang.php' ?>   
                </div>
            </div>
            <!-- /.col-lg-9 -->
                    
        </div>
        <!-- /.row -->

    </div>

        

        

        <!-- Footer-->
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
