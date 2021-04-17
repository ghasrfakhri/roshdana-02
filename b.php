<?php
echo "GET:<br>";
var_dump($_GET);
echo "<br><br>POST:<br>";
var_dump($_POST);
echo "<br><br>Request:<br>";
var_dump($_REQUEST);
echo "<br><br><br>";

echo $_REQUEST['firstName']."<br>";
echo $_REQUEST['lastName']."<br>";
echo $_REQUEST['age']."<br>";
echo nl2br($_REQUEST['address'])."<br>";