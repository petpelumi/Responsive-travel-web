
const preloader = document.querySelector("[data-preloader]");

window.addEventListener("load", () => {
    preloader.classList.add("remove");
});


const addEventOnElements = function (elements, eventType, callback) {
    for (let i = 0, len = elements.length; i < len; i++) {
        elements[i].addEventListener(eventType, callback);
    }
}

/**
  Navbar toggler for Mobile
 */

  const navbar = document.querySelector("[data-navbar]");
  const overlay = document.querySelector("[data-overlay]");  
  const navTogglers = document.querySelectorAll("[data-nav-toggler]");
  
  const toggleNav = function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("nav-active");
  }

addEventOnElements(navTogglers, "click", toggleNav);

const header = document.querySelector("[data-header]");
window.addEventListener("scroll", function () {
  header.classList[window.scrollY > 100 ? "add" : "remove"] ("active");
});

/**FOR THE FAQ CASCADE */


/**const cascader = document.querySelectorAll("[cascade]");*/


/**const toggleQuestion = function () {
  cascader.classList.toggle("unactive");
  
}

addEventOnElements(cascader, "click", toggleQuestion)*/
