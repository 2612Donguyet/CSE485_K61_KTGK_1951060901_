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

    $sql = "insert into cars(vehicle_id, license_no, model, year, ctype, drate, wrate, status)
            values (' $mapt ','$bienso','$model','$nam ','$kieu','$giangay','$giathang','$trangthai')";
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