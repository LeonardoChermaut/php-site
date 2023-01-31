<?php
$base     = "mysql:host=localhost;dbname=student-manager;charset=utf8";
$username = "root";
$password = "";

try {
  $conn = new PDO($base, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>