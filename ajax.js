const formularios_ajax=document.querySelectorAll(".FormularioAjax");

function enviar_formulario_ajax(e){
    e.preventDefault();
    let enviar = confirm("¿Desea enviar el formulario?")

    if(enviar==true){

        /* Se selecciona el formulario, el metodo y la accion */
        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        /* Se almacenan los headers para el fetch */
        let encabezados = new Headers();

        /* Crear configuraciones */
        let config={
            method: method,
            headers: encabezados,
            modo: 'cors',
            cache: 'no-cache',
            body: data
        }

        fetch(action, config)
        .then(respuesta=>respuesta.text())
        .then(respuesta=>{
            alert(respuesta);
        });
    }
}

formularios_ajax.forEach(formularios =>{
    formularios.addEventListener("submit", enviar_formulario_ajax)
});