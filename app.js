// Prevent scrolling when modal is open

const closingBtn = document.getElementById('clode_modal_btn');
const heading = document.querySelector('#header');
const serv = document.querySelector('#services');
const serv_itemsList = document.querySelectorAll('.servicesContainer .item-service');
const skills = document.querySelector('#skills');
const skillsLi = document.querySelectorAll('.skillsContainer li');
const portfolioLinks = document.querySelectorAll('#portfolioList a');
const navBurger = document.querySelector('#navBurger');
const burgerToggle = document.getElementById("toggle");
const burgerLabel = document.querySelector('#navBurger > label:nth-child(1)');

var headerHeight = heading.clientHeight;
var servicesHeight = serv.clientHeight;
var skillsHeight = skills.clientHeight;



window.addEventListener('scroll', (event) => {
    //Scrolling effects//
    if(window.scrollY > headerHeight) {
        serv_itemsList.forEach(function(element, i) {
            setTimeout(() => {
                element.setAttribute("style", "transition: all .5s ease-out; transform: scaleX(1)");
            }, i * 150)
        });      
    } 
    else {
        serv_itemsList.forEach(function(element) {
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
    window.localStorage.removeItem('colorTheme');
    window.location="#";    
    var fadeObject = document.querySelectorAll('.fadeLoad');
    var delay = 300;
    fadeObject.forEach(function(element, index) {
        setTimeout(() => {
            element.classList.add("loaded");
        }, index * delay)
    });  
    
    //Coloring theme
    setInterval(function() {
        var colorTheme = window.localStorage.getItem('colorTheme');

        if((!colorTheme) || (colorTheme !== 'lightBlue')) {
            document.body.style.setProperty('transition-duration', '3s');
            document.documentElement.className = 'lightBlue';
            window.localStorage.setItem('colorTheme', 'lightBlue');
            setTimeout(function(){
                document.body.style.removeProperty('transition-duration');
            }, 1000);  
        }
        else if(colorTheme === 'lightBlue') {
            document.body.style.setProperty('transition-duration', '3s');
            document.documentElement.className = 'darkPurple';
            window.localStorage.setItem('colorTheme', 'darkPurple');
            setTimeout(function(){
                document.body.style.removeProperty('transition-duration');
            }, 1000);  
        }
        else {
            document.documentElement.className = 'darkPurple';
            window.localStorage.removeItem('colorTheme');
            document.body.style.removeProperty('transition-duration');
        }
    }, 240000);
});


document.addEventListener("click", function (e) {
    if(e.target === burgerToggle && burgerToggle.checked == true) { 
            navBurger.setAttribute("style", "background-color: var(--main-body-bg-color)");
            burgerLabel.setAttribute("style", "display: none");
            //Closing burger timer   
            setTimeout(function() {
                burgerToggle.checked = false;
                burgerLabel.setAttribute("style", "display: inline");
                navBurger.setAttribute("style", "background-color: none");
            }, 8000);
        }
    else if(e.target === burgerToggle && burgerToggle.checked == false) {
        navBurger.setAttribute("style", "background-color: none");
        burgerLabel.setAttribute("style", "display: inline");
    }

    let isContacLink = e.target.classList.contains('contactLink');
    if(isContacLink) {
        document.body.classList.toggle("disable_overflow");
        navbar.classList.toggle("hidden");
        navBurger.classList.toggle("hidden");
    }
    else if(e.target === closingBtn ) {
        document.body.classList.toggle("disable_overflow");
        navbar.classList.toggle("hidden");
        navBurger.classList.toggle("hidden");
    }
    else {
        //nothing to do
    }
});