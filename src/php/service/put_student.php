<?php
session_start();

include('connection.php');

$data = json_decode(file_get_contents("php://input"), true, 512, JSON_BIGINT_AS_STRING | JSON_THROW_ON_ERROR | JSON_OBJECT_AS_ARRAY);

if (!isset($data['id']) || empty($data['id'])) {
  $_SESSION['error'] = "id é obrigatório para atualizar os dados.";
  exit();
}
error_log(print_r($data, true), 0);

$query = "UPDATE aluno SET ";

foreach ($data as $fieldName => $value) {
  if ($fieldName === 'id')
    continue;
  if (!empty($value)) {
    $query .= "$fieldName = :$fieldName, ";
  }
}

$query = rtrim($query, ', ');
$query .= " WHERE id = :id";

$stmt  = $conn->prepare($query);

foreach ($data as $fieldName => $value) {
  if (!empty($value)) {
    $stmt->bindValue(':' . $fieldName, $value);
  }
}

//debug
$error = implode(", ", $stmt->errorInfo());
error_log($error, 0);

if ($stmt->execute()) {
  $_SESSION['success'] = "Aluno atualizado com sucesso!";
} else {
  $_SESSION['error'] = "Ocorreu um erro ao atualizar o aluno.";
}

?>