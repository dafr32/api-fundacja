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


  Drupal.behaviors.prehomeBehavior = {
    attach: function (context, settings) {
        const pageWrapper = $('#page-wrapper', context);

        // Sprawdź, czy modal Prehome jest obecny
        const prehomeModal = document.querySelector('.ui-dialog.prehome');

        if (prehomeModal) {
            // Jeśli modal Prehome jest obecny, ukryj #page-wrapper
            pageWrapper.css('display', 'none');

            // Dodaj obsługę zamykania modalu
            const closeButton = prehomeModal.querySelector('.ui-dialog-titlebar-close');
            $(closeButton).on('click', function () {
                pageWrapper.css('display', 'block'); // Pokaż #page-wrapper po zamknięciu
            });
        } else {
            // Jeśli modal Prehome nie jest obecny, upewnij się, że #page-wrapper jest widoczny
            pageWrapper.css('display', 'block');
        }
    }
  };

  Drupal.behaviors.closeModal = {
    attach: function (context, settings) {
      // Używamy 'once' z unikalną nazwą oraz selektorem, aby zapewnić, że zachowanie zostanie przypisane tylko raz
      const modalPopup = once('close-modal', '#spb-block-dafr-b5-sub-splash', context);
      
      if (modalPopup.length > 0) {
        // Szukamy modalnego okna w elemencie modalPopup
        const modalWindow = modalPopup[0].querySelector('.block-dafr-b5-sub-splash-modal');
        const modalButton = modalPopup[0].querySelector('#closePopup');
        
        if (modalButton) {
          console.log('modalButton', modalButton);
          // Poprawione: Używamy addEventListener, aby przypisać zdarzenie kliknięcia
          modalButton.addEventListener('click', function() {
            modalWindow.classList.add('fade-out');

            // Opcjonalnie: po zakończeniu animacji ukrywamy element
            setTimeout(function() {
              modalWindow.style.display = 'none';
            }, 2500);
          });
        }
      }
    }
  };
  
})(jQuery, Drupal);