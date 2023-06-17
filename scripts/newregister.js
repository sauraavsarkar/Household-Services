//full name validation
document.querySelector('#full-name').addEventListener('blur',(event)=>{
    let err = document.querySelector(".error-messg");
    err.innerText = "";
    try{
        //if field empty
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;
        
        else if(event.target.validity.patternMismatch){
            //event.target.setCustomValidity("Enter A valid name");
            throw "Please enter a valid name!";
        }

        else{
            event.target.style.borderBottomColor = 'green';
            err.innerText = "";
        }
    }

    catch(messg){
        err.innerText = messg;
    }
    
});


//to validate email
document.querySelector('#email').addEventListener('blur',(event)=>{
    validateEmail(event);
});

//to validate confirm email
document.querySelector('#confirm-email').addEventListener('blur',(event)=>{
    validateEmail(event);
    validateConfirmation(document.querySelector('#email'),event.target);
});


//function for email and confirm email validation
function validateEmail(event){
    let error = event.target.nextElementSibling;
    error.innerText = "";
    try{
        
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;

        else if(!event.target.validity.valid || event.target.value.slice(-4)!='.com')
            throw "Please enter a valid email.";

        else
            event.target.style.borderBottom = '2px solid green';
         
    }

    
    catch(messg){
        error.innerText = messg;
    }

}

//for validating confirm 
function validateConfirmation(el,cEl){
    if(el.value == cEl.value){
        cEl.nextElementSibling.innerText = "";
        document.querySelector('[type="submit"]').removeAttribute('disabled');
    }

    else{
        cEl.nextElementSibling.innerText = "Confirm email not mached!";
        document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
    }
}


//validating contact number
document.querySelector('#contact-no').addEventListener('blur',function(event){
    let error = event.target.nextElementSibling ;
    error.innerText = "";
    try{
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;

        else if(event.target.value.length!=11)
            throw "Please enter 10 digit mobile number.";

        else    
            event.target.style.borderBottom = "2px solid green";
    }
    catch(messg){
        error.innerText = messg;
    }
});


//password show/hide functionality
document.querySelector('.passkey-icon').addEventListener('click',displayPassword);
document.querySelectorAll('.passkey-icon')[1].addEventListener('click',displayPassword);

function displayPassword(event){
    if(event.target.parentNode.getAttribute('data-display-passkey')=='off'){
        event.target.parentNode.setAttribute('data-display-passkey','on');
        event.target.setAttribute('class','fas fa-eye-slash');
        event.target.parentElement.previousSibling.previousSibling.setAttribute('type','text');
        console.log(event.target.parentElement.previousSibling.previousSibling);
    }
    else{
        event.target.parentNode.setAttribute('data-display-passkey','off');
        event.target.setAttribute('class','fas fa-eye');
        event.target.parentElement.previousSibling.previousSibling.setAttribute('type','password');
    }
}


//adding to password field
document.querySelector("#passkey").addEventListener('blur',validatePassword);

//password validation
function validatePassword(event){
    let error = event.target.parentElement.nextElementSibling;
    error.innerText = "";
    try{
        console.log((event.target.value));
        console.log();
    if(event.target.validity.valueMissing)
        throw event.target.validationMessage;

    else if(!(/[0-9]{4,}/g).test(event.target.value)){
        throw "There must be atleast 4 digit.";
    }

    else if(event.target.value.length<8 || event.target.value.length>15){
        
        throw "Password must be 8 to 15 charaters.";
    }

    else{
        document.querySelector('[type="submit"]').removeAttribute('disabled');
        event.target.style.borderBottom = "2px solid green";
    }

    }
    catch(messg){
        document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
        error.innerText = messg;
    }
    console.log(error);
}


//confirm password validation
document.querySelector('#confirm-passkey').addEventListener('blur',function(event){
    try{
        var error = document.querySelectorAll('.error-messg')[5];
        error.innerText = "";
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;

        else if(document.querySelector('#passkey').value != event.target.value){
            throw "Password not matched!";
        }

        else{
            document.querySelector('[type="submit"]').removeAttribute('disabled');
            event.target.style.borderBottom = "2px solid green";
        }
    }

    catch(messg){
        document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
        error.innerText = messg;
    }
});

console.log(document.querySelector('#email'));