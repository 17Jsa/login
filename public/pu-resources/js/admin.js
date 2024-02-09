document.addEventListener('DOMContentLoaded', function() {
    // Mostrar por defecto la sección "gestionar" al cargar la página
    mostrarSeccion('gestionar');
});

function mostrarSeccion(id) {
    // Oculta todas las secciones
    var secciones = document.querySelectorAll('.tablas-part-1');
    secciones.forEach(function(seccion) {
        seccion.style.display = 'none';
    });

    // Muestra la sección correspondiente al botón clicado
    var seccionMostrar = document.getElementById(id);
    if (seccionMostrar) {
        seccionMostrar.style.display = 'flex'; // o 'block', dependiendo de tu diseño
    }
}