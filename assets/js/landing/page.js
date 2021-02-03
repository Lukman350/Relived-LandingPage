const navbarNav = document.getElementById('navigation');
const navLink = navbarNav.getElementsByClassName('nav-link');

for (let i = 0; i < navLink.length; i ++) {
	navLink[i].addEventListener('click', () => {
		let current = navbarNav.getElementsByClassName('active');
		current[0].className = current[0].className.replace(" active", "");

		this.className += " active";
	});
}