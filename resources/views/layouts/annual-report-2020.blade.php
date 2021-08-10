<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head-annual-report')
  <body @php body_class() @endphp>
    @include('partials.header-annual-report')
    @yield('content')
    @include('partials.footer-annual-report')
    @php wp_footer() @endphp
  </body>
</html>


