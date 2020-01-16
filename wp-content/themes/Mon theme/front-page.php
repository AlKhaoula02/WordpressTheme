<?php get_header(); ?>
<?php
$args_blog = array(
  'post_type' => 'post',
  'posts_per_page' => 6
);
$req_blog = new WP_Query($args_blog);
?>
<?php if ($req_blog->have_posts()) : ?>
  <div class="container-fluid">
    <section>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <div class="row ">
            <div class="baseline col-md-12">
              <?php the_content('<p class="text-center ">,</p>');  ?>
              
            </div>

          </div>
  </div>
<div class="container  ">
    <div class=" content-thin">

    <?php endwhile; ?>
    <?php else :  ?>
    <div class="row">
      <div class="col-md-12">
        <p> Pas de résultats' </p>
      </div>
    </div>
  <?php endif; ?>

  </section>
  <section id="blog-front">

    <div class="row">
      <?php while ($req_blog->have_posts()) : $req_blog->the_post();  ?>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h2> <?php the_title(); ?></h2>
              </div>
              <div class="card-text"><?php the_post_thumbnail(
                                        'small',
                                        array('class' => 'img-fluid aligncenter')
                                      ); ?>
                <?php the_excerpt();
                the_author(); ?>
                <p>
                  <?php
                  echo katheme_give_me_meta_01(
                    esc_attr(get_the_date('c')),
                    esc_html(get_the_date()),
                    get_the_category_list(', '),
                    get_the_tag_list('', ', ')
                  );
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile;
      wp_reset_postdata(); ?>
    
    </div><!-- row-->
    


    </section>
  </div>
  <?php endif; ?>


  <?php get_sidebar() ?>
</div>

<?php get_footer();
