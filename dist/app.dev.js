"use strict";

var closingBtn = document.getElementById('close_modal_btn');
var heading = document.querySelector('#header');
var serv = document.querySelector('#services');
var serv_itemsList = document.querySelectorAll('.servicesContainer .item-service');
var skills = document.querySelector('#skills');
var skillsLi = document.querySelectorAll('.skillsContainer li');
var portfolioLinks = document.querySelectorAll('#portfolioList a');
var navBurger = document.querySelector('#draggable_burger_container');
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

var dragItem = document.getElementById("draggable_burger");
/*var active = false;
var currentX;
var currentY;
var initialX;
var initialY;
var xOffset = 0;
var yOffset = 0;

navBurger.addEventListener("touchstart", dragStart, false);
navBurger.addEventListener("touchend", dragEnd, false);
navBurger.addEventListener("touchmove", drag, false);
navBurger.addEventListener("mousedown", dragStart, false);
navBurger.addEventListener("mouseup", dragEnd, false);
navBurger.addEventListener("mousemove", drag, false);

navBurger.addEventListener('swiped-right', function(e) {
    console.log(e.target); // the element that was swiped
});

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
    navBurger.setAttribute("style", "background-color: var(--progress-txt-color); border: 2px dashed red;");
  
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
    navBurger.setAttribute("style", "background-color: none; border: 2px dashed transparent;");
  }
}
function setTranslate(xPos, yPos, el) {
  el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
}*/

dragItem.addEventListener('touchstart', handleTouchStart, false);
dragItem.addEventListener('touchmove', handleTouchMove, false);
var xDown = null;
var yDown = null;

function handleTouchStart(evt) {
  xDown = evt.touches[0].clientX;
  yDown = evt.touches[0].clientY;
}

;

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }

  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;
  var xDiff = xDown - xUp;
  var yDiff = yDown - yUp;

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    /*most significant*/
    if (xDiff > 0 && righted == false) {} else if (xDiff > 0 && righted == true) {
      /* left swipe */
      console.log(evt.target + ' left swiped');
      dragItem.style.transform = "translateX(-5vw)";
      righted = false;
    } else {
      /* right swipe */
      console.log(evt.target + ' right swiped');
      dragItem.style.transform = "translateX(100%)";
      righted = true;
    }
  } else {
    if (yDiff > 0) {
      /* up swipe */
      //console.log(evt.target + ' up swiped')
    } else {
        /* down swipe */
        //console.log(evt.target + ' down swiped')
      }
  }
  /* reset values */


  xDown = null;
  yDown = null;
}

;