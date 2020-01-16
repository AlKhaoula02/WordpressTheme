

<?php get_header(); ?>
<div class="container">

<section>
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row">
          <div class="col-md-12 ">
          <article class="article-loop">
        <header>
          <h2><a href="" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          By: <?php the_author(); ?>
        </header>
        <?php the_content(); ?>
      </article>
    <?php endwhile; else : ?>
    <article>
        <p>Sorry, no posts were found!</p>
    </article>
      <?php endif; ?>
          </div>  
    </div>
</section>

</div>
<?php get_footer(); ?>


</body>
</html>






