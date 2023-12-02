const btnAbrirLogin = document.querySelector(".login-open");
const btnCerrarLogin = document.querySelector("#login-back-btn");
const Login = document.querySelector("#loginmodal");

btnAbrirLogin.addEventListener("click", () => {
    Login.showModal();
})

btnCerrarLogin.addEventListener("click", () => {
    Login.close();
})