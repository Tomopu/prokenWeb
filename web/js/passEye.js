const pwd = document.getElementById('password');
const eyeButton = document.getElementById('eye_button');
const eyeIcon = document.getElementById('pass_eye');

eyeButton.addEventListener('change', function() {
    if(eyeButton.checked) {
        pwd.setAttribute('type', 'text');
        eyeIcon.innerText = "visibility_off";
    } else {
        pwd.setAttribute('type', 'password');
        eyeIcon.innerText = "visibility";

    }
}, false);