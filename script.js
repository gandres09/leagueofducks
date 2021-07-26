let aside = document.getElementById("aside");
let log_reg = document.getElementById("h3");

const form_registro = `
<form id="formulario" action="" method="POST">
<input name="name" type="text" autofocus placeholder="Usuario" />
<input name="pass" type="password" placeholder="Contraseña" />
<input name="email" type="email" placeholder="alguien@ejemplo.com" />
<input name="enviar" type="submit" value="Registrarse" />
</form>`;

const form_login = `
<form id="formulario" action="" method="POST">
<input name="name" type="text" autofocus placeholder="Usuario" />
<input name="pass" type="password" placeholder="Contraseña" />
<input name="enviar" type="submit" value="Iniciar Sección" />
</form>
`;

function desplegarForm() {
  if (log_reg.id !== "registro") {
    document.getElementById("formulario").remove();
    aside.innerHTML += form_registro;
    log_reg.innerText = "Iniciar Sección";
    log_reg.id = "registro";
  } else {
    document.getElementById("formulario").remove();
    aside.innerHTML += form_login;
    log_reg.innerText = "Registrarse";
    log_reg.id = "login";
  }
}
