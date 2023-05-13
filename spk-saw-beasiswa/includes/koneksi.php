<?php
$conn=($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "root", "")) or die("Tidak Terkoneksi");
$db=mysqli_select_db($GLOBALS["___mysqli_ston"], "spk_saw_beasiswa") or die ("Database Tidak Ditemukan");
?>