<?php
session_start();
session_unset($_SESSION['email']);
session_destroy();
echo "<script>window.location.href='Admin_Login.php'</script>";

?>