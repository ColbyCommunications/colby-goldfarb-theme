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
        <div class="gf-hero-overlay"></div>
        <div class="container">
            <div class="inner__content">
                <div class="gf-tagline">
                    <div class="gf-hero-headline">{{ $data['annual_report_hero_subtitle'] }}</div>
                    <div class="gf-rule"></div>
                    <div class="gf-hero-headline">{{ $data['annual_report_hero_years'] }}</div>
                </div>

                <div class="inner__shape-container tagline-trigger">
                    <div class="inner__shape">
                        <h1>{{ $data['annual_report_hero_title'] }}</h1>
                        {!! $data['annual_report_hero_text'] !!}
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
                <div class="col-lg-7 order-lg-2">
                    <h2>{{ $data['letter_section_title'] }}</h2>
                    {!! $data['letter_section_text'] !!}
                </div>
                <div class="col-lg-5 order-lg-1">
                    <div class="gf-image-wrapper">
                        <div class="gf-image" style="background-image:url('{{ $data['letter_section_image']['url'] }}')" aria-label="Alt Text Here"></div>
                        <div class="gf-image-bg-shape"></div>
                    </div>
                    <div class="gf-title-box">
                        <p class="gf-attribution-name">{{ $data['letter_section_image_attribution_title'] }}<p>
                        <div class="gf-attribution-aff">
                            {!! $data['letter_section_image_attribution_text'] !!}
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
                        {!! $data['annual_theme_overview_text'] !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="gf-big-number">
                        {{ $data['annual_theme_overview_stat_number'] }}
                    </span>
                    <div class="gf-attribution-aff">
                        {!! $data['annual_theme_overview_stat_number_caption'] !!}
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
                            {!! $data['annual_theme_overview_attribution_caption'] !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Virtual Events --}}
    <section class="swiper-carousel virtual-events" id="virtual_events">
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <h2>{{ $data['goldfarb_center_virtual_events_title'] }}</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner__wrapper">
                <h3>{{ $data['goldfarb_center_virtual_events_header'] }}</h3>
                {!! $data['goldfarb_center_virtual_events_text'] !!}
            </div>

            {{-- Swiper --}}
            <div class="gf-slider__wrapper">
                <div class="swiper-container gfSwiperOne">
                    <div class="gf-slider-arrows">
                        <div class="swiper-button-next gf-next-one"></div>
                        <div class="swiper-button-prev gf-prev-one"></div>
                    </div>
                    <div class="swiper-wrapper">
                        @foreach ($data['goldfarb_center_virtual_events_carousel_sub_field_data'] as $ve_slide )

                        {{-- Slide --}}
                        <div class="swiper-slide">
                            <blockquote class="gf-blockquote">
                                {{ $ve_slide['virtual_events_blockquote'] }}
                            </blockquote>
                            <div class="gf-title-box">
                                <p class="gf-attribution-name">{{ $ve_slide['virtual_events_attribution_name'] }}<p>
                                <div class="gf-attribution-aff">
                                    {!! $ve_slide['virtual_events_attribution_text'] !!}
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                    <div class="swiper-pagination gf-swiper-pg-one"></div>
                </div>
                <div class="gf-background-shape"></div>
            </div>

            {{-- Cards Container --}}
                <div class="container gf-cards-container">
                    <div class="row gy-5">
                        @foreach( $data['virtual_events_post_data'] as $post )
                            @if( $post['is_featured'] == false )
                                {{-- Standard Cards --}}
                                <div class="col-md-4">
                                    <article class="gf-card">
                                        @if($post['has_post_thumbnail'])
                                            <div class="gf-img" style="background-image:url('{{ $post['the_post_thumbnail_url'] }} ')" aria-label="Alt Text Here"></div>
                                        @endif
                                        <div class="gf-inner-content">
                                            @if($post['cats'])
                                                <span class="category-name">{{ $post['category_name'] }}</span>
                                            @endif
                                            <h4>{{ $post['the_title'] }}</h4>
                                            {{ $post['the_excerpt'] }}
                                        </div>
                                        <div class="gf-inner-link-wrapper">
                                            <a onClick="fireGfModal(this.id); event.preventDefault();" id="gf-event-trigger-{{ $post['original_post_data']->ID }}" class="btn-underline" data-title="{{ $post['the_title'] }}" data-ev-date="{{ $post['gf_event_date'] }}" data-content="{{ $post['the_content'] }}" data-yt-id="{{ $post['lightbox_you_tube_embed_code'] }}" >Learn More</a>
                                        </div>
                                    </article>
                                </div>
                            @else
                                {{-- Featured Card --}}
                                <div class="col-md-12 d-flex featured-column">
                                    <div class="col-md-8 order-md-2">
                                        @if($post['has_post_thumbnail'])
                                            <div class="gf-long-featured-image" style="background-image:url('{{ $post['the_post_thumbnail_url'] }}')" aria-label="Alt Text Here">
                                                <div class="gf-image-ornament"></div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-4 order-md-1">
                                            @if($post['cats'])
                                                <span class="category-name">{{ $post['category_name'] }}</span>
                                            @endif
                                        <h4>{{ $post['the_title'] }}</h4>
                                            {{ $post['the_excerpt'] }}
                                        <div class="gf-inner-link-wrapper">
                                            <a href="#"
                                            onClick="fireGfModal(this.id); event.preventDefault();"
                                            id="gf-event-trigger-{{ $post['original_post_data']->ID }}"
                                            class="btn-underline" data-title="{{ $post['the_title'] }}"
                                            data-ev-date="{{ $post['gf_event_date'] }}"
                                            data-content="{{ $post['the_content'] }}"
                                            data-yt-id="{{ $post['lightbox_you_tube_embed_code'] }}" >Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="yellow-circle-ornanament"></div>
                </div>


            {{-- Initialize Swiper --}}
            <script>
            var swiper = new Swiper(".gfSwiperOne", {
                loop: true,
                navigation: {
                    nextEl: ".gf-next-one",
                    prevEl: ".gf-prev-one",
                },
                pagination: {
                    el: ".gf-swiper-pg-one",
                    clickable: true
                },
            });
            </script>
        </div>
    </section>

    {{-- Student Leadership --}}
    <section class="gf-student-leadership" id="gf_student_leadership">
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <h2>{{ $data['student_leadership_title'] }}</h2>
                </div>
            </div>
        </div>
        {{-- Intro Text --}}
        <div class="container gf-intro-text">
            <div class="row">
                <div class="col-md-8">
                    <h3>{{ $data['student_leadership_header'] }}</h3>
                    <p>{!! $data['student_leadership_text'] !!}</p>
                </div>
            </div>
        </div>
        {{-- Slider Section --}}
        <div class="container">
            {{-- Swiper --}}

                <div class="gf-slider__wrapper">
                    <div class="swiper-container gfSwiperTwo">
                        <div class="gf-slider-arrows">
                            <div class="swiper-button-next gf-next-two"></div>
                            <div class="swiper-button-prev gf-prev-two"></div>
                        </div>
                        <div class="swiper-wrapper">
                            @foreach ( $data['student_leadership_carousel_sub_field_data'] as $slide )
                                {{-- Slide --}}
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="gf-image-wrapper">
                                                <div class="gf-image" style="background-image:url('{{ $slide['student_leadership_image']['url'] }}')"  aria-label="{{ $data['student_leadership_image']['alt']}}"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <blockquote class="gf-blockquote">
                                                {{ $slide['student_leadership_blockquote'] }}
                                            </blockquote>
                                            <a href="{{ $slide['student_leadership_cta_link']['url'] }}" class="btn-underline" {{ $slide['$student_leadership_cta_link']['target'] }}>{{ $slide['student_leadership_cta_link']['text'] }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination gf-swiper-pg-two"></div>
                    </div>
                    <div class="gf-background-shape"></div>
                </div>
                {{-- Initialize Swiper --}}
                <script>
                var swiper = new Swiper(".gfSwiperTwo", {
                    loop: true,
                    navigation: {
                        nextEl: ".gf-next-two",
                        prevEl: ".gf-prev-two",
                    },
                    pagination: {
                        el: ".gf-swiper-pg-two",
                        clickable: true
                    },
                });
                </script>
            </div>

            <div class="container">
                @foreach ( $data['student_leadership_info_block_sub_field_data'] as $item )
                    <div class="row student-leadership-column">
                        <div class="col-md-4">
                            <div class="gf-col-image-wrapper">
                                <div class="gf-col-image" style="background-image:url('{{ $item['student_leadership_info_block_image']['url'] }}')" aria-label="{{ $item['$student_leadership_info_block_image']['alt'] }}"></div>
                                <div class="gf-col-image-bg-shape"></div>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div>{!! $item['student_leadership_blockquote'] !!}</div>
                        </div>
                    </div>

                @endforeach
            </div>

        <div class="yellow-circle-ornanament"></div>
    </section>

    {{-- Student Internships --}}
    <section class="gf-student-internships" id="gf_student_internships">
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <h2>{{ $data['student_internships_title'] }}</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="inner__wrapper">
                        <h3>{{ $data['student_internships_heading'] }}</h3>
                        {!! $data['student_internships_text'] !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="gf-big-number">
                        {{ $data['student_internships_stat_number'] }}
                    </span>
                    <div class="gf-attribution-aff">
                        {!!$data['student_internships_stat_caption'] !!}
                    </div>
                </div>
            </div>
        </div>

            {{-- Internship List --}}
            <ul class="container gf-dot-list">
                @foreach ( $data['student_internships_list_sub_field_data'] as $item )
                    {{-- Internship --}}
                    <li class="row gf-list-item">
                        <div class="col-md-3">
                            <h4>{{ $item['student_internships_list_title'] }}</h4>
                        </div>
                        <div class="col-md-9">
                            {!! $item['student_internships_list_text'] !!}
                        </div>
                    </li>
                @endforeach
            </ul>
        <div class="yellow-circle-ornanament"></div>
    </section>

    {{-- Franko-Maisel Prize --}}
    <section class="gf-image-text-section gf-franko-maisel" id="gf_franko_maisel">
        <div class="container">
            <div class="row">
                <div class="col-md-7 order-md-2">
                    <h2>{{ $data['franko_maisel_prize_title'] }}</h2>
                    <h3>{{ $data['franko_maisel_prize_header'] }}</h3>
                    {!! $data['franko_maisel_prize_text'] !!}
                </div>
                <div class="col-md-5 order-md-1">
                    <div class="gf-image-wrapper">
                        <div class="gf-image" style="background-image:url('{{ $data['franko_maisel_prize_image']['url'] }}')" aria-label="{{ $data['franko_maisel_prize_image']['alt'] }}"></div>
                        <div class="gf-image-bg-shape"></div>
                    </div>
                    <div class="gf-title-box">
                        <p class="gf-attribution-name">{{ $data['franko_maisel_prize_attiribution'] }}<p>
                        <div class="gf-attribution-aff">
                            {!! $data['franko_maisel_prize_attribution_caption'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="yellow-circle-ornanament"></div>
    </section>

    {{-- Faculty Engagement And Research --}}
    <section class="gf-faculty-engaugement" id="gf_faculty_engaugement">
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <h2>{{ $data['faculty_engagement_title'] }}</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>{{ $data['faculty_engagement_heading'] }}</h3>
                    {!! $data['faculty_engagement_text'] !!}
                </div>
                <div class="col-md-5">
                    <div class="gf-image-wrapper">
                        <div class="gf-image" style="background-image:url('{{ $data['faculty_engagement_image']['url'] }}')" aria-label="{{ $data['faculty_engagement_image']['alt'] }}"></div>
                        <div class="gf-image-bg-shape"></div>
                    </div>
                    <div class="gf-title-box">
                        <p class="gf-attribution-name">{{ $data['faculty_engagement_attribution'] }}<p>
                        <p class="gf-attribution-aff">
                            {!! $data['faculty_engagement_attribution_caption'] !!}
                        </p>
                    </div>
                </div>

            </div>
        </div>
        {{-- Cards --}}
        <div class="container gf-cards-container">
            <div class="row">
                @foreach( $data['faculty_engagement_research_posts_data'] as $post )
                    {{-- Standard Cards --}}
                    <div class="col-md-4">
                        <article class="gf-card">
                            <div class="gf-inner-content">
                                @if($post['cats'])
                                    <span class="category-name">{{ $post['category_name'] }}</span>
                                @endif
                                <h4>{{ $post['the_title'] }}</h4>
                                {{ $post['the_excerpt'] }}
                            </div>
                            <div class="gf-inner-link-wrapper">
                            @php /*
                            <a onClick="fireGfModal(this.id); event.preventDefault();" id="gf-event-trigger-{{ $post['original_post_data']->ID }}" class="btn-underline" data-title="{{ $post['the_title'] }}" data-ev-date="{{ $post['gf_event_date'] }}" data-content="{{ $post['the_content'] }}" data-yt-id="{{ $post['lightbox_you_tube_embed_code'] }}" >Learn More</a>
                            */@endphp
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="yellow-circle-ornanament"></div>
    </section>

    {{-- Annual Theme & Policy Symposium --}}
    <section class="policy-symposium" id="policy_symposium">
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <h2>{{ $data['annual_theme_policy_symposium_title'] }}</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gf-featured-image-container">
                <div class="gf-featured-image" style="background-image:url('{{ $data['annual_theme_policy_symposium_featured_image']['url'] }}')" aria-label="{{ $data['annual_theme_policy_symposium_featured_image']['alt'] }}"></div>
                <div class="gf-feautured-image-bg"></div>
            </div>
            <h3>{{ $data['annual_theme_policy_symposium_heading'] }}</h3>
            <div class="row">
                <div class="col-md-8">
                {!! $data['annual_theme_policy_symposium_text'] !!}
                </div>
                <div class="col-md-4">
                    <div class="gf-image-wrapper">
                        <div class="gf-image" style="background-image:url('{{ $data['annual_theme_policy_symposium_sidebar_image']['url'] }}')" aria-label="{{ $data['annual_theme_policy_symposium_sidebar_image']['alt'] }}"></div>
                        <div class="gf-image-bg-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="yellow-circle-ornanament"></div>
    </section>

@endsection
