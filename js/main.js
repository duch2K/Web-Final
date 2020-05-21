addModal('header__user-login', 'overlay-login', 'close-login');
addModal('signup-link', 'overlay-signup', 'close-signup');
signupValidate('form-signup', 'signup-name', 'signup-surname', 'signup-password', 'signup-password2');
loginValidate('form-login');

const login = document.querySelector('.form-login'),
    signup = document.querySelector('.form-signup'),
    signupLink = document.querySelector('.signup-link');

signupLink.addEventListener('click', () => {
    login.classList.toggle('form-hide');
});



function signupValidate(formClass, nameClass, surnameClass, passwdClass, passwd2Class) {
    const form = document.querySelector('.' + formClass),
        name = document.querySelector('.' + nameClass),
        surname = document.querySelector('.' + surnameClass),
        passwd = document.querySelector('.' + passwdClass),
        passwd2 = document.querySelector('.' + passwd2Class);

    form.addEventListener('submit', event => {
        if (name.value.length > 100 || surname.value.length > 100 || 
        !passwd.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/) || passwd.value !== passwd2.value) {
            event.preventDefault();
            
            if (name.value.length > 100) {
                name.nextElementSibling.textContent = 'Too long name!';  
                name.style.borderColor = 'red';
            } else {
                name.nextElementSibling.textContent = '';  
                name.style.borderColor = '';
            }

            if (surname.value.length > 100) {
                surname.nextElementSibling.textContent = 'Too long surname!';  
                surname.style.borderColor = 'red';
            } else {
                surname.nextElementSibling.textContent = '';  
                surname.style.borderColor = '';
            }

            if (!passwd.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/)) {
                passwd.nextElementSibling.textContent = 'Your password should contain at least one uppercase letter, one lowercase letter and one digit!';
                passwd.style.borderColor = 'red';
            } else {
                passwd.nextElementSibling.textContent = '';
                passwd.style.borderColor = '';
            }

            if (passwd.value !== passwd2.value) {
                passwd2.nextElementSibling.textContent = 'Wrong password!';
                passwd2.style.borderColor = 'red';
            } else {
                passwd2.nextElementSibling.textContent = '';
                passwd2.style.borderColor = '';
            }
        } 
    });
}

function loginValidate(formClass) {
    const form = document.querySelector('.' + formClass);
        // email = document.querySelector('.' + emailClass),
        // passwd = document.querySelector('.' + passwdClass);

    form.addEventListener('submit', function(event) {

        const formData = new FormData(this);
        event.preventDefault(); 

        fetch('actions/login.php', {
            method: 'post',
            body: formData
        }).then(result => result.json()).then(resText => {
            console.log(resText);
            if (resText == 'false') {
                throw new Error();
            } else {
                // document.cookie = 'user_email=' + resText.email; 
                // window.location.href = "index.php";
            }
        }).catch(error => {
            console.error(error);
            form.querySelector('.form-error').textContent = 'Wrong email or password!';
        });
    });
}

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
            document.body.classList.toggle('body-overlay');
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
