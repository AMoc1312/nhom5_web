<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	
		<style>
    body {
  font-family: 'Poppins', sans-serif;
  color: #5d4747;
  font-size: 18px;
   background-color: #fff0e9;
}
input[type=text],input[type=password], select {
  width: 280px;
  height: 40px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
}

input::placeholder {
  font-size: 15px;
}
.button1
{
  width: 150px;
  height: 45px;
  background-color: #d2a495;
  font-size: 25px;
  font-family: 'Poppins', sans-serif;
  border-radius: 10px;
}

.formdn
{
text-align: center; 
width: 300px; 
height: 260px; 
padding-top: 20px;padding-bottom: 30px;padding-left: 30px;padding-right: 30px; 
background-color: white; 
margin-left: auto; margin-right: auto; margin-top: 50px;
border: 1px solid #ccc;
}
/* mobile: width < 740px */
@media only screen and (max-width: 740px)
{
	.formdn
	{
		width: 300px;
	}
	input[type=text], select 
	{
		width: 221px;
	}
}

@media only screen and (min-width: 740px) and (max-width: 1024px)
{
	
}
 
	</style>
</head>
<body>
<div style="text-align: center;">
	<img src="../documentation/img/logoweb.png" style="width: 500px; height: auto;">
	
	<div  class="formdn">
  <div>	
  	<form method="post" action="dang_nhap_thuc_hien.php">
    <h3 style="padding-bottom: 12px; font-size: 30px;margin-bottom: 10px;">Đăng nhập</h3>
    <input type="text" name="txtTaiKhoan" placeholder="Tên đăng nhập" required value="" >
    <br/><input type="password" name="txtMatKhau" placeholder="Mật khẩu" required value="" id="myInput">
    <br/><p style="font-size: 15px;margin:0px;"><input type="checkbox" onclick="myFunction()"> Show Password</p>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <input type="submit" name="btnDangNhap" value="Đăng nhập" class="button1" style="margin-top: 10px;font-size: 16px;">
    </form>
  </div>
  </div>
		
</div>

</body>
</html>