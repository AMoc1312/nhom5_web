<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
 body {
  font-family: 'Poppins', sans-serif;
  color: #5d4747;
  font-size: 15px;
}
.messXoa button {
color: #5d4747;
border-width: 0.1px;
border-color: #ddd;
border-style: solid;
background-color: white;
border-radius: 6px;
width: 50px;
height: 24px;
}
.messXoa button:hover {background-color: #ddd;}
.messXoa {
 width: 220px; height: 108px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2), 0 0 20px rgba(0, 0, 0, 0.19);
      border-radius: 15px;
      position: absolute;
       background-color:white;
       margin-top: 200px;
       margin-left: 40%;
}

.show {display: block;}
</style>
</head>
<body>
<div id="tbXoa" class="messXoa" style="z-index: 1035;">
   <p style="padding: 15px;margin: 0px;">Bạn có muốn xóa bình luận này không?</p>
   <div style="margin-left: auto; margin-right: auto;text-align: center;background-color: white;"><button onclick="goiTb()">Có</button>
  <button onclick="goiTb()">Khum</button></div>
  
  </div>
</body>
</html>