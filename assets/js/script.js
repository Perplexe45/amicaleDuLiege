/* var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
}) */

// Configure Slider
/* $('.carousel').carousel({
    interval: 2000,
    pause: 'null'
  }); */

const man = document.querySelector('input.man');
const woman = document.querySelector('input.woman');
const firstName = document.querySelector('.firstName');
const lastName = document.querySelector('.lastName');
const buttonValid = document.querySelector('.greenButton')
let name1 = "";
let name2 = "";
let sexe = ""


man.addEventListener('click', () => {
  sexe=1;
})

woman.addEventListener('click', () => {
  sexe=2;
  /* console.log("ok le click avec femme"); */
})

firstName.addEventListener('input', (e) => {
  name1 = e.target.value; 
  /* Prénom*/
})

lastName.addEventListener('input', (e) => {
  name2 = e.target.value;
  /* Nom */
})

buttonValid.addEventListener('click', (e) => {
  e.preventDefault();
  document.getElementsByClassName('greenButton');
  if (sexe==1) {
    buttonValider = document.querySelector("form .writeMessage").innerHTML = `
    <h3> Bienvenue Monsieur ${name2} ${name1} <br> </h3>
  `;
  }  
  else if  (sexe==2) {
    buttonValider = document.querySelector("form .writeMessage").innerHTML = `
    <h3> Bienvenue Madame ${name2} ${name1} <br> </h3>
  `;
  }
})


