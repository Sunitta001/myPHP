<?php
$book_return = $_POST['book_return'];
include "dbconnect.php";
$return = "update book set book_status='มีอยู่' where book_id='$book_return'";
$result_return = mysqli_query($dbcon,$return);
mysqli_close($dbcon);
?>
    <script "java script">
    alert('คืนหนังสือแล้ว');
    </script>
<?php
    echo"<meta http-equiv = 'refresh' content = '0; url=return_book.php'>";
?>