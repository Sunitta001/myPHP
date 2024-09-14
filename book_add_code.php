<?php
error_reporting( error_reporting() & ~E_NOTICE);
$name = $_POST['bName'];
$type = $_POST['bType'];
$author = $_POST['bAuthor'];
$publisher = $_POST['bPublisher'];
$year = $_POST['bYear'];
$photo = $_FILES['bPhoto']['tmp_name'];
$photoname = $_FILES['bPhoto']['name'];
$status = $_POST['bStatus'];
include "dbconnect.php";
$add_book = "insert into book values(null,'$name','$type','$author','$publisher','$year','$photoname','$status')";
$result = mysqli_query($dbcon,$add_book);
mysqli_close($dbcon);
if($result) {
  copy($photo,"photo/".$photoname);
?>
  <script "java script">
  alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
  </script>
<?php   echo"<meta http-equiv = 'refresh' content = '0; url=book_add.php'>";
}else{ ?>
  <script "java script">
  alert('ไม่สามารถเพิ่มข้อมูลได้');
  </script>
<?php echo"<meta http-equiv = 'refresh' content = '0; url=book_add.php'>";
  }
?>