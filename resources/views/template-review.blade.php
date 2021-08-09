{{--
    Template Name: Glantz: 2020 Annual Report
--}}

@extends('layouts.base')

@section('fullbody')
    @php
        $data = TemplateReview::data();
    @endphp

    @include('partials.header-annual-report')

    {{-- Annual Report Hero --}}
    <section class="gf-intro-hero" style="background-image:url('{{ $data['annual_report_hero_image'] }}')">
        <div class="container">
            <div class="inner__content">
                <div class="gf-tagline">
                    <div class="gf-hero-headline">{{ $data['annual_report_hero_subtitle'] }}</div>
                    <div class="gf-rule"></div>
                    <div class="gf-hero-headline">{{ $data['annual_report_hero_years'] }}</div>
                </div>

                <div class="inner__shape-container">
                    <div class="inner__shape">
                        <h1>{{ $data['annual_report_hero_title'] }}</h1>
                        {{ $data['annual_report_hero_text'] }}
                        @if ($data['annual_report_hero_text'])
                            <a href="{{ $data['annual_report_hero_cta']['url'] }}"  {{ $data['annual_report_hero_cta']['target'] }} class="btn-underline"> {{ $data['annual_report_hero_cta']['text'] }}</a>
                        @endif
                    </div>
                    <div class="hero-background-shape"></div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer-annual-report')
@endsection
