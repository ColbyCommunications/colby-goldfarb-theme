<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateAnnualReview extends Controller
{
    public function data()
    {
        // Annual Report Hero Fields
        $annual_report_hero_image = get_field('annual_report_hero_image');
        $annual_report_hero_subtitle = get_field('annual_report_hero_subtitle');
        $annual_report_hero_years = get_field('annual_report_hero_years');
        $annual_report_hero_title = get_field('annual_report_hero_title');
        $annual_report_hero_text = get_field('annual_report_hero_text');
        $annual_report_hero_cta = get_field('annual_report_hero_cta');

        $goldfarb_center_virtual_events_title = get_field('goldfarb_center_virtual_events_title');
        $goldfarb_center_virtual_events_header = get_field('goldfarb_center_virtual_events_header');

        $virtual_events_blockquote = get_sub_field('virtual_events_blockquote');
        $virtual_events_attribution_name = get_sub_field('virtual_events_attribution_name');
        $virtual_events_attribution_text = get_sub_field('virtual_events_attribution_text');

        $virtual_events_posts = get_field('goldfarb_center_virtual_events_post_selector');

        $is_featured_post = get_field('is_featured_post');
        $lightbox_you_tube_embed_code = get_field('lightbox_you_tube_embed_code');
        $gf_event_date = get_field('gf_event_date');

        $cats = get_the_category(get_the_ID());

        $student_leadership_title = get_field('student_leadership_title');
        $student_leadership_header = get_field('student_leadership_header');
        $student_leadership_text = get_field('student_leadership_text');

        $student_leadership_image = get_sub_field('student_leadership_images');
        $student_leadership_blockquote = get_sub_field('student_leadership_blockquote');
        $student_leadership_cta_link = get_sub_field('student_leadership_cta_link');

        $student_leadership_info_block_image = get_sub_field('student_leadership_info_block_image');
        $student_leadership_blockquote = get_sub_field('student_leadership_blockquote');

        $student_internships_title = get_field('student_internships_title');
        $student_internships_heading = get_field('student_internships_heading');
        $student_internships_text = get_field('student_internships_text');
        $student_internships_stat_number = get_field('student_internships_stat_number');
        $student_internships_stat_caption = get_field('student_internships_stat_caption');

        $student_internships_list_title = get_sub_field('student_internships_list_title');
        $student_internships_list_text = get_sub_field('student_internships_list_text');

        $franko_maisel_prize_title = get_field('franko_maisel_prize_title');
        $franko_maisel_prize_image = get_field('franko_maisel_prize_image');
        $franko_maisel_prize_header = get_field('franko_maisel_prize_header');
        $franko_maisel_prize_text = get_field('franko_maisel_prize_text');
        $franko_maisel_prize_attiribution = get_field('franko_maisel_prize_attiribution');
        $franko_maisel_prize_attribution_caption = get_field('franko_maisel_prize_attribution_caption');

        $faculty_engagement_image = get_field('faculty_engagement_image');
        $faculty_engagement_title = get_field('faculty_engagement_title');
        $faculty_engagement_heading = get_field('faculty_engagement_heading');
        $faculty_engagement_text = get_field('faculty_engagement_text');
        $faculty_engagement_attribution = get_field('faculty_engagement_attribution');
        $faculty_engagement_attribution_caption = get_field('faculty_engagement_attribution_caption');
        $faculty_engagement_research_posts = get_field('faculty_engagement_research_posts');


        $annual_theme_policy_symposium_title = get_field('annual_theme_policy_symposium_title');
        $annual_theme_policy_symposium_featured_image = get_field('annual_theme_policy_symposium_featured_image');
        $annual_theme_policy_symposium_heading = get_field('annual_theme_policy_symposium_heading');
        $annual_theme_policy_symposium_text = get_field('annual_theme_policy_symposium_text');
        $annual_theme_policy_symposium_sidebar_image = get_field('annual_theme_policy_symposium_sidebar_image');
        $annual_theme_policy_symposium_attribution = get_field('annual_theme_policy_symposium_attribution');
        $annual_theme_policy_symposium_attribution_caption = get_field('annual_theme_policy_symposium_attribution_caption');

        return [
            "annual_report_hero_image" => $annual_report_hero_image,
            "annual_report_hero_subtitle" => $annual_report_hero_subtitle,
            "annual_report_hero_years" => $annual_report_hero_years,
            "annual_report_hero_title" => $annual_report_hero_title,
            "annual_report_hero_text" => $annual_report_hero_text,
            "annual_report_hero_cta" => $annual_report_hero_cta
        ];
    }
}
