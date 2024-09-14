<?php
  include "check_member_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการหนังสือ</title>
    <link rel = stylesheet type=text/css href=css/style_3.css>
</head>
<body><a href=member_logout.php><p align=right> ออกจากระบบ </p></a>
    <center><h3>รายการหนังสือ</h3> 
    <table border=1 cellspacing = 0 width =90%>
<tr>
    <th width=7%><center>รหัสหนังสือ</center></th>
    <th width=27%><center>ชื่อหนังสือ</center></th>
    <th width=9%><center>ประเภทหนังสือ</center></th>
    <th width=13%><center>ชื่อผู้แต่ง</center></th>
    <th width=11%><center>สำนักพิมพ์</center></th>
    <th width=6%><center>ปีที่พิมพ์</center></th>
    <th width=10%><center>รูปภาพ</center></th>
    <th width=9%><center>สถานะหนังสือ</center></th>
    <th width=9%><center>ยืมหนังสือ</center></th>
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
          <td><center>$record[book_author]</center></td>
          <td><center>$record[book_publisher]</center></td>
          <td><center>$record[book_year]<center></td>
          <td><center><img src=photo/$record[book_photo] width=30%></center></td>
          <td><center>$record[book_status] </td>
          <td><center> ";?> <a href=borrow_code.php?book_id=<?=$record['book_id'];?> onclick="return confirm('คุณต้องการยืมหนังสือ <?=$record['book_name'];?>  หรือไม่');" ><img src=photo/y.png width=35%></a></tr>
<?php 
}
?>
</table>
</center>
</body>
</html>