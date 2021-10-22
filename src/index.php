<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2><p class="text-center fs-1 bg-success">Danh sách các loại xe cho thuê</p></h2>
    <main class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã phương tiện </th>
                <th scope="col">Biển số xe</th>
                <th scope="col">Model</th>
                <th scope="col">Năm sản xuất</th>
                <!-- <th scope="col">Kiểu ô tô</th>
                <th scope="col">Giá cho thuê theo ngày</th>
                <th scope="col">Giá cho thuê theo tuần</th>
                <th scope="col">Trạng thái</th> -->
                </tr>
            </thead>
            <tbody>
               
                <?php 
                    $conn = mysqli_connect('localhost', 'root', '', 'quanlyxe','3306');
                    if(!$conn){
                        die("Kết nối không thành công");
                    }
    
                    $sql = "select * from Cars";
                    $result = mysqli_query($conn,$sql);
    
                    if(mysqli_num_rows($result)>0)
                    {
                      while($row= mysqli_fetch_assoc($result))
                      {
                        echo '<tr>';
                        echo '<td>'.$row['vehicle_id'].'</td>';
                        echo '<td>'.$row['license_no'].'</td>';
                        echo '<td>'.$row['model'].'</td>';
                        echo '<td>'.$row['year'].'</td>';
                        // echo '<td>'.$row['ctype'].'</td>';
                        // echo '<td>'.$row['drate'].'</td>';
                        // echo '<td>'.$row['wrate'].'</td>';
                        // echo '<td>'.$row['status'].'</td>';
                        echo '</tr>';
                      }
                    }
                ?>
            
               
                
            </tbody>
        </table>
        <p class="text-center btn-success"><a href="bangchitiet.php" class="text-white">Xem chi tiết</a></p>
    </main>
<?php
    mysqli_close($conn);
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>