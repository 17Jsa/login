document.addEventListener('DOMContentLoaded', function() {
    mostrarSeccion('inicio-2');
});

function ocultarTodos() {
    var secciones = document.querySelectorAll('.inicio');
    secciones.forEach(function(seccion) {
        seccion.style.display = 'none';
    });
}

function mostrarSeccion(id) {
    ocultarTodos();
    
    var seccionMostrar = document.getElementById(id);
    if (seccionMostrar) {
        seccionMostrar.style.display = 'block'; // Cambiado a 'block'
    }
}
