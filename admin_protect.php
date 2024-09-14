<?php
@session_start();
$user = $_SESSION['ses_username'];
$id = $_SESSION['ses_userid'];
if($user == "" or $id <>session_id()) { 
?> 
   <script "java script">
   alert('กรุณา Login ก่อนเข้าใช้งาน');
   </script>
<?php echo"<meta http-equiv = 'refresh' content = '0; url=admin_login.php'>"; 
   }
?>