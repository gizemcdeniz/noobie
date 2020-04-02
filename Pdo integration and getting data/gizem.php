<?php

include ("mysql.php");

$query = $conn->query("SELECT * FROM user", PDO::FETCH_ASSOC);
 if ( $query->rowCount() ){
  foreach( $query as $row ){
  print $row['username']."<br />";
  print $row['password']."<br />";
  print $row['phone']."<br />";
 }
}

?>
