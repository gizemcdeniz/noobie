<?php  

$sunucuadi = "localhost";
$kadi = "root"; //local kadi:root
$sifre = "";//local şifre:""
$vtadi = "userphp";
 
// bağlantı oluşturma
try {
  $conn = new PDO("mysql:host=$sunucuadi;dbname=$vtadi", $kadi, $sifre);
  // Hata modunu etkinleştirme
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr3><b>Account Details</b></h3>
	<form method="POST" action="kayitekle.php">
	<input type="text" name="username" placeholder="username"><br>
	<input type="text" name="password" placeholder="password"><br>
	<input type="text" name="phone" placeholder="phone"><br>
	<input type="submit" name="Submit">

</form>
</body>
</html>