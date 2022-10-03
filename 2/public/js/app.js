window.onload = () => {
   var body_celular = document.getElementsByClassName("body_celular");
   var body_crear_cuenta = document.getElementsByClassName("body_crear_cuenta");

    for(let i=0; i<2; i++){
        document.getElementsByClassName("btn_transferir")[i].addEventListener("click", () => {
            body_celular[i].style.display = "none";
            document.getElementsByClassName("body_transferencia")[i].style.removeProperty("display");
        })
        document.getElementsByClassName("transferencia_btn_enviar")[i].addEventListener("click", () => {
            body_celular[i].style.removeProperty("display");
            document.getElementsByClassName("body_transferencia")[i].style.display = "none";
        })
        document.getElementsByClassName("btn_crear_cuenta")[i].addEventListener("click", () => {
            body_crear_cuenta[i].style.removeProperty("display");
            body_celular[i].style.display = "none";
        })
        document.getElementsByClassName("cuenta_btn_crear")[i].addEventListener("click", () => {
            body_celular[i].style.removeProperty("display");
            body_crear_cuenta[i].style.display = "none";
        })
        
    }

}

