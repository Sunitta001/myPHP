<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel = stylesheet type=text/css href=css/style_2.css>
</head>
<body><center><h4>สมัครสมาชิก</h4>
<table border=1 cellspacing=0 width=30%>
<form method=post action=" member_add_code.php ">
    <tr><td>Username</td> 
         <td><input type =text name = memberUsername ></td></tr>
         <tr><td>Password</td> 
         <td><input type =password name = memberPassword ></td></tr>
         <tr><td>คำนำหน้าชื่อ</td>
         <td><input type =radio name = prename value= "นาย"> นาย <br>
         <input type =radio name = prename value= "นาง"> นาง <br>
         <input type =radio name = prename value= "นางสาว"> นางสาว <br>
        </td></tr>
         <tr><td>ชื่อ-นามสกุล</td>
         <td><input type =text name = nameMember ></td></tr>
         <tr><td>เบอร์โทร</td>
         <td><input type =text name = telMember ></td></tr>
         <tr><td>อีเมล</td>
         <td><input type =text name = mailMember ></td></tr>
</table> <br>
         <input type = submit value = สมัครสมาชิก> 
         <input type = reset value = ยกเลิก>
</form>
</center>
</body>
</html>