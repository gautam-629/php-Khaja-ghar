
<?php
session_start();
session_unset();
session_destroy();

header("location: ../../view/login.php");
exit;
?>