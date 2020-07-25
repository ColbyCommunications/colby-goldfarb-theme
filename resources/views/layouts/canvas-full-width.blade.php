@extends('layouts.base')

@section('fullbody')
    <div class="wrap container-fluid" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
      </div>
    </div>
    @php wp_footer() @endphp
@endsection
