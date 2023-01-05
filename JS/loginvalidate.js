//add functional validation to the login page
//Author: Lin Chen, Junjie Xu, Yang Xu

//login validation
let userName = document.querySelector("#loginname");
let loginPass = document.querySelector("#loginpasswd");


//method to validate if username has been entered
function validateUser(){
    let name=userName.value;
    if(name != defaultMsg){
        loginNameError.textContent=defaultMsg;
    }
}

//method to validate if password has been input
function validateLogPass(){
    let pass=loginPass.value;
    if(pass != defaultMsg){
        loginPassError.textContent=defaultMsg;
    }
}

        // userName.style.borderColor="red";

// document.logform.addEventListener("reset",logResetError);
let defaultMsg="";
let loginNameError = document.querySelector("#lgn");
let loginPassError = document.querySelector("#lgp");
function resetFormError(){
    loginNameError.textContent=defaultMsg;
    loginPassError.textContent=defaultMsg;
}
document.logform.addEventListener("reset",resetFormError);