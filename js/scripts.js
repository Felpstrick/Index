/*!
* Start Bootstrap - New Age v6.0.7 (https://startbootstrap.com/theme/new-age)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-new-age/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {
    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


//Glogal func for fade-in effect
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll('.fade');
    elements.forEach((el) => {
        el.classList.add('in');
    });
});

//masks block
$(document).ready(function(){
    $("#telefoneUsuario").mask('(00) 00000-0000');
});


document.getElementById('selecionarLivro').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex].getAttribute('data-img');
    var imgReserva = document.getElementById('imgReserva');
    if(selectedOption) {
        imgReserva.src = selectedOption;
        imgReserva.onload = () => {

            imgReserva.classList.add('in');
        }
    };

});

