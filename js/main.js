openModal('header__user-login', 'overlay-login', 'close-login');

function openModal(triggerClass, overlayClass, closeClass) {
    const trigger = document.querySelector('.' + triggerClass),
        overlay = document.querySelector('.' + overlayClass),
        close = document.querySelector('.' + closeClass);

    trigger.addEventListener('click', () => {
        overlay.style.display = '';
        document.body.style.overflow = 'hidden';
    });
    overlay.addEventListener('click', event => {
        const target = event.target;
        
        if (target.classList.contains(overlayClass) || target.classList.contains(closeClass)) {
            overlay.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
}