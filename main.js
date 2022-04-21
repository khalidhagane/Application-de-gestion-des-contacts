
let form = document.getElementById('form');
let inputs = document.querySelectorAll('.form-control');
console.log(inputs);
console.log()

form.addEventListener('submit',function(e){

    let username = document.getElementById('username');
    let email = document.getElementById('email');
    let password1 = document.getElementById('password1');
    let password2 = document.getElementById('password2');
    // let myRegex = /^[a-zA-Z-\s]+$/;

    if(username.value.trim() == false){
        
        let error = document.querySelector('.errorU');
        error.innerHTML="le champs username est requis.";
        error.style.color='red';
        e.preventDefault();
    }else{
        let error = document.querySelector('.errorU');
        error.innerHTML="";
    }

    if(email.value.trim()==""){
        let error = document.querySelector('.errorE');
        error.innerHTML="le champs username est requis.";
        error.style.color='red';
        e.preventDefault();
    }else{
        let error = document.querySelector('.errorE');
        error.innerHTML="";}

    if(password1.value.trim()==""){
        let error = document.querySelector('.errorP1');
        error.innerHTML="le champs username est requis.";
        error.style.color='red';
        e.preventDefault();
    }else{
        let error = document.querySelector('.errorP1');
        error.innerHTML="";
    }

    if(password2.value.trim()==""){
        let error = document.querySelector('.errorP2');
        error.innerHTML="le champs username est requis.";
        error.style.color='red';
        e.preventDefault();
    }
    else{
        let error = document.querySelector('.errorP2');
        error.innerHTML="";}

    // else if(myRegex.test(username.value)==false){
    //     let error = document.querySelector('.error');
    //     error.innerHTML="le nom doit comporter des letrets uniquements.";
    //     error.style.color='red';
    //     e.preventDefault();
    // }
})




























// let form = document.getElementById("form");

// let username = document.getElementById("username");
// let email = document.getElementById("email");
// let pass1 = document.getElementById("pass1");
// let pass2 = document.getElementById("pass2");
// let error = document.getElementById('username_message')

// // let error = document.querySelectorAll(".error_message");
// let submit = document.getElementById("submit_btn");


// // submit.addEventListener("click", function(){
// function verify() {
//     let isValid = true;
// if(username.value == "")
// {
//     error.innerText = "Please fill all inputs";
//     isValid =  false;
//     // e.preventDefault();
// }

// if(email.value == ""){
//     error.innerText = "Please fill all inputs";
//     isValid =  false;
//     // e.preventDefault();

// }
// if(pass1.value == ""){
//     error.innerText = "Please fill all inputs";
//     isValid =  false;
//     // e.preventDefault();

// }
// if(pass2.value == ""){
//     error.innerText = "Please fill all inputs";
//     isValid =  false;
//     // e.preventDefault();

// }

// return isValid;



// }

// let form = document.getElementById('form');
// let username = document.getElementById('username');
// let email = document.getElementById('email');
// let password = document.getElementById('password');
// let password2 = document.getElementById('password2');

// form.addEventlistener('submit',(e)=>{
//     e.preventDefault();

//     checkInputs();
// });

// function checkInputs(){
//     let usernameValue  = username.value.trim();
//     let emailValue     = email.value.trim();
//     let passwordValue  = password.value.trim();
//     let password2Value = password2.value.trim();

//     if(usernameValue==''){
//         setErrorFor(username,'username cannot be blank');
//     }else{
//         setSuccessFor(username);
//     }

//     if(emailValue==''){
//         setErrorFor(email,'Email cannot be blank');
//     }
//     else if(!isEmail(emailValue)){
//         setErrorFor(email,'Email is not valid');
//         } else{
//         setSuccessFor(email);
//         }

//         if(passwordValue==''){
//             setErrorFor(password,'password cannot be blank');
//         }else{
//             setSuccessFor(password);
//         }

//         if(password2Value==''){
//             setErrorFor(password2,'password2 cannot be blank');
//         }else if(passwordValue!==password2Value){
//             setErrorFor(password2,'passwords does not match');
//         }else{
//             setSuccessFor(password2);
//         }
        
    
// }

// function setErrorFor(input, message){
//     let formControl=input.parentElement;
//     let small = formControl.querySeelector('small')

//     small.innerText = message;
//     formControl.className='form-control error';
// }
// function setSuccessFor(input){
//     let formControl = input.parentElement;
//     formControl.className='form-control success';
// }
// function isEmail(email){
//     return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }


