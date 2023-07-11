// get HTML elements for useing

const form = document.querySelector(".dbCreate")
const addDb = document.querySelector(".addDb")
const showDbs = document.querySelector(".showDbs")


// Add click event for db name input show and hide 
addDb.addEventListener("click",()=>{
    form.classList.toggle("show")
})


