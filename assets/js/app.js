//Login & Register Switch
const regBtn=document.querySelector("#register");
const logBtn=document.querySelector(".box2 a");
const box1=document.querySelector(".box");
const box2=document.querySelector(".box2");

regBtn.addEventListener("click",()=>{
    console.log("Worked");
    box1.classList.add("box-hide");
    box2.classList.add("box2-visible");
    box2.classList.remove("box2-hide");
});

logBtn.addEventListener("click",()=>{
    console.log("Worked");
    box2.classList.add("box2-hide");
    box1.classList.add("box-visible");
    box1.classList.remove("box-hide");
});


//===========Registeration Form Validation===========

const regSubBtn=document.querySelector("#reg-btn");
const fullName=document.querySelector("#full-name");
const email=document.querySelector("#email-id");
const phno=document.querySelector("#phn-number");
const wardNo=document.querySelector("#ward-number");
const houseNo=document.querySelector("#house-number");
const rationNo=document.querySelector("#ration-number");

// regSubBtn.addEventListener("click",()=>{
    
// });

//Error Message Class
const fullNameError=document.querySelector(".fullname .error");
const emailError=document.querySelector(".email .error");
const phnoError=document.querySelector(".phno .error");
const wardnoError=document.querySelector(".wrdno .error");
const housenoError=document.querySelector(".houseno .error");
const rationnoError=document.querySelector(".rationno .error");

//Fullname Validation
var nameChk=/^[a-zA-Z]+$/;
fullName.addEventListener("input",()=>{
    if(fullName.value.match(nameChk)){
        fullNameError.classList.add("error-hidden");
        fullNameError.classList.remove("error-visible");
    }else if(fullName.value==""){
        fullNameError.classList.add("error-visible");
        fullNameError.classList.remove("error-hidden");
        fullNameError.innerText="Field cannot be blank";
    }else{
        fullNameError.classList.add("error-visible");
        fullNameError.classList.remove("error-hidden");
        fullNameError.innerText="Name should not contain numbers";
    }
});

//Email Validation
var emailChk=/^([a-z A-Z 0-9_\-\.])+\@([a-z A-Z 0-9_\-])+\.([a-z A-Z]{2,4}).$/;
email.addEventListener("input",()=>{
    if(email.value.match(emailChk)){
        emailError.classList.add("error-hidden");
        emailError.classList.remove("error-visible");
    }else if(email.value==""){
        emailError.classList.add("error-visible");
        emailError.classList.remove("error-hidden");
        emailError.innerText="Field cannot be blank";
    }else{
        emailError.classList.add("error-visible");
        emailError.classList.remove("error-hidden");
        emailError.innerText="Invalid mail id";
    }
});

//Phno Validation
var phnoChk=/^([0-9_\-]{10,13})+$/;
phno.addEventListener("input",()=>{
    if(phno.value.match(phnoChk)){
        phnoError.classList.add("error-hidden");
        phnoError.classList.remove("error-visible");
    }else if(phno.value==""){
        phnoError.classList.add("error-visible");
        phnoError.classList.remove("error-hidden");
        phnoError.innerText="Field cannot be blank";
    }else{
        phnoError.classList.add("error-visible");
        phnoError.classList.remove("error-hidden");
        phnoError.innerText="Invalid phone number";
    }
});

//Ward Number Validation
var wrdnoChk=/^[1-9]{1,2}$/;
wardNo.addEventListener("input",()=>{
    if(wardNo.value.match(wrdnoChk)){
        wardnoError.classList.add("error-hidden");
        wardnoError.classList.remove("error-visible");
    }else if(wardNo.value==""){
        wardnoError.classList.add("error-visible");
        wardnoError.classList.remove("error-hidden");
        wardnoError.innerText="Field cannot be blank";
    }else{
        wardnoError.classList.add("error-visible");
        wardnoError.classList.remove("error-hidden");
        wardnoError.innerText="Invalid ward number";
    }
});

//House Number Validation
var housenoChk=/^[1-9]{1,3}$/;
houseNo.addEventListener("input",()=>{
    if(houseNo.value.match(housenoChk)){
        housenoError.classList.add("error-hidden");
        housenoError.classList.remove("error-visible");
    }else if(houseNo.value==""){
        housenoError.classList.add("error-visible");
        housenoError.classList.remove("error-hidden");
        housenoError.innerText="Field cannot be blank";
    }else{
        housenoError.classList.add("error-visible");
        housenoError.classList.remove("error-hidden");
        housenoError.innerText="Invalid house number";
    }
});

//Ration Number Validation
var rationnoChk=/^[1-9]{10}$/;
rationNo.addEventListener("input",()=>{
    if(rationNo.value.match(rationnoChk)){
        rationnoError.classList.add("error-hidden");
        rationnoError.classList.remove("error-visible");
    }else if(rationNo.value==""){
        rationnoError.classList.add("error-visible");
        rationnoError.classList.remove("error-hidden");
        rationnoError.innerText="Field cannot be blank";
    }else{
        rationnoError.classList.add("error-visible");
        rationnoError.classList.remove("error-hidden");
        rationnoError.innerText="Invalid ration number";
    }
});