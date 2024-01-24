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

        // Add the 'expanded' class to the button
        this.classList.add('expanded');

        this.textContent = '-';
      } else {
        // Get current full height before setting to specific value
        var currentFullHeight = excerptContent.scrollHeight;

        // Transition to the specific height and then to zero
        excerptContent.style.height = currentFullHeight + 'px';
        setTimeout(() => {
          excerptContent.style.height = '304px';
        }, 10); // Small timeout

        // Set fullArticleContent to be hidden after the transition
        setTimeout(() => {
          fullArticleContent.style.display = 'none';
        }, 300);

        // Remove the 'expanded' class from the button
        this.classList.remove('expanded');

        this.textContent = '+';

        // Scroll to the next articleTitle after collapsing
        setTimeout(() => {   
          var nextArticleTitle = button.closest('.flex-container').parentNode.nextElementSibling.querySelector('.articleTitle');

          // Check if the next articleTitle element exists before scrolling
          if (nextArticleTitle) {
            var headerHeight = 50; 
            var offset = nextArticleTitle.offsetTop - headerHeight;
            window.scrollTo({ top: offset, behavior: 'smooth' });
          } else {
          }
        }, 350);
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