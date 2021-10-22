<?php
    $maxe =$_GET['id'];
   
    $conn = mysqli_connect('localhost', 'root', '', 'quanlyxe','3306');
    if(!$conn){
        die("Kết nối không thành công");
    }

    $sql = "delete from cars where vehicle_id=$maxe";
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