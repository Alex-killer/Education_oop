<?php
require_once 'functions.php';
require_once 'database/QueryBuilder.php';

$pdo = connectToDb();

$db = new QueryBuilder($pdo);
$posts = $db->getAll();


//$posts = getAllPosts($pdo);

require_once 'index.view.php';
?>
<?php
//$pdo = new PDO('mysql:host=mysql;dbname:test;charset=utf8', 'root', 'root');
//
//$sql = 'SELECT * FROM posts';
//$statement = $pdo->prepare($sql);
//$statement->execute();
//$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
//?>

