var previousScroll = window.pageYOffset || document.documentElement.scrollTop;
var navbar = document.getElementById("nav_bar");

// Set the initial state of the navigation bar
navbar.style.opacity = "1";

window.onscroll = function() {
  var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > previousScroll) {
    // Scrolling down
    navbar.style.opacity = "0"; // Hide the navigation bar with fade effect
  } else {
    // Scrolling up
    navbar.style.opacity = "1"; // Show the navigation bar with fade effect
  }

  previousScroll = currentScroll;
};
