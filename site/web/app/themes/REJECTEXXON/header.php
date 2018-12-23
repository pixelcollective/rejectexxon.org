<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">


	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

		<?php wp_head(); ?>

		<!-- typekit -->
	    	<script>
			  (function(d) {
			    var config = {
			      kitId: 'myt3uux',
			      scriptTimeout: 3000,
			      async: true
			    },
			    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			  })(document);
			</script>

		<!-- Drop Google Analytics here -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-15777238-12', 'auto');
		  ga('send', 'pageview');

		</script>
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>

			<div id="rexxon-header">
				<div class="row">
					<div class="large-3 columns">
						<div class="row">
							<div class="large-12 columns">
								<a href="https://rejectexxon.org">
									<h1>REJECT<br><img src="/app/uploads/2016/12/exxon.png" /></h1>
								</a>
							</div>
						</div>
					</div>
					<div id="top-menu" class="large-9 columns">
						<?php joints_top_nav(); ?>
					<!--
						<ul class="vertical medium-horizontal menu">
						  <li><a href="https://rejectexxon.other98action.org/exxon-hates-your-children">[Video] Exxon Hates Your Children</a></li>
						  <li><a href="https://rejectexxon.other98action.org/exxon-hates-america">[Video] Exxon Hates America</a></li>
						  <li><a href="https://rejectexxon.other98action.org/exxon-hates-the-world">[Video] Exxon Hates The World</a></li>
						  <li><a href="https://rejectexxon.other98action.org/exxon-hates-the-world">[Event] Reject Exxon Guerrilla Drive-In</a></li>

						</ul> -->
					</div>
				</div>
			</div>