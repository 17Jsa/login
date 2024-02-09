// Sliders

// almacena el número del slider actual
let currentSlider = 1;

// carga los sliders al iniciar la pagina
function inicializarSliders() {
    showSlider(currentSlider);
}

// cambia de slider cada 7 segundos
setInterval(autoChangeSlider, 7000);

// cambia al slider seleccionado
function changeSlider(sliderNumber) {
    currentSlider = sliderNumber;
    showSlider(currentSlider);
}

// cambia automáticamente los sliders
function autoChangeSlider() {
    currentSlider = currentSlider % 3 + 1;
    showSlider(currentSlider);
}

// mostrar slider seleccionado y ocultar el resto
function showSlider(sliderNumber) {
    const sliders = document.querySelectorAll('.slider');
    sliders.forEach(slider => {
        slider.style.display = 'none';
    });

    const currentSliderElement = document.getElementById(`slider-${sliderNumber}`);
    currentSliderElement.style.display = 'block';
}

//al iniciar la paguina inicia los sliders
window.onload = inicializarSliders;


// Catalogo
function mostrarRecuadro(elemento) {
    const recuadro = document.getElementById('recuadro');

    // Si el elemento ya está seleccionado, oculta el recuadro y desmarca el elemento
    if (elemento.classList.contains('selected')) {
        recuadro.style.display = 'none';
        elemento.classList.remove('selected');
        return;
    }

    // Desmarca la selección
    const listaItems = document.querySelectorAll('.cata-list li');
    listaItems.forEach(item => item.classList.remove('selected'));

    // Marca el elemento seleccionado
    elemento.classList.add('selected');

    const recuadroContenido = document.createElement('div');
    const recuadroTexto = document.createElement('div');
    const recuadroImagen = document.createElement('div');
    const tituloElement = document.createElement('h2');
    const textoElement = document.createElement('p');
    const imagenElement = document.createElement('img');

    // Obtén los datos del elemento
    const titulo = elemento.getAttribute('data-titulo');
    const texto = elemento.getAttribute('data-texto');
    const rutaImagen = elemento.getAttribute('data-imagen');

    // Coloca el título y texto en el recuadro
    tituloElement.textContent = titulo;
    textoElement.innerHTML = texto;

    // Agrega el título y el texto - Div derecho
    recuadroTexto.appendChild(tituloElement);
    recuadroTexto.appendChild(textoElement);

    // Div izquierdo
    recuadroTexto.style.width = '65%';
    recuadroTexto.style.float = 'left';

    // Agrega la imagen al div de imagen
    imagenElement.src = rutaImagen;
    imagenElement.alt = titulo;
    imagenElement.style.width = '100%';
    imagenElement.style.height = '65vh';
    imagenElement.style.borderRadius = '8px';

    // Agrega el div de texto y la imagen
    recuadroContenido.appendChild(recuadroTexto);
    recuadroImagen.appendChild(imagenElement);
    recuadroContenido.appendChild(recuadroImagen);

    // Div derecho
    recuadroImagen.style.width = '35%';
    recuadroImagen.style.float = 'left';

    // Limpia recuadro
    recuadro.innerHTML = '';

    // Agrega al recuadro
    recuadro.appendChild(recuadroContenido);

    // Muestra el recuadro
    recuadro.style.display = 'flex';

    // Oculta los sliders
    ocultarSliders();
}

function ocultarSliders() {
    const sliders = document.querySelectorAll('.slider');
    sliders.forEach(slider => {
        slider.style.display = 'none';
    });
}



//---------Contactos--------//
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault();

        // Ocultar todo
        ocultarContenidoContacto();

        // Muestra el mensaje
        mostrarMensajePersonalizado('¡La información se ha enviado con éxito!');
    });
});

function ocultarContenidoContacto() {
    const contenidoContacto = document.querySelector('.contact-content');
    if (contenidoContacto) {
        contenidoContacto.style.display = 'none';
    }

    // Oculta el icono de la paguina
    const iconoContacto = document.querySelector('.contact-icon');
    if (iconoContacto) {
        iconoContacto.style.display = 'none';
    }
}

function mostrarMensajePersonalizado(mensaje) {
    // contenedor para la noti
    const notificacion = document.createElement('div');
    notificacion.classList.add('mensaje-notificacion');

    // crea el mensaje
    const mensajeElement = document.createElement('p');
    mensajeElement.textContent = mensaje;
    notificacion.appendChild(mensajeElement);

    // redirige a la pagina
    const enlaceElement = document.createElement('a');
    enlaceElement.textContent = 'Aceptar';
    enlaceElement.href = 'index';
    notificacion.appendChild(enlaceElement);

    // agrega notificacion
    document.body.appendChild(notificacion);
}
