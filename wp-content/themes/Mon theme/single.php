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
  <div class="content-thin">
<section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row justify-content-center ">
    <div class="col-md-12 ">
      <div class="card">
    <article class="article-loop">
  <header>
    <h2><a href="" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    par <?php the_author(); ?> <?php 
            echo katheme_give_me_meta_01(
              esc_attr(get_the_date('c') ),
              esc_html( get_the_date()),
              get_the_category_list( ', '),
              get_the_tag_list('',', ')
            );
          ?>
  </header>
  <?php the_content(); ?>
</article>
</div>
        <?php endwhile;?>
        <div class="row ">
        <div class="col-md-12">
          <nav>
            <ul class="pager">
              <li class="float-left "><?php previous_post_link()?></li>
              <li class="float-right"><?php next_post_link()?></li>
            </ul>
          </nav>
        </div>
        </div>
        </section>

        <?php else : ?>
          
          <div class="row ">
        <div class="col-md-12">
        <article>
        <p>No post was found!</p>
      </article>
      <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
        </div>
            
        
        </div>
        


        
<?php get_footer(); ?>
</div>



