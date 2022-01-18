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
var dragItem = document.getElementById("draggable_burger");
var arrows = document.querySelectorAll('div.arrowSliding > div.arrow');
var headerHeight = heading.clientHeight;
var servicesHeight = serv.clientHeight;
var skillsHeight = skills.clientHeight;
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
    navBurger_container.setAttribute("style", "background-color: #000;");
    dragItem.style.transition = "all 0s";
    burgerLabel.classList.toggle("hidden");
    var burgerlinks = document.querySelector('.navburger .burger_links'); //burgerlinks.setAttribute("style", "transition: all .5s;")
    //Closing burger timer   

    setTimeout(function () {
      burgerToggle.checked = false;
      burgerLabel.classList.toggle("hidden");
      navBurger_container.setAttribute("style", "background-color: none");
      dragItem.style.transition = "all .5s";
      burgerlinks.removeAttribute('style');
    }, 8000);
  } else if (e.target === burgerToggle && burgerToggle.checked == false) {
    navBurger.setAttribute("style", "background-color: none");
    burgerLabel.setAttribute("style", "display: inline");
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

dragItem.addEventListener('touchstart', handleTouchStart, false);
dragItem.addEventListener('touchmove', handleTouchMove, false);
dragItem.addEventListener('touchend', handleTouchEnd, false);
var xDown = null;
var yDown = null;
var xDiff = null;
var yDiff = null;
var timeDown = null;
var TIME_TRASHOLD = 4000; // Extended time delay for better accessibility

var DIFF_TRASHOLD = 100;

function handleTouchEnd() {
  var timeDiff = Date.now() - timeDown;

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    //most significant
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
    } else {//FOR DEBUG : console.log('swipeX trashhold');
    }
  } else {
    if (Math.abs(yDiff) > DIFF_TRASHOLD && timeDiff < TIME_TRASHOLD) {
      if (yDiff > 0) {// up swipe 
        //FOR DEBUG : console.log('swipeY right', 'y-move:', yDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
      } else {// down swipe 
          //FOR DEBUG : console.log('swipeY down', 'y-move:', yDiff, "in :", timeDiff, "ms", this.getBoundingClientRect());
        }
    } else {//FOR DEBUG : console.log('swipeY trashhold')
      }
  } // reset values 


  xDown = null;
  yDown = null;
  timeDown = null;
  arrowAnim.classList.add('hidden');
  arrowAnim.setAttribute("style", "width: 0%;");
  navBurger_container.setAttribute("style", "background-color: none; border: 1px dashed transparent;");
}

function handleTouchStart(evt) {
  timeDown = Date.now();
  xDown = evt.touches[0].clientX;
  yDown = evt.touches[0].clientY;
  xDiff = 0;
  yDiff = 0;
  arrowAnim.classList.add('hidden');
}

function handleTouchMove(evt) {
  var _this = this;

  if (!xDown || !yDown) {
    return;
  }

  var righted;

  if (dragItem.getBoundingClientRect().left >= 20) {
    for (var i = 0; i < arrows.length; i++) {
      arrows[i].classList.add('inverted_arrow');
      setTimeout(function () {
        _this.classList.remove('inverted_arrow');
      }, 300);
    }

    righted = true;
    arrowAnim.classList.toggle("hidden");
    arrowAnim.setAttribute("style", "width: 100%; z-index: 1;");
  } else if (righted = true) {
    for (var i = 0; i < arrows.length; i++) {
      arrows[i].classList.remove('inverted_arrow');
    }

    righted = false;
    arrowAnim.classList.toggle("hidden");
    arrowAnim.setAttribute("style", "width: 100%; z-index: 1;");
  } else {
    for (var i = 0; i < arrows.length; i++) {
      arrows[i].classList.remove('inverted_arrow');
    }

    righted = false;
    arrowAnim.classList.toggle("hidden");
    arrowAnim.setAttribute("style", "width: 100%; z-index: 1;");
  }

  setTimeout(function () {
    arrowAnim.classList.add("hidden");
  }, 500);
  navBurger_container.setAttribute("style", "background-color: var(--progress-txt-color); border: 1px dashed red;");
  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;
  xDiff = xDown - xUp;
  yDiff = yDown - yUp;
}

function setTranslate(xPos, yPos, el) {
  el.style.transform = "translate3d(" + xPos + "vw, " + yPos + "px, 0)";
}