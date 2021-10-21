<?php
echo "<head><title>My Guest Book</head></title>";
$fp = fopen("guestbook.txt","a+");
//fputs($fp,"$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);

echo "Terima kasih atas partisipasi anda mengisi buku tamu <br>";
echo "<a href=tampilan.php> Isi buku tamu <a><br>";
echo "<a href=lihat.php> Lihat buku tamu <a><br>";
?>