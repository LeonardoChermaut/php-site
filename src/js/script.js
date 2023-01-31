const dateEl = document.getElementById("createdAt");
const editBtnEl = document.getElementById("edit-btn");
const phoneInputEl = document.getElementById("phone-student");
const inputPaymentEl = document.getElementById("monthly-payment");
const btnPasswordEl = document.getElementById("btn-password-input");
const passwordInputEl = document.getElementById("password-student");

$.ajaxSetup({
  headers: {
    "Accept-Language": "pt-BR",
  },
});

const dateFormat = {
  day: "2-digit",
  month: "2-digit",
  year: "numeric",
};

dateEl.value = new Date().toLocaleDateString("pt-BR", dateFormat);

const reloadPage = () => location.reload();

// Máscara Celular
phoneInputEl.addEventListener("input", (e) => {
  let x = e.target.value
    .replace(/\D/g, "")
    .match(/(\d{0,2})(\d{0,1})(\d{0,4})(\d{0,4})/);
  e.target.value = !x[2] ? x[1] : `(${x[1]}) ${x[2]} ${x[3]}-${x[4]}`;
});

// Máscara input mensalidade
inputPaymentEl.addEventListener("keyup", (e) => {
  let value = e.target.value;
  value = value.replace(/\D/g, "");
  value = value.replace(/(\d)(\d{2})$/, "$1,$2");
  e.target.value = value;
});

// Função mostrar senha
btnPasswordEl.addEventListener("mousedown", () => {
  passwordInputEl.setAttribute("type", "text");
});
btnPasswordEl.addEventListener("mouseup", () => {
  passwordInputEl.setAttribute("type", "password");
});

// Ajax e jQuery Post Student
$(document).ready(() => {
  $(".formSubmit").submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let nameStudent = $('input[name="name-student"]').val();
    let emailStudent = $('input[name="email-student"]').val();
    let passwordStudent = $('input[name="password-student"]').val();
    let phoneStudent = $('input[name="phone-student"]').val();
    let courseStudent = $('input[name="course-student"]').val();
    let monthlyPayment = $('input[name="monthly-payment"]').val();
    let statusStudent = $('input[name="status-student"]').val();
    let observationStudent = $('textarea[name="observation-student"]').val();

    if (
      !nameStudent &&
      !emailStudent &&
      !passwordStudent &&
      !phoneStudent &&
      !courseStudent &&
      !monthlyPayment &&
      !statusStudent &&
      !observationStudent
    ) {
      Swal.fire({
        title: "Erro!",
        text: "Por favor, preencha todos os campos obrigatórios.",
        icon: "error",
      }).then(() => reloadPage());
    }

    $.ajax({
      type: "POST",
      url: form.attr("action"),
      data: form.serialize(),
      success: () => {
        Swal.fire({
          title: "Cadastro criado!",
          text: "Seu cadastro foi realizado com sucesso",
          icon: "success",
        }).then(() => reloadPage());
      },
      error: (e) => {
        console.error(e.responseText);
        Swal.fire({
          title: "Erro!",
          text: "Erro ao realizar o cadastro, verifique as informações e tente novamente",
          icon: "error",
        }).then(() => reloadPage());
      },
    });
  });
});

function deleteStudent(element) {
  const id = $(element).data("student");
  $.ajax({
    type: "POST",
    url: "/php-site/src/php/service/delete_student.php",
    data: { id },
    success: () => {
      Swal.fire({
        title: "Cadastro excluído",
        icon: "success",
        text: "Cadastro excluído com sucesso",
        showConfirmButton: false,
        timer: 1500,
      }).then(() => reloadPage());
    },
    error: (e) => {
      console.error(e.responseText);
      Swal.fire({
        title: "Error!",
        icon: "error",
        text: "Erro ao excluir o cadastro",
        showConfirmButton: false,
        timer: 1500,
      });
    },
  });
}

//Botão editar estudante
editBtnEl.addEventListener("click", function (e) {
  e.preventDefault();
  let id = $(this);
  putForm(id);
});

//  Sweet Form Type Toggle
function putForm(element) {
  const id = $(element).data("student");
  const pattern = "\\d{2}\\s\\d{1}\\s\\d{4}-\\d{4}";

  Swal.fire({
    title: "Editar Cadastro",
    html: `  <form id='form-user' class='formSubmit' style='text-align: left;' method='POST' action='/php-site/src/php/service/put_student.php' name='submit'>
     <input type='hidden' name='id' value='${id}' />
          <label for='name-student'>Nome</label>
          <input id='name-student' type='text' name='name-student' maxlength='50' placeholder='Digite seu nome' />
          <label for='email-student'>Email</label>
          <input id='email-student' type='email' name='email-student' maxlength='120' placeholder='Digite seu email' />
          <label for='password-student'>Senha</label>
            <input id='password-student' type='password' name='password-student' maxlength='20'
              placeholder='Digite sua senha' />
          <label for='phone-student'>Celular</label>
          <input id='phone-student' type='tel' name='phone-student' placeholder='(21) 9 0000-0000'
            pattern='${pattern}' />
          <label for='course-student'>Curso</label>
          <input id='course-student' type='text' name='course-student' maxlength='120' placeholder='Digite seu curso' />
          <label for='monthly-payment'>Mensalidade</label>
          <input id='monthly-payment' type='text' maxlength='7' name='monthly-payment' placeholder='1552,99' />
          <label for='status-student'>Situação da matrícula</label>
          <select id='status-student' name='status-student' class='custom-select mr-sm-2'>
            <option ></option>
            <option value='Ativo'>Ativa</option>
            <option value='Inativo'>Inativa</option>
            <option value='Cancelada'>Cancelada</option>
          </select>
           <label for='observation-student'>Observação</label>
          <input id='observation-student' type='text' name='observation-student' maxlength='120' placeholder='Alguma observação, caso tenha' />
        </form>
        <script type="text/javascript" src="/php-site/src/js/script.js"></script>`,
    width: "40%",
    confirmButtonText: "Atualizar",
    focusConfirm: false,
    showCancelButton: true,
    preConfirm: () => {
      const name = Swal.getPopup().querySelector("#name-student").value;
      const email = Swal.getPopup().querySelector("#email-student").value;
      const pswrd = Swal.getPopup().querySelector("#password-student").value;
      const phone = Swal.getPopup().querySelector("#phone-student").value;
      const course = Swal.getPopup().querySelector("#course-student").value;
      const payment = Swal.getPopup().querySelector("#monthly-payment").value;
      const observation = Swal.getPopup().querySelector(
        "#observation-student"
      ).value;
      const situation = Swal.getPopup().querySelector("#status-student").value;

      return {
        id: id,
        nome: name,
        email: email,
        senha: pswrd,
        celular: phone,
        curso: course,
        mensalidade: payment,
        observacao: observation,
        situacao: situation,
      };
    },
  }).then((result) => {
    if (result.value) {
      const response = result.value;
      $.ajax({
        type: "PUT",
        url: "/php-site/src/php/service/put_student.php",
        contentType: "application/json",
        data: JSON.stringify(response),
        success: () => {
          Swal.fire({
            title: "Cadastro atualizado",
            icon: "success",
            text: "Cadastro atualizado com sucesso",
            showConfirmButton: false,
            timer: 1500,
          }).then(() => location.realod());
        },
        error: (e) => {
          console.error(e.statusText);
          Swal.fire({
            title: "Erro ao atualizar cadastro",
            icon: "error",
            text: e.error,
            showConfirmButton: false,
            timer: 1500,
          });
        },
      });
    }
  });
}
