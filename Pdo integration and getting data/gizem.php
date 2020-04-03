<html>
<body>

<form action="gizem.php" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

</body>
</html>

<?

$dsn = "mysql:host=localhost;dbname=userphp";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
 $query = $pdo->prepare("SELECT * FROM user WHERE username=? and password=?");
    $query->execute([$_POST['username'], $_POST['password']]);
   
    
      if ( $query->rowCount() ){
        foreach( $query as $row ){
          print $row['username']."<br />";
          print $row['password']."<br />";
          print $row['phone']."<br />";
        }
      }
    

?>
