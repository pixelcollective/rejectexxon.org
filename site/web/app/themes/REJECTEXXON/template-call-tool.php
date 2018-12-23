<?php
/*
Template Name: Call Tool
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">

			<div class="medium-8 columns">

				<div class="backgrounder">
					<div class="step0">
					<h1 class="page-title">Call Your Senators and Tell Them to Reject Rex</h1>
					<p>Talking with a real human being is the best way to be heard. We've made it easy with a simple tool that will connect you with your representatives.</p>
					<p><strong>Here's how it works:</strong></p>
					<p>1. Fill out this form to be automatically connected to the Senators for your area.</p>
					<p>2. We’ll call you as soon as you submit the form (so make sure you have your phone on!)</p>
					<p>3. Once you’re on the line, we’ll connect you with your Senator’s offices one-by-one. We’ll provide notes on this screen to help guide you through the process.</p>
					<p><strong>If you don’t need guidance, you can also be connected with your representatives by calling our hotline directly at 1-855-929-9898.</strong></p>
					<?php echo do_shortcode("[sharify]"); ?>
					</div>
					<div class="step1">
						<h1 class="page-title">Notes for the call:</h2>
						<h3><strong>We demand that Senators Reject Rex and EXXON in the State Department for these 3 critical reasons:</strong></h3>
						<ol>
							<li>Rex Tillerson is a personal friend and business partner of Russia’s autocratic ruler Vladimir Putin (the man who just hacked our Presidential election).</li>
							<li>Rex is a climate denier. Under his leadership, Exxon has funded climate denial, and attacked activists, scientists, and elected leaders who are trying to discover the truth of what Exxon knew about climate, and when they knew it.</li>
							<li>We cannot let US foreign policy be dominated by oil interests. America has fought far too many Oil Wars already. No more blood for oil.</li>
						</ol>
					</div>

				</div>

			</div>

			<div class="medium-4 columns">
				<div class="call action">
					<h3><span style="font-weight:300;">Call Your Senators:</span><br><span class="scrawl">"Reject Exxon Now!"</span></h3>
					<div id="revmsg-click-to-call">
						<form id="revmsg-CallSignupForm" method="post" action="//phone.reverehq.com/outgoing/" accept-charset="utf-8">
							<input type="hidden" name="campaign_line" value="8559299898" id="campaign_line">

							<div class="err" style="display:none;"></div>

							<div class="input">
								<label for="phone">Phone number</label>
								<input type="text" id="phone" name="phone" placeholder="Phone number">
							</div>

							<div class="input">
								<label for="name">Name</label>
								<input type="text" id="name" name="name" placeholder="Name">
							</div>

							<div class="input">
								<label for="email">Email address</label>
								<input type="text" id="email" name="email" placeholder="Email address">
							</div>

							<div class="input">
								<label for="zip">Zip code</label>
								<input type="text" id="zip" name="zip" placeholder="Zip code">
							</div>

							<input type="hidden" id="always_redirect" value="false">
							<input type="hidden" name="revmsghtml" id="revmsghtml" value="">

							<input type="submit" value="Make the call!">
						</form>

						<div class="success" style="display:none;"></div>
					</div>
					<p style="color:white;margin-top:.5em;"><em>You can also call 1-855-929-9898 (toll free)</em></p>
					<script>
					(function() {
				      var isSecure;

				      isSecure = function() {
				        return window.location.protocol === 'https:';
				      };

				      jQuery(document).ready(function() {
				        jQuery('#revmsg-CallSignupForm').attr('action', 'javascript:void(0);');

				        jQuery('#revmsg-CallSignupForm').submit(function(e) {
				          var info, revereCalling, s;

				          info = {
				            phone: jQuery('#phone').val(),
				            campaign_line: jQuery('#campaign_line').val()
				          };

				          if (jQuery('#name').length > 0 && jQuery('#name').val() !== '') {
				            info.name = jQuery('#name').val();
				          }

				          if (jQuery('#zip').length > 0 && jQuery('#zip').val() !== '') {
				            info.zip = jQuery('#zip').val();
				          }

				          if (jQuery('#email').length > 0 && jQuery('#email').val() !== '') {
				            info.email = jQuery('#email').val();
				          }

				          s = isSecure() ? 's' : '';

				          revereCalling = 'http' + s + '://' + 'phone.reverehq.com/outgoing/';

				          jQuery.get(revereCalling, info, function(data) {
				            if (data.err) {
				              jQuery('#revmsg-click-to-call #revmsg-CallSignupForm .err').html(data.message);

				              jQuery('#revmsg-click-to-call #revmsg-CallSignupForm .err').show();
				            } else {
				              if(jQuery('#revmsghtml').length > 0 && jQuery('#revmsghtml').val() !== '' && jQuery('#revmsghtml').val() != window.location && jQuery('#always_redirect').val() == 'true') {
				                window.location = 'http://'+ jQuery('#revmsghtml').val();
				              } else {
				                jQuery('.call').hide();
				                jQuery('.step0').hide();
				                jQuery('.step1').show();
				                jQuery('.call-thanks').show();
				                jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
				              }
				            }
				          });

				          return false;
				        });
				      });
				    }).call(this);
				   </script>
				</div>
				<div class="call-thanks" style="display:none;">
					<h3 style="color:white;">Thanks for taking action.</h3>
					<p style="color:white;">We're calling you now.</p>
					<?php echo do_shortcode("[sharify]"); ?>
				</div>
			</div>
			
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>