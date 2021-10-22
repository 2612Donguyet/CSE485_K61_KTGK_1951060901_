<?php
    $mapt = $_POST['vehicle_id'];
    $bienso = $_POST['license_no'];
    $model = $_POST['model'];
    $nam = $_POST['year'];
    $kieu = $_POST['ctype'];
    $giangay = $_POST['drate'];
    $giathang = $_POST['wrate'];
    $trangthai = $_POST['status'];

    $conn = mysqli_connect('localhost', 'root', '', 'quanlyxe','3306');
    if(!$conn){
        die("Kết nối không thành công");
    }

    $sql = "update cars set  license_no =' $bienso',model='$model ', year='$nam ',
    ctype='$kieu', drate='$giangay',wrate=' $giathang', status=' $trangthai' 
    where vehicle_id='$mapt'";
    $result = mysqli_query($conn,$sql);

    if($result>0)
    {
        header('location:index.php');
    }
    else
    {
        header('location:error.php');
    }
?>