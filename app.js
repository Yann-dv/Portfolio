// Prevent scrolling when modal is open
document.addEventListener("DOMContentLoaded", function(event) {

const closingBtn = document.getElementById('clode_modal_btn');
const head = document.querySelector('#header');
const serv = document.querySelector('#services');
const skills = document.querySelector('#skills');
const left_itemsList = document.querySelectorAll('.leftServicesList .item-service');
const right_itemsList = document.querySelectorAll('.rightServicesList .item-service');
const skillsLi = document.querySelectorAll('.skillsContainer li');
const portfolioLinks = document.querySelectorAll('#portfolioList a');

var headerHeight = head.clientHeight;
var servicesHeight = serv.clientHeight;
var skillsHeight = skills.clientHeight;


window.addEventListener('scroll', (event) => {
    //Scrolling effects//
    if(window.scrollY > headerHeight) {
        left_itemsList.forEach(function(element, i) {
            setTimeout(() => {
                element.setAttribute("style", "transition: all .5s ease-out; transform: scaleX(1)");
            }, i * 150)
        });
 
        right_itemsList.forEach(function(element, i) {
            setTimeout(() => {
                element.setAttribute("style", "transition: all .5s ease-out; transform: scaleX(1)");
            }, i * 150)
        });
        
    } 
    else {
        left_itemsList.forEach(function(element) {
            element.setAttribute("style", "transform: scaleX(0)");
        });
        right_itemsList.forEach(function(element) {
            element.setAttribute("style", "transform: scaleX(0)");
        });
    }


    if(window.scrollY > servicesHeight) {
        skillsLi.forEach(function(el, i) {
            setTimeout(() => {
                el.classList.remove("reduced");
                el.classList.add("opened");
            }, i * 80)
        });

    } 
    else {
        skillsLi.forEach(function(el) {
            el.classList.add('reduced');
            el.classList.remove('opened');
        });
    }

    if(window.scrollY > skillsHeight) {
        portfolioLinks.forEach(function(e, i) {
            setTimeout(() => {
                e.setAttribute("style", "transition: all .5s ease-out; transform: scale(1)");
            }, i * 280)
        });     
    } 
    else {
        portfolioLinks.forEach(function(e) {
            e.setAttribute("style", "transform: scale(0)");
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

}); //en doc.contentload