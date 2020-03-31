<?php

include ('odev.php');

$username= $_POST["username"];
$password= $_POST["password"];
$phone = $_POST["phone"];

try {
    $sth = $conn->prepare('INSERT INTO user(username,password,phone) VALUES(?,?,?)');
    $sth->bindParam(1, $username, PDO::PARAM_STR);
    $sth->bindParam(2, $password, PDO::PARAM_STR);
    $sth->bindParam(3, $phone, PDO::PARAM_STR);
    $sth->execute();
 
    echo "<script>window.alert('Kaydınız eklendi!'); window.history.back();</script>";
  }
  catch(PDOException $e)
  {
  echo $sql . "HATA: <br>" . $e->getMessage();
  }
 
?>