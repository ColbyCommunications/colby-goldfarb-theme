<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head-annual-report')
  <body @php body_class() @endphp>
    <div class="template__wrapper">
        @php do_action('get_header', 'annual-report') @endphp
        @include('partials.header-annual-report')
            @yield('content')
        @php do_action('get_footer', 'annual-report') @endphp
        @include('partials.footer-annual-report')
        @php wp_footer() @endphp
    <div>
  </body>
</html>


