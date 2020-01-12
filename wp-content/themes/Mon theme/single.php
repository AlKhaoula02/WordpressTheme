<?php
// /**
//  * The template for displaying all single posts
//  *
//  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
//  *
//  * @package baby
//  */

get_header(); ?>

<div class="container">
<section>
       
        <div class="row ">
            <div class="col-md-8">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        </header>
       <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found!</p>
      </article>
<?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
</section>
        
<?php get_footer(); ?>
</div>



