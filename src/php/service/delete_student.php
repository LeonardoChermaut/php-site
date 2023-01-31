<?php

include("connection.php");

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  try {
    $query = "DELETE FROM `aluno` WHERE id = :id";
    $stmt  = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo 'success';
  } catch (PDOException $e) {
    echo "Mensagem de erro: " . $e->getMessage();
    die();
  }
  $conn = null;
}
?>