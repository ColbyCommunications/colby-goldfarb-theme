function toggleMenu () {
   
    var menu = document.querySelector('.gf-annual-report-nav-btn');
    var menuDrawer = document.querySelector('.gf-nav-menu');
    var menuLinks = document.querySelectorAll('.gf-nav-menu li a');

    menu.addEventListener('click', function(e){

        menuDrawer.classList.toggle('gf-menu-active');
        e.preventDefault();

    });

 
    
      
      Array.from(menuLinks).forEach(function(navElement) {

          navElement.addEventListener('click', function(e){
              menuDrawer.classList.toggle('gf-menu-active');
          });

      })
      
      return false;  
   
}


function scrollPosition() {

  var scrollObject = {};
  var siteLogo = document.querySelector('.gf-annual-report-logo');


  window.onscroll = getScrollPosition;

  function getScrollPosition(){
      scrollObject = {
        x: window.pageXOffset,
        y: window.pageYOffset
      }
      
      if(scrollObject.y >= 200) {

        siteLogo.classList.add('gf-annual-report-logo-active');
          
      } else {

        siteLogo.classList.remove('gf-annual-report-logo-active');
         
      }
  }
}

function fireGfModal(current_id) {

    var modalLink = document.getElementById(current_id);
    
    var modalTitle = document.querySelector('#gf-modal-title');
    var modalDate = document.getElementById('gf-modal-date');
    var modalContent = document.getElementById('gf-modal-youtube');
    var modalTitle = document.getElementById('ggf-modal-content');

    if(modalLink) { 
      var youTubeURL = 'https://www.youtube.com/embed/';

      var modalTitleData = modalLink.getAttribute('data-title');
      var modalContentData = modalLink.getAttribute('data-content');
      var modalEventDateData = modalLink.getAttribute('data-ev-date');
      var modalEventYouTubeCode = modalLink.getAttribute('data-yt-id');

    } 
    
  
  
}

toggleMenu();
scrollPosition();
fireGfModal();



