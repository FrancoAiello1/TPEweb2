'use strict';

let p = document.getElementById("admin").value;

let app = new Vue({
    el: "#app-comments",
    data: {
        promedio: 0,
        admin: p,
        comentarios: []
    },
    methods: {
        delete: function (id) {
            deleteComment(id);
        }
    }
});

loadComments();
setInterval(loadComments, 3000);

function loadComments() {
    let id = document.querySelector("#id_auto").value;
    console.log(id);
    fetch('http://localhost/web2/TPE/api/comentarios/' + id)
        .then(response => response.json())
        .then(a => {
            app.comentarios = a;
            let suma = 0;
            let i = 0;

            for (let comment of a) {
                suma = suma + parseInt(comment.puntage);
                i++;
            }
            let promedio = (suma / i).toFixed(2);
            app.promedio = promedio;

            if (i == 0) {
                app.promedio = 0;
            }
        })
        .catch(error => console.log(error))
}

function deleteComment(id) {
    fetch('api/deleteComment/' + id, {
        method: 'DELETE',
        headers: { 'Content-Type': 'application/json' }
    })
        .then(response => {
            console.log(response);
        })
        .then(function () {
            loadComments();
        })
        .catch(error => console.log(error));
}
document.querySelector("#form-comentario").addEventListener('submit', addComment);

function addComment() {
    event.preventDefault();

    let auto = document.querySelector("#id_auto").value;
    let comment = document.getElementById("comentario").value;
    let puntaje = document.getElementById("puntuacion").value;
    let usuario = document.getElementById("id_user").value;

    let comentarioCompleto = {
        "comentario": comment,
        "puntaje": puntaje,
        "id_usuario": usuario,
        "id_auto": auto,
    }

    if (comentario == " " || puntaje == " ") {
        alert("Debe llenar todos los campos para poder postear un comentario");
        return false;
    }
    else {
        fetch('api/comentario', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(comentarioCompleto)
        })
            .then(response => {
                console.log(response);
            })
            .then(function () {
                document.getElementById("comentario").value = " ";
                loadComments();
            })
            .catch(error => console.log(error));
    }
}