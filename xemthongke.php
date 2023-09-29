<?php 
include 'ketnoi.php';
session_start();
$user = $_SESSION['dangnhap'];
if($user['maquyen']!=2){
 header('location:index.php');
    
    
}
?>


<?php

$sql = "SELECT DATE(ngaythanhtoan) AS ngay,COUNT(malichsu) as ma, SUM(soluong) AS TongSo
FROM lichsumuahang
WHERE month(ngaythanhtoan)= month(now()) and ngaythanhtoan=ngaythanhtoan
GROUP BY ngay ORDER BY ngaythanhtoan ASC" ;
    $sql_query = mysqli_query($conn,$sql);

    while($val = mysqli_fetch_array($sql_query)){

        $data[] = array(
            'date' => $val['ngay'],
            'order' => $val['ma'],
            //'sales' => $val['doanhthu'],
            'quantity' => $val['TongSo']

        );
    } 

    //echo"<pre>";
    //var_dump($data);
    //echo"</pre>";
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
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    
   


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


        <div id="curve_chart" style="width: 1500px; height: 500px"></div>
        
        
     
    <script type="text/javascript">
     
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['date', 'Đơn hàng', 'Số lượng'],
            //['2004',  1000,      400],
            //['2005',  1170,      460],

            <?php 
                 foreach ($data as $key){
                    echo "['".$key['date']."' ,  ".$key['order']." , ".$key['quantity']." ],";
                 }
                    
                

             ?>


        ]);

        var options = {
          title: 'Thống Kê Sản Phẩm Bán Ra Trong Tháng',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>


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
                

             <table class="table table-striped" >
                <tr>
                    <th>TOP Bán Chạy</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Ảnh Sản Phẩm</th>
                    <th>Giá Sản Phẩm</th>
                    <th>Tổng Số</th>
                    
                </tr>
                        <?php
                        $query=mysqli_query($conn,"SELECT sp.masp, sp.tensp ,sp.anhdaidien, SUM(ls.soluong) AS TongSo , SUM(ls.tongtien)
                                        FROM taikhoan AS tk, lichsumuahang AS ls, sanpham AS sp 
                                        WHERE ls.matk = tk.matk AND sp.masp = ls.masp 
                                        and month(ls.ngaythanhtoan) = month(now())
                                        GROUP BY ls.masp ORDER BY TongSo DESC;");
                        $top=1;
                        while($row=mysqli_fetch_array($query)){
                            
                            
                        ?>

                                <tr>
                                    <td>TOP <?php echo $top ?></td>
                                    <?php  $top=$top+1; ?>
                                    <td><?php echo $row['tensp']; ?></td>
                                    <td><img class="card-img-top"  style="width: 100px; height: auto;"  src=" <?= $row['anhdaidien'] ?> "></td>
                                    <td><?php echo $row['SUM(ls.tongtien)']; ?></td>
                            

                                    <td><?php echo $row['TongSo']; ?></td>
                                    
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