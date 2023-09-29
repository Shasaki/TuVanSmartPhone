
<?php
session_start();
include'ketnoi.php'; 
?>
<?php
        $hostName = 'localhost';
        // khai báo biến username
        $userName = 'root';
        //khai báo biến password
        $passWord = '';
        // khai báo biến databaseName
        $databaseName = 'noithat';
        // khởi tạo kết nối
        $connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
        if (isset($_POST['submit']))
        {
            $tenloai = $_POST['tenloai'] ;
         
            if ($connect) {
                $query="INSERT INTO loaisanpham (maloaisp,tenloaisp)  values(null,'$tenloai')";
                if(mysqli_query($connect, $query))
                {
                    header('Location: ./quantri2.php');
 
                }
                else{
                    echo "không thành công";
                }
            }
           
        }
?>






