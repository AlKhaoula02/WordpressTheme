<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * 
 */

get_header(); ?>
<div class="container">
  <div class="content-thin">
  <div class="row">
<div class="col-md-12">

	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"> 'Oops! That page can&rsquo;t be found.'</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p> It looks like nothing was found at this location. Maybe try one of the links below or a search? </p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	</div>
	</div>
	</div>

<?php get_footer(); ?>
