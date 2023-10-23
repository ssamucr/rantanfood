const btnAbrirReservar = document.querySelector(".reservar-button");
const btnCerrarReservar = document.querySelector("#reservar-back-btn");
const Reservar = document.querySelector("#reservarmodal");

btnAbrirReservar.addEventListener("click", () => {
    Reservar.showModal();
})

btnCerrarReservar.addEventListener("click", () => {
    Reservar.close();
})

function reservarModalShow() {
    Reservar.showModal();
}