<html><body>
<?php
$NAMA = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["NAMA"]) && isset($_POST["NIM"])) {
$NAMA = $_POST["NAMA"];
$NIM = $_POST["NIM"];
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
NAMA: <input type="text" name="NAMA"><br>
NIM: <input type="text" name="NIM"><br>
<input type="submit">
</form>
<?php
if(empty($NAMA) && empty($NIM) ){
echo "NAMA dan NIM anda kosong!!!";
}
else if (strlen($_POST["NIM"])!=10){
	echo "NIM HARUS berjumlah 10 KARAKTER";
}
else if(!is_numeric($_POST["NIM"])){
	echo "NIM HARUS BERUPA ANGKA";
}
else if(!empty($NAMA) && !empty($NIM) ){
echo "<h1>Selamat Datang</h1>";
echo $NAMA . "<br>" . $NIM;
}


?>

</body></html>