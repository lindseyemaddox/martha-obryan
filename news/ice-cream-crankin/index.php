<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<div id="news" class="sub">

	<section class="header">
	
		<div class="gradient"></div>

		<div class="inner">
			
			<h1>News &amp; Events</h1>

		</div><!--inner-->

	</section><!--header-->

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subnav-news.php'); ?>

	<section class="subpage">

		<div class="inner">
		
			<h2>Ice Cream Crankin’</h2>

			<h3>Need a subhead</h3>

			<p>paragraph</p>

	    </div><!--inner-->

	</section><!--subpage-->

	<section id="tertiary-nav">

		<div class="inner">
			
			<article class="three">
				
				<p class="heading">Past Events</p>

				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tortor lorem, congue at mauris nec. </p>

				<a class="btn" href="/news/ice-cream-crankin/past-events/">Learn More</a>

			</article><!--three-->

			<article class="three">
				
				<p class="heading">Entry Forms</p>

				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tortor lorem, congue at mauris nec. </p>

				<a class="btn" href="/news/ice-cream-crankin/forms/">Learn More</a>

			</article><!--three-->

			<article class="three">
				
				<p class="heading">Patrons</p>

				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tortor lorem, congue at mauris nec. </p>

				<a class="btn" href="/news/ice-cream-crankin/patrons/">Learn More</a>

			</article><!--three-->

		</div><!--inner-->

	</section><!--tertiary-nav-->

	<section id="crumbs">
		
		<div class="inner">
			
			<div class="left"><a href="/news/">&lt; News and Events</a></div><!--left-->

			<div class="right"><a href="/news/newsletters/">Newsletters &gt;</a></div><!--right-->

		</div><!--inner-->

	</section><!--crumbs-->

</div><!--outreach-->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>