


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
        errorU.innerHTML="Please enter 3 to 15 characters.";
        errorU.style.color='red';
        e.preventDefault();

    }
    else{
        errorU.innerHTML="";
    }

    if(email.value.trim()==""){
        
        errorE.innerHTML="le champs email est requis.";
        errorE.style.color='red';
        e.preventDefault();
    }
    else if(!emailRegex.test(email.value)){
        errorE.innerHTML="error email must be example@gmail.";
        errorE.style.color='red';
        e.preventDefault();
    }
    else{
        errorE.innerHTML="";
    }

    if(password1.value.trim()==""){
        
        errorP1.innerHTML="le champs password est requis.";
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
        
        errorP2.innerHTML="le champs password est requis.";
        errorP2.style.color='red';
        e.preventDefault();
    }
    else if(!passwordRegex.test(password2.value)){
        errorP2.innerHTML='Password must have at least <ul><li class="text-danger">One special character !@#$%/|^&*</li><li class="text-danger">One digit(0-9)</li><li class="text-danger">One uppercase (A-Z)</li><li class="text-danger">One lowercase(a-z)</li>';
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
