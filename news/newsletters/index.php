<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src="/_assets/js/isotope.jquery.min.js"></script>
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

	<section id="options" class="subpage-sort newsletters">
		
		<div class="inner">

			<h2>Newsletters</h2>
			
			<div class="wrapper">

			    <div class="main">

			        <div class="container">
				
	  			    	<aside class="sorter">
	  			    		
	  			      		<div id="sidebar" class="clearfix">

  	  			        		<ul id="filters" class="option-set clearfix" data-option-key="filter">
  	  			          			<li><h3><a href="#filter" data-option-value="*" class="selected">Show All</a></h3></li>
  	  			          			<li><h3><a href="#filter" data-option-value=".y2015">2015</a></h3></li>
  	  			          			<li><h3><a href="#filter" data-option-value=".y2014">2014</a></h3></li>
  	  			          			<li><h3><a href="#filter" data-option-value=".y2013">2013</a></h3></li>
  	  			          			<li><h3><a href="#filter" data-option-value=".y2012">2012</a></h3></li>
  	  			          			<li><h3><a href="#filter" data-option-value=".y2011">2011</a></h3></li>
  	  			          			<li><h3><a href="#filter" data-option-value=".y2010">2010</a></h3></li>
      			           </ul>

      						  </div><!--sidebar-->

      			    </aside>

      			   	<div id="items" class="clearfix">

    						<article class="item y2013">
    						  	<h4>June 2013</h4>
    						  	<h5>THRIVE Summer Camp 2013 in full swing</h5>
								    <h5>Help equip our students for college at College-bound Bash</h5>
								    <h5>Crankin' champion repeats with another winning recipe</h5>
								    <h5>M.L. Rose cooks up a delicious fundraiser for MOBC</h5>
    						    <a href="/news/newsletters/newsletter" class="btn fancybox fancybox.iframe">Read More</a>
    						</article>

                <article class="item y2013">
                    <h4>Spring 2013</h4>
                    <h5>THRIVE youth run in 2013 Kid's Marathon</h5>
                    <h5>Mark your calendar for Crankin' on June 9</h5>
                    <h5>Shop at Parnassus Books May 14 to support Martha O'Bryan</h5>
                    <h5>Calling all yogis! Join Hot Yoga Plus class May 19 to support the Center</h5>
                    <h5>Buy your Sounds tickets here to support Martha O'Bryan</h5>
                    <a href="/news/newsletters/newsletter" class="btn fancybox fancybox.iframe">Read More</a>
                </article>

                <article class="item y2013">
                    <h4>January 2013</h4>
                    <h5>How to be join the next generation of MOBC supporters</h5>
                    <h5>Expungement workshop offers a chance to start anew</h5>
                    <a href="/news/newsletters/newsletter" class="btn fancybox fancybox.iframe">Read More</a>
                </article>

                <article class="item y2012">
                    <h4>Fall/Winter 2012</h4>
                    <h5>Nashville Promise Neighborhood plan gets moving</h5>
                    <h5>Knits for Needs gives the gift of warmth from around the world</h5>
                    <h5>Marsha Edwards explains why Nashville should Break the Line</h5>
                    <a href="/news/newsletters/newsletter" class="btn fancybox fancybox.iframe">Read More</a>
                </article>

                <article class="item y2012">
                    <h4>August 2012</h4>
                    <h5>East End Prep begins 2012-13 academic year</h5>
                    <h5>Volunteers help community garden thrive</h5>
                    <h5>In the news: Nashville Promise Neighborhood</h5>
                    <h5>In the news: Q&A with Promise Neighborhood director</h5>
                    <h5>In the news: High-speed Internet proposed for Promise Neighborhood</h5>
                    <a href="/news/newsletters/newsletter" class="btn fancybox fancybox.iframe">Read More</a>
                </article>

                <article class="item y2012">
                    <h4>July 2012</h4>
                    <h5>You can help at-risk high school grads entering college</h5>
                    <h5>MOBC has plenty of successes to celebrate</h5>
                    <h5>Fundraiser starts early to support new college students</h5>
                    <h5>We're grateful for our hundreds of volunteers</h5>
                    <a href="/news/newsletters/newsletter" class="btn fancybox fancybox.iframe">Read More</a>
                </article>

                <article class="item y2012">
                    <h4>June 2012</h4>
                    <h5>Crankin 2012: A little rain, a lot of ice cream</h5>
                    <h5>New awareness campaign asks East Nashvillians to 'Break the Line'</h5>
                    <h5>Adult Education celebrates 67 graduates with annual ceremony</h5>
                    <a href="/news/newsletters/newsletter" class="btn fancybox fancybox.iframe">Read More</a>
                </article>

                <article class="item y2012">
                    <h4>May 2012</h4>
                    <h5>New initiative supports families by supporting fathers</h5>
                    <h5>ELC pupils excel on Pre-K assessments</h5>
                    <h5>Get tickets and T-shirts now for Miss Martha's Ice Cream Crankin'</h5>
                    <a href="/news/newsletters/newsletter" class="btn fancybox fancybox.iframe">Read More</a>
                </article>

    				    </div><!--items-->

        		  </div><!--container-->

        		</div><!--main-->

	        </div><!--wrapper-->

	    </div><!--inner-->

	</section><!--options-->

  <section id="crumbs">
    
    <div class="inner">
      
      <div class="left"><a href="/news/ice-cream-crankin/">&lt; Miss Martha's Ice Cream Crankin' & Summer Social</a></div><!--left-->

      <div class="right"><a href="/contact/">Contact Us &gt;</a></div><!--right-->

    </div><!--inner-->

  </section><!--crumbs-->

</div><!--outreach-->

<script>

    $(function(){

      var $container = $('#items');

      $container.isotope({
        itemSelector : '.item'
      });


      var $optionSets = $('#sidebar .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }

        return false;
      });

    });


	$(function(){
		SyntaxHighlighter.all();
	});
	$(window).load(function(){
		$('.fancybox').fancybox();
	});


</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>