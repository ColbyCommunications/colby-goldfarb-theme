{{--
    Template Name: Colby Base Theme Elementor Canvas
--}}

@extends('layouts.elementor-canvas')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
    @endwhile
@endsection
