// Prevent scrolling when modal is open

const closingBtn = document.getElementById('clode_modal_btn');
const head = document.querySelector('#header');
const serv = document.querySelector('#services');
const left_itemsList = document.querySelectorAll('.leftServicesList .item-service');
const right_itemsList = document.querySelectorAll('.rightServicesList .item-service');
const skillsLi = document.querySelectorAll('.skillsContainer li');
var headerHeight = head.clientHeight;
var servicesHeight = serv.clientHeight;


window.addEventListener('scroll', (event) => {
    //Scrolling effects
    if(window.scrollY > headerHeight) {
        left_itemsList.forEach(function(element, i) {
            setTimeout(() => {
                element.classList.remove("reduced");
                element.classList.add("opened");
            }, i * 150)
        });
 
        right_itemsList.forEach(function(element, i) {
            setTimeout(() => {
                element.classList.remove("reduced");
                element.classList.add("opened");
            }, i * 150)
        });
        
    } 
    else {
        left_itemsList.forEach(function(el) {
            el.classList.add('reduced');
            el.classList.remove('opened');
        });
        right_itemsList.forEach(function(el) {
            el.classList.add('reduced');
            el.classList.remove('opened');
        });
    }

    if(window.scrollY > servicesHeight) {
        skillsLi.forEach(function(element, i) {
            setTimeout(() => {
                element.classList.remove("reduced");
                element.classList.add("opened");
            }, i * 80)
        });

    } 
    else {
        skillsLi.forEach(function(el) {
            el.classList.add('reduced');
            el.classList.remove('opened');
        });
    }
});

window.addEventListener('load', (event) => {
    //Index redirection
    window.location="#";    
    var fadeObject = document.querySelectorAll('.fadeLoad');
    var delay = 300;
    fadeObject.forEach(function(element, index) {
        setTimeout(() => {
            element.classList.add("loaded");
        }, index * delay)
    });
    var fullPage = document.querySelector('html');
        fullPage.setAttribute("style", "background-image:url('./public/image/office-932926_1920.jpg');");
      
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