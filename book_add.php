<?php
  include "admin_protect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลหนังสือ</title>
    <link rel = stylesheet type=text/css href=css/style_2.css>
</head>
<body><center><h4>เพิ่มข้อมูลหนังสือ</h4>
<table border=1 cellspacing=0 width=40%>
<form method=post action="book_add_code.php" enctype=multipart/form-data>
    <tr><td>ชื่อหนังสือ</td> <td><input type =text name = bName></td></tr>
    <tr><td>ประเภทหนังสือ</td><td><select name = bType>
            <option value= นวนิยาย> นวนิยาย <option>
            <option value= คอมพิวเตอร์> คอมพิวเตอร์ <option>  
            <option value= สารคดี> สารคดี <option>  
            <option value= วารสาร> วารสาร <option>  
            <option value= หนังสืออ้างอิง> หนังสืออ้างอิง <option> 
          </td></tr>
        <tr><td>ผู้แต่ง</td><td><input type =text name = bAuthor></td></tr>
        <tr><td>สำนักพิมพ์</td><td><input type =text  name = bPublisher></td></tr>
        <tr><td>ปีที่พิมพ์</td><td><input type =text name = bYear></td></tr>
        <tr><td>สถานะหนังสือ</td><td><input type =text name = bStatus value = 'มีอยู่'></td></tr>
        <tr><td>ภาพปกหนังสือ</td><td><input type =file name = bPhoto></td></tr>
</table> <br>
        <input type = submit value = เพิ่มข้อมูล> 
        <input type = reset value = ยกเลิก>
</form>
</center>
</body>
</html>