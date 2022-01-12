"use strict";

// Prevent scrolling when modal is open
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
    burgerLabel.setAttribute("style", "display: none"); // to modif

    var burgerlinks = document.querySelector('.navburger .burger_links');
    burgerlinks.setAttribute("style", "transition: all .5s;"); //Closing burger timer   

    setTimeout(function () {
      burgerToggle.checked = false;
      burgerLabel.setAttribute("style", "display: contents"); // to modif

      navBurger.setAttribute("style", "background-color: none");
      burgerlinks.removeAttribute('style');
    }, 8000);
  } else if (e.target === burgerToggle && burgerToggle.checked == false) {
    navBurger.setAttribute("style", "background-color: none");
    burgerLabel.setAttribute("style", "display: contents"); // to modif
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
});
var dragItem = document.getElementById("draggable_burger");
var container = document.getElementById("draggable_burger_container");
var active = false;
var currentX;
var currentY;
var initialX;
var initialY;
var xOffset = 0;
var yOffset = 0;
container.addEventListener("touchstart", dragStart, false);
container.addEventListener("touchend", dragEnd, false);
container.addEventListener("touchmove", drag, false);
container.addEventListener("mousedown", dragStart, false);
container.addEventListener("mouseup", dragEnd, false);
container.addEventListener("mousemove", drag, false);

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
  initialX = currentX;
  initialY = currentY;
  active = false;
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
  } else {
    navBurger.setAttribute("style", "background-color: none; border: 2px dashed transparent;");
  }
}

function setTranslate(xPos, yPos, el) {
  el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
}