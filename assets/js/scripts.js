document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("btn_registerarse").addEventListener("click", register);
    document.getElementById("btn_iniciar_sesion").addEventListener("click", iniciarSesion);
    window.addEventListener("resize", anchopagina);
});

var formulario_login_register = document.querySelector(".contenedor_login_register");
var formulario_login = document.querySelector(".formulario-login");
var formulario_register = document.querySelector(".formulario-register");
var caja_trasera_login = document.querySelector(".caja_trasera-login");
var caja_trasera_register = document.querySelector(".caja_trasera-register");

function anchopagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    } else {
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        formulario_login_register.style.left = "0px"; // Corregido el nombre del contenedor
    }
}

anchopagina();

function iniciarSesion(){
    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        formulario_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        formulario_register.style.display = "none";
        formulario_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

function register(){
    if(window.innerWidth > 850){
        formulario_register.style.display = "block";
        formulario_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else {
        formulario_register.style.display = "block";
        formulario_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}
