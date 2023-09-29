<?php 
include './ketnoi.php';
session_start();
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
        <?php
        $user = $_SESSION['dangnhap'];
        if( $user['maquyen']== 1 )
        header("Location: ../index.php"); 

        if (!isset($_SESSION['dangnhap'])) {  
            header("Location: ../dangnhap.php"); 
        }else {
            if (isset($_GET['matk']) && !empty($_GET['matk'])) {
           $sql="select tt.matt, sp.tensp ,tk.hoten, tk.sdt, tk.diachi, tt.trangthaitt, sp.giasp, tt.soluongtt, tt.tongtien from thanhtoan as tt, sanpham as sp, taikhoan as tk where tt.masp = sp.masp and tt.matk = tk.matk and tk.matk = " . $_GET['matk'];
    
           $orders1 = mysqli_query($conn, $sql );
       
            $orders = mysqli_fetch_all($orders1, MYSQLI_ASSOC);
         
        
        }
    }

        ?>
        <center>
        <br>
        <div class="card-header" style="width:50%; border:solid; text-align: left;">
            <div class="container">
                <center>
                <h1> <b>HÓA ĐƠN </b></h1>
                </center>
                
                <label ><b>Khách hàng: </b></label><span> <?= $orders[0]['hoten'] ?></span><br/>
                <label><b>Điện thoại: </b></label><span> <?= $orders[0]['sdt'] ?></span><br/>
                <label><b>Địa chỉ: </b></label><span> <?= $orders[0]['diachi'] ?></span><br/>
                
                <hr/>
                <h3>Danh Sách Sản Phẩm</h3>
                <ul>
                    <table class="table table-striped" border="1px">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php
                             $soluong = 0;
                             $tien = 0;
                            
                             foreach ($orders as $row) {
                                $tp = ($row['giasp'] * $row['soluongtt']);
                                ?>
                                <tr>
                                    <td> <?= $row['tensp'] ?></td>
                                    <td style="text-align: center;">  <?= $row['soluongtt'] ?></td>
                                    <td> <?= $row['giasp'] ?></td>
                                    <td> <?= $tp ?></td>

                                </tr>
                                
                                <?php
                                $tien += ($row['giasp'] * $row['soluongtt']);
                                $soluong += $row['soluongtt'];
                            }

                        ?>
                    </table>
                    
                </ul>
                <hr/>
                <div style="text-align: right;">
                <label><b>Tổng Số Lượng:</b></label> <?= $soluong ?> - <label><b>Tổng tiền:</b></label> <?= number_format($tien, 0, ",", ".") ?> VNĐ          
            </div> 
            </div>
        </div>
    </center>
    </body>
</html>