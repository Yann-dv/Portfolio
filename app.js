const closingBtn = document.getElementById('close_modal_btn');
const heading = document.querySelector('#header');
const serv = document.querySelector('#services');
const serv_itemsList = document.querySelectorAll('.servicesContainer .item-service');
const skills = document.querySelector('#skills');
const skillsLi = document.querySelectorAll('.skillsContainer li');
const portfolioLinks = document.querySelectorAll('#portfolioList a');
const navBurger_container = document.querySelector('#draggable_burger_container');
const burgerToggle = document.getElementById("toggle");
const burgerLabel = document.querySelector('#draggable_burger_container > label:nth-child(1)');

const dragItem = document.getElementById("draggable_burger");

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
    }, 120000);
});


document.addEventListener("click", function (e) {
    if(e.target === burgerToggle && burgerToggle.checked == true) { 
            navBurger_container.setAttribute("style", "background-color: #000;");
            dragItem.style.transition = "all 0s";
            dragItem.classList.toggle("hidden");
            
            const burgerlinks = document.querySelector('.navburger .burger_links');
            //burgerlinks.setAttribute("style", "transition: all .5s;")

            //Closing burger timer   
            setTimeout(function() {
                burgerToggle.checked = false;
                burgerLabel.classList.toggle("hidden");
                navBurger_container.setAttribute("style", "background-color: none");
                dragItem.style.transition = "all .5s";
                dragItem.removeAttribute('style');
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

//Draggable burger menu

dragItem.addEventListener('touchstart', handleTouchStart, false);
dragItem.addEventListener('touchmove', handleTouchMove, false);
dragItem.addEventListener('touchend', handleTouchEnd, false);     

let xDown = null;
let yDown = null; 
let xDiff = null;
let yDiff = null;
let timeDown = null;
const TIME_TRASHOLD = 4000; // Extended time delay for better accessibility
const DIFF_TRASHOLD = 100;

function handleTouchEnd() {
  
  let timeDiff = Date.now() - timeDown; 
  if (Math.abs(xDiff) > Math.abs(yDiff)) { //most significant
    if (Math.abs(xDiff) > DIFF_TRASHOLD && timeDiff < TIME_TRASHOLD) {
      if (xDiff > 0 && dragItem.getBoundingClientRect().left >= 10) {
        //left swipe 
        // No yAxis transitions
        //FOR DEBUG : console.log('swipeX left', 'x-move:', xDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
        setTranslate(1, 0, dragItem);
        
      } else {
        // right swipe 
        //FOR DEBUG : console.log('swipeX right', 'x-move:', xDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
        // No yAxis transitions
        setTranslate(78, 0, dragItem);
        
      }
    } else {
      //FOR DEBUG : console.log('swipeX trashhold');
    }
  } else {
    if (Math.abs(yDiff) > DIFF_TRASHOLD && timeDiff < TIME_TRASHOLD) {
      if (yDiff > 0) {
        // up swipe 
        //FOR DEBUG : console.log('swipeY right', 'y-move:', yDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
      } else {
        // down swipe 
        //FOR DEBUG : console.log('swipeY down', 'y-move:', yDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
      }
    } else {
      //FOR DEBUG : console.log('swipeY trashhold')
    }
  }
  // reset values 
  xDown = null;
  yDown = null;
  timeDown = null; 
  navBurger_container.setAttribute("style", "background-color: none; border: 1px dashed transparent;");
}

function handleTouchStart(evt) {
  timeDown = Date.now()
  xDown = evt.touches[0].clientX;
  yDown = evt.touches[0].clientY;
  xDiff = 0;
  yDiff = 0;
}

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }
  navBurger_container.setAttribute("style", "background-color: var(--progress-txt-color); border: 1px dashed red;");
  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;

  xDiff = xDown - xUp;
  yDiff = yDown - yUp;
}

function setTranslate(xPos, yPos, el) {
  el.style.transform = "translate3d(" + xPos + "vw, " + yPos + "px, 0)";
}
