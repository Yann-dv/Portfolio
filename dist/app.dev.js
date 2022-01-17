"use strict";

var closingBtn = document.getElementById('close_modal_btn');
var heading = document.querySelector('#header');
var serv = document.querySelector('#services');
var serv_itemsList = document.querySelectorAll('.servicesContainer .item-service');
var skills = document.querySelector('#skills');
var skillsLi = document.querySelectorAll('.skillsContainer li');
var portfolioLinks = document.querySelectorAll('#portfolioList a');
var navBurger_container = document.querySelector('#draggable_burger_container');
var burgerToggle = document.getElementById("toggle");
var burgerLabel = document.querySelector('#draggable_burger_container > label:nth-child(1)');
var headerHeight = heading.clientHeight;
var servicesHeight = serv.clientHeight;
var skillsHeight = skills.clientHeight;
var righted = false;
window.addEventListener('scroll', function (event) {
  //Scrolling effects//
  if (window.scrollY > headerHeight) {
    serv_itemsList.forEach(function (element, i) {
      setTimeout(function () {
        element.setAttribute("style", "transition: all .5s ease-out; transform: scaleX(1)");
      }, i * 150);
    });
  } else {
    serv_itemsList.forEach(function (element) {
      element.setAttribute("style", "transform: scaleX(0)");
    });
  }

  if (window.scrollY > servicesHeight) {
    skillsLi.forEach(function (el, i) {
      setTimeout(function () {
        el.classList.remove("reduced");
        el.classList.add("opened");
      }, i * 80);
    });
  } else {
    skillsLi.forEach(function (el) {
      el.classList.add('reduced');
      el.classList.remove('opened');
    });
  }

  if (window.scrollY > skillsHeight) {
    portfolioLinks.forEach(function (e, i) {
      setTimeout(function () {
        e.setAttribute("style", "transition: all .5s ease-out; transform: scale(1)");
      }, i * 280);
    });
  } else {
    portfolioLinks.forEach(function (e) {
      e.setAttribute("style", "transform: scale(0)");
    });
  }
});
window.addEventListener('load', function (event) {
  //Index redirection
  window.localStorage.removeItem('colorTheme');
  window.location = "#";
  var fadeObject = document.querySelectorAll('.fadeLoad');
  var delay = 300;
  fadeObject.forEach(function (element, index) {
    setTimeout(function () {
      element.classList.add("loaded");
    }, index * delay);
  }); //Coloring theme

  setInterval(function () {
    var colorTheme = window.localStorage.getItem('colorTheme');

    if (!colorTheme || colorTheme !== 'lightBlue') {
      document.body.style.setProperty('transition-duration', '3s');
      document.documentElement.className = 'lightBlue';
      window.localStorage.setItem('colorTheme', 'lightBlue');
      setTimeout(function () {
        document.body.style.removeProperty('transition-duration');
      }, 1000);
    } else if (colorTheme === 'lightBlue') {
      document.body.style.setProperty('transition-duration', '3s');
      document.documentElement.className = 'darkPurple';
      window.localStorage.setItem('colorTheme', 'darkPurple');
      setTimeout(function () {
        document.body.style.removeProperty('transition-duration');
      }, 1000);
    } else {
      document.documentElement.className = 'darkPurple';
      window.localStorage.removeItem('colorTheme');
      document.body.style.removeProperty('transition-duration');
    }
  }, 120000);
});
document.addEventListener("click", function (e) {
  if (e.target === burgerToggle && burgerToggle.checked == true) {
    navBurger.setAttribute("style", "background-color: var(--main-body-bg-color);");
    burgerLabel.setAttribute("style", "display: none");
    var burgerlinks = document.querySelector('.navburger .burger_links');
    burgerlinks.setAttribute("style", "transition: all .5s;"); //Closing burger timer   

    setTimeout(function () {
      burgerToggle.checked = false;
      burgerLabel.setAttribute("style", "display: inline");
      navBurger.setAttribute("style", "background-color: none");
      burgerlinks.removeAttribute('style');
    }, 8000);
  } else if (e.target === burgerToggle && burgerToggle.checked == false) {
    navBurger.setAttribute("style", "background-color: none"); //burgerLabel.setAttribute("style", "display: inline");
  }

  var isContacLink = e.target.classList.contains('contactLink');

  if (isContacLink) {
    document.body.classList.toggle("disable_overflow");
    navbar.classList.toggle("hidden");
    navBurger.classList.toggle("hidden");
  } else if (e.target === closingBtn) {
    document.body.classList.toggle("disable_overflow");
    navbar.classList.toggle("hidden");
    navBurger.classList.toggle("hidden");
  } else {//nothing to do
  }
}); //Draggable burger menu

var dragItem = document.getElementById("draggable_burger"); // Custom function

/*
var active = false;
var initialX;
var initialY;
var currentX;
var currentY;
var xOffset = 0;
var yOffset = 0;

dragItem.addEventListener("touchstart", dragStart, false);
dragItem.addEventListener("touchend", dragEnd, false);
dragItem.addEventListener("touchmove", drag, false);
dragItem.addEventListener("touchleave", dragEnd, false); 

dragItem.addEventListener("mousedown", dragStart, false);
dragItem.addEventListener("mouseup", dragEnd, false);
dragItem.addEventListener("mousemove", drag, false);

function dragStart(e) {
  if (( e.target === dragItem) && active === false ){
    active = true;
    if (e.type === "touchstart") {
      initialX = e.touches[0].clientX - xOffset;
      initialY = e.touches[0].clientY - yOffset;
    } else {
      initialX = e.clientX - xOffset;
      initialY = e.clientY - yOffset;
    }
  }
  else {
    active = false;
    return;
  }
}

function dragEnd(e) {
  if (active === true) {
    if( e.target === navBurger) {
      console.log('dragged');
    }
    else {
      navBurger.setAttribute("style", "background-color: none; border: 1px dashed transparent;");
      console.log('dropped');
    }
  }
  active = false;
}

function drag(e) {
  if (active === true) {
    navBurger.setAttribute("style", "background-color: var(--progress-txt-color); border: 1px dashed red;");
    e.preventDefault();
    
    if (e.type === "touchmove") {
      currentX = e.touches[0].clientX - initialX;
      currentY = e.touches[0].clientY - initialY;
    } else {
      currentX = e.clientX - initialX;
      currentY = e.clientY - initialY;
    }
    xOffset = currentX;
    yOffset = currentY;
    console.log(currentX, currentY, active);
    //setTranslate(currentX, currentY, dragItem);
  }
  else {
    navBurger.setAttribute("style", "background-color: none; border: 1px dashed transparent;");
    console.log("unattributed");
  }
}*/

/*
var active = false;
var currentX;
var currentY;
var initialX;
var initialY;
var xOffset = 100;
var yOffset = 100;

navBurger.addEventListener("touchstart", dragStart, false);
navBurger.addEventListener("touchend", dragEnd, false);
navBurger.addEventListener("touchmove", drag, false);
navBurger.addEventListener("mousedown", dragStart, false);
navBurger.addEventListener("mouseup", dragEnd, false);
navBurger.addEventListener("mousemove", drag, false);

function dragStart(e) {
  if (e.type === "touchstart") {
    initialX = e.touches[0].clientX - xOffset;
    initialY = e.touches[0].clientY - yOffset;
  } else {
    initialX = e.clientX - xOffset;
    initialY = e.clientY - yOffset;
  }
  if (e.target === dragItem) {
    active = true;
  }
}
function dragEnd(e) {
  if( e.target.getAttribute('data-boxtype') == navBurger.getAttribute('data-appendto') ) {
    initialX = currentX;
    initialY = currentY;
    active = false;
  }
  else {
    active = false;
    setTranslate(0, 0, dragItem);
  }
}
function drag(e) {
  if (active) {
    navBurger.setAttribute("style", "background-color: var(--progress-txt-color); border: 1px dashed red;");
  
    e.preventDefault();
  
    if (e.type === "touchmove") {
      currentX = e.touches[0].clientX - initialX;
      currentY = e.touches[0].clientY - initialY;
    } else {
      currentX = e.clientX - initialX;
      currentY = e.clientY - initialY;
    }
    xOffset = currentX;
    yOffset = currentY;
    setTranslate(currentX, currentY, dragItem);
  }
  else {
    navBurger.setAttribute("style", "background-color: none; border: 1px dashed transparent;");
  }
}
function setTranslate(xPos, yPos, el) {
  el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
} */
//setTranslate(currentX, currentY, dragItem);

/*dragItem.addEventListener('touchstart', handleTouchStart, false);        
dragItem.addEventListener('touchmove', handleTouchMove, false);

const SWIPE_BLOCK_ELEMS = [
    'swipBlock',
    'handle',
    'drag-ruble'
  ]

var xDown = null;                                                        
var yDown = null;   
let timeDown = null;
const  TIME_TRASHOLD = 200;
const  DIFF_TRASHOLD = 130;

let timeDiff = Date.now() - timeDown;

function handleTouchStart(evt) {                                         
    xDown = evt.touches[0].clientX;                                      
    yDown = evt.touches[0].clientY;                                      
};                                                

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {//most significant
        if (Math.abs(xDiff) > DIFF_TRASHOLD && timeDiff < TIME_TRASHOLD) {
            if (( xDiff > 0 ) && (righted == false)) {
            } else if (( xDiff > 0 ) && (righted== true)) {
                 left swipe console.log(evt.target + ' left swiped');
                
                dragItem.style.transform = "translateX(-1px)";
                righted = false;
            } else {
                right swipe console.log(evt.target + ' right swiped');
                dragItem.style.transform = "translateX(500%)";
                righted = true;
            }                       
    } else {
        if ( yDiff > 0 ) {
             up swipe  //console.log(evt.target + ' up swiped')
        } else { 
            down swipe //console.log(evt.target + ' down swiped')
        }                                                                 
    }
     reset values 
    xDown = null;
    yDown = null;                                             
};
*/

dragItem.addEventListener('touchstart', handleTouchStart, false);
dragItem.addEventListener('touchmove', handleTouchMove, false);
dragItem.addEventListener('touchend', handleTouchEnd, false);
var xDown = null;
var yDown = null;
var xDiff = null;
var yDiff = null;
var timeDown = null;
var TIME_TRASHOLD = 400;
var DIFF_TRASHOLD = 100;

function handleTouchEnd() {
  var timeDiff = Date.now() - timeDown;

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    //most significant
    if (Math.abs(xDiff) > DIFF_TRASHOLD && timeDiff < TIME_TRASHOLD) {
      if (xDiff > 0) {
        //left swipe 
        // No yAxis transitions
        console.log('swipeX left', 'x-move:', xDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
      } else {
        // right swipe 
        // No yAxis transitions
        setTranslate(80, 0, dragItem);
        console.log('swipeX right', 'x-move:', xDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
      }
    } else {
      console.log('swipeX trashhold');
    }
  } else {
    if (Math.abs(yDiff) > DIFF_TRASHOLD && timeDiff < TIME_TRASHOLD) {
      if (yDiff > 0) {
        // up swipe 
        console.log('swipeY right', 'y-move:', yDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
      } else {
        // down swipe 
        console.log('swipeY down', 'y-move:', yDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
      }
    } else {
      console.log('swipeY trashhold');
    }
  } // reset values 


  xDown = null;
  yDown = null;
  timeDown = null;
  navBurger_container.setAttribute("style", "background-color: none; border: 1px dashed transparent;");
}

function handleTouchStart(evt) {
  timeDown = Date.now();
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