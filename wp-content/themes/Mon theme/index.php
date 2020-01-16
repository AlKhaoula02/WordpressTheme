

<?php get_header(); ?>
<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>
<div class="container">
  <div class="content-thin">
  <div class="row">
<div class="col-md-12">
	<p class="lead">
		 Archives<div class="divider"></div>
	</p>
</div>
</div>

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
    <?php endwhile; else : ?>
    <article>
        <p>Sorry, no posts were found!</p>
    </article>
    
      <?php endif; ?>
		  </div>  
		  

		  <div class="row justify-content-center">
<?php global $wp_query;
$big = 999999999; //need an unlikely integer
$total_pages = $wp_query -> max_num_pages;
if($total_pages > 1 ) : ?>

<div class="col-md-12 katheme-pagination">
<?php
echo paginate_links(array(
'base' => str_replace($big, '%#%' ,esc_url(get_pagenum_link( $big ))),
'format' => 'page/%#%',
'current' => max(1, get_query_var('paged')),
'total' => $total_pages,
'prev_next' => True ,
'prev_text' => '« Page précédente' ,
'next_text' => 'page suivante »'
)) ;
?>
</div>
<?php endif; ?>
</div>



    </div>
</section>
</div>
<?php get_sidebar() ?>
</div>

<?php get_footer(); ?>


</body>
</html>









