<?php

/*
Template Name: Home Page
Template Post Type: page

*/

get_header(); ?>

<h1>New Home Page Template</h1>

<?php the_content() ?>

<?php require get_template_directory() ."/assets/html/grid.html";

<?php get_footer(); ?>