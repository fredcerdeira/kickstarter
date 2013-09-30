<?php
$db = new PDO("mysql:host=localhost;dbname=kickstartapp",
"fred", "admin");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
try {
$queryStr = "INSERT INTO users (name, password, email) 
VALUES ('test_user', MD5('admin'), 'frederico.cerdeira@gmail.com')";
$db->query($queryStr);
} catch (PDOException $e) {
echo $e->getMessage();
}