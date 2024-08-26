<?php
$host = "c9mq4861d16jlm.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com";
$port = "5432";
$dbname = "d28r8jq3pdg6b5";
$username = "ufpmtng6gkep53";
$password = "p024bcec6f727edeb8e1dbcdbf1dc0c03bad91664d8fe944dfc196a3bca8fb53f";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
