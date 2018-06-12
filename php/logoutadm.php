<?php
session_start();
session_destroy();
print "<script>window.location='../loginadmin.php';</script>";
?>