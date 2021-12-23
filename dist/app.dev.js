"use strict";

// Prevent scrolling when modal is open
var closingBtn = document.getElementById('clode_modal_btn');
var heading = document.querySelector('#header');
var serv = document.querySelector('#services');
var serv_itemsList = document.querySelectorAll('.servicesContainer .item-service');
var skills = document.querySelector('#skills');
var skillsLi = document.querySelectorAll('.skillsContainer li');
var portfolioLinks = document.querySelectorAll('#portfolioList a');
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
  window.location = "#";
  var fadeObject = document.querySelectorAll('.fadeLoad');
  var delay = 300;
  fadeObject.forEach(function (element, index) {
    setTimeout(function () {
      element.classList.add("loaded");
    }, index * delay);
  }); //Closing burger timer    

  setInterval(function () {
    var burgerToggle = document.getElementById("toggle");

    if (burgerToggle.checked = true) {
      burgerToggle.checked = false;
    } else {//Nothing to do
    }
  }, 10000);
});
document.addEventListener("click", function (e) {
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