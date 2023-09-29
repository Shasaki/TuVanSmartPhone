<?php
    include 'ketnoi.php';
    $err = [];
    if(isset($_POST['hoten'])){
        $hoten = $_POST['hoten'];
        $sdt = $_POST['sdt'];
        $gt = $_POST['gt'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $tk = $_POST['taikhoan'];
        $mk = $_POST['matkhau'];
        
        
        if(empty($hoten)){
            $err['hoten']= 'Chưa nhập họ tên';
        }
        if(empty($sdt)){
            $err['sdt']= 'Chưa nhập số diện thoại';
        }
        if(empty($email)){
            $err['email']= 'Chưa nhập email';
        }
       
        if(empty($diachi)){
            $err['diachi']= 'Chưa nhập địa chỉ';
        }
        if(empty($tk)){
            $err['taikhoan']= 'Chưa nhập tài khoản';
        }
        if(empty($mk)){
            $err['matkhau']= 'Chưa nhập mật khẩu';
        }
        $sql = "SELECT * FROM taikhoan WHERE taikhoan = '$tk' OR email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)
        {
        echo '<script language="javascript">alert("Bị trùng tên hoặc trùng email!"); window.location="taotaikhoan.php";</script>';
        die ();
        }
        else {
        
        if(empty($err)){
            $sql = "INSERT INTO `taikhoan`(`matk`, `hoten`, `gioitinh`, `sdt`, `email`, `diachi`, `taikhoan`, `matkhau`, `trangthai`, `maquyen`) VALUE (null,('$hoten'), ('$gt'),('$sdt'),('$email'),('$diachi'),('$tk'),('$mk'),1,1)";
            $result = mysqli_query($conn,$sql);
        }
        
        if(isset($result)){
            header('location:dangnhap.php');
        }
        

        mysqli_close($conn);
    }}
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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./Bootstrap/css/styles.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <a href="dangnhap.php" class="float-right btn btn-outline-primary mt-1">Đăng nhập</a>
                        <h4 class="card-title mt-2">Đăng ký</h4>
                    </header>
                    <article class="card-body">


                        <form action="taotaikhoan.php" method="Post">
                            
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nhập Họ và Tên </label>
                                    <input type="text" class="form-control" placeholder="Họ Tên" name="hoten">
                                    
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nhập số điện thoại <a style="color: red">*</a></label>
                                    <input type=text class="form-control" placeholder="Số điện thoại" name="sdt">
                                    <div>
                                        <span style="color: red">
                                            <?php echo (isset($err['sdt']))?$err['sdt']:''  ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--giới tính -->
                            <div class="form-group">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gt" value="Nam" checked="true">
                                    <span class="form-check-label"> Nam </span>
                                </label>

                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gt" value="Nữ">
                                    <span class="form-check-label"> Nữ</span>
                                </label>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nhập địa chỉ <a style="color: red">*</a></label>
                                    <input type="text" class="form-control" placeholder="Địa chỉ" name="diachi">
                                    <div>
                                        <span style="color: red">
                                            <?php echo (isset($err['diachi']))?$err['diachi']:''  ?>
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nhập email  <a style="color: red">*</a></label>
                                    <input type="text" class="form-control" placeholder="email" name="email"
                                    pattern="^[A-Za-z0-9.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$"
                                     title="Nhập đúng định dạng email" >
                                    <div>
                                        <span style="color: red">
                                            <?php echo (isset($err['email']))?$err['email']:''  ?>
                                        </span>
                                    </div>

                                </div>
                            </div>
                            
                            <!-- tai khoan -->
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nhập tài khoản mới <a style="color: red">*</a></label>
                                    <input type="text" class="form-control" placeholder="Tài khoản" name="taikhoan">
                                    <div>
                                        <span style="color: red">
                                            <?php echo (isset($err['taikhoan']))?$err['taikhoan']:''  ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- mat khau -->
                            <div class="form-group">
                                <label>Nhập mật khẩu mới <a style="color: red">*</a></label>
                                <input class="form-control" type="password" placeholder="Mật khẩu" name="matkhau"  pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$" title="Phải chứa 8 ký tự trở lên có ít nhất một số, chữ hoa, chữ thường, kí tự đặc biệt">
                                <div>
                                        <span style="color: red">
                                            <?php echo (isset($err['matkhau']))?$err['matkhau']:''  ?>

                                        </span>
                                    </div>
                            </div>
                            <!-- xác nhận -->
                            <div><a style="color: red">*</a> Thông tin bắt buộc</div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Tạo Tài Khoản </button>
                            </div>                         
                        </form>
                    </article>
                    <div class="border-top card-body text-center">Đã có tài khoản? <a href="dangnhap.php">Đăng nhập</a>
                    </div>
                </div>
            </div>

        </div>


    </div>
    
</body>
		<!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./Boottrap/js/scripts.js"></script>
</html>