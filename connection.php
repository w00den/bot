<?php 
$config = require('./config.php')
$user = $config['dbname'];
$pass = $config['username'];
$dbname = $config['pass'];

try {
    $dbh = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
} catch {
    echo("Can't open the database.");
}
?>