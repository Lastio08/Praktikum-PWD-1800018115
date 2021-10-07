<?php
$myDir = "C:/xampp/htdocs/Praktikum-PWD-1800018115/upload/";
$dir = opendir($myDir);
echo "Isi folder (klik link untuk download : <br>";
while($tmp = readdir($dir)){
echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);
?>