<?php
session_start();
echo $_SESSION["usuario"];
session_destroy();
header("Location: /acceso/index.php");

