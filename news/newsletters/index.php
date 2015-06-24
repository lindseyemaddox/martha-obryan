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

	<section id="options">
		
		<div class="inner">

			<h2>Newsletters</h2>

			<h3>Need a subhead</h3>
			
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

    				    </div><!--items-->

        		    </div><!--container-->

        		</div><!--main-->

	        </div><!--wrapper-->

	    </div><!--inner-->

	</section><!--options-->

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