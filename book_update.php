<?php
  include "admin_protect.php";
?>
<?php
$bID = $_GET['book_id'];
include "dbconnect.php";
$update_show = "select * from book where book_id = '$bID'";
$result = mysqli_query($dbcon,$update_show);
mysqli_close($dbcon);
$record = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลหนังสือ</title>
    <link rel = stylesheet type=text/css href=css/style_2.css> <br>
</head>
<body><center><h4>แก้ไขข้อมูลหนังสือ</h4>
<table border=1 cellspacing=0 width=40%>
<form method=post action="book_update_code.php" enctype=multipart/form-data>
    <tr><td>รหัสหนังสือ</td><td><input type = text name = bID value = "<?php echo"$record[book_id]"; ?>"></td></tr>    
    <tr><td>ชื่อหนังสือ</td> <td><input type =text name = bName value = "<?php echo"$record[book_name]";?>"></td></tr>
    <tr><td>ประเภทหนังสือ</td> <td><select name = bType>
            <option value = "<?php echo"$record[book_type]"; ?>"> <?php echo"$record[book_type]"; ?> </option>
            <option value= นวนิยาย> นวนิยาย <option>
            <option value= คอมพิวเตอร์> คอมพิวเตอร์ <option>  
            <option value= สารคดี> สารคดี <option>  
            <option value= วารสาร> วารสาร <option>  
            <option value= หนังสืออ้างอิง> หนังสืออ้างอิง <option> 
        </td></tr>
        <tr><td>ผู้แต่ง</td><td><input type =text name = bAuthor  value = "<?php echo"$record[book_author]"; ?>"></td></tr>
        <tr><td>สำนักพิมพ์</td><td><input type =text  name = bPublisher value = "<?php echo"$record[book_publisher]"; ?>"></td></tr>
        <tr><td>ปีที่พิมพ์</td><td><input type =text name = bYear value = "<?php echo"$record[book_year]"; ?>"></td></tr>
        <tr><td>ภาพปกหนังสือ</td><td><img src = photo/<?php echo"$record[book_photo]"; ?> width =25%>
        <input type =file name = bPhoto> </td></tr>
</table> <br>
        <input type = submit value = แก้ไข> 
        <input type = reset value = ยกเลิก>
</form>
</center>
</body>
</html>