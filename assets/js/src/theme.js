//globals
const flyoutMenuIcon = document.getElementById("nav-bars");
const flyoutMenu = document.getElementById("mobile-menu");
const flyoutMenuItems = document.querySelectorAll('#mobile-menu li a');
const mobilMenuInput = document.getElementById("nav");

flyoutMenuIcon.addEventListener("click", function() {
	flyoutMenu.classList.toggle('is-visible');
})
flyoutMenuItems.forEach(element => {
	element.addEventListener("click", function() {
		mobilMenuInput.checked = false;
	})
});