let log_reg = document.getElementById("h3");

const form_registro = `
<form id="formulario" action="" method="POST">
<div id="close"></div>
<input name="name" type="text" autofocus placeholder="Usuario" />
<input name="pass" type="password" placeholder="Contraseña" />
<input name="email" type="email" placeholder="e-mail@ejemplo.com" />
<input name="enviar" type="submit" value="Registrarse" />
</form>
`;

const form_login = `
<form id="formulario" action="" method="POST">
<div id="close" onclick="btn"></div>
<input name="name" type="text" autofocus placeholder="Usuario" />
<input name="pass" type="password" placeholder="Contraseña" />
<input name="enviar" type="submit" value="Log In" />
</form>
`;

function change_form(form) {
  document.getElementById("formulario").remove();
  document.getElementById("aside").innerHTML += form;
}

function desplegarForm() {
  if (log_reg.id !== "login") {
    change_form(form_login);
    document.getElementById("h3").innerText = "Registrarse";
    log_reg.id = "login";
  } else {
    change_form(form_registro);
    document.getElementById("h3").innerText = "Log In";
    log_reg.id = "registro";
  }
}

function btn() {
  document
    .getElementById("close")
    .addEventListener("click", () =>
      document.getElementById("formulario").remove()
    );
}
