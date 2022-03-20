<?php
            // print_r($_POST);
    if(isset($_POST['nutdangnhap']) == true){
        $tendangnhap = $_POST['tendangnhap'];
        // $matkhau = $_POST['matkhau'];

      if ($tendangnhap == "admin" ) {
      echo "Tài khoản chính xác </br>";
      }else{
      echo "Tài khoản nhập vào chưa đúng";
      }
      if($matkhau == "admin"){
        echo "Mật khẩu chính xác";
      }else{
      echo "mật khẩu nhập vào chưa đúng";
      }
    } 




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Đăng nhập</title>
</head>
<body>
<form method="post" style="width:600px" class="border border-warning border-2 rounded m-auto p-2" id="login-form" >
  <div class="mb-3" >
    <label for="tendangnhap" class="form-label">Tên đăng nhập</label>
    <input value="<?php if(isset($tendangnhap)== true) echo $tendangnhap;  ?>"  type="text" class="form-control" id="tendangnhap" name="tendangnhap" placeholder="Nhập vào tên đăng nhập">
    <span id="erruser"></span>
  </div>
  <div class="mb-3">
    <label for="matkhau" class="form-label">Mật khẩu</label>
    <input value="<?php if(isset($matkhau)== true) echo $matkhau;  ?>"  type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu">
    <span id="errpass"></span>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="nhomatkhau" name="nhomatkhau">
    <label class="form-check-label" for="nhomatkhau">Ghi nhớ mật khẩu</label>
  </div>
  <button type="submit" name="nutdangnhap" value="dn" class="btn btn-primary">Đăng nhập</button>
</form>
</body>
</html>
