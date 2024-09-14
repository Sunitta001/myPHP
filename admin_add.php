<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ข้อมูลผู้ดูแลระบบ</title>
  <link rel="stylesheet" type="text/css" href="css/style_2.css">
</head>
<body><center><h4>เพิ่มข้อมูลผู้ดูแลระบบ</h4>
<table border=1 cellspacing=0 width=30%>
<form method=post action=" admin_add_code.php ">
    <tr><td>Username</td> 
        <td><input type =text name = adminUsername ></td></tr>
        <tr><td>Password</td> 
        <td><input type =password name = adminPassword ></td></tr>
        <tr><td>คำนำหน้าชื่อ</td>
        <td><input type =radio name = prename value= "นาย"> นาย <br>
        <input type =radio name = prename value= "นาง"> นาง <br>
        <input type =radio name = prename value= "นางสาว"> นางสาว <br>
        </td></tr>
         <tr><td>ชื่อ-นามสกุล</td>
         <td><input type =text name = nameAdmin ></td></tr>
</table> <br>
         <input type = submit value = เพิ่มข้อมูล> 
         <input type = reset value = ยกเลิก>
</form>
</center>
</body>
</html>