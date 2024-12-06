<?php


echo $_COOKIE["userLogin"] ;
echo "<br>";
echo $_COOKIE ["userPassword"];
echo "<br>";
$_COOKIE["userLogin"] = "zzz";
echo $_COOKIE["userLogin"] ;