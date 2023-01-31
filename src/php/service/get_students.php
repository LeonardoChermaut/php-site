<?php

include("connection.php");

try {
  $query = "SELECT * FROM `aluno`";
  $stmt  = $conn->prepare($query);
  $stmt->execute();
  $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}

return $students;
?>