
let form = document.getElementById('form');

let username = document.getElementById('username');
let email = document.getElementById('email');
let password1 = document.getElementById('password1');
let password2 = document.getElementById('password2');

let errorU = document.querySelector('.errorU');
let errorE = document.querySelector('.errorE');
let errorP1 = document.querySelector('.errorP1');
let errorP2 = document.querySelector('.errorP2');
let errorPss = document.querySelector('.errorPss');

let usernameRegex =/^[a-zA-Z\s]*$/;
let emailRegex = /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;
let passwordRegex = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

form.addEventListener('submit',function(e){

    if(username.value == ""){
        
        errorU.innerHTML="le champs username est requis.";
        errorU.style.color='red';
        e.preventDefault();
    }
    else if(!usernameRegex.test(username.value)){
        errorU.innerHTML="dakhal man 3 htal 15 caracters.";
        errorU.style.color='red';
        e.preventDefault();

    }
    else{
        errorU.innerHTML="";
    }

    if(email.value.trim()==""){
        
        errorE.innerHTML="le champs username est requis.";
        errorE.style.color='red';
        e.preventDefault();
    }
    else if(!emailRegex.test(email.value)){
        errorE.innerHTML="dakhali email mzn lah ihafdak.";
        errorE.style.color='red';
        e.preventDefault();
    }
    else{
        errorE.innerHTML="";
    }

    if(password1.value.trim()==""){
        
        errorP1.innerHTML="le champs username est requis.";
        errorP1.style.color='red';
        e.preventDefault();
    }
    else if(!passwordRegex.test(password1.value)){
        errorP1.innerHTML = 'Password must have at least <ul><li class="text-danger">One special character !@#$%/|^&*</li><li class="text-danger">One digit(0-9)</li><li class="text-danger">One uppercase (A-Z)</li><li class="text-danger">One lowercase(a-z)</li>';
        errorP1.style.color='red';
        e.preventDefault();

    }
    else{
        errorP1.innerHTML="";
    }

    if(password2.value.trim()==""){
        
        errorP2.innerHTML="le champs username est requis.";
        errorP2.style.color='red';
        e.preventDefault();
    }
    else if(!passwordRegex.test(password2.value)){
        errorP2.innerHTML="dakhal password2 mzn .";
        errorP2.style.color='red';
        e.preventDefault();

    }
    else{
        errorP2.innerHTML="";}

    if(password1.value!==password2.value){
        errorPss.innerHTML="password aren't match.";
        errorPss.style.color='red';
        e.preventDefault();
        
    }

    
})   

//*********validation de sign_in***********/

// let form_in = document.getElementById('form_in');

// let email_in = document.getElementById('email_in');
// let password_in= document.getElementById('password_in');

// let errorEmail = document.querySelector('.errorEmail');
// let errorPassword = document.querySelector('.errorPassword');

// console.log(form_in)
// form_in.addEventListener('submit',function(e){

//     if(email_in.value.trim()==""){
        
//         errorEmail.innerHTML="le champs username est requis.";
//         errorEmail.style.color='red';
//         e.preventDefault();
//     }
//     else if(!emailRegex.test(email_in.value)){
//         errorEmail.innerHTML="dakhali email mzn lah ihafdak.";
//         errorEmail.style.color='red';
//         e.preventDefault();
//     }
//     else{
//         errorEmail.innerHTML="";
//     }

//     if(password_in.value.trim()==""){
        
//         errorPassword.innerHTML="le champs username est requis.";
//         errorPassword.style.color='red';
//         e.preventDefault();
//     }
//     else if(!passwordRegex.test(password_in.value)){
//         errorPassword.innerHTML = 'Password must have at least <ul><li class="text-danger">One special character !@#$%/|^&*</li><li class="text-danger">One digit(0-9)</li><li class="text-danger">One uppercase (A-Z)</li><li class="text-danger">One lowercase(a-z)</li>';
//         errorPassword.style.color='red';
//         e.preventDefault();
//     }
//     else{
//         errorPassword.innerHTML="";
//     }

    
// })   