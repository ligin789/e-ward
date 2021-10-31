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

