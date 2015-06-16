<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src="/_assets/js/fancybox.jquery.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<div id="outreach" class="sub">

	<section class="header">
	
		<div class="gradient"></div>

		<div class="inner">
			
			<h1>Outreach</h1>

		</div><!--inner-->

	</section><!--header-->

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subnav-other.php'); ?>

	<section class="subpage">

		<div class="inner">
		
			<h2>Summer Social Justice Institute</h2>

			<h3>Martha O'Bryan Center Offers Summer Learning Opportunity for Young Adults</h3>

			<p>Applications are now being accepted for students who wish to gain a real understanding of urban poverty in the South during Martha O'Bryan Center's inaugural Summer Social Justice Institute. The intensive, hands-on six week certification program will provide young adults a comprehensive, experiential understanding of poverty with a faculty of experts from nonprofits and universities in Nashville, Tennessee. The Institute includes a vocational discernment process for individuals considering careers in youth development, education, public health, and law and public policy.</p>
	 
			<p>Sponsored by Martha O'Bryan Center, located in Cayce Homes public housing, the Institute will bring a diverse group of young adults together to examine root causes as well as solutions to systems of injustice, while developing facultyship skills and career direction for participating students. Graduates of the program will receive a Certificate of Social Justice Practice and be eligible for subsequent paid internships and AmeriCorps opportunities in Martha O'Bryan Center's fifteen human service and education programs.</p>

			<p>Student will serve and learn as they:</p>

			<ul>
		    	<li>support youth enrichment programs (including music, sports and recreation) with youth ages pre-Kindergarten to middle school, learning about education and human development in the process;</li>
		    	<li>engage in door-to-door outreach with community members, connecting individuals and families with counseling services, school options and parenting programming;</li>
	    		<li>interface with residents in food insecure homes, fulfilling nutrition needs and developing listening skills while collecting feedback on our food security program;</li>
	    		<li>work side-by-side with resident volunteers on infrastructure projects in our neighborhood, understanding a community's perspective in the process.</li>
	    	</ul>

	    	<p>Summer Social Justice Institute with begin on June 8th and conclude on July 17th, 2015 in Nashville. For tuition and scholarship information, please contact Peter Martino at (615) 254-1791, ext 130, or at pmartino@marthaobryan.org. To apply, please complete the online application below.</p>

	    	<a href="/contact/social-justice/" class="btn">Apply Now</a>

	    	<h5>Faculty of Summer Social Justice Institute will include:</h5>

			<div class="slider">
			
				<div class="faculty">
			
			  		<ul class="slides">
			
			    		<li class="faculty-member">

				    		<div class="faculty-inner">

				    			<img src="/_assets/img/silouette.png">
					
								<p class="name">Kimberly Bess</p>

								<a class="bio fancybox fancybox.iframe" href="/bios/kimberly-bess.php">View Bio</a>

							</div><!--faculty-inner-->

						</li><!--faculty-member-->

						<li class="faculty-member">

							<div class="faculty-inner">

								<img src="/_assets/img/silouette.png">
								
								<p class="name">Eddie Hamilton</p>

								<a class="bio fancybox fancybox.iframe" href="/bios/eddie-hamilton.php">View Bio</a>

							</div><!--faculty-inner-->

						</li><!--faculty-member-->

						<li class="faculty-member">

							<div class="faculty-inner">

								<img src="/_assets/img/silouette.png">
								
								<p class="name">Ashford Hughes</p>

								<a class="bio fancybox fancybox.iframe" href="/bios/ashford-hughes.php">View Bio</a>

							</div><!--faculty-inner-->

						</li><!--faculty-member-->

						<li class="faculty-member">

							<div class="faculty-inner">

								<img src="/_assets/img/silouette.png">
								
								<p class="name">Scott Gilmer</p>

								<a class="bio fancybox fancybox.iframe" href="/bios/scott-gilmer.php">View Bio</a>

							</div><!--faculty-inner-->

						</li><!--faculty-member-->

			    		<li class="faculty-member">

				    		<div class="faculty-inner">

				    			<img src="/_assets/img/silouette.png">
					
								<p class="name">Marsha Edwards</p>

								<a class="bio fancybox fancybox.iframe" href="/bios/marsha-edwards.php">View Bio</a>

							</div><!--faculty-inner-->

						</li><!--faculty-member-->

			    		<li class="faculty-member">

				    		<div class="faculty-inner">

				    			<img src="/_assets/img/silouette.png">
					
								<p class="name">Peter Martino</p>

								<a class="bio fancybox fancybox.iframe" href="/bios/peter-martino.php">View Bio</a>

							</div><!--faculty-inner-->

						</li><!--faculty-member-->

					</ul><!--slides-->

				</div><!--faculty-->

			</div><!--slider-->

	    </div><!--inner-->

	</section><!--subpage-->

	<section id="crumbs">
		
		<div class="inner">
			
			<div class="left"><a href="/outreach/other/">&lt; Other Outreach</a></div><!--left-->

			<div class="right"><a href="/outreach/other/recruit-2/">Recruit 2 Mission &gt;</a></div><!--right-->

		</div><!--inner-->

	</section><!--crumbs-->

</div><!--outreach-->

    <script type="text/javascript">
      $(function(){
        SyntaxHighlighter.all();
      });
      $(window).load(function(){
		$('.fancybox').fancybox();
        $('.faculty').flexslider({
          itemWidth: 100,
          itemMargin: 0,
          minItems: 2,
          maxItems: 5,
          controlNav: false,
          directionNav: false,
          animationLoop: false,
          start: function(slider){
            $('body').removeClass('loading');
          }
        });
      });
    </script>


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>