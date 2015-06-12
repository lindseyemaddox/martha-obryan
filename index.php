<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1686024951613671',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<div id="home">

	<section class="slider">
	
		<div class="flexslider">
	
	  		<ul class="slides">
	
	    		<li>
	    	    	<img src="/_assets/img/slider-girls.jpg" />
	    		</li>
	    		<li>
	    	    	<img src="/_assets/img/slider-girls.jpg" />
	    		</li>
	    		<li>
	    	    	<img src="/_assets/img/slider-girls.jpg" />
	    		</li>
	    		<li>
	    	    	<img src="/_assets/img/slider-girls.jpg" />
	    		</li>
	
	        </ul>
	
	        <div class="gradient"></div>

	        <div class="h1-container"><h1>On a foundation of Christian faith, Martha O'Bryan Center empowers children, youth, and adults in poverty to transform their lives through work, education, employment and fellowship.</h1></div>
	
		</div>
	
	</section>

	<section id="we">
		
		<div class="inner">
			
			<article class="three">

				<span class="icon-tree"></span>
				
				<h2>We Serve Families</h2>

				<p>Descriptive paragraph lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nibh a justo mattis venenatis ut malesuada neque. Phasellus sodales, lacus et feugiat dapibus, ligula orci tincidunt tortor.</p>

				<a class="btn" href="/outreach/community/family/">Learn More</a>

			</article><!--three-->

			<article class="three">

				<span class="icon-portrait"></span>
				
				<h2>We Support Communities</h2>

				<p>Descriptive paragraph lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nibh a justo mattis venenatis ut malesuada neque. Phasellus sodales, lacus et feugiat dapibus, ligula orci tincidunt tortor.</p>

				<a class="btn" href="/contact/donate/">Donate</a>

			</article><!--three-->

			<article class="three">

				<span class="icon-circle"></span>
				
				<h2>We Restore Dignity</h2>

				<p>Descriptive paragraph lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget nibh a justo mattis venenatis ut malesuada neque. Phasellus sodales, lacus et feugiat dapibus, ligula orci tincidunt tortor.</p>

				<a class="btn" href="/contact/volunteer/">Volunteer</a>

			</article><!--three-->

		</div><!--inner-->

	</section><!--we-->

	<section id="social">
		
		<div class="inner">
			
			<div class="fb-page" data-href="https://www.facebook.com/marthaobryancenter" data-width="300" data-height="400" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/marthaobryancenter"><a href="https://www.facebook.com/marthaobryancenter">Martha O&#039;Bryan Center</a></blockquote></div></div>

			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/flipper.php'); // flipping images ?>

            <div class="twitter">
            	<a class="twitter-timeline"  href="https://twitter.com/MarthaOBryanCtr" data-widget-id="609394801801191424" width="300" height="400">Tweets by @MarthaOBryanCtr</a>
 	           <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    		</div><!--twitter-->      

		</div><!--inner-->

	</section><!--social-->

</div><!--home-->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>