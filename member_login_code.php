<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    include "dbconnect.php";
    $check_user = "select * from member where Username='$user' and Password=md5('$pass')";
    $result = mysqli_query($dbcon,$check_user);
    mysqli_close($dbcon);
    $num = mysqli_num_rows($result);
    if($num==1) {
        session_start();
        $_SESSION['sess_user'] = $user;
        $_SESSION['sess_id'] = session_id();
        ?>
        <script lanuage="java script">
            alert('ยินดีต้อนรับเข้าสู่ระบบ');
        </script>
   <?php echo"<meta http-equiv=refresh content='0; url=book_list.php'>"; } 
   else { ?>
    <script lanuage="java script">
        alert('Username หรือ Password ไม่ถูกต้องกรุณา Login ใหม่');
    </script>
<?php echo"<meta http-equiv=refresh content='0; url=member_login.php'>";
   }
?>