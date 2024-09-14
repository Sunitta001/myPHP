<?php 
error_reporting( E_ERROR | E_PARSE);
@session_start();
$bookID = $_SESSION['sess_book_id'];
$user = $_SESSION['ses_Username'];
include "dbconnect.php";
$member = "select * from member where Username = '$user'";
$result_member = mysqli_query($dbcon,$member);
$record_member = mysqli_fetch_array($result_member);
$memberID = $record_member['memberID'];
$borrow = "insert into borrow value(null, now(),(ADDDATE(now(),INTERVAL 7 DAY)),'$memberID','$bookID')";
$result_borrow = mysqli_query($dbcon,$borrow);
$book_update = "update book set book_status = 'ถูกยืม' where book_id ='$bookID'";
$result_update = mysqli_query($dbcon,$book_update);
mysqli_close($dbcon);
echo"<meta http-equiv = 'refresh' content = '0; url=borrow_report.php'>"
?>