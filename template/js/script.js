var myNav = document.getElementById('navigationscroll');
$(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 650) {
            myNav.classList.add("navbar-black");
        } else {
            myNav.classList.remove("navbar-black");
        }
    });
})



// back to scroll js
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
// fin