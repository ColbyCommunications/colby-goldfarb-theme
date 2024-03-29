<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/wcz1udr.css">

    {{-- GSAP 3 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js" integrity="sha512-UxP+UhJaGRWuMG2YC6LPWYpFQnsSgnor0VUF3BHdD83PS/pOpN+FYbZmrYN+ISX8jnvgVUciqP/fILOXDjZSwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>

    @php wp_head() @endphp
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>


    <script>
        function fireGfModal(currentId) {
            console.log(currentId);
            var modalLink = document.getElementById(currentId);
            var modalTitle = document.querySelector('#gf-modal-title');
            var modalDate = document.getElementById('gf-modal-date');
            var modalYT = document.getElementById('gf-modal-youtube');
            var modalContent = document.getElementById('gf-modal-content');
            if (modalLink) {
                var youTubeURL = 'https://www.youtube.com/embed/';
                var modalTitleData = modalLink.getAttribute('data-title');
                var modalContentData = modalLink.getAttribute('data-content');
                var modalEventDateData = modalLink.getAttribute('data-ev-date');
                var modalEventYouTubeCode = modalLink.getAttribute('data-yt-id');
            }
            modalTitle.innerHTML = modalTitleData;
            modalDate.innerHTML = modalEventDateData;
            modalContent.innerHTML = modalContentData;
            modalYT.src = modalEventYouTubeCode;
            if (!modalEventYouTubeCode) {
                modalYT.style.display = "none";
            }
            var elem = document.querySelector('.gf-virtual-event-modal');
            // Set color to purple
            elem.style.display = 'block';
        }
        function closeGFmodal () {
            var modalTitle = document.querySelector('#gf-modal-title');
            var modalDate = document.getElementById('gf-modal-date');
            var modalYT = document.getElementById('gf-modal-youtube');
            var modalContent = document.getElementById('gf-modal-content');
            modalTitle.innerHTML = "";
            modalDate.innerHTML = "";
            modalContent.innerHTML = "";
            modalYT.src = "";
            var elem = document.querySelector('.gf-virtual-event-modal');
            modalYT.style.display = "block";
            elem.style.display = 'none';
        }
    </script>

</head>