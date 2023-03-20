let docTitle = document.title;
window.addEventListener("blur", () => {
	document.title = "Kemana bang? :(";
});

window.addEventListener("focus", () => {
	document.title = docTitle;
});

window.scroll({
	top: 0,
	left: 0,
	behavior: 'smooth'
});