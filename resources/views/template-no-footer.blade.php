{{--
    Template Name: No Footer
--}}

@extends('layouts.no-footer')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.page-header')
        @include('partials.content-page')
    @endwhile
@endsection
