<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 columns" role="main">

		    	<div class="backgrounder">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				    	<?php get_template_part( 'parts/loop', 'page' ); ?>
				    
				    <?php endwhile; endif; ?>	

				</div>					
			    					
			</main> <!-- end #main -->

		    <div class="large-4 columns">
				<div class="action">
					<h3><span style="font-weight:300;">Tell Your Senators:</span><br><span class="scrawl">Reject Exxon Now!</span></h3>
					<script type='text/javascript' src='https://d1aqhv4sn5kxtx.cloudfront.net/actiontag/at.js' crossorigin='anonymous'></script>
					 <div class="ngp-form"
					     data-form-url="https://advocator.ngpvan.com/https%3a%2f%2factions.everyaction.com%2fv1%2fForms%2fhPxLLeCJj0OLg4bGxreZoA2/ngpForm"
					     data-fastaction-endpoint="https://fastaction.ngpvan.com"
					     data-inline-errors="true"
					     data-fastaction-nologin="true"
					     data-databag="everybody">
					</div>
				</div>
			</div>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>