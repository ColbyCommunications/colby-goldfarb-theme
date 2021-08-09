<?php

/*
    Template Name: Template Annual Report
*/

get_header();

// Annual Report Hero Fields
$annual_report_hero_image = get_field('annual_report_hero_image');
$annual_report_hero_subtitle = get_field('annual_report_hero_subtitle');
$annual_report_hero_years = get_field('annual_report_hero_years');
$annual_report_hero_title = get_field('annual_report_hero_title');
$annual_report_hero_text = get_field('annual_report_hero_text');
$annual_report_hero_cta = get_field('annual_report_hero_cta');

?>
<!-- Annual Report Hero -->
<section class="gf-intro-hero" style="background-image:url(<?php echo $annual_report_hero_image; ?>)">
    <div class="container">
        <div class="inner__content">
            <div class="gf-tagline">
                <div class="gf-hero-headline"><?php echo $annual_report_hero_subtitle; ?></div>
                <div class="gf-rule"></div>
                <div class="gf-hero-headline"><?php echo $annual_report_hero_years; ?></div>
            </div>

            <div class="inner__shape-container">
                <div class="inner__shape">
                    <h1><?php echo $annual_report_hero_title; ?></h1>
                    <?php echo $annual_report_hero_text ?>
                    <?php if($annual_report_hero_text): ?>
                        <a href="<?php echo $annual_report_hero_cta['url']; ?>"  <?php echo $annual_report_hero_cta['target']; ?> class="btn-underline"><?php echo $annual_report_hero_cta['text']; ?></a>
                    <?php endif; ?>
                </div>
                <div class="hero-background-shape"></div>
            </div>

        </div>
    </div>
</section>

<?php


// Letter From The Executive Fields
$letter_section_title = get_field('letter_section_title');
$letter_section_image = get_field('letter_section_image');
$letter_section_image_attribution_title = get_field('letter_section_image_attribution_title');
$letter_section_image_attribution_text = get_field('letter_section_image_attribution_text');
$letter_section_text = get_field('letter_section_text');

?>


<!-- Letter From The Executive -->
<section id="gf_image_text_section" class="gf-image-text-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 order-md-2">
                <h2><?php echo $letter_section_title; ?></h2>
                <?php echo $letter_section_text; ?>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="gf-image-wrapper">
                    <div class="gf-image" style="background-image:url(<?php echo $letter_section_image['url'];  ?>)" aria-label="Alt Text Here"></div>
                    <div class="gf-image-bg-shape"></div>
                </div>
                <div class="gf-title-box">
                    <p class="gf-attribution-name"><?php echo $letter_section_image_attribution_title; ?><p>
                    <div class="gf-attribution-aff">
                        <?php echo $letter_section_image_attribution_text; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="yellow-circle-ornanament"></div>
</section>

<?php

// Annual Theme Overview  Fields
$annual_theme_overview_title = get_field('annual_theme_overview_title');
$annual_theme_overview_text = get_field('annual_theme_overview_text');
$annual_theme_overview_stat_number = get_field('annual_theme_overview_stat_number');
$annual_theme_overview_stat_number_caption = get_field('annual_theme_overview_stat_number_caption');
$annual_theme_overview_attribution_box_text = get_field('annual_theme_overview_attribution_box_text');
$annual_theme_overview_attribution_name = get_field('annual_theme_overview_attribution_name');
$annual_theme_overview_attribution_caption = get_field('annual_theme_overview_attribution_caption');

?>

<!-- Annual Theme Overview -->

<section class="annual-overview" id="annual_overview">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h2><?php echo $annual_theme_overview_title; ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="inner__wrapper">
                    <?php echo $annual_theme_overview_text; ?>
                </div>
            </div>
            <div class="col-md-4">
                <span class="gf-big-number">
                    <?php echo $annual_theme_overview_stat_number; ?>
                </span>
                <div class="gf-attribution-aff">
                    <?php echo $annual_theme_overview_stat_number_caption; ?>
                </div>
                <div class="gf-fancy-text-wrapper">
                    <div class="gf-fancy-text">
                        <p class="gf-blockquote">
                            <?php echo $annual_theme_overview_attribution_box_text; ?>
                        </p>
                    </div>
                    <div class="gf-fancy-text-shape"></div>
                </div>
                <div class="gf-title-box">
                    <p class="gf-attribution-name"><?php echo $annual_theme_overview_attribution_name; ?><p>
                    <div class="gf-attribution-aff">
                        <?php echo $annual_theme_overview_attribution_caption;  ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php

$goldfarb_center_virtual_events_title = get_field('goldfarb_center_virtual_events_title');
$goldfarb_center_virtual_events_header = get_field('goldfarb_center_virtual_events_header');

?>


<!-- Virtual Events -->

<section class="swiper-carousel virtual-events" id="virtual_events">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h2><?php echo $goldfarb_center_virtual_events_title; ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner__wrapper">
            <h3><?php echo $goldfarb_center_virtual_events_header ?></h3>
        </div>

        <!-- Swiper -->
        <?php if( have_rows('goldfarb_center_virtual_events_carousel') ): ?>

        <div class="gf-slider__wrapper">
            <div class="swiper-container gfSwiperOne">
                <div class="gf-slider-arrows">
                    <div class="swiper-button-next gf-next-one"></div>
                    <div class="swiper-button-prev gf-prev-one"></div>
                </div>
                <div class="swiper-wrapper">

                    <?php

                    while ( have_rows('goldfarb_center_virtual_events_carousel') ) : the_row();

                    $virtual_events_blockquote = get_sub_field('virtual_events_blockquote');
                    $virtual_events_attribution_name = get_sub_field('virtual_events_attribution_name');
                    $virtual_events_attribution_text = get_sub_field('virtual_events_attribution_text');

                    ?>

                    <!-- Slide -->

                    <div class="swiper-slide">
                        <blockquote class="gf-blockquote">
                            “<?php echo $virtual_events_blockquote; ?>”
                        </blockquote>
                        <div class="gf-title-box">
                            <p class="gf-attribution-name"><?php echo $virtual_events_attribution_name; ?><p>
                            <div class="gf-attribution-aff">
                                <?php echo $virtual_events_attribution_text ?>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                </div>
                <div class="swiper-pagination gf-swiper-pg-one"></div>
            </div>
            <div class="gf-background-shape"></div>
        </div>
        <?php endif; ?>
        <!-- Cards Container -->
        <?php
        $virtual_events_posts = get_field('goldfarb_center_virtual_events_post_selector');
        if( $virtual_events_posts ): ?>

        <div class="container gf-cards-container">
            <div class="row">

                <?php foreach( $virtual_events_posts as $post ):

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post);

                $is_featured_post = get_field('is_featured_post');
                $lightbox_you_tube_embed_code = get_field('lightbox_you_tube_embed_code');
                $gf_event_date = get_field('gf_event_date');


                $cats = get_the_category(get_the_ID());

                ?>

                <?php if($is_featured_post == false): ?>

                    <!-- Standard Cards -->
                <div class="col-md-4">
                    <article class="gf-card">
                        <?php if(has_post_thumbnail()): ?>
                            <div class="gf-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)" aria-label="Alt Text Here"></div>
                        <?php endif; ?>
                        <div class="gf-inner-content">
                            <?php if($cats): ?>
                                <span class="category-name"><?php echo $cats[0]->name; ?></span>
                            <?php endif; ?>
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="gf-inner-link-wrapper">
                            <a href="#" onClick="fireGfModal(this.id); event.preventDefault();" id="gf-event-trigger-<?php echo get_the_id(); ?>" class="btn-underline" data-title="<?php the_title() ?>" data-ev-date="<?php echo $gf_event_date; ?>" data-content="<?php the_content(); ?>" data-yt-id="<?php echo $lightbox_you_tube_embed_code; ?>" >Learn More</a>
                        </div>
                    </article>
                </div>


                <?php else: ?>

                <!-- Featured Card -->
                <div class="col-md-12 d-flex featured-column">
                    <div class="col-md-8 order-md-2">
                        <?php if(has_post_thumbnail()): ?>
                            <div class="gf-long-featured-image" style="background-image:url(<?php the_post_thumbnail_url(); ?>)" aria-label="Alt Text Here">
                                <div class="gf-image-ornament"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4 order-md-1">
                            <?php if($cats): ?>
                                <span class="category-name"><?php $cats->name; ?></span>
                            <?php endif; ?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        <div class="gf-inner-link-wrapper">
                            <a href="#"
                               onClick="fireGfModal(this.id); event.preventDefault();"
                               id="gf-event-trigger-<?php echo get_the_id(); ?>"
                               class="btn-underline" data-title="<?php the_title() ?>"
                               data-ev-date="<?php echo $gf_event_date; ?>"
                               data-content="<?php the_content(); ?>"
                               data-yt-id="<?php echo $lightbox_you_tube_embed_code; ?>" >Learn More</a>
                        </div>
                    </div>
                </div>


                <?php endif; ?>


                <?php endforeach; ?>

                    <?php
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <div class="yellow-circle-ornanament"></div>
        </div>

        <!-- Initialize Swiper -->
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

<?php

$student_leadership_title = get_field('student_leadership_title');
$student_leadership_header = get_field('student_leadership_header');
$student_leadership_text = get_field('student_leadership_text');


?>

<!-- Student Leadership -->
<section class="gf-student-leadership" id="gf_student_leadership">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h2><?php echo $student_leadership_title; ?></h2>
            </div>
        </div>
    </div>
    <!-- Intro Text -->
    <div class="container gf-intro-text">
        <div class="row">
            <div class="col-md-8">
                <h3><?php echo $student_leadership_header; ?></h3>
                <p><?php echo $student_leadership_text; ?></p>
            </div>
        </div>
    </div>
    <!-- Slider Section -->
    <div class="container">
         <!-- Swiper -->
         <?php if( have_rows('student_leadership_carousel') ): ?>
         <div class="gf-slider__wrapper">
         <div class="swiper-container gfSwiperTwo">
            <div class="gf-slider-arrows">
                <div class="swiper-button-next gf-next-two"></div>
                <div class="swiper-button-prev gf-prev-two"></div>
            </div>
            <div class="swiper-wrapper">

                <?php

                    while ( have_rows('student_leadership_carousel') ) : the_row();

                    $student_leadership_image = get_sub_field('student_leadership_images');
                    $student_leadership_blockquote = get_sub_field('student_leadership_blockquote');
                    $student_leadership_cta_link = get_sub_field('student_leadership_cta_link');

                ?>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="gf-image-wrapper">
                                <div class="gf-image" style="background-image:url(<?php echo $student_leadership_image['url']; ?>)"  aria-label="<?php echo $student_leadership_image['alt'];  ?>"></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <blockquote class="gf-blockquote">
                                <?php echo $student_leadership_blockquote; ?>
                            </blockquote>
                            <a href="<?php echo $student_leadership_cta_link['url']; ?>" class="btn-underline" <?php echo $student_leadership_cta_link['target']; ?>><?php echo $student_leadership_cta_link['text']; ?></a>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>

            </div>
            <div class="swiper-pagination gf-swiper-pg-two"></div>
        </div>
        <div class="gf-background-shape"></div>
        </div>
         <!-- Initialize Swiper -->
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
    <?php endif; ?>

    <?php if( have_rows('student_leadership_info_block') ): ?>
        <div class="container">
            <?php

                while ( have_rows('student_leadership_info_block') ) : the_row();

                $student_leadership_info_block_image = get_sub_field('student_leadership_info_block_image');
                $student_leadership_blockquote = get_sub_field('student_leadership_blockquote');

            ?>

            <div class="row student-leadership-column">
                <div class="col-md-4">
                    <div class="gf-col-image-wrapper">
                        <div class="gf-col-image" style="background-image:url(<?php echo $student_leadership_info_block_image['url']; ?>)" aria-label="<?php echo $student_leadership_info_block_image['alt']; ?>"></div>
                        <div class="gf-col-image-bg-shape"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <p><?php echo $student_leadership_blockquote; ?></p>
                </div>
            </div>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <div class="yellow-circle-ornanament"></div>
</section>

<?php

// Student Internships Fields

$student_internships_title = get_field('student_internships_title');
$student_internships_heading = get_field('student_internships_heading');
$student_internships_text = get_field('student_internships_text');
$student_internships_stat_number = get_field('student_internships_stat_number');
$student_internships_stat_caption = get_field('student_internships_stat_caption');

?>

<!-- Student Internships -->

<section class="gf-student-internships" id="gf_student_internships">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h2><?php echo $student_internships_title; ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="inner__wrapper">
                    <h3><?php echo $student_internships_heading; ?></h3>
                    <?php echo $student_internships_text ?>
                </div>
            </div>
            <div class="col-md-4">
                <span class="gf-big-number">
                    <?php echo $student_internships_stat_number; ?>
                </span>
                <div class="gf-attribution-aff">
                    <?php echo $student_internships_stat_caption; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if( have_rows('student_internships_list') ): ?>
        <!-- Internship List -->
        <ul class="container gf-dot-list">
            <?php

                while ( have_rows('student_internships_list') ) : the_row();

                $student_internships_list_title = get_sub_field('student_internships_list_title');
                $student_internships_list_text = get_sub_field('student_internships_list_text');

            ?>

            <!-- Internship -->
            <li class="row gf-list-item">
                <div class="col-md-3">
                    <h4><?php echo $student_internships_list_title; ?></h4>
                </div>
                <div class="col-md-9">
                    <?php echo $student_internships_list_text; ?>
                </div>
            </li>

            <?php endwhile; ?>

        </ul>
    <?php endif; ?>
    <div class="yellow-circle-ornanament"></div>
</section>

<?php

// Franko-Maisel Prize Fields

$franko_maisel_prize_title = get_field('franko_maisel_prize_title');
$franko_maisel_prize_image = get_field('franko_maisel_prize_image');
$franko_maisel_prize_header = get_field('franko_maisel_prize_header');
$franko_maisel_prize_text = get_field('franko_maisel_prize_text');
$franko_maisel_prize_attiribution = get_field('franko_maisel_prize_attiribution');
$franko_maisel_prize_attribution_caption = get_field('franko_maisel_prize_attribution_caption');

?>

<!-- Franko-Maisel Prize -->
<section class="gf-image-text-section gf-franko-maisel" id="gf_franko_maisel">
    <div class="container">
        <div class="row">
            <div class="col-md-7 order-md-2">
                <h2><?php echo $franko_maisel_prize_title; ?></h2>
                <h3><?php echo $franko_maisel_prize_header; ?></h3>
                <?php echo $franko_maisel_prize_text; ?>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="gf-image-wrapper">
                    <div class="gf-image" style="background-image:url(<?php echo $franko_maisel_prize_image['url']; ?>" aria-label="<?php echo $franko_maisel_prize_image['alt']; ?>"></div>
                    <div class="gf-image-bg-shape"></div>
                </div>
                <div class="gf-title-box">
                    <p class="gf-attribution-name"><?php echo $franko_maisel_prize_attiribution; ?><p>
                    <div class="gf-attribution-aff">
                        <?php echo $franko_maisel_prize_attribution_caption; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="yellow-circle-ornanament"></div>
</section>

<?php

// Faculty Engagement And Research Fields

$faculty_engagement_image = get_field('faculty_engagement_image');
$faculty_engagement_title = get_field('faculty_engagement_title');
$faculty_engagement_heading = get_field('faculty_engagement_heading');
$faculty_engagement_text = get_field('faculty_engagement_text');
$faculty_engagement_attribution = get_field('faculty_engagement_attribution');
$faculty_engagement_attribution_caption = get_field('faculty_engagement_attribution_caption');
$faculty_engagement_research_posts = get_field('faculty_engagement_research_posts');

?>

<!-- Faculty Engagement And Research -->
<section class="gf-faculty-engaugement" id="gf_faculty_engaugement">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h2><?php echo $faculty_engagement_title; ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3><?php echo $faculty_engagement_heading; ?></h3>
                <?php echo $faculty_engagement_text; ?>
            </div>
            <div class="col-md-5">
                <div class="gf-image-wrapper">
                    <div class="gf-image" style="background-image:url(<?php echo $faculty_engagement_image['url']; ?>)" aria-label="<?php echo $faculty_engagement_image['alt']; ?>"></div>
                    <div class="gf-image-bg-shape"></div>
                </div>
                <div class="gf-title-box">
                    <p class="gf-attribution-name"><?php echo $faculty_engagement_attribution; ?><p>
                    <p class="gf-attribution-aff">
                        <?php echo $franko_maisel_prize_attribution_caption; ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- Cards -->
    <div class="container gf-cards-container">
        <div class="row">

            <?php
            $faculty_engaugement_posts = get_field('faculty_engagement_research_posts');
            if( $faculty_engaugement_posts ): ?>

                <?php foreach( $faculty_engaugement_posts as $post ):

                $lightbox_you_tube_embed_code = get_field('lightbox_you_tube_embed_code');
                $gf_event_date = get_field('gf_event_date');
                $cats = get_the_category(get_the_ID());

                setup_postdata($post); ?>

                    <!-- Cards -->
                    <div class="col-md-4">
                        <article class="gf-card">
                            <div class="gf-inner-content">
                                <?php if($cats): ?>
                                     <span class="category-name"><?php echo $cats[0]->name; ?></span>
                                 <?php endif; ?>
                                <h4><?php the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="gf-inner-link-wrapper">
                            <a href="#" onClick="fireGfModal(this.id); event.preventDefault();" id="gf-event-trigger-fc-<?php echo get_the_id(); ?>" class="btn-underline" data-title="<?php the_title() ?>" data-ev-date="<?php echo $gf_event_date; ?>" data-content="<?php the_content(); ?>" data-yt-id="<?php echo $lightbox_you_tube_embed_code; ?>" >Learn More</a>
                            </div>
                        </article>
                    </div>

                <?php endforeach; ?>

                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
    <div class="yellow-circle-ornanament"></div>
</section>

<?php

// Faculty Engagement And Research Fields

$annual_theme_policy_symposium_title = get_field('annual_theme_policy_symposium_title');
$annual_theme_policy_symposium_featured_image = get_field('annual_theme_policy_symposium_featured_image');
$annual_theme_policy_symposium_heading = get_field('annual_theme_policy_symposium_heading');
$annual_theme_policy_symposium_text = get_field('annual_theme_policy_symposium_text');
$annual_theme_policy_symposium_sidebar_image = get_field('annual_theme_policy_symposium_sidebar_image');
$annual_theme_policy_symposium_attribution = get_field('annual_theme_policy_symposium_attribution');
$annual_theme_policy_symposium_attribution_caption = get_field('annual_theme_policy_symposium_attribution_caption');

?>

<!-- Annual Theme & Policy Symposium -->

<section class="policy-symposium" id="policy_symposium">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h2><?php echo $annual_theme_policy_symposium_title; ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="gf-featured-image-container">
            <div class="gf-featured-image" style="background-image:url(<?php echo $annual_theme_policy_symposium_featured_image['url']; ?>)" aria-label="<?php echo $annual_theme_policy_symposium_featured_image['alt']; ?>"></div>
            <div class="gf-feautured-image-bg"></div>
        </div>
        <h3><?php echo $annual_theme_policy_symposium_heading; ?></h3>
        <div class="row">
            <div class="col-md-8">
            <?php echo $annual_theme_policy_symposium_text; ?>
            </div>
            <div class="col-md-4">
                <div class="gf-image-wrapper">
                    <div class="gf-image" style="background-image:url(<?php echo $annual_theme_policy_symposium_sidebar_image['url']; ?>)" aria-label="<?php echo $annual_theme_policy_symposium_sidebar_image['alt']; ?>"></div>
                    <div class="gf-image-bg-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="yellow-circle-ornanament"></div>
</section>



<?php
get_footer();
