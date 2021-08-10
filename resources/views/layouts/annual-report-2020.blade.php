<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head-annual-report')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header-annual-report')
        @yield('content')
    @php do_action('get_footer') @endphp
    @include('partials.footer-annual-report')
    @php wp_footer() @endphp
  </body>
</html>


