/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {
  'use strict';


  Drupal.behaviors.dafr_b5_sub = {
    attach: function (context, settings) {

      once('aosInit', 'body', context).forEach(function () {
        // Inicjacja animacji AOS
        AOS.init();
        
      });

    },
  };


    // MENU open submenu on hover 
    $(document).ready(function () {    
      $('.nav-item.dropdown').hover(      
        function () {        
          $('.active .dropdown-menu').addClass('show');
        },      
        function () {        
          $('.active .dropdown-menu').removeClass('show');
        }
      );
    });


  Drupal.behaviors.prehomeBehavior = {
    attach: function (context, settings) {
      setTimeout(function () {
        const pageWrapper = $('#page-wrapper', context);
        pageWrapper.css('display', 'block');
      }, 500);
    }
  };

  Drupal.behaviors.closeModal = {
    attach: function (context, settings) {

      // Funkcja do wyłączania przewijania
      function disableScroll() {
        document.body.classList.add('no-scroll');
        document.body.addEventListener('touchmove', preventScroll, { passive: false });
      }

      // Funkcja do włączania przewijania
      function enableScroll() {
        document.body.classList.remove('no-scroll');
        document.body.removeEventListener('touchmove', preventScroll);
      }

      // Funkcja zapobiegająca przewijaniu
      function preventScroll(event) {
        event.preventDefault();
      }

      // Pobranie modala z użyciem `once`
      const modalPopup = once('close-modal', '#spb-block-dafr-b5-sub-splash', context);

      if (modalPopup.length > 0) {               
        const modalWindow = modalPopup[0].querySelector('.block-dafr-b5-sub-splash-modal');
        if (modalWindow && window.getComputedStyle(modalWindow).display !== 'none') {
          // Modal jest wyświetlany, wykonaj akcję
          console.log('Modal jest widoczny');
          disableScroll();
        } else {
          console.log('Modal jest ukryty lub go nie ma');
          enableScroll();
        }
        const modalButton = modalPopup[0].querySelector('#closePopup');        
        // Sprawdzanie, czy przycisk zamykania istnieje
        if (modalButton) {
          // Obsługa zdarzenia click i touchend dla lepszej obsługi na urządzeniach mobilnych
          ['click', 'touchend'].forEach(function (eventType) {
            modalButton.addEventListener(eventType, function () {
              modalWindow.classList.add('fade-out');
              enableScroll();
              
              setTimeout(function () {
                modalWindow.style.display = 'none';
              }, 2300); // Dopasuj ten czas do długości animacji fade-out
            });
          });          

        }
      }else{
        enableScroll();
      }
    }
  };

  
})(jQuery, Drupal);