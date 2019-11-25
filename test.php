<?php
session_start();
$_SESSION["counter"]=1;
echo $_SESSION["counter"].'<br>';
$_SESSION["counter"] = 50;
echo $_SESSION["counter"];
?>