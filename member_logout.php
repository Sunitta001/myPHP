<?php
@session_start();
session_destroy();
?> 
      <script "java script">
      alert('ออกจากระบบเรียบร้อยแล้ว');
      </script>
<?php echo "<meta http-equiv='refresh' content='0; url=member_login.php'>";
exit();
?>