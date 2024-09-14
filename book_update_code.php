<?php
error_reporting( error_reporting() & ~E_NOTICE);
$id = $_POST['bID'];
$name = $_POST['bName'];
$type = $_POST['bType'];
$author = $_POST['bAuthor'];
$publisher = $_POST['bPublisher'];
$year = $_POST['bYear'];
$photo = $_FILES['bPhoto']['tmp_name'];
$photoname = $_FILES['bPhoto']['name'];
include "dbconnect.php";
if($photoname=="") {
$update_book = "update book set book_name='$name',book_type='$type',book_author='$author',book_publisher='$publisher',book_year='$year' where book_id='$id'";
$result = mysqli_query($dbcon,$update_book);
mysqli_close($dbcon);
if($result) {
  copy($photo,"photo/".$photoname);
?>
  <script "java script">
  alert('แก้ไขข้อมูลเรียบร้อยแล้ว');
  </script>
<?php   echo"<meta http-equiv = 'refresh' content = '0; url=book_show.php'>";
}else{
?>
  <script "java script">
  alert('ไม่สามารถแก้ไขข้อมูลได้');
  </script>
<?php echo"<meta http-equiv = 'refresh' content = '0; url=book_show.php'>";
  }
}else{
$update_book = "update book set book_name='$name',book_type='$type',book_author='$author',book_publisher='$publisher',book_year='$year',book_photo='$photoname' where book_id='$id'"; 
$result = mysqli_query($dbcon,$update_book);
mysqli_close($dbcon);
if($result) {
  copy($photo,"photo/".$photoname);
?>
  <script "java script">
  alert('แก้ไขข้อมูลเรียบร้อยแล้ว');
  </script>
<?php   echo"<meta http-equiv = 'refresh' content = '0; url=book_show.php'>";
}else{
?>
  <script "java script">
  alert('ไม่สามารถแก้ไขข้อมูลได้');
  </script>
<?php echo"<meta http-equiv = 'refresh' content = '0; url=book_show.php'>";
  }  
}
?>