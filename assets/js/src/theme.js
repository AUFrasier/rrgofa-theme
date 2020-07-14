//globals
const flyoutMenuIcon = document.getElementById("nav-bars");
const flyoutMenu = document.getElementById("mobile-menu");

flyoutMenuIcon.addEventListener("click", function() {
	flyoutMenu.classList.toggle('is-visible');
})