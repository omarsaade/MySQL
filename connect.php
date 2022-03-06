<!-- first meth : command line
second meth : phpmyadmin => localhost/phpmyadmin
third meth: software mysql workbench 6.3

username huwe root
xampp phpmyadmin config.inc.php

mysql -u root
show databases;
quit

$db = new PDO($dsn , $user , $pass); itisal jdid

-->

<!-- dsn data source name 

$dsn = 'mysql:host=localhost;dbname=products'; //data source name
$user = 'root';
the USer To Connect
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $db = new PDO($dsn, $user, $pass);
    // start A New Connection With PDO CLass
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = "INSERT INTO items (name) VALUES ('ahmadto');";
    $db->exec($q);
} catch (PDOException $e) {
    echo 'Failed ' . $e->getMessage();
}
-->