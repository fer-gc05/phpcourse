const formulario_ajax = document.querySelectorAll('.formulario-ajax');

function enviarFormulario(e) {
    e.preventDefault();
    let enviar = confirm('¿Desea enviar el formulario?');

    if (enviar == true) {
        let data = new FormData(this);
        let method = this.getAttribute('method');
        let action = this.getAttribute('action');

        let headers = new Headers();

        let config = {
            method: method,
            headers: headers,
            mode: 'cors',
            cache: 'no-cache',
            body: data
        };

        fetch(action, config)
            .then(response => response.text())
            .then(response => {
                alert(response);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Ocurrió un error en la subida del archivo');
            });
    }
}

formulario_ajax.forEach((formulario) => {
    formulario.addEventListener('submit', enviarFormulario);
});