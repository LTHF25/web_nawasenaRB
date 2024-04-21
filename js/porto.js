"use strict";

/**
 * add event on element
 * ------------------------------------------------------------------
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
};
// --------------------------------------------------------------





/**
 * navbar toggle
 * --------------------------------------------------------
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
};

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
};

addEventOnElem(navLinks, "click", closeNavbar);
// --------------------------------------------------------------




/**
 * header active when scroll down to 100px
 * --------------------------------------------------------------------
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElem = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
};

addEventOnElem(window, "scroll", activeElem);
// ----------------------------------------------------------



// POpup-------------------------------------------------------
function buttons() {
  let popup = document.getElementById("popup");
  popup.style.display = "block";

  setTimeout(function () {
    popup.style.display = "none";
  }, 3000);
}

document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();
  buttons();
});

// Menutup popup di luar  (app.php) :>
document.addEventListener("click", function (event) {
  let popup = document.getElementById("popup");
  if (!event.target.matches("#popup") && popup.style.display === "block") {
    popup.style.display = "none";
  }
});
// -------------------------------------------------------------------------------

// hitung total harga  (addTable.php):>
function hitungTotal() {
  var hargaSatuan = document.getElementById("harga_satuan").value;
  var jumlahBarang = document.getElementById("jumlah").value;
  var hargaTotal = parseInt(hargaSatuan) * parseInt(jumlahBarang);
  document.getElementById("harga_total").value = hargaTotal;
}
// --------------------------------------------------------------------

// NAVIGASI MEMBERTB  (app.php) :>

document.addEventListener("DOMContentLoaded", function () {
  let contactListItem = document.querySelector("#member");

  contactListItem.addEventListener("click", function () {
    let isLoggedIn = true; 

    if (!isLoggedIn) {
      window.location.href = "../Lg_user.php";
    } else {
      contactListItem.classList.add("disabled");
    }
  });
});
// --------------------------------------------------------------------


// SLIDE MEMBER 

 document.addEventListener("DOMContentLoaded", function () {
   let carousel = document.querySelector(".custom-carousel");
   let slides = document.querySelectorAll(".custom-slides li");

   let currentIndex = 0;
   let slideWidth = slides[0].offsetWidth;
   let totalSlides = slides.length;

   carousel.style.width = slideWidth * totalSlides + "px";

   function goToSlide(index) {
     if (index < 0 || index >= totalSlides) return;
     carousel.style.transform = `translateX(-${slideWidth * index}px)`;
     currentIndex = index;
   }

   document.querySelector("nextButton").addEventListener("click", function() {
       goToSlide(currentIndex + 3);
   });

   document.querySelector("prevButton").addEventListener("click", function() {
       goToSlide(currentIndex - 1);
   });
 });


















// const form = document.getElementById("myForm");

// form.addEventListener("onclick", () => {

// function buttons(){
//   popUp.style.display = "block";
//   popUp.style.color = "white";
//   popUp.style.background_color = "blue";
// }

//   return buttons()
// });
