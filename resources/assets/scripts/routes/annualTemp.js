export default () => {
    function gsapIntro() {
        console.log('gsap');
        const tl = gsap.timeline();

        if (window.innerWidth / window.innerHeight > 1.5) {
            console.log('2');
            tl.from('.gf-annual-report-logo', { y: 200 })
                .to('.gf-annual-report-logo', { y: 0 })
                .to('.gf-hero-overlay', { autoAlpha: 0 })
                .from('.gf-tagline', { y: 210, autoAlpha: 1 })
                .to('.gf-tagline', { y: 0, autoAlpha: 1 })
                .from('.tagline-trigger', { y: 100, autoAlpha: 0 })
                .to('.tagline-trigger', { y: 0, autoAlpha: 1 });
        } else if (window.screen.width >= 1024) {
            console.log('>= 1024');
            tl.from('.gf-annual-report-logo', { y: 300 })
                .to('.gf-annual-report-logo', { y: 0 })
                .to('.gf-hero-overlay', { autoAlpha: 0 })
                .from('.gf-tagline', { y: 250, autoAlpha: 1 })
                .to('.gf-tagline', { y: 0, autoAlpha: 1 })
                .from('.tagline-trigger', { y: 100, autoAlpha: 0 })
                .to('.tagline-trigger', { y: 0, autoAlpha: 1 });
        } else if (window.screen.width <= 1024) {
            console.log('<= 1024');
            tl.from('.gf-annual-report-logo', { y: 200 })
                .to('.gf-annual-report-logo', { y: 0 })
                .to('.gf-hero-overlay', { autoAlpha: 0 })
                .from('.gf-tagline', { y: 210, autoAlpha: 1 })
                .to('.gf-tagline', { y: 0, autoAlpha: 1 })
                .from('.tagline-trigger', { y: 100, autoAlpha: 0 })
                .to('.tagline-trigger', { y: 0, autoAlpha: 1 });
        }

        ScrollTrigger.create({
            trigger: '.gf-intro-hero',
            animation: tl,
            pin: true,
            start: 'bottom bottom',
            end: '+=100vh top',
            scrub: 1, // I like the 1 sec delay, set to true for exact anime on scroll
            markers: false,
        });
    }

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

            if (scrollObject.y >= 1000) {
                siteLogo.classList.add('gf-annual-report-logo-active');
            } else {
                siteLogo.classList.remove('gf-annual-report-logo-active');
            }
        }

        window.onscroll = getScrollPosition;
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

    function reportWindowSize() {
        console.log(window.innerWidth / window.innerHeight);
    }

    window.onresize = reportWindowSize;

    toggleMenu();
    gsapIntro();
    scrollPosition();
    fireGfModal();
};
