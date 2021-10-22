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
    <h2><p class="text-center fs-1 bg-success">Thêm xe cho thuê</p></h2>
    <main class="container">
        <form action ="process_add.php" method="post">
            <div class="mb-3">
                <label for="vehicle_id" class="form-label">Mã phương tiện</label>
                <input type="text" class="form-control" id="vehicle_id" name="vehicle_id">
            
            </div>
            <div class="mb-3">
                <label for="license_no" class="form-label">Biển số xe</label>
                <input type="text" class="form-control" id="license_no" name = "license_no">
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name = "model">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Năm sản xuất</label>
                <input type="text" class="form-control" id="year" name = "year">
            </div>
            <div class="mb-3">
                <label for="ctype" class="form-label">Kiểu ô tô</label>
                <input type="text" class="form-control" id="ctype" name = "ctype">
            </div>
            <div class="mb-3">
                <label for="drate" class="form-label">Giá cho thuê theo ngày</label>
                <input type="text" class="form-control" id="drate" name = "drate">
            </div>
            <div class="mb-3">
                <label for="wrate" class="form-label">Giá cho thuê theo tuần</label>
                <input type="text" class="form-control" id="wrate" name = "wrate">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Trạng thái</label>
                <input type="text" class="form-control" id="status" name = "status">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>