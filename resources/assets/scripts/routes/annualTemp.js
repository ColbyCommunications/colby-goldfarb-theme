(() => {
    function toggleMenu() {
        const menu = document.querySelector('.gf-annual-report-nav-btn');
        const menuDrawer = document.querySelector('.gf-nav-menu');
        const menuLinks = document.querySelectorAll('.gf-nav-menu li a');

        menu.addEventListener('click', (e) => {
            menuDrawer.classList.toggle('gf-menu-active');
            e.preventDefault();
        });

        Array.from(menuLinks).forEach((navElement) => {
            navElement.addEventListener('click', (e) => {
                menuDrawer.classList.toggle('gf-menu-active');
            });
        }); 

        return false;
    }

    function scrollPosition() {
        let scrollObject = {};
        const siteLogo = document.querySelector('.gf-annual-report-logo');

        function getScrollPosition() {
            scrollObject = {
                x: window.pageXOffset,
                y: window.pageYOffset,
            };

            if (scrollObject.y >= 200) {
                siteLogo.classList.add('gf-annual-report-logo-active');
            } else {
                siteLogo.classList.remove('gf-annual-report-logo-active');
            }
        }

        window.onscroll = getScrollPosition();
    }

    function fireGfModal(currentId) {
        const modalLink = document.getElementById(currentId);

        const modalTitle = document.querySelector('#gf-modal-title');
        const modalDate = document.getElementById('gf-modal-date');
        const modalContent = document.getElementById('gf-modal-youtube');
        // let modalTitle = document.getElementById('ggf-modal-content');

        if (modalLink) {
            const youTubeURL = 'https://www.youtube.com/embed/';

            const modalTitleData = modalLink.getAttribute('data-title');
            const modalContentData = modalLink.getAttribute('data-content');
            const modalEventDateData = modalLink.getAttribute('data-ev-date');
            const modalEventYouTubeCode = modalLink.getAttribute('data-yt-id');
        }
    }

    toggleMenu();
    scrollPosition();
    fireGfModal();
})();
