{{--
    Template Name: Colby Base Theme Elementor Blank
--}}

@extends('layouts.elementor-blank')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
    @endwhile
@endsection
