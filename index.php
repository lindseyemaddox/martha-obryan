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

<script src="/_assets/js/jquery-scrollspy.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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

	<section id="numbers">
		
		<div class="inner">
			
			<article class="four">
				
				<p id="individuals" class="number">6000</p>

				<p class="header">Individuals</p>

				<p class="desc">served through a continuum of cradle to college to career services</p>

			</article><!--four-->

			<article class="four">

				<p id="volunteers" class="number">347</p>

				<p class="header">Volunteers</p>

				<p class="desc">engaged with their community through opportunities with us</p>

			</article><!--four-->

			<article class="four">

				<p id="sponsors" class="number">28</p>

				<p class="header">Sponsors</p>

				<p class="desc">have taken action through our corporate patron program</p>

			</article><!--four-->

			<article class="four">

				<p id="families" class="number">286</p>

				<p class="header">Families</p>

				<p class="desc">empowered through early intervention and educational assistance</p>

			</article><!--four-->

		</div><!--inner-->

	</section><!--numbers-->

	<section id="work">
		
		<div class="inner">
			
			<h5>Work with Martha O’Bryan</h5>

			<article class="job">
				
				<p class="title">Founding Physical Education Teacher</p>

				<p class="location">Explore Community School</p>

				<p class="city">Nashville, TN</p>

				<p class="desc">At Explore, we always begin with our mission: to foster the independence, critical thinking, and creativity of a diverse community of learners so they are fully prepared...</p>

				<a class="btn" href="/careers/">Learn More</a>

			</article><!--job-->

			<article class="job">
				
				<p class="title">Ingram Athlete Summer Camp Counselor</p>

				<p class="location">Martha O'Bryan</p>

				<p class="city">Nashville, TN</p>

				<p class="desc">The THRIVE program at the Martha O’Bryan Center is looking for Vanderbilt student athletes to staff our summer camp. This opportunity is specifically for student...</p>

				<a class="btn" href="/careers/">Learn More</a>

			</article><!--job-->

			<article class="job">
				
				<p class="title">Full Time Kitchen Assistant</p>

				<p class="location">Martha O'Bryan</p>

				<p class="city">Nashville, TN</p>

				<p class="desc">The Martha O'Bryan Center is a creative activist ministry serving over 9,000 clients in Nashville each year through early learning education, youth development, Work Ready...</p>

				<a class="btn" href="/careers/">Learn More</a>

			</article><!--job-->

			<article class="job">
				
				<p class="title">Founding Office Manager</p>

				<p class="location">Explore Community School</p>

				<p class="city">Nashville, TN</p>

				<p class="desc">The THRIVE program at the Martha O’Bryan Center is looking for Vanderbilt student athletes to staff our summer camp. This opportunity is specifically for student...</p>

				<a class="btn" href="/careers/">Learn More</a>

			</article><!--job-->

		</div><!--inner-->

	</section><!--work-->

	<section id="form">
		
		<div class="inner">
			
			<h5>Be Part of the Solution</h5>

			<article class="option" id="k8education">
				
				<p class="title">K-8 Education</p>

			</article><!--option-->

			<article class="option" id="college-career">
				
				<p class="title">College &amp; Career</p>

			</article><!--option-->

			<article class="option" id="early-learning-center">
				
				<p class="title">Early Learning Center</p>

			</article><!--option-->

			<article class="option" id="hseducation-asu">
				
				<p class="title">High School Education / ASUs</p>

			</article><!--option-->

			<article class="option" id="clerical-support">
				
				<p class="title">Clerical Support</p>

			</article><!--option-->

			<article class="option" id="family-outreach">
				
				<p class="title">Family Outreach</p>

			</article><!--option-->

			<article class="option" id="community-outreach">
				
				<p class="title">Community Outreach</p>

			</article><!--option-->

			<article class="option" id="new-ideas">
				
				<p class="title">New Ideas</p>

			</article><!--option-->

			<article class="option" id="community-activities">
				
				<p class="title">Community Activities</p>

			</article><!--option-->

			<article class="option" id="food-bank">
				
				<p class="title">Food Bank</p>

			</article><!--option-->

			<article class="option" id="meals-on-wheels">
				
				<p class="title">Meals on Wheels</p>

			</article><!--option-->

			<article class="option" id="meal-prep">
				
				<p class="title">Meal/Snack Preparation</p>

			</article><!--option-->

			<article class="option" id="aaeducation">
				
				<p class="title">Academic Adult Education</p>

			</article><!--option-->

			<article class="option" id="homework-helper">
				
				<p class="title">Homework Helper</p>

			</article><!--option-->

			<article class="option" id="operations">
				
				<p class="title">Operations</p>

			</article><!--option-->

		    <?php
		        $email = $_REQUEST['email'] ;
		        if (isset($_POST['submit'])) {
		          $to = 'lindseyemaddox@gmail.com';
		          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		          $headers .= "MIME-Version: 1.0\r\n";
		          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		          $message = '<html><body>';
		          $message .= 'Email: '.$email.'<br>';
	              if (isset($_POST['k8education'])) {
	                  $message .= 'I am interested in K-8 Education.<br>';
	                } 
	              if (isset($_POST['college-career'])) {
	                  $message .= 'I am interested in College & Career.<br>';
	                } 
	              if (isset($_POST['early-learning-center'])) {
	                  $message .= 'I am interested in the Early Learning Center.<br>';
	                } 
	              if (isset($_POST['hseducation-asu'])) {
	                  $message .= 'I am interested in High School Education and ASUs.<br>';
	                } 
	              if (isset($_POST['clerical-support'])) {
	                  $message .= 'I am interested in Clerical Support.<br>';
	                } 
	              if (isset($_POST['family-outreach'])) {
	                  $message .= 'I am interested in Family Outreach.<br>';
	                } 
	              if (isset($_POST['community-outreach'])) {
	                  $message .= 'I am interested in Community Outreach.<br>';
	                } 
	              if (isset($_POST['new-ideas'])) {
	                  $message .= 'I am interested in New Ideas.<br>';
	                } 
	              if (isset($_POST['community-activities'])) {
	                  $message .= 'I am interested in Community Activities.<br>';
	                } 
	              if (isset($_POST['food-bank'])) {
	                  $message .= 'I am interested in the Food Bank.<br>';
	                } 
	              if (isset($_POST['meals-on-wheels'])) {
	                  $message .= 'I am interested in the Meals on Wheels.<br>';
	                } 
	              if (isset($_POST['meal-prep'])) {
	                  $message .= 'I am interested in Meal/Snack Preparation.<br>';
	                } 
	              if (isset($_POST['aaeducation'])) {
	                  $message .= 'I am interested in Academic Adult Education.<br>';
	                } 
	              if (isset($_POST['homework-helper'])) {
	                  $message .= 'I am interested in being a Homework Helper.<br>';
	                } 
	              if (isset($_POST['operations'])) {
	                  $message .= 'I am interested in Operations.<br>';
	                } 
	                else {
	              }
		          $message .= '</body></html>';
		          $subject = 'New Volunteer Submission';

		    mail($to, $subject, $message, $headers);
		    echo "<div id='thanks'><label>Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
		  }
		else
		  { echo "<form method='post' action='".$_SERVER['SCRIPT_NAME']."'>

				<div id='box'>
					
					<p>Drag boxes here.</p>

				</div><!--box-->

				<div id='form-right'>

					<input type='text' name='email' id='email' size='10' placeholder='Enter your email address.'>

			        <button class='btn submit' type='submit' name='submit'>Click Here to have us contact you.</button>

			    </div><!--form-right-->

				<input class='k8education' type='checkbox' name='k8education'>
				<input class='college-career' type='checkbox' name='college-career'>
				<input class='early-learning-center' type='checkbox' name='early-learning-center'>
				<input class='hseducation-asu' type='checkbox' name='hseducation-asu'>
				<input class='clerical-support' type='checkbox' name='clerical-support'>
				<input class='family-outreach' type='checkbox' name='family-outreach'>
				<input class='community-outreach' type='checkbox' name='community-outreach'>
				<input class='new-ideas' type='checkbox' name='new-ideas'>
				<input class='community-activities' type='checkbox' name='community-activities'>
				<input class='food-bank' type='checkbox' name='food-bank'>
				<input class='meals-on-wheels' type='checkbox' name='meals-on-wheels'>
				<input class='meal-prep' type='checkbox' name='meal-prep'>
				<input class='aaeducation' type='checkbox' name='aaeducation'>
				<input class='homework-helper' type='checkbox' name='homework-helper'>
				<input class='operations' type='checkbox' name='operations'>

			</form>";
			      }
			    ?>

		</div><!--inner-->

	</section><!--work-->

</div><!--home-->

	<script>
		$(document).ready(function(){

			$('#numbers').scrollspy({
			min: $('#numbers').offset().top,
			max:$('footer').offset().top,
			container: window,
			onEnter: function() {

			// Animate the individuals value from x to y:
			  $({someValue: 0}).animate({someValue: 6000}, {
			      duration: 3500,
			      easing:'swing', // can be anything
			      step: function() { // called on every step
			          // Update the element's text with rounded-up value:
			          $('#individuals').text(Math.round(this.someValue));
			      }
			  });
			  $({someValue: 0}).animate({someValue: 347}, {
			      duration: 3000,
			      easing:'swing', // can be anything
			      step: function() { // called on every step
			          $('#volunteers').text(Math.round(this.someValue));
			      }
			  });
			  $({someValue: 0}).animate({someValue: 28}, {
			      duration: 2500,
			      easing:'swing', // can be anything
			      step: function() { // called on every step
			          $('#sponsors').text(Math.round(this.someValue));
			      }
			  });
			  $({someValue: 0}).animate({someValue: 286}, {
			      duration: 3000,
			      easing:'swing', // can be anything
			      step: function() { // called on every step
			          $('#families').text(Math.round(this.someValue));
			      }
			  });

			}
			});

		});

		$(function() {
			$( ".option" ).draggable({
				stop: function( event, ui ) {
					

					$(this).addClass("checked");

				}
			});

		  var option = $('.checked').attr('id');
		  console.log(option);
		  $("input#"+option).attr('checked', true).change();

			$( "#box" ).droppable({
		      hoverClass: "clue",
			  drop: function( event, ui ) {
			    $( this )
			      .addClass( "ui-state-highlight" )
			      .find( "p" )
			        .html( "Thank You." );
			      

			  }
			});
		});
	</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>