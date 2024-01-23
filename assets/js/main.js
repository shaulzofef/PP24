// Check if the next title is in the viewport 
function isInViewport(element) {
  var rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}


document.addEventListener('DOMContentLoaded', function() {
  var readMoreButtons = document.querySelectorAll('.read-more-button');

  readMoreButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
      event.preventDefault();

      var excerptContent = this.closest('.post-excerpt').querySelector('.excerpt-content');
      var fullArticleContent = excerptContent.querySelector('.full-article-content');

      if (this.textContent.trim() === '+') {
        // Show the full article content
        fullArticleContent.style.display = 'block';

        // Immediately get the scrollHeight and then set the height to 'auto'
        var fullHeight = fullArticleContent.scrollHeight;
        excerptContent.style.height = fullHeight + 'px';

        // Use setTimeout to transition to 'auto' height
        setTimeout(() => {
          excerptContent.style.height = 'auto';
        }, 500);

        this.textContent = '-';
      } else {
        // Get current full height before setting to specific value
        var currentFullHeight = excerptContent.scrollHeight;

        // Transition to the specific height and then to zero
        excerptContent.style.height = currentFullHeight + 'px';
        setTimeout(() => {
          excerptContent.style.height = '288px';
        }, 10); // Small timeout

        // Set fullArticleContent to be hidden after the transition
        setTimeout(() => {
          fullArticleContent.style.display = 'none';
        }, 300);

        this.textContent = '+';

        // Set a small timeout to allow the collapse transition to complete
        setTimeout(() => {
          // Find the next <h3> directly
          var nextTitle = this.nextElementSibling;

          // Check if the next title is not in the viewport
          if (nextTitle && !isInViewport(nextTitle)) {
            nextTitle.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          }
        }, 300); // Adjust timeout as needed to match the collapse transition
      }
    });
  });
});



// Menu and Search Bar Toggle 

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