addModal('header__user-login', 'overlay-login', 'close-login');

function addModal(triggerClass, overlayClass, closeClass) {
    const trigger = document.querySelector('.' + triggerClass),
        overlay = document.querySelector('.' + overlayClass),
        close = document.querySelector('.' + closeClass);

    trigger.addEventListener('click', toggleModal);

    overlay.addEventListener('click', event => {
        const target = event.target;

        if (target === overlay || target === close) {
            toggleModal();
        }
    });

    function toggleModal() {
        overlay.classList.toggle('overlay-active');
    }
}
