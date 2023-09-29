<?php
session_start();
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

    <?php 
        include 'ketnoi.php';
        $err = " ";
        if(isset($_POST['taikhoan'])){
            $tk = $_POST['taikhoan'];
            $mk = $_POST['matkhau'];

            

            $sql = "Select * from taikhoan WHERE taikhoan = '$tk' ";
            $result = mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($result);
            $kiemtrataikhoan = mysqli_num_rows($result);
            
            if($kiemtrataikhoan == 1){
               
                $pass = $data['matkhau'];
                $quyen = $data['maquyen'];
               
                if($pass == $mk && $quyen == 2){
                    $_SESSION['dangnhap']= $data;
                    $_SESSION['taikhoan']= $data['matk'];
                    $_SESSION['quyen'] = $data['maquyen'];
                    header('location: quantri.php');
                }
                if($pass == $mk && $quyen == 1){
                    $_SESSION['dangnhap']= $data;
                    $_SESSION['taikhoan']= $data['matk'];
                    $_SESSION['quyen'] = $data['maquyen'];
                    header('location: index.php');
                }
                if($pass != $mk){
                    $err="Sai mật khẩu!";
                }

            }else{
                $err="Tài khoản không tồn tại!";
            }
        }


        mysqli_close($conn);    
    ?>

    <div id="login">
        <h3 class="text-center text-white pt-5">Nội Thất H&T</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="dangnhap.php" method="post">
                            <h3><center>Đăng Nhập</center></h3>
                            <div class="form-group">
                                <label for="username" >Tài khoản:</label><br>
                                <input type="text" name="taikhoan" id="username" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label for="password" >Mật khẩu:</label><br>
                                <input type="password" name="matkhau" id="password" class="form-control">
                                <div>
                                    <a style="color: red"> <?php echo $err ?> </a>    
                                </div>
                            </div>
                           
                            <div class="form-group"> 
                            <center>                           
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Đăng Nhập">
                            </center>    
                            </div>
                            <br>
                            <div id="register-link" class="text-right">
                                <a href="taotaikhoan.php" class=" card-body text-center">Đăng ký tại đây</a>
                            </div>         
                        </form>
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