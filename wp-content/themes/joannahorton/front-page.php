<?php
/**
 * Front Page Template
 *
 * Template for displaying the front page with all component sections.
 *
 * @package joannahorton
 */

get_header(); ?>

<main>
    <?php get_template_part('template-parts/hero'); ?>
    <?php get_template_part('template-parts/social-proof'); ?>
    <?php get_template_part('template-parts/about'); ?>
    <?php get_template_part('template-parts/speaking-topics'); ?>
    <?php get_template_part('template-parts/stats'); ?>
    <?php get_template_part('template-parts/services'); ?>
    <?php get_template_part('template-parts/testimonials'); ?>
    <?php get_template_part('template-parts/email-capture'); ?>
</main>

<?php get_footer();
