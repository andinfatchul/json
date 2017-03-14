<?php
$json_data=file_get_contents("pekerja2.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama: ";echo $obj->nama[0];
echo "<br>";
echo "Progdi: ";echo $obj->progdi[1];
echo "<br>";
echo "Matakuliah: ";echo $obj->matakuliah[2];
?>
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Term