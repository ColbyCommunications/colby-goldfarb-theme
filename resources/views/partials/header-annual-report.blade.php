<ul id="gf-nav-menu" class="gf-nav-menu">
    @if ($data['show_section_letter'])
    <li class="gf-nav__item"><a href="#gf_image_text_section">{{ $data['letter_section_title'] }}</a></li>
    @endif

    @if ($data['show_section_annual_theme'])
    <li class="gf-nav__item"><a href="#annual_overview">{{ $data['annual_theme_overview_title'] }}</a></li>
    @endif
    
    @if ($data['show_section_virtual_events'])
    <li class="gf-nav__item"><a href="#virtual_events">{{ $data['goldfarb_center_virtual_events_title'] }}</a></li>
    @endif

    @if ($data['show_section_student_leadership'])
    <li class="gf-nav__item"><a href="#gf_student_leadership">{{ $data['student_leadership_title'] }}</a></li>
    @endif

    @if ($data['show_section_student_internships'])
    <li class="gf-nav__item"><a href="#gf_student_internships">{{ $data['student_internships_title'] }}</a></li>
    @endif

    @if ($data['show_section_franko_maisel'])
    <li class="gf-nav__item"><a href="#gf_franko_maisel">{{ $data['franko_maisel_prize_title'] }}</a></li>
    @endif

    @if ($data['show_section_faculty_engagement'])
    <li class="gf-nav__item"><a href="#gf_faculty_engaugement">{{ $data['faculty_engagement_title'] }}</a></li>
    @endif
    
    @if ($data['show_section_annual_theme_policy_symposium'])
    <li class="gf-nav__item"><a href="#policy_symposium">{{ $data['annual_theme_policy_symposium_title'] }}</a></li>
    @endif
</ul>
<!-- Hamburger Nav Button -->
<a href="#" id="gf-annual-report-nav-btn" class="gf-annual-report-nav-btn">
    <i class="fas fa-bars"></i>
</a>
<header class="gf-annual-navbar">
    <div class="container">
        <a href="#" class="gf-annual-report-logo">
            <!-- Logo -->
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 288 144" xml:space="preserve">
  <style>
    .st0{fill:#fff}
  </style>
  <path d="M95.9 95c-15.3 0-17-12.5-17-17 0-16.4 7.8-21.2 14.1-21.2 5.2 0 5.9 3.2 6.2 4.7 1.1 5.5 1.5 6.5 4.7 6.5 3.7 0 5.3-3.1 5.3-4.3 0-2.1-2.6-9.5-16.3-9.5-12.9 0-22.7 9-22.7 23.8 0 14.3 9.1 22.6 20.7 22.6 6.6 0 12.4-2.7 17.5-8.5.6-.6.8-1.1.8-1.5 0-.7-1.2-1.4-1.5-1.4-.5 0-.9.9-1.7 1.6-2 1.7-6.4 4.2-10.1 4.2" class="st0"/>
  <path d="M60 84.1c6.5 0 10.2 1.8 10.2 7.9 0 7.8-5.3 11.3-16.7 11.3-14 0-14.4-7.8-14.4-9.2 0-5.5 5.9-10 6.5-10H60zm-13.2-7.6c-2.3 0-4.7-.4-4.7-3.3 0-3.4 2.5-5.5 4.1-6.4 2 .9 6 1.1 7.2 1.1 11 0 17.8-6.4 17.8-17.2 0-2.6-1.9-7.7-3.8-9.7 1.5-.7 2.1-1.3 3.8-1.3 1.8 0 4.2 5.7 6.8 5.7 2.1 0 3.8-2 3.8-3.5 0-2.1-1.1-5.6-7.5-5.6-2.2 0-4.4.4-8.5 3-3.3-2.5-8-3.9-12.1-3.9-9 0-17.7 7-17.7 16.4 0 6.3 2 11.2 7.8 14.2-4.5 3.1-7.7 5.7-7.7 11.7 0 3.2 2.9 5.8 6 6.1-4.1 4-8.7 8.5-8.7 14.7 0 7.7 6.4 9.4 12.9 9.4 12.2 0 28.9-4.4 28.9-19.5 0-3 .1-11.9-13.6-11.9H46.8zm6.9-11.2c-7 0-9-6-9-11.9 0-3.5.1-15.4 9.4-15.4 8.4 0 8.4 10.6 8.4 12.1 0 4.3-.6 15.2-8.8 15.2M150.9 61v6.2h-1l-.2-1.5c-.3.6-1 1.6-2.8 1.6-3.4 0-4.2-3.5-4.2-6 0-2.2.5-6.3 4.4-6.3 2.7 0 3.5 1.8 3.9 3.6l-1.8.4c-.2-1.1-.5-2.4-2.1-2.4-1.8 0-2.4 1.9-2.4 4.5 0 2 .3 4.5 2.4 4.5 2 0 2-2.3 2-3.1H147V61h3.9zM159.4 62.6c0 2-.5 4.7-3.5 4.7-2.7 0-3.4-2.3-3.4-4.6 0-2.1.6-4.6 3.5-4.6 2.7 0 3.4 2.3 3.4 4.5zm-5 .1c0 2.3.5 3.2 1.5 3.2s1.5-.9 1.5-3.2c0-2.3-.5-3.2-1.5-3.2s-1.5 1.1-1.5 3.2zM162.8 55.2V67H161V55.2h1.8zM171.3 55.2V67h-1.7v-1.3c-.2.5-.7 1.5-2.2 1.5-2.5 0-2.9-2.8-2.9-4.5 0-3 1.3-4.6 3-4.6 1.4 0 1.8.8 2 1.2v-4.1h1.8zm-1.8 6.7c0-.6 0-1.1-.4-1.7-.2-.3-.6-.7-1.2-.7-1.3 0-1.5 1.7-1.5 3.1 0 1.5.2 3.3 1.5 3.3.5 0 .9-.3 1.2-.7.2-.4.4-.8.4-1.7v-1.6zM177 58.3v1.5h-1.6v7.3h-1.8v-7.3h-1.2v-1.5h1.2c0-1.6.1-3.4 2.5-3.4.5 0 .8.1 1.1.1v1.4c-.2 0-.4-.1-.7-.1-1.2 0-1.2.6-1.2 2h1.7zM177.9 60.6c.4-2.3 2.5-2.5 3.3-2.5 1.3 0 2 .5 2.4.9.6.6.6 1.7.6 2.6v3c0 .7 0 1.8.1 2.4h-1.7c-.1-.4-.1-.6-.1-1.5-.3.6-.9 1.7-2.5 1.7-1.4 0-2.5-.9-2.5-2.5 0-1.4.8-2.4 1.8-2.7.7-.2 1.7-.4 3-.4v-.4c0-.6 0-1.9-1.3-1.9-1.2 0-1.3 1-1.4 1.4l-1.7-.1zm4.5 2.2h-.5c-2.1 0-2.4 1-2.4 1.9 0 1 .6 1.3 1.2 1.3.8 0 1.7-.8 1.7-2.7v-.5zM187.7 58.3v2c.2-.5.7-2.1 2.2-2.1h.3V60c-1.9-.2-2.3 1.2-2.3 2.6v4.5h-1.8v-8.8h1.6zM192.9 55.2v4.1c.3-.4.8-1.2 2-1.2 2.4 0 3 2.6 3 4.4 0 1-.1 3.4-1.7 4.3-.6.3-1.2.4-1.5.4-1.5 0-1.9-.8-2.1-1.4-.2.4-.2.6-.4 1.2h-1V55.2h1.7zm0 8.1c0 .6 0 2.5 1.5 2.5 1.2 0 1.5-1.1 1.5-3.3 0-1.8-.3-3.1-1.5-3.1-.2 0-.6 0-1 .5-.6.7-.6 1.3-.6 1.8v1.6zM211.9 63.3c-.1 1-.6 3.9-3.9 3.9-3.9 0-4.3-4.1-4.3-6.1 0-1.9.4-6.2 4.3-6.2 3.3 0 3.7 3 3.9 4l-1.8.2c-.1-1-.4-2.7-2-2.7-2 0-2.3 2.7-2.3 4.6 0 2.1.4 4.4 2.3 4.4 1.2 0 1.7-.9 2-2.6l1.8.5zM215 62.9c0 1 0 2.9 1.7 2.9 1.2 0 1.4-1 1.5-1.6l1.6.2c-.2.7-.7 2.8-3.2 2.8-2.6 0-3.5-2.2-3.5-4.5 0-3.2 1.5-4.7 3.5-4.7 1.4 0 2.3.8 2.6 1.5.6 1.2.6 2.3.6 3.3H215zm3.1-1.2c0-.3 0-.7-.2-1.2-.3-.9-1-1.1-1.3-1.1-1.1 0-1.5 1.1-1.6 2.3h3.1zM221.4 58.3h1.7v1.4c.2-.5.7-1.6 2.2-1.6.6 0 1.5.1 2 1.1.3.6.3 1.4.3 2.2V67h-1.8v-5.5c0-1.1 0-2-1-2-1.4 0-1.4 1.7-1.4 2.6V67h-1.8v-8.7zM233.2 59.8h-1.7v3.9c0 1.5 0 2.1 1.2 2.1.3 0 .5 0 .7-.1v1.4c-.4.1-.8.2-1.3.2-2.4 0-2.4-1.6-2.4-3.5v-4h-1.1v-1.5h1.2l.1-2.3 1.6-.1v2.4h1.7v1.5zM236 62.9c0 1 0 2.9 1.7 2.9 1.2 0 1.4-1 1.5-1.6l1.6.2c-.2.7-.7 2.8-3.2 2.8-2.6 0-3.5-2.2-3.5-4.5 0-3.2 1.5-4.7 3.5-4.7 1.4 0 2.3.8 2.6 1.5.6 1.2.6 2.3.6 3.3H236zm3.1-1.2c0-.3 0-.7-.2-1.2-.3-.9-1-1.1-1.3-1.1-1.1 0-1.5 1.1-1.6 2.3h3.1zM244 58.3v2c.2-.5.7-2.1 2.2-2.1h.3V60c-1.9-.2-2.3 1.2-2.3 2.6v4.5h-1.8v-8.8h1.6zM146.1 76.4v1.3h-1.5v6.7H143v-6.7h-1v-1.3h1.1c0-1.5 0-3.1 2.3-3.1.5 0 .7 0 1 .1v1.3c-.1 0-.3-.1-.6-.1-1.1 0-1.1.5-1.1 1.8h1.4zM153 80.3c0 1.9-.4 4.3-3.2 4.3-2.5 0-3.1-2.1-3.1-4.2 0-1.9.5-4.2 3.2-4.2 2.5 0 3.1 2.1 3.1 4.1zm-4.5.1c0 2.1.5 2.9 1.4 2.9s1.4-.8 1.4-3c0-2.1-.5-2.9-1.4-2.9-1 0-1.4 1-1.4 3zM156 76.4v1.8c.2-.5.7-2 2-2h.3V78c-1.7-.2-2.1 1.1-2.1 2.4v4.1h-1.7v-8h1.5zM165.8 73.5c1.2 0 2.3.1 3.1.9.7.7.9 1.6.9 2.4 0 .8-.2 2.1-1.2 2.7-.8.6-2 .6-2.7.6h-.9v4.2h-1.8V73.5h2.6zm-.9 1.4v3.8h.9c.8 0 2.1 0 2.1-1.9 0-.3 0-.8-.4-1.3-.4-.6-.9-.6-1.7-.6h-.9zM172.7 76.4v5.1c0 1.1 0 1.8.9 1.8 1.3 0 1.3-1.5 1.3-3v-3.9h1.7v8h-1.5v-1.2c-.3.6-.7 1.4-2 1.4-2 0-2-1.8-2-3.1v-5.1h1.6zM180.1 73.5v3.7c.3-.4.8-1.1 1.9-1.1 2.2 0 2.7 2.4 2.7 4.1 0 .9-.1 3.1-1.6 3.9-.5.3-1.1.3-1.4.3-1.4 0-1.7-.7-2-1.3-.1.3-.2.5-.4 1.1h-.9V73.5h1.7zm0 7.5c0 .5 0 2.3 1.4 2.3 1.1 0 1.4-1 1.4-3 0-1.6-.2-2.8-1.4-2.8-.2 0-.6 0-.9.4-.5.6-.5 1.2-.5 1.6V81zM187.9 73.5v10.9h-1.7V73.5h1.7zM189.6 75.3v-1.8h1.7v1.8h-1.7zm1.8 1.1v8h-1.7v-8h1.7zM197.2 79.2c-.1-.9-.3-1.7-1.2-1.7-1.1 0-1.4 1.1-1.4 3.1 0 .7 0 2.7 1.4 2.7 1 0 1.1-1.1 1.2-1.7l1.6.1c-.1 1-.4 3-2.9 3-2.6 0-3-2.5-3-4.2 0-1.9.5-4.2 3.1-4.2 2.4 0 2.7 2 2.8 2.9h-1.6zM208.1 73.5l2.9 10.9h-1.8l-.7-2.7h-3.2l-.7 2.7h-1.7l3.1-10.9h2.1zm0 6.8l-1.2-5-1.2 5h2.4zM215.3 76.4v1.3h-1.5v6.7h-1.6v-6.7h-1.1v-1.3h1.1c0-1.5 0-3.1 2.3-3.1.5 0 .7 0 1 .1v1.3c-.1 0-.3-.1-.6-.1-1.1 0-1.1.5-1.1 1.8h1.5zM220 76.4v1.3h-1.5v6.7h-1.6v-6.7h-1.1v-1.3h1.1c0-1.5 0-3.1 2.3-3.1.5 0 .7 0 1 .1v1.3c-.1 0-.3-.1-.6-.1-1.1 0-1.1.5-1.1 1.8h1.5zM220.9 78.4c.4-2.1 2.3-2.3 3-2.3 1.2 0 1.8.4 2.2.9.5.6.5 1.5.5 2.4v2.7c0 .7 0 1.7.1 2.2h-1.5c-.1-.4-.1-.6-.1-1.3-.3.6-.8 1.5-2.3 1.5-1.3 0-2.2-.8-2.2-2.3 0-1.3.7-2.2 1.7-2.5.7-.2 1.6-.4 2.7-.3v-.3c0-.6 0-1.7-1.2-1.7-1.1 0-1.2.9-1.3 1.3l-1.6-.3zm4.1 2.1h-.5c-1.9 0-2.2 1-2.2 1.7 0 1 .5 1.2 1.1 1.2.7 0 1.6-.7 1.6-2.5v-.4zM228.3 75.3v-1.8h1.7v1.8h-1.7zm1.8 1.1v8h-1.7v-8h1.7zM233.4 76.4v1.8c.2-.5.7-2 2-2h.3V78c-1.7-.2-2.1 1.1-2.1 2.4v4.1h-1.7v-8h1.5zM240.3 78.6c-.1-.4-.4-1.2-1.4-1.2-.7 0-1 .5-1 1 0 .7.5.9 1.6 1.3 1 .3 2.4.8 2.4 2.4 0 1.2-.9 2.5-3 2.5-2.5 0-2.8-1.7-2.9-2.3l1.4-.3c.1.4.3 1.4 1.5 1.4 1.1 0 1.3-.8 1.3-1.1 0-.8-.7-1-1.4-1.2-1.1-.4-2.5-.8-2.5-2.4 0-1.3 1-2.5 2.7-2.5 2 0 2.5 1.5 2.6 2.1l-1.3.3zM142.7 95.2c.4-2.1 2.3-2.3 3-2.3 1.2 0 1.8.4 2.2.9.5.6.5 1.5.5 2.4v2.7c0 .7 0 1.7.1 2.2H147c-.1-.4-.1-.6-.1-1.3-.3.6-.8 1.5-2.3 1.5-1.3 0-2.2-.8-2.2-2.3 0-1.3.7-2.2 1.7-2.5.7-.2 1.6-.4 2.7-.3v-.3c0-.6 0-1.7-1.2-1.7-1.1 0-1.2.9-1.3 1.3l-1.6-.3zm4.1 2h-.5c-1.9 0-2.2 1-2.2 1.7 0 1 .5 1.2 1.1 1.2.7 0 1.6-.7 1.6-2.5v-.4zM153.6 94.4h-1.5V98c0 1.4 0 1.9 1.1 1.9h.7v1.3c-.3.1-.7.1-1.2.1-2.2 0-2.2-1.5-2.2-3.2v-3.7h-1v-1.3h1.1l.1-2.1 1.5-.1v2.2h1.5v1.3zM166.1 97.7c-.1.9-.5 3.6-3.6 3.6-3.5 0-3.9-3.8-3.9-5.6 0-1.7.3-5.7 4-5.7 3 0 3.4 2.8 3.5 3.7l-1.7.2c-.1-.9-.3-2.5-1.8-2.5-1.9 0-2.1 2.5-2.1 4.2 0 2 .4 4.1 2.1 4.1 1.1 0 1.6-.8 1.8-2.4l1.7.4zM173.6 97c0 1.9-.4 4.3-3.2 4.3-2.5 0-3.1-2.1-3.1-4.2 0-1.9.5-4.2 3.2-4.2 2.4 0 3.1 2.2 3.1 4.1zm-4.6.1c0 2.1.5 2.9 1.4 2.9s1.4-.8 1.4-3c0-2.1-.5-2.9-1.4-2.9-1 0-1.4 1.1-1.4 3zM176.7 90.3v10.9H175V90.3h1.7zM180.2 90.3V94c.3-.4.8-1.1 1.9-1.1 2.2 0 2.7 2.4 2.7 4.1 0 .9-.1 3.1-1.6 3.9-.5.3-1.1.3-1.4.3-1.4 0-1.7-.7-2-1.3-.1.3-.2.5-.4 1.1h-.9V90.3h1.7zm0 7.4c0 .5 0 2.3 1.4 2.3 1.1 0 1.4-1 1.4-3 0-1.6-.2-2.8-1.4-2.8-.2 0-.6 0-.9.4-.5.6-.5 1.2-.5 1.6v1.5zM186.9 93.1l1.4 5.5 1.4-5.5h1.5l-2.6 8.5c-.4 1.3-.8 2.4-2.3 2.4-.4 0-.6 0-.9-.1v-1.3h.6c.9 0 1.1-.3 1.5-1.8l-2.3-7.8h1.7z" class="st0"/>
</svg>
        </a>
    </div>
</header>