// Menu and Search Bar Toggle functionality 

document.addEventListener('DOMContentLoaded', function() {
  const menuButton = document.getElementById('menu-button');
  const searchButton = document.getElementById('search-button');
  const menu = document.getElementById('menu');
  const searchBar = document.getElementById('search-bar');

  menuButton.addEventListener('click', function() {
	if (menu.style.transform === 'translateY(0%)') {
	  menu.style.transform = 'translateY(-100%)';
	} else {
	  menu.style.transform = 'translateY(0%)';
	  searchBar.style.transform = 'translateY(-100%)';
	}
  });

  searchButton.addEventListener('click', function() {
	if (searchBar.style.transform === 'translateY(0%)') {
	  searchBar.style.transform = 'translateY(-100%)';
	} else {
	  searchBar.style.transform = 'translateY(0%)';
	  menu.style.transform = 'translateY(-100%)';
	}
  });
});