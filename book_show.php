<?php
  include "admin_protect.php";
?>=
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลหนังสือ</title>
    <link rel = stylesheet type=text/css href=css/style_3.css>
</head>
<body><a href=admin_logout.php><p align=right> ออกจากระบบ </p></a>
    <center><h3>ข้อมูลหนังสือ</h3> 
    <table border=1 cellspacing = 0 width =85%>
<tr>
    <th width=7%><center>รหัสหนังสือ</center></th>
    <th width=27%><center>ชื่อหนังสือ</center></th>
    <th width=9%><center>ประเภทหนังสือ</center></th>
    <th width=13%><center>ชื่อผู้แต่ง</center></th>
    <th width=13%><center>สำนักพิมพ์</center></th>
    <th width=5%><center>ปีที่พิมพ์</center></th>
    <th width=10%><center>รูปภาพ</center></th>
    <th width=7%><center>หมายเหตุ</center></th>
</tr>
<?php
include "dbconnect.php";
$show_book = "select * from book";
$result = mysqli_query($dbcon,$show_book);
mysqli_close($dbcon);
while($record = mysqli_fetch_array($result)) {
    echo"<tr><td><center>$record[book_id]</center></td>
          <td>$record[book_name]</td>
          <td><center>$record[book_type]</center></td>
          <td>$record[book_author]</td>
          <td>$record[book_publisher]</td>
          <td><center>$record[book_year]<center></td>
          <td><center><img src=photo/$record[book_photo] width=30%></center></td>
          <td><center> ";?> <a href=book_update.php?book_id=<?=$record['book_id'];?> onclick="return confirm('คุณต้องการแก้ไขข้อมูลหนงสือ <?=$record['book_name'];?>  หรือไม่');" ><img src=photo/p.jpg width=30%></a> | 
          <a href=book_delete.php?book_id=<?=$record['book_id'];?> onclick="return confirm('คุณต้องการลบข้อมูลหนังสือ <?=$record['book_name'];?>  หรือไม่');" ><img src=photo/b.png width=30%></a></center></td></tr>
<?php 
}
?>
</table>
<br><a href=book_add.php>เพิ่มข้อมูลหนังสือ</a><br>
</center>
</body>
</html>