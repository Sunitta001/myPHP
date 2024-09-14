<?php
    session_start();
    error_reporting();
    $user = $_SESSION['sess_user'];
    $id =  $_SESSION['sess_id'];
    if($user=="" or $id<>session_id()) { ?>
        <script lanuage="java script">
            alert('คุณไม่มีสิทธิ์ใช้งานหน้านี้ กรุณา Login ก่อน');
        </script>
   echo"<meta http-equiv=refresh content='0; url=member_login.php'>"  ;
<?php } 