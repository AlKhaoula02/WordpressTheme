<?php get_header(); ?>
<div class="container">
<section>
        <div class="row ">
                <img src ="<?php echo get_template_directory_uri();?>/assets/img/hello.png" class="img-responsive"></img>
        </div>   
</section>
<section>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row">
          <div class="col-md-8 ">
          <article class="article-loop">
        <header>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          By: <?php the_author(); ?>
        </header>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; else : ?>
    <article>
        <p>Sorry, no posts were found!</p>
    </article>
      <?php endif; ?>
          </div>
          <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
</div>


</body>
</html>
