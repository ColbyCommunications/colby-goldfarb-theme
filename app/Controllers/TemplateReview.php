<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateReview extends Controller
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

        // Letter From The Executive Fields
        $letter_section_title = get_field('letter_section_title');
        $letter_section_image = get_field('letter_section_image');
        $letter_section_image_attribution_title = get_field('letter_section_image_attribution_title');
        $letter_section_image_attribution_text = get_field('letter_section_image_attribution_text');
        $letter_section_text = get_field('letter_section_text');

        // Annual Theme Overview  Fields
        $annual_theme_overview_title = get_field('annual_theme_overview_title');
        $annual_theme_overview_text = get_field('annual_theme_overview_text');
        $annual_theme_overview_stat_number = get_field('annual_theme_overview_stat_number');
        $annual_theme_overview_stat_number_caption = get_field('annual_theme_overview_stat_number_caption');
        $annual_theme_overview_attribution_box_text = strip_tags(get_field('annual_theme_overview_attribution_box_text'));
        $annual_theme_overview_attribution_name = get_field('annual_theme_overview_attribution_name');
        $annual_theme_overview_attribution_caption = get_field('annual_theme_overview_attribution_caption');

        // Virtual Event Fields
        $goldfarb_center_virtual_events_carousel_sub_field_data = [];
        if( have_rows('goldfarb_center_virtual_events_carousel') ):
            while ( have_rows('goldfarb_center_virtual_events_carousel') ) : the_row();
                $goldfarb_center_virtual_events_carousel_sub_field_data[] = array (
                    "virtual_events_blockquote" => get_sub_field('virtual_events_blockquote'),
                    "virtual_events_attribution_name" => get_sub_field('virtual_events_attribution_name'),
                    "virtual_events_attribution_text" => get_sub_field('virtual_events_attribution_text'),
                );
            endwhile;
        endif;

        $goldfarb_center_virtual_events_title = get_field('goldfarb_center_virtual_events_title');
        $goldfarb_center_virtual_events_header = get_field('goldfarb_center_virtual_events_header');
        $virtual_events_posts = get_field('goldfarb_center_virtual_events_post_selector');

        $virtual_events_post_data = [];
        $post_ids = [];
        foreach( $virtual_events_posts as $post ) {
            $post_ids[] = $post->ID;
        }

        $posts = get_posts([
            'post_type' => "virtual-events",
            'post__in' => $post_ids,
            'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash')
        ]);

        foreach( $posts as $post ) {

            $post_meta = get_post_meta($post->ID);
            // $post_thumbnail = get_the_post_thumbnail_url($post->ID);


            $is_featured_post = $post_meta['is_featured_post'][0];
            $lightbox_you_tube_embed_code = $post_meta['lightbox_you_tube_embed_code'];
            $gf_event_date = $post_meta['gf_event_date'];
            // var_dump($post_meta);
            // die(var_dump($lightbox_you_tube_embed_code));

            // die(var_dump($gf_event_date));
            $cats = get_the_category($post->ID);

            $post_row = ["original_post_data" => $post];
            if( $is_featured_post == false ) {
                $post_row["is_featured"] = false;
                if(has_post_thumbnail($post->ID)) {
                    $post_row['has_post_thumbnail'] = true;
                    $post_row['the_post_thumbnail_url'] = get_the_post_thumbnail_url($post->ID, "full");
                }

                if ($cats) {
                    $post['cats'] = true;
                    $post_row['category_name'] = $cats[0]->name;
                }

                $post_row["the_title"] = $post->post_title;
                $post_row["the_excerpt"] = $post->post_excerpt;
                $post_row["the_content"] = wp_strip_all_tags($post->post_content);
                $post_row["gf_event_date"] = $gf_event_date[0];
                $post_row["lightbox_you_tube_embed_code"] = $lightbox_you_tube_embed_code[0];

            } else {
                $post_row["is_featured"] = true;

                if(has_post_thumbnail($post->ID)) {
                    $post_row['has_post_thumbnail'] = true;
                    $post_row['the_post_thumbnail_url'] = get_the_post_thumbnail_url($post->ID, "full");
                }

                if ($cats) {
                    $post['cats'] = true;
                    $post_row['category_name'] = $cats[0]->name;
                }

                $post_row["the_title"] = $post->post_title;
                $post_row["the_excerpt"] = $post->post_excerpt;
                $post_row["the_content"] = wp_strip_all_tags($post->post_content);
                $post_row["gf_event_date"] = $gf_event_date[0];
                $post_row["lightbox_you_tube_embed_code"] = $lightbox_you_tube_embed_code[0];
            }

            // die($post_row["is_featured"]);

            $virtual_events_post_data[] = $post_row;
        }
        // wp_reset_postdata();

        // die(var_dump($virtual_events_post_data));

        // Student Leadership Fields
        $student_leadership_title = get_field('student_leadership_title');
        $student_leadership_header = get_field('student_leadership_header');
        $student_leadership_text = get_field('student_leadership_text');

        $student_leadership_carousel_sub_field_data = [];
        if( have_rows('student_leadership_carousel') ):
            while ( have_rows('student_leadership_carousel') ) : the_row();
            // die(var_dump(get_sub_field('student_leadership_cta_link')));
                $student_leadership_carousel_sub_field_data[] = array (
                    "student_leadership_image" => get_sub_field('student_leadership_images'),
                    "student_leadership_blockquote" => get_sub_field('student_leadership_blockquote'),
                    "student_leadership_cta_link" => get_sub_field('student_leadership_cta_link'),
                );
            endwhile;
        endif;

        $student_leadership_info_block_sub_field_data = [];
        if( have_rows('student_leadership_info_block') ):
            while ( have_rows('student_leadership_info_block') ) : the_row();
                $student_leadership_info_block_sub_field_data[] = array (
                    "student_leadership_info_block_image" => get_sub_field('student_leadership_info_block_image'),
                    "student_leadership_blockquote" => get_sub_field('student_leadership_blockquote'),
                );
            endwhile;
        endif;

        $student_internships_title = get_field('student_internships_title');
        $student_internships_heading = get_field('student_internships_heading');
        $student_internships_text = get_field('student_internships_text');
        $student_internships_stat_number = get_field('student_internships_stat_number');
        $student_internships_stat_caption = get_field('student_internships_stat_caption');

        $student_internships_list_sub_field_data = [];
        if( have_rows('student_internships_list') ):
            while ( have_rows('student_internships_list') ) : the_row();
                $student_internships_list_sub_field_data[] = array (
                    "student_internships_list_title" => get_sub_field('student_internships_list_title'),
                    "student_internships_list_text" => get_sub_field('student_internships_list_text'),
                );
            endwhile;
        endif;

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

        $faculty_engagement_research_posts_data = [];
        $faculty_engagement_post_ids = [];
        foreach( $faculty_engagement_research_posts as $post ) {
            $faculty_engagement_post_ids[] = $post->ID;
        }
        // die(var_dump($faculty_engagement_post_ids));


        $posts = get_posts([
            'post_type' => "virtual-events",
            'post__in' => $faculty_engagement_post_ids,
            'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash')
        ]);

        foreach( $posts as $post ) {

            $post_meta = get_post_meta($post->ID);
            // $post_thumbnail = get_the_post_thumbnail_url($post->ID);

            // die(var_dump($post));
            $cats = get_the_category($post->ID);
            $lightbox_you_tube_embed_code = $post_meta['lightbox_you_tube_embed_code'];
            $gf_event_date = $post_meta['gf_event_date'];

            $post_row = ["original_post_data" => $post];

            if ($cats) {
                $post['cats'] = true;
                $post_row['category_name'] = $cats[0]->name;
            }

            $post_row["the_title"] = $post->post_title;
            $post_row["the_excerpt"] = $post->post_excerpt;
            $post_row["the_content"] = $post->post_content;
            $post_row["gf_event_date"] = $gf_event_date[0];
            $post_row["lightbox_you_tube_embed_code"] = htmlspecialchars(json_encode($lightbox_you_tube_embed_code));

            $faculty_engagement_research_posts_data[] = $post_row;
        }
        // die(var_dump($faculty_engagement_research_posts_data));

        $annual_theme_policy_symposium_title = get_field('annual_theme_policy_symposium_title');
        $annual_theme_policy_symposium_featured_image = get_field('annual_theme_policy_symposium_featured_image');
        $annual_theme_policy_symposium_heading = get_field('annual_theme_policy_symposium_heading');
        $annual_theme_policy_symposium_text = get_field('annual_theme_policy_symposium_text');
        $annual_theme_policy_symposium_sidebar_image = get_field('annual_theme_policy_symposium_sidebar_image');
        $annual_theme_policy_symposium_attribution = get_field('annual_theme_policy_symposium_attribution');
        $annual_theme_policy_symposium_attribution_caption = get_field('annual_theme_policy_symposium_attribution_caption');

        return [
            // Annual Report Hero Fields
            "annual_report_hero_image" => $annual_report_hero_image,
            "annual_report_hero_subtitle" => $annual_report_hero_subtitle,
            "annual_report_hero_years" => $annual_report_hero_years,
            "annual_report_hero_title" => $annual_report_hero_title,
            "annual_report_hero_text" => $annual_report_hero_text,
            "annual_report_hero_cta" => $annual_report_hero_cta,

            // Letter From The Executive Fields
            "letter_section_title" => $letter_section_title,
            "letter_section_image" => $letter_section_image,
            "letter_section_image_attribution_title" => $letter_section_image_attribution_title,
            "letter_section_image_attribution_text" => $letter_section_image_attribution_text,
            "letter_section_text" => $letter_section_text,

            // Annual Theme Overview Fields
            "annual_theme_overview_title" => $annual_theme_overview_title,
            "annual_theme_overview_text" => $annual_theme_overview_text,
            "annual_theme_overview_stat_number" => $annual_theme_overview_stat_number,
            "annual_theme_overview_stat_number_caption" => $annual_theme_overview_stat_number_caption,
            "annual_theme_overview_attribution_box_text" => $annual_theme_overview_attribution_box_text,
            "annual_theme_overview_attribution_name" => $annual_theme_overview_attribution_name,
            "annual_theme_overview_attribution_caption" => $annual_theme_overview_attribution_caption,


            // Virtual Event Fields
            "goldfarb_center_virtual_events_title" => $goldfarb_center_virtual_events_title,
            "goldfarb_center_virtual_events_header" => $goldfarb_center_virtual_events_header,

            "goldfarb_center_virtual_events_carousel_sub_field_data" => $goldfarb_center_virtual_events_carousel_sub_field_data,

            "virtual_events_post_data" => $virtual_events_post_data,

            // Student Leadership Fields
            "student_leadership_title" => $student_leadership_title,
            "student_leadership_header" => $student_leadership_header,
            "student_leadership_text" => $student_leadership_text,

            "student_leadership_carousel_sub_field_data" => $student_leadership_carousel_sub_field_data,
            "student_leadership_info_block_sub_field_data" => $student_leadership_info_block_sub_field_data,


            "student_internships_title" => $student_internships_title,
            "student_internships_heading" => $student_internships_heading,
            "student_internships_text" => $student_internships_text,
            "student_internships_stat_number" => $student_internships_stat_number,
            "student_internships_stat_caption" => $student_internships_stat_caption,

            "student_internships_list_sub_field_data" => $student_internships_list_sub_field_data,

            "franko_maisel_prize_title" => $franko_maisel_prize_title,
            "franko_maisel_prize_image" => $franko_maisel_prize_image,
            "franko_maisel_prize_header" => $franko_maisel_prize_header,
            "franko_maisel_prize_text" => $franko_maisel_prize_text,
            "franko_maisel_prize_attiribution" => $franko_maisel_prize_attiribution,
            "franko_maisel_prize_attribution_caption" => $franko_maisel_prize_attribution_caption,

            "faculty_engagement_image" => $faculty_engagement_image,
            "faculty_engagement_title" => $faculty_engagement_title,
            "faculty_engagement_heading" => $faculty_engagement_heading,
            "faculty_engagement_text" => $faculty_engagement_text,
            "faculty_engagement_attribution" => $faculty_engagement_attribution,
            "faculty_engagement_attribution_caption" => $faculty_engagement_attribution_caption,

            "faculty_engagement_research_posts_data" => $faculty_engagement_research_posts_data,

            "annual_theme_policy_symposium_title" => $annual_theme_policy_symposium_title,
            "annual_theme_policy_symposium_featured_image" => $annual_theme_policy_symposium_featured_image,
            "annual_theme_policy_symposium_heading" => $annual_theme_policy_symposium_heading,
            "annual_theme_policy_symposium_text" => $annual_theme_policy_symposium_text,
            "annual_theme_policy_symposium_sidebar_image" => $annual_theme_policy_symposium_sidebar_image,
            "annual_theme_policy_symposium_attribution" => $annual_theme_policy_symposium_attribution,
            "annual_theme_policy_symposium_attribution_caption" => $annual_theme_policy_symposium_attribution_caption,

            "annual_theme_footer_address" => get_field('annual_theme_footer_address'),
            "social_facebook" => get_field('annual_theme_facebook_url'),
            "social_instagram" => get_field('annual_theme_instagram_url'),
            "social_twitter" => get_field('annual_theme_twitter_url'),
            "social_you_tube" => get_field('annual_theme_you_tube_url'),
        ];
    }

    public function socialData()
    {
        return [
            "annual_theme_footer_address" => get_field('annual_theme_footer_address'),
            "social_facebook" => get_field('annual_theme_facebook_url'),
            "social_instagram" => get_field('annual_theme_instagram_url'),
            "social_twitter" => get_field('annual_theme_twitter_url'),
            "social_you_tube" => get_field('annual_theme_you_tube_url'),
        ];
    }
}
