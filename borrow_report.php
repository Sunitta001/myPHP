<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลการยืมหนังสือ</title>
    <link rel = stylesheet type=text/css href=css/style_3.css> 
</head>
<body><a href=member_logout.php><p align=right> ออกจากระบบ </p></a>
    <center><h3>ข้อมูลการยืมหนังสือ</h3> 
    <table border=1 cellspacing = 0 width =85%>
<tr>
    <th width=7%><center>รหัสสมาชิก</center></th>
    <th width=27%><center>ชื่อหนังสือ</center></th>
    <th width=9%><center>วันที่ยืม</center></th>
    <th width=13%><center>วันที่คืน</center></th>
    <th width=13%><center>สถานะหนังสือ</center></th>
</tr>
<?php
    error_reporting(E_ERROR | E_PARSE);   
    @session_start();
    $user = $_SESSION['ses_Username'] ;
    include "dbconnect.php";
    $member = "select * from member where Username = '$user'";
    $result_member = mysqli_query($dbcon,$member);
    $record_member = mysqli_fetch_array($result_member);
    $memberID = $record_member['memberID'];
    $member = "select * from borrow where memberID = '$memberID'";
    $result_member = mysqli_query($dbcon,$member);
    while($record = mysqli_fetch_array($result_member)){
        echo"<tr><td><center>$record[book_id]</center></td>";
        $book_id = $record['book_id'];
        $book = "select * from book where book_id = '$book_id'";
        $book_result = mysqli_query($dbcon,$book);
        $record_book = mysqli_fetch_array($book_result);
        echo "<td>$record_book[book_name]</td>
              <td><center>$record[borrow_date]</center></td>
              <td><center>$record[return_date]</center></td>   
              <td><center>$record_book[book_status]</center></td>            
        </tr>";
    }
?>
</table>
</center>
</body>
</html>