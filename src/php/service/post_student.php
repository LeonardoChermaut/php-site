<?php

session_start();
include("connection.php");

if (empty($_POST['name-student'])) {
  $_SESSION['error'] = "Nome é obrigatório.";
  exit();
}
if (empty($_POST['monthly-payment'])) {
  $_SESSION['error'] = "Mensalidade é obrigatório.";
  exit();
}
if (empty($_POST['course-student'])) {
  $_SESSION['error'] = "Curso é obrigatório.";
  exit();
}
if (empty($_POST['email-student'])) {
  $_SESSION['error'] = "Email é obrigatório.";
  exit();
}
if (empty($_POST['phone-student'])) {
  $_SESSION['error'] = "Celular é obrigatório.";
  exit();
}
if (empty($_POST['password-student'])) {
  $_SESSION['error'] = "Senha é obrigatório.";
  exit();
}
if (empty($_POST['status-student'])) {
  $_SESSION['error'] = "Status é obrigatório.";
  exit();
}
if (empty($_POST['observation-student'])) {
  $_SESSION['error'] = "Observação é obrigatório.";
  exit();
}

$name           = $_POST['name-student'];
$email          = $_POST['email-student'];
$password       = $_POST['password-student'];
$course         = $_POST['course-student'];
$monthlyPayment = $_POST['monthly-payment'];
$phone          = $_POST['phone-student'];
$status         = $_POST['status-student'];
$observation    = $_POST['observation-student'];

$query          = "INSERT INTO aluno (nome, email, senha, celular, curso, mensalidade, observacao, situacao)
VALUES (:name, :email, :password, :phone, :course, :monthlyPayment, :observation, :status)";

$stmt           = $conn->prepare($query);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':course', $course);
$stmt->bindParam(':monthlyPayment', $monthlyPayment);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':course', $course);
$stmt->bindParam(':monthlyPayment', $monthlyPayment);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':observation', $observation);

if ($stmt->execute()) {
  $_SESSION['success'] = "success";
  exit();
} else {
  $error             = $stmt->errorInfo();
  $_SESSION['error'] = "Ocorreu um erro ao cadastrar o aluno. Erro: ' . $error[2]";
  exit();
}

?>