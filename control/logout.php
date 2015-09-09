<?php
session_unset();
session_destroy();
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='index.php'";
echo "</script>";
?>