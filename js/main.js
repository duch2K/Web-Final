addModal('header__user-login', 'overlay-login', 'close-login');
addModal('signup-link', 'overlay-signup', 'close-signup');

const login = document.querySelector('.form-login'),
    signup = document.querySelector('.form-signup'),
    signupLink = document.querySelector('.signup-link');

signupLink.addEventListener('click', () => {
    login.classList.toggle('form-hide');
});

function addModal(triggerClass, overlayClass, closeClass) {
    const trigger = document.querySelector('.' + triggerClass),
        overlay = document.querySelector('.' + overlayClass),
        close = document.querySelector('.' + closeClass),
        arrOverlays = document.querySelectorAll('.overlay');

    trigger.addEventListener('click', openModal);

    overlay.addEventListener('click', event => {
        const target = event.target;

        if (target === overlay || target === close) {
            arrOverlays.forEach(item => {
                item.classList.remove('overlay-active');
            });
        }
    });

    function openModal() {
        arrOverlays.forEach(item => {
            item.classList.remove('overlay-active');
        });
        overlay.classList.add('overlay-active');
        document.body.classList.toggle('body-overlay');
    }
}
