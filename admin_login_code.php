<?php
error_reporting( error_reporting() & ~E_NOTICE);
$user = $_POST['adminUsername'];
$pass = $_POST['adminPassword'];
include "dbconnect.php";
$login = "select * from admin where username = '$user' and password = md5('$pass')";
$result = mysqli_query($dbcon,$login);
mysqli_close($dbcon);
$num = mysqli_num_rows($result);
if($num>=1) {
?>
    <script "java script">
    alert('เข้าสู่ระบบเรียบร้อยแล้ว');
    </script>
<?php
@session_start(); 
$_SESSION['ses_username'] = $user;
$_SESSION['ses_userid'] = session_id();
    echo"<meta http-equiv = 'refresh' content = '0; url=book_show.php'>";
}else{ ?>
    <script "java script">
    alert('Username หรือ Password ไม่ถูกต้อง กรุณาลองใหม่');
    </script>
<?php echo"<meta http-equiv = 'refresh' content = '0; url=admin_login.php'>";
  }
?>
