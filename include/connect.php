
<?php
    require 'config.php';

    $dns = "mysql:host=$host;dbname=$db;charesy=UTF8";
    try {
        $pdo = new PDO($dns, $user, $password);
        if ($pdo) {
            return $pdo;
        }
    }  catch (PDOException $e) {
        echo $e->getMessage();
    }
?>

