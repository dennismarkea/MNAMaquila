    document.addEventListener('DOMContentLoaded', function() {
        // Función para el menú de navegación móvil
        let burger = document.getElementById('burger'),
            nav    = document.getElementById('mobile-nav'),
            closeNavbar = document.getElementById('close-navbar');
        burger.addEventListener('click', function(e){
            this.classList.toggle('is-open');
            nav.classList.toggle('is-open');
        });
        closeNavbar.addEventListener('click', function(e){
            this.classList.toggle('is-open');
            nav.classList.toggle('is-open');
        });
    // Inicialización del carrusel Splide
    new Splide('.splide', {
        arrows: false,
        perPage: 3,
        gap: '20px',
        touch: false,
        focus: 'center',
        breakpoints: {
            640: {
                perPage: '1',
                gap: '12px',
            },
        },
    }).mount();

    // Selección de todos los cards
    var cards = document.querySelectorAll('.services--card .card');

    // Evento al pasar el mouse sobre un card
    cards.forEach(function(card) {
    card.addEventListener('click', function() { //mouseenter
    toggleActive(this);
});
});

    // Evento al tocar un card en dispositivos táctiles
    cards.forEach(function(card) {
    card.addEventListener('touchstart', function(event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del clic
    toggleActive(this);
});
});

    // Función para alternar la clase 'active'
    function toggleActive(card) {
    var isActive = card.classList.contains('active');
    var allCards = document.querySelectorAll('.services--card .card');

    allCards.forEach(function(card) {
    card.classList.remove('active');
});

    if (!isActive) {
    card.classList.add('active');
}
}



});

    window.addEventListener('DOMContentLoaded', (event) => {
        // Obtiene el elemento del menú de navegación
        const nav = document.getElementById('mobile-nav');

        // Obtiene todos los enlaces internos en el menú de navegación
        const navLinks = nav.querySelectorAll('ul li a[href^="#"]');

        // Escucha el evento clic en cada enlace interno
        navLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                // Cierra el menú desplegable
                nav.classList.remove('is-open');

                // Obtiene el ID del destino del enlace
                const targetId = link.getAttribute('href').substring(1);

                // Desplazarse al elemento de destino con desplazamiento suave
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    });

    $(document).ready(function() {
        let containerForm = $('.container--form');
        function blockContainer(){
            containerForm.block({
                message: '<span class="loader"></span>',
                overlayCSS: { backgroundColor: 'rgb(255,255,255)', zIndex: '8' },
                css: { backgroundColor: 'transparent', border: 'none', top: '35px', zIndex: '9' }
            });
        }
        function unblockContainer(){
            containerForm.unblock();
        }
        // Agrega reglas de validación y configura mensajes de error
        $("#contactForm").validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: "Por favor, ingresa tu nombre",
                email: {
                    required: "Por favor, ingresa tu correo electrónico",
                    email: "Por favor, ingresa un correo electrónico válido"
                },
                message: "Por favor, ingresa tu mensaje"
            },
            errorPlacement: function(error, element) {
                // Coloca los mensajes de error debajo de los campos respectivos
                error.appendTo(element.siblings("small"));
            },
            submitHandler: function(form) {
                // Llama a la función submitForm cuando el formulario sea válido
                submitForm(form);
            }
        });

        // Función para enviar el formulario de manera asíncrona
        function submitForm(form) {
            var formData = new FormData(form);
            blockContainer();

            // Enviar datos a bd_contact.php y send_email.php
            Promise.all([
                fetch("libs/bd_contact.php", {
                    method: "POST",
                    body: formData
                }),
                fetch("libs/send_email.php", {
                    method: "POST",
                    body: formData
                })
            ])
                .then(responses => {
                    // Verifica si todas las respuestas son exitosas
                    if (responses.every(response => response.ok)) {
                        console.log("Datos guardados correctamente");
                        console.log("Correo electrónico enviado correctamente");
                        form.reset();


                        // Muestra la alerta de éxito
                        Swal.fire({
                            title: "Correo enviado correctamente",
                            icon: "success",
                            confirmButtonColor: '#BE1407'
                        }).then((result) => {
                            // Esta función se ejecuta cuando el usuario hace clic en el botón "OK"
                            if (result.isConfirmed) {
                                // Puedes agregar aquí cualquier acción adicional que quieras realizar después de que el usuario hace clic en "OK"
                                unblockContainer();
                                
                            }
                        });
                    } else {
                        console.error("Error al guardar los datos o enviar el correo electrónico");

                        // Muestra la alerta de error
                        Swal.fire({
                            title: "Error al enviar el correo electrónico",
                            icon: "error",
                            confirmButtonColor: '#BE1407'
                        });
                    }
                })
                .catch(error => {
                    console.error("Error en la solicitud:", error);
                    // Muestra la alerta de error
                    Swal.fire({
                        title: "Hubo un error en la solicitud",
                        icon: "error",
                        confirmButtonColor: '#BE1407'
                    });
                });
        }
    });






