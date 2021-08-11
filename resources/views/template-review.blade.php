{{--
    Template Name: Glantz: 2020 Annual Report
--}}

@extends('layouts.annual-report-2020')

@section('content')
    @php
        $data = TemplateReview::data();
    @endphp

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
                        {!! $data['annual_report_hero_text'] !!}
                        @if ($data['annual_report_hero_text'])
                            <a href="{{ $data['annual_report_hero_cta']['url'] }}"  {{ $data['annual_report_hero_cta']['target'] }} class="btn-underline"> {{ $data['annual_report_hero_cta']['text'] }}</a>
                        @endif
                    </div>
                    <div class="hero-background-shape"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- Letter From The Executive --}}
    <section id="gf_image_text_section" class="gf-image-text-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 order-md-2">
                    <h2>{{ $data['letter_section_title'] }}</h2>
                    {{ $data['letter_section_text'] }}
                </div>
                <div class="col-md-5 order-md-1">
                    <div class="gf-image-wrapper">
                        <div class="gf-image" style="background-image:url('{{ $data['letter_section_image']['url'] }}')" aria-label="Alt Text Here"></div>
                        <div class="gf-image-bg-shape"></div>
                    </div>
                    <div class="gf-title-box">
                        <p class="gf-attribution-name">{{ $data['letter_section_image_attribution_title'] }}<p>
                        <div class="gf-attribution-aff">
                            {{ $data['letter_section_image_attribution_text'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="yellow-circle-ornanament"></div>
    </section>

    {{-- Annual Theme Overview --}}
    <section class="annual-overview" id="annual_overview">
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <h2>{{ $data['annual_theme_overview_title'] }}</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="inner__wrapper">
                        {{ $data['annual_theme_overview_text'] }}
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="gf-big-number">
                        {{ $data['annual_theme_overview_stat_number'] }}
                    </span>
                    <div class="gf-attribution-aff">
                        {{ $data['annual_theme_overview_stat_number_caption'] }}
                    </div>
                    <div class="gf-fancy-text-wrapper">
                        <div class="gf-fancy-text">
                            <p class="gf-blockquote">
                                {{ $data['annual_theme_overview_attribution_box_text'] }}
                            </p>
                        </div>
                        <div class="gf-fancy-text-shape"></div>
                    </div>
                    <div class="gf-title-box">
                        <p class="gf-attribution-name">{{ $data['annual_theme_overview_attribution_name'] }}<p>
                        <div class="gf-attribution-aff">
                            {{ $data['annual_theme_overview_attribution_caption'] }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
