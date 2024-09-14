<?php
error_reporting( error_reporting() & ~E_NOTICE);
$m_user = $_POST['memberUsername'];
$m_pass = $_POST['memberPassword'];
$m_preName = $_POST['prename'];
$nameMember = $_POST['nameMember'];
$m_tel = $_POST['telMember'];
$m_mail = $_POST['mailMember'];
include "dbconnect.php";
$check_muser = "select * from member where Username = '$m_user'";
$chk_result = mysqli_query($dbcon,$check_muser);
$num = mysqli_num_rows($chk_result);
mysqli_close($dbcon);
if($num>=1) {
?>
  <script "java script">
  alert('Username นี้มีคนใช้แล้วกรุณาใช้ชื่ออื่น');
  </script>
<?php   echo"<meta http-equiv = 'refresh' content = '0; url=member_add.php'>";
}else{
include "dbconnect.php";
$add_member = "insert into member values(null,'$m_user',md5('$m_pass'),'$m_preName','$nameMember','$m_tel', '$m_mail')";
$result = mysqli_query($dbcon,$add_member);
mysqli_close($dbcon);
if($result) {
?>
  <script "java script">
  alert('สมัครสมาชิกเรียบร้อยแล้ว');
  </script>
<?php   echo"<meta http-equiv = 'refresh' content = '0; url=member_add.php'>";
}else{
?>
  <script "java script">
  alert('ไม่สามารถสมัครสมาชิกได้');
  </script>
<?php echo"<meta http-equiv = 'refresh' content = '0; url=member_add.php'>";
    }
  }
?>