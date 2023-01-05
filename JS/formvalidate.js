//add functional validation to the page
//Author: Lin Chen, Junjie Xu, Yang Xu

let nameInput=document.querySelector("#name");
let emailInput=document.querySelector("#email");
let passwdInput=document.querySelector("#passwd");
let passwdInput2=document.querySelector("#passwd2");
let phoneInput=document.querySelector("#phone");
let termInput=document.querySelector("#terms");

//create paragraph to show the error message returned by validateName()
let nameError=document.createElement('p');
nameError.setAttribute("class","warning");
document.querySelectorAll(".createcontainer")[0].append(nameError);
//create paragraph to show the error message returned by validateEmail()
let emailError=document.createElement('p');
emailError.setAttribute("class","warning");
document.querySelectorAll(".createcontainer")[1].append(emailError);
//create paragraph to show the error message returned by validatePass()
let passwdError=document.createElement('p');
passwdError.setAttribute("class","warning");
document.querySelectorAll(".createcontainer")[2].append(passwdError);
//create paragraph to show the error message returned by validatePass2()
let passwdError2=document.createElement('p');
passwdError2.setAttribute("class","warning");
document.querySelectorAll(".createcontainer")[3].append(passwdError2);
//create paragraph to show the error message returned by validatePhone()
let phoneError=document.createElement('p');
phoneError.setAttribute("class","warning");
document.querySelectorAll(".createcontainer")[4].append(phoneError);
//create paragraph to show the error message returned by validateTerms()
let termError=document.createElement('p');
termError.setAttribute("class","warning");
document.querySelectorAll(".checkbox")[0].append(termError);

//define a global variables
let defaultMsg="";
let nameErrorMsg="x User name cannot be empty and must less than 20 characters";
let emailErrorMsg="x Please enter a valid email";
let passwdErrorMsg="x Password at least 6 characters and must contain at least 1 uppercase and 1 lowercase letter";
let passwdErrorMsg2="x Password doesn't mathch";
let phoneErrorMsg="x Please confirm 10-digit phone number";
let termsErrorMsg="x Terms must be checked";

//method to validate email
function validateEmail(){
    let email=emailInput.value;
    let rexp=/\S+@\S+\.\S+/; // regular expression
    if(rexp.test(email)){
        error=defaultMsg;
    }else{
        error=emailErrorMsg;
    }
    return error;
}

//method to validate user name
function validateName(){
    let name=nameInput.value;
    if(name.length >= 20 || name === ''){
        return nameErrorMsg;
    }else{
        name.toLowerCase();
        return defaultMsg;
    }
}

//method to validate password
function validatePass(){
    let pwd=passwdInput.value;
    let rexp=/[A-Z]/;// regular expression for uppercase letter;
    let rexp2=/[a-z]/;//regular expression for lowercase letter;
    if(pwd.match(rexp) && pwd.match(rexp2) && (pwd.length >= 6)){
        return defaultMsg;
    }else{
        return passwdErrorMsg;
    }
}

//method to validate re-type password
function validatePass2(){
    let pwd2=passwdInput2.value;
    if(pwd2===passwdInput.value && pwd2 !==""){
        return defaultMsg;
    }else{
        return passwdErrorMsg2;
    }
}

//method to validate newsletter
function validatePhone(){
    let phoneNumber=phoneInput.value;
    let phonere=/[0-9]/;// regular expression for numbers;
    if((phoneNumber.length === 10) && phoneNumber.match(phonere)){
        return defaultMsg;
    }else{
        return phoneErrorMsg;}
}

//method to validate terms
function validateTerms(){
    if(termInput.checked)
    return defaultMsg;
    else
    return termsErrorMsg;
}

//event handler for submit event
function validate(){
    let valid=true;//set global validation
    let nameValidation=validateName();
    let emailValidation=validateEmail();
    let passwdValidation=validatePass();
    let passwd2Validation=validatePass2();
    let phoneValidation=validatePhone();
    let termsValidation=validateTerms();

    if(emailValidation !== defaultMsg){
        emailError.textContent=emailValidation;
        emailInput.style.borderColor="red";
        valid=false;
    }
    if(nameValidation !== defaultMsg){
        nameError.textContent=nameValidation;
        nameInput.style.borderColor="red";
        valid=false;
    }
    if(passwdValidation !== defaultMsg){
        passwdError.textContent=passwdValidation;
        passwdInput.style.borderColor="red";
        valid=false;
    }
    if(passwd2Validation !== defaultMsg){
        passwdError2.textContent=passwd2Validation;
        passwdInput2.style.borderColor="red";
        valid=false;
    }
    if(phoneValidation !== defaultMsg){
        phoneError.textContent=phoneValidation;
        phoneInput.style.borderColor="red";
        valid=false;
    }
    if(termsValidation !== defaultMsg){
        termError.textContent=termsValidation;
        valid=false;
    }
    return valid;
}

//add event listner to empty the text inside when reset
function resetFormError(){
    emailError.textContent=defaultMsg;
    emailInput.style.borderColor="black";
    nameError.textContent=defaultMsg;
    nameInput.style.borderColor="black";
    passwdError.textContent=defaultMsg;
    passwdInput.style.borderColor="black";
    passwdError2.textContent=defaultMsg;
    passwdInput2.style.borderColor="black";
    phoneError.textContent=defaultMsg;
    phoneInput.style.borderColor="black";
    termError.textContent=defaultMsg;
}
document.signform.addEventListener("reset",resetFormError);

//add event lisener to the username if you entered correctly, no error message
nameInput.addEventListener("blur",function(){
    let x=validateName();
    if(x === defaultMsg){
        nameError.textContent=defaultMsg;
        nameInput.style.borderColor="black";
    }else{
        nameError.textContent=nameErrorMsg;
        nameInput.style.borderColor="red";
    }
});

//add event lisener to the email if you entered correctly, no error message
emailInput.addEventListener("blur",function(){
    let x=validateEmail();
    if(x === defaultMsg){
        emailError.textContent=defaultMsg;
        emailInput.style.borderColor="black";
    }else{
        emailError.textContent=emailErrorMsg;
        emailInput.style.borderColor="red";
    }
});

//add event lisener to the password if you entered correctly, no error message
passwdInput.addEventListener("blur",function(){
    let x=validatePass();
    if(x === defaultMsg){
        passwdError.textContent=defaultMsg;
        passwdInput.style.borderColor="black";
    }else{
        passwdError.textContent=passwdErrorMsg;
        passwdInput.style.borderColor="red";
    }
});

//add event lisener to the re-type password if you entered correctly, no error message
passwdInput2.addEventListener("blur",function(){
    let x=validatePass2();
    if(x === defaultMsg){
        passwdError2.textContent=defaultMsg;
        passwdInput2.style.borderColor="black";
    }else{
        passwdError2.textContent=passwdErrorMsg2;
        passwdInput2.style.borderColor="red";
    }
});

//add event lisener to the phone number if you entered correctly, no error message
phoneInput.addEventListener("blur",function(){
    let x=validatePhone();
    if(x === defaultMsg){
        phoneError.textContent=defaultMsg;
        phoneInput.style.borderColor="black";
    }else{
        phoneError.textContent=phoneErrorMsg;
        phoneInput.style.borderColor="red";
    }
});

//add event lisener to the terms if you checked
termInput.addEventListener("change",function(){
    if(this.checked){
        termError.textContent=defaultMsg;
    }else{
        termError.textContent=termsErrorMsg;
    }
});
