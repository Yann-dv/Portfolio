// Prevent scrolling when modal is open

const closingBtn = document.getElementById('clode_modal_btn');
const nav = document.getElementById('navbar');

window.addEventListener('load', (event) => {
    //Index redirection
    window.location="#";    
    var fadeObject = [];
    var fadeObject = document.querySelectorAll('.fadeLoad');
    var delay = 300;
    fadeObject.forEach(function(element, index) {
        setTimeout(() => {
            element.classList.add("loaded");
        }, index * delay)
    });
  });


document.addEventListener("click", function (e) {
    let isContacLink = e.target.classList.contains('contactLink');
    if(isContacLink) {
        document.body.classList.toggle("disable_overflow");
        nav.classList.toggle("hidden");
    }
    else if(e.target === closingBtn ) {
        document.body.classList.toggle("disable_overflow");
        nav.classList.toggle("hidden");
    }
    else {
        //nothing to do
    }
});