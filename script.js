function kiemtra(e){
    e.preventDefault();
  var user = document.getElementById("tendangnhap");
  var password = document.getElementById("matkhau");
  if(user.value == ""){
      document.getElementById("erruser").innerHTML = "Tên phai la admin";
      user.style.background = "red";
      
      }
  else if(user.value !="" && password.value != "admin" ){
      document.getElementById("errpass").innerHTML = "Mật khẩu là admin";
      password.style.background = "red";
      }
      
  }
  var form = document.getElementById('login-form');
  form.addEventListener('submit', kiemtra, false);