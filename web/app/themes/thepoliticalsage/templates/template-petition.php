<?php
/**
 * Template Name: Petition
 */
?>
<!-- Set body background image for the petition -->
<style type="text/css">
    html, body {background-image:url(<?= the_post_thumbnail_url('full'); ?>);}
  </style>

<?php while (have_posts()) : the_post(); ?>
	<section class="responsive-text">
    <h1 class="start"><?= the_title(); ?></h1>
	  <hr class="start">
	  <?= the_content(); ?>
	<form target="no-target" action method="post" id="googleform" class="start" autocomplete="on">
		<input type="email" autocapitalize="off" autocorrect="off" id="email" name="email" placeholder="Email address" autocomplete="email" required />
		<input type="text" id="zip" name="zip" placeholder="Zip code" inputmode="numeric" pattern="(\d{5}([\-]\d{4})?)" maxlength="5" autocomplete="postal-code" required />
		<input id="source" name="source" type="hidden" value="">
		<input type="submit" id="submit" name="submit" value="I AGREE" />
		<iframe src="#" id="no-target" name="no-target" style="visibility:hidden;display:none;"></iframe>
		<div class="clear start"></div>
	</form>
		<div class="signatures start"><span id="signers"></span> signatures so far</div>
		<div class="clear start"></div>
		
	<h1 class="thankyou">Can you take one more step to help us win this fight?</h1>
	  <hr class="thankyou">
	  <p class="thankyou">Every time one of you shares this petition on social media or email, we add an average of three new signatures.</p>
	  <p class="thankyou">1. Share the petition on social media.</p>
	   	<div class="social thankyou">
		   <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//bernieforleader.com/?source=share"><span class="icon-facebook"></span></a>
		   <a target="_blank" href="https://twitter.com/home?status=Democrats%20need%20new,%20progressive%20leadership.%20Bernie%20Sanders%20should%20be%20the%20next%20Senate%20Minority%20Leader.%20Add%20your%20name!%0Ahttp%3A//bernieforleader.com/?source=share"><span class="icon-twitter"></span></a>
		   <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//bernieforleader.com/?source=share%20&title=Bernie%20for%20Senate%20Minority%20Leader&summary=The%20Democrats%20need%20new,%20progressive%20leadership%20in%20the%20Senate.%20That%20leader%20is%20Bernie%20Sanders.%20Sign%20and%20share%20today%20if%20you%20agree!&source="><span class="icon-linkedin2"></span></a>
		</div>
	  <p class="thankyou">2. Share the link.</p>
		  <input class="thankyou" id="link" name="link" type="text" readonly value="http://bernieforleader.com/?source=share" onclick="this.focus();this.select()" />
		<p class="thankyou">3. <a href="https://facebook.com/BernieForLeader" style="color:#FFF;">Follow the 'Bernie for Leader' page on Facebook</a></p>
		  <div class="clear thankyou"></div>
    </section>
<?php endwhile; ?>