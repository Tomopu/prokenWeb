const oldpwd = document.getElementById('old-password');
const pwd = document.getElementById('password');
const repwd = document.getElementById('re-password');
// 古いパスワード
const oldEyeButton = document.getElementById('old-eye_button');
const oldEyeIcon = document.getElementById('old-pass_eye');
// パスワード
const eyeButton = document.getElementById('eye_button');
const eyeIcon = document.getElementById('pass_eye');
// 再入力パスワード
const reEyeButton = document.getElementById('re-eye_button');
const reEyeIcon = document.getElementById('re-pass_eye');

// 古いパスワードのイベントハンドラ
if(oldEyeButton != null){
    oldEyeButton.addEventListener('change', function(){
        if(oldEyeButton.checked) {
            oldpwd.setAttribute('type', 'text');
            oldEyeIcon.innerText = "visibility_off";
        } else {
            oldpwd.setAttribute('type', 'password');
            oldEyeIcon.innerText = "visibility";
        }
    }, false); 
}

// パスワードのイベントハンドラ
if(eyeButton != null){
    eyeButton.addEventListener('change', function(){
        if(eyeButton.checked) {
            pwd.setAttribute('type', 'text');
            eyeIcon.innerText = "visibility_off";
        } else {
            pwd.setAttribute('type', 'password');
            eyeIcon.innerText = "visibility";
    
        }
    }, false);
}

// 再入力パスワードのイベントハンドラ
if(reEyeButton != null){
    reEyeButton.addEventListener('change', function(){
        if(reEyeButton.checked){
            repwd.setAttribute('type', 'text');
            reEyeIcon.innerText = "visibility_off";
        } else {
            repwd.setAttribute('type', 'password');
            reEyeIcon.innerText = "visibility";
        }
    }, false)
}
