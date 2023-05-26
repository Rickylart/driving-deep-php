<?php
require ('./function.php');
//******connecting to mysql db *//
$dsn = "mysql:host=localhost;port:3306;dbname=posts;charset=utf8mb4";

$pdo = new PDO($dsn,'root','developer');

$statement = $pdo->prepare("SELECT * FROM post");
// $statement->execute();

// $posts = $statement->fetchAll();

dd($pdo);

require ('./router.php');



