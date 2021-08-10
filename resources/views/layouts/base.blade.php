<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @yield('fullbody')

     @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

    <script src="{{ get_theme_file_uri() . '/libraries/fslightbox-basic-3.2.1/fslightbox.js' }}"></script>
  </body>
</html>
