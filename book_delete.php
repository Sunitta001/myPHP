<?php
$bID = $_GET['book_id'];
include "dbconnect.php";
$delete_book = "delete from book where book_id = '$bID' ";
$result = mysqli_query($dbcon,$delete_book);
mysqli_close($dbcon);
?>
<script lanuage = java script>
    alert('ลบข้อมูลเรียบร้อยแล้ว');
</script>
<?php   
echo"<meta http-equiv = 'refresh' content = '0; url=book_show.php'>";
?>      



