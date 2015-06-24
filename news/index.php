<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src="/_assets/js/fancybox.jquery.js"></script>
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
		
			<h2>Martha O'Bryan Center News</h2>

			<h3>Need a subhead</h3>

			<div id="news-items">

				<h4>Top Floor Alumni Rock the Freedom School</h4>

				<h5>6/23/2014</h5>

				<h6>Timothy Cunningham and George Gutierrez, 2012 Stratford High School graduates and alumni of the Top Floor @ Stratford program, are rising juniors at Middle Tennessee State University. This summer... <a class="readmore fancybox fancybox.iframe" href="/news/news-items/news-item.php">read more</a></h6>

			</div><!--news-items-->

	    </div><!--inner-->

	</section><!--subpage-->

	<section id="crumbs">
		
		<div class="inner">
			
			<div class="left"><a href="/careers/">&lt; Careers</a></div><!--left-->

			<div class="right"><a href="/news/ice-cream-crankin/">Ice Cream Crankin’ &gt;</a></div><!--right-->

		</div><!--inner-->

	</section><!--crumbs-->

</div><!--outreach-->

    <script type="text/javascript">
      $(function(){
        SyntaxHighlighter.all();
      });
      $(window).load(function(){
		$('.fancybox').fancybox();
      });
    </script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>