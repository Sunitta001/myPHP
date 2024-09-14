<?php
error_reporting( error_reporting() & ~E_NOTICE);
$user = $_POST['adminUsername'];
$pass = $_POST['adminPassword'];
$preName = $_POST['prename'];
$nameAdmin = $_POST['nameAdmin'];
include "dbconnect.php";
$check_user = "select * from admin where username = '$user'";
$chk_result = mysqli_query($dbcon,$check_user);
$num = mysqli_num_rows($chk_result);
mysqli_close($dbcon);
if($num>=1) {
?>
  <script "java script">
  alert('Username นี้มีคนใช้แล้วกรุณาใช้ชื่ออื่น');
  </script>
<?php  echo"<meta http-equiv = 'refresh' content = '0; url=admin_add.php'>";
}else{
include "dbconnect.php";
$add_admin = "insert into admin values(null,'$user',md5('$pass'),'$preName','$nameAdmin')";
$result = mysqli_query($dbcon,$add_admin);
mysqli_close($dbcon);
if($result) {
?>
  <script "java script">
    alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
    </script>
<?php   echo"<meta http-equiv = 'refresh' content = '0; url=admin_add.php'>";
  }else{
?>
  <script "java script">
  alert('ไม่สามารถเพิ่มข้อมูลได้');
  </script>
<?php echo"<meta http-equiv = 'refresh' content = '0; url=admin_add.php'>";}
  }
?>
