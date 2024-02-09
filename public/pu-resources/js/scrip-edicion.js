document.addEventListener('DOMContentLoaded', function() {
    mostrarSeccion('inicio');
});

function ocultarTodos(clase) {
    var secciones = document.querySelectorAll('.' + clase);
    secciones.forEach(function(seccion) {
        seccion.style.display = 'none';
    });
}

function mostrarSeccion(id) {
    ocultarTodos('inicio'); // Oculta todas las secciones con la clase 'inicio'
    
    var seccionMostrar = document.getElementById(id);
    if (seccionMostrar) {
        seccionMostrar.style.display = 'flex'; // o 'block', dependiendo de tu diseño
    }
}
