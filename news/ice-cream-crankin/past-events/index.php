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
		
			<h2>Purity Miss Martha's Ice Cream Crankin' and Summer Social Past Events</h2>

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

      						<article class="item y2014">
      						  	<h4>2014</h4>
      						  	<h5>Sandy Tyrell of Harpeth Presbyterian Church took home the Best of Show award for the 29th Purity Miss Martha's Ice Cream Crankin'. Purity Dairies will try to replicate her winning recipe, Salt Lick N Burnt Caramel, and add it to its lineup of ice cream flavors in 2015. Tyrell's ice cream, a salty caramel with chopped Milky Way bars, also tied for first for vanilla-based flavors.</h5>
      						    <a href="/news/ice-cream-crankin/past-events/past-event.php" class="btn fancybox fancybox.iframe">Read More</a>
      						</article>

                  <article class="item y2013">
                      <h4>2013</h4>
                      <h5>For the second consecutive year, Mary Allen took home the Best of Show, this time with her ice cream flavor "Graham Ole Opry," which combines vanilla ice cream, brown sugar, swirls of caramel, chopped peanuts and chocolate with bits of graham crackers. She follows in the footsteps of her mother, Burkley, and sister, Sara, as past champions. Look for Graham Ole Opry to be available as a Purity flavor next year.</h5>
                      <a href="/news/ice-cream-crankin/past-events/past-event.php" class="btn fancybox fancybox.iframe">Read More</a>
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
        $('.sponsors-crankin-page-past').flexslider({
          minItems: 7,
          maxItems: 7,
          controlNav: false,
          directionNav: true,
        });
	});



</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>