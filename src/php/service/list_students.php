<?php
function listStudents() {
  include('delete_student.php');
  include('get_students.php');

  $student = $students;

  echo "<div class='row justify-content-space-evenly'>";
  foreach ($student as $students) {
    $id = $students['id'];
    echo "
        <div id='col-get-list-students' class='col'>
          <div class='card' style='width: 100%; height: 95%; margin: 0 auto;'>
               <h5 class='list-group-item'><strong>Aluno: </strong> {$students['nome']}<h5>
                  <div class='card-body'>
                    <p class='card-text'><strong>Email: </strong>{$students['email']}</p>
                    <p class='card-text'><strong>Celular: </strong> {$students['celular']}</p>
                    <p class='card-text'><strong>Curso: </strong> {$students['curso']}</p>
                    <p class='card-text'><strong>Mensalidade: </strong> {$students['mensalidade']}</p>
                    <p class='card-text obs-student'><strong>Observação: </strong> {$students['observacao']}</p>
                    <p class='card-text'><strong>Matrícula: </strong> {$students['situacao']}</p>
                    <div class='col-1-md-auto'>
                     <button id='edit-btn' class='btn btn-outline-dark shadow-none' data-student='$id' onclick='putForm(this)'>Editar</button>
                 
                      <button class='btn btn-outline-danger shadow-none delete' data-student='$id' onclick='deleteStudent(this)'>Excluir</button>
                      </div>
                      <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
                      <script src='/php-site/src/js/script.js'></script>
                </div>
            </div>
            <hr>";
    echo "</div>";
  }
}