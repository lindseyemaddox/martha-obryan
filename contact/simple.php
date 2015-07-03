<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="/_assets/js/chosen.jquery.min.js" type="text/javascript"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<div id="contact" class="sub">

	<section class="header">
	
		<div class="gradient"></div>

		<div class="inner">
			
			<h1>Contact Us</h1>

		</div><!--inner-->

	</section><!--header-->

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subnav-contact.php'); ?>

	<section class="subpage">

		<div class="inner">
		
<!--start preliminary contact form-->

			<div class="form-simple">

				<p>Through the form below, you can simply contact us, sign up to receive the newsletter, schedule a tour of our center, donate, become an individual or group volunteer, give feedback, or become a patron. </p>

			    <form>
			        <div class='left'>
			        	<p class="label">First Name</p>
						<div class="floating-placeholder"><input type="text" name="firstName" id='firstName' size="10"><label for='firstName'>John</label></div>
			        	<p class="label">Last Name</p>
						<div class="floating-placeholder"><input type="text" name="lastName" id='lastName' size="10"><label for='lastName'>Smith</label></div>
			        	<p class="label">Email Address</p>
						<div class="floating-placeholder"><input type="text" name="email" id='email' size="10"><label for='email'>name@domain.com</label></div>
			        	<p class="label">Phone Number</p>
						<div class="floating-placeholder"><input type="text" name="phone" id='phone' size="10"><label for='phone'>(615) 555-5555</label></div>
						<div class="radios">
							<input type="radio" id="home" name="phone-type" checked><label for="home">Home</label>
							<input type="radio" id="work" name="phone-type"><label for="work">Work</label>
							<input type="radio" id="cell" name="phone-type"><label for="cell">Cell</label>
						</div><!--radios-->
			    	</div><!--left-->
			    	<div class='right'>
			        	<p class="label">Comment or Question</p>
						<textarea type="text" name="phone" id='phone' size="10"></textarea>
						<div class="checks">
							  <input type="checkbox" id="newsletter" name="check-action" checked><label for="newsletter">I’d like to receive the newsletter.</label>
							  <input type="checkbox" id="donation" name="check-action"><label for="donation">I’d like to make a donation.</label>
							  <input type="checkbox" id="patron" name="check-action"><label for="patron">I’d like to become a patron.</label>
							  <input type="checkbox" id="tour" name="check-action"><label for="tour">I’d like to schedule a tour.</label>
							  <input type="checkbox" id="volunteer" name="check-action"><label for="volunteer">I’d like to volunteer.</label>
							  <input type="checkbox" id="volunteer-feedback" name="check-action"><label for="volunteer-feedback">I’d like to submit volunteer feedback.</label>
						</div><!--checks-->
					</div><!--right-->
			        <button class='submit spacer' type='submit' name='submit'>Enter Information and Continue</button>
			      </form>

			</div><!--form-simple-->

			<hr>

<!--end preliminary contact form, start donate form-->

			<h2 class="sub">Make A Donation</h2>

			<p>Since our founding in 1894, Martha O'Bryan Center has worked to help families living in poverty reach self-sufficiency. We are grateful to all who choose to support Martha O'Bryan by making a tax-deductible gift.</p>

			<p>If you would prefer to mail a check, please send it to Development Office, Martha O'Bryan Center, 711 South Seventh Street, Nashville, TN 37206. Please include a phone number so that we can confirm receipt.</p>

			<div class="form-donate">

			    <form>
			        <div class='left'>
			        	<p class="label">Street Address</p>
						<div class="floating-placeholder"><input type="text" name="address" id='address' size="10"><label for='address'>123 Road St.</label></div>
			        	<p class="label">City</p>
						<div class="floating-placeholder"><input type="text" name="city" id='city' size="10"><label for='city'>Townville</label></div>
			        	<p class="label">State</p>
				        <select data-placeholder="Select State" style="width: 100%" class="chosen-select-no-results">
				            <option value=""></option>
				            <option>Alabama</option>
							<option>Alaska</option>
							<option>Arizona</option>
							<option>Arkansas</option>
							<option>California</option>
							<option>Colorado</option>
							<option>Connecticut</option>
							<option>Delaware</option>
							<option>Florida</option>
							<option>Georgia</option>
							<option>Hawaii</option>
							<option>Idaho</option>
							<option>Illinois</option>
							<option>Indiana</option>
							<option>Iowa</option>
							<option>Kansas</option>
							<option>Kentucky</option>
							<option>Louisiana</option>
							<option>Maine</option>
							<option>Maryland</option>
							<option>Massachusetts</option>
							<option>Michigan</option>
							<option>Minnesota</option>
							<option>Mississippi</option>
							<option>Missouri</option>
							<option>Montana</option>
							<option>Nebraska</option>
							<option>Nevada</option>
							<option>New Hampshire</option>
							<option>New Jersey</option>
							<option>New Mexico</option>
							<option>New York</option>
							<option>North Carolina</option>
							<option>North Dakota</option>
							<option>Ohio</option>
							<option>Oklahoma</option>
							<option>Oregon</option>
							<option>Pennsylvania</option>
							<option>Rhode Island</option>
							<option>South Carolina</option>
							<option>South Dakota</option>
							<option>Tennessee</option>
							<option>Texas</option>
							<option>Utah</option>
							<option>Vermont</option>
							<option>Virginia</option>
							<option>Washington</option>
							<option>West Virginia</option>
							<option>Wisconsin</option>
							<option>Wyoming</option>
				        </select>
   			        	<p class="label">Zip Code</p>
						<div class="floating-placeholder"><input type="text" name="zip" id='zip' size="10"><label for='zip'>12345</label></div>
			        	<p class="label">Country</p>
				        <select data-placeholder="Select Country" style="width: 100%" class="chosen-select-no-results">
				            <option value=""></option>
				            <option>Antigua and Barbuda</option>
							<option>Bahamas</option>
							<option>Barbados</option>
							<option>Belize</option>
							<option>Canada</option>
							<option>Costa Rica</option>
							<option>Cuba</option>
							<option>Dominica</option>
							<option>Dominican Republic</option>
							<option>El Salvador</option>
							<option>Grenada</option>
							<option>Guatemala</option>
							<option>Haiti</option>
							<option>Honduras</option>
							<option>Jamaica</option>
							<option>Mexico</option>
							<option>Nicaragua</option>
							<option>Panama</option>
							<option>St. Kitts and Nevis</option>
							<option>St. Lucia</option>
							<option>St. Vincent and The Grenadines</option>
							<option>Trinidad and Tobago</option>
							<option>USA (United States of America)</option>
				        </select>
			        	<p class="label">Credit Card Number</p>
						<div class="floating-placeholder"><input type="text" name="card" id='card' size="10"><label for='card'>1234 5678 1234 5678</label></div>
			        	<p class="label">Expiration</p>
			        	<div class="selects">
					        <select data-placeholder="01 - Jan" style="width:47%" class="chosen-select-no-results">
					            <option value=""></option>
					            <option>01 - Jan</option>
					            <option>02 - Feb</option>
								<option>03 - Mar</option>
								<option>04 - Apr</option>
								<option>05 - May</option>
								<option>06 - Jun</option>
								<option>07 - Jul</option>
								<option>08 - Aug</option>
								<option>09 - Sep</option>
								<option>10 - Oct</option>
								<option>11 - Nov</option>
								<option>12 - Dec</option>
					        </select>
					        &nbsp;&nbsp;&nbsp;&nbsp;
					        <select data-placeholder="2015" style="width:47%" class="chosen-select-no-results">
					            <option value=""></option>
					            <option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
								<option>2021</option>
								<option>2022</option>
								<option>2023</option>
								<option>2024</option>
								<option>2025</option>
					        </select>
					    </div><!--selects-->
			        	<p class="label">CVV</p>
						<div class="floating-placeholder"><input type="text" name="cvv" id='cvv' size="10"><label for='cvv'>123</label></div>
			        	<p class="label">Amount</p>
						<div class="floating-placeholder"><input type="text" name="amount" id='amount' size="10"><label for='amount'>US Dollar Only</label></div>
			    	</div><!--left-->
			    	<div class='right'>
			        	<p class="label">How did you hear about us?</p>
						<textarea type="text" name="reference" id='reference' size="10" placeholder="If you were referred to the Martha O’Bryan Center, who referred you?"></textarea>
			        	<p class="label">Additional Comments</p>
						<textarea type="text" name="comments" id='comments' size="10" placeholder="Include name and address for us to send an acknowledgement if this gift honors a special person or occasion, etc."></textarea>
			        	<p class="label">Company Name</p>
						<div class="floating-placeholder"><input type="text" name="company" id='company' size="10"><label for='company'>(if applicable)</label></div>
						<div class="checks">
							<br/>
							  <input type="checkbox" id="company-card" name="check-action"><label for="company-card">This donation is being made on a business credit card.</label>
							  <input type="checkbox" id="company-matching" name="check-action"><label for="company-matching">My company has a matching gift program.</label>
						</div><!--checks-->
						<div class="g-recaptcha" data-sitekey="6LctHwkTAAAAAH0qiULCswpucv3lWfFNMfooPyPX"></div>
					</div><!--right-->
					<p class="spacer">Martha O'Bryan Center values the security of our donors. To safeguard your information, MOBC submits all online donations to a high level of security. If you have issues processing your donation, please contact Shannon Wagner at (615) 254-1791 ext. 123. Thank you for your support.</p>
				    <p>Individuals donating $1,000 or more within our fiscal year (July 1 to June 30) automatically become part of the Champions Society. Champions Society members receive special program news, invitations to events and regular updates on how their investment is helping to transform lives in Nashville's most challenged neighborhood.</p>
			        <button class='submit' type='submit' name='submit'>Make Donation</button>
			      </form>

			</div><!--form-donate-->


<!--end donate form, start tour form-->

			<div class="form-tour">

				<h2 class="sub">Schedule a Tour</h2>

			    <form>
			        <div class='left'>
			        	<p class="label">Time Preference</p>
						<div class="radios">
							<input type="radio" id="morning" name="tour-time" checked><label for="morning">Morning</label>
							<input type="radio" id="midday" name="tour-time"><label for="midday">Midday</label>
							<input type="radio" id="afternoon" name="tour-time"><label for="afternoon">Afternoon</label>
						</div><!--radios-->
			        	<p class="label spacer">Total Individuals in your Party</p>
				        <select data-placeholder="1" style="width:100%" class="chosen-select-no-results">
				            <option value=""></option>
				            <option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5 or more</option>
				        </select>
			    	</div><!--left-->
			    	<div class='right'>
			        	<p class="label">How did you hear about us?</p>
						<textarea class="smaller" type="text" name="reference" id='reference' size="10" placeholder="If you were referred to the Martha O’Bryan Center, who referred you?"></textarea>
					</div><!--right-->
					<p>After your registration form is received, you will receive a scheduling email from a member of the Development team. For questions, please call Jennifer Jackson (615) 254-1791 ext. 122. If you are interested in information about a single program, partnership, sales, or other business matters, you may be rerouted to a specific staff member regarding your interests. For individuals applying for job opportunities at MOBC, please do not register for a tour during the application process. This is out of fairness to all job applicants and also for the effectiveness of our processes at MOBC.</p>
				    <button class='submit' type='submit' name='submit'>Schedule Tour</button>
			      </form>

			</div><!--form-tour-->

<!--end tour form, start volunteer form-->

			<div class="form-volunteer">

				<h2 class="sub">Volunteer</h2>

				<p>By volunteering at the Martha O'Bryan Center, you help us to break the line between poverty and potential for at-risk children, families and individuals. Please complete the form below. Your information will be kept confidential.</p>

			    <form>
			        <div class='left'>
			        	<p class="label">Street Address</p>
						<div class="floating-placeholder"><input type="text" name="address" id='address' size="10"><label for='address'>123 Road St.</label></div>
			        	<p class="label">City</p>
						<div class="floating-placeholder"><input type="text" name="city" id='city' size="10"><label for='city'>Townville</label></div>
			        	<p class="label">State</p>
				        <select data-placeholder="Select State" style="width: 100%" class="chosen-select-no-results">
				            <option value=""></option>
				            <option>Alabama</option>
							<option>Alaska</option>
							<option>Arizona</option>
							<option>Arkansas</option>
							<option>California</option>
							<option>Colorado</option>
							<option>Connecticut</option>
							<option>Delaware</option>
							<option>Florida</option>
							<option>Georgia</option>
							<option>Hawaii</option>
							<option>Idaho</option>
							<option>Illinois</option>
							<option>Indiana</option>
							<option>Iowa</option>
							<option>Kansas</option>
							<option>Kentucky</option>
							<option>Louisiana</option>
							<option>Maine</option>
							<option>Maryland</option>
							<option>Massachusetts</option>
							<option>Michigan</option>
							<option>Minnesota</option>
							<option>Mississippi</option>
							<option>Missouri</option>
							<option>Montana</option>
							<option>Nebraska</option>
							<option>Nevada</option>
							<option>New Hampshire</option>
							<option>New Jersey</option>
							<option>New Mexico</option>
							<option>New York</option>
							<option>North Carolina</option>
							<option>North Dakota</option>
							<option>Ohio</option>
							<option>Oklahoma</option>
							<option>Oregon</option>
							<option>Pennsylvania</option>
							<option>Rhode Island</option>
							<option>South Carolina</option>
							<option>South Dakota</option>
							<option>Tennessee</option>
							<option>Texas</option>
							<option>Utah</option>
							<option>Vermont</option>
							<option>Virginia</option>
							<option>Washington</option>
							<option>West Virginia</option>
							<option>Wisconsin</option>
							<option>Wyoming</option>
				        </select>
   			        	<p class="label">Zip Code</p>
						<div class="floating-placeholder"><input type="text" name="zip" id='zip' size="10"><label for='zip'>12345</label></div>
			        	<p class="label">Country</p>
				        <select data-placeholder="Select Country" style="width: 100%" class="chosen-select-no-results">
				            <option value=""></option>
				            <option>Antigua and Barbuda</option>
							<option>Bahamas</option>
							<option>Barbados</option>
							<option>Belize</option>
							<option>Canada</option>
							<option>Costa Rica</option>
							<option>Cuba</option>
							<option>Dominica</option>
							<option>Dominican Republic</option>
							<option>El Salvador</option>
							<option>Grenada</option>
							<option>Guatemala</option>
							<option>Haiti</option>
							<option>Honduras</option>
							<option>Jamaica</option>
							<option>Mexico</option>
							<option>Nicaragua</option>
							<option>Panama</option>
							<option>St. Kitts and Nevis</option>
							<option>St. Lucia</option>
							<option>St. Vincent and The Grenadines</option>
							<option>Trinidad and Tobago</option>
							<option>USA (United States of America)</option>
				        </select>
			        	<p class="label">Gender</p>
						<div class="radios">
							<input type="radio" id="male" name="gender" checked><label for="male">Male</label>
							<input type="radio" id="female" name="gender"><label for="female">Female</label>
						</div><!--radios-->
   			        	<p class="label">Date of Birth</p>
						<div class="floating-placeholder"><input type="text" name="dob" id='dob' size="10" class="datepicker"><label for='dob'>00/00/0000</label></div>
			        	<p class="label">Are You the On-Site Contact?</p>
						<div class="radios">
							<input type="radio" id="yes" name="on-site" checked><label for="yes">Yes</label>
							<input type="radio" id="no" name="on-site"><label for="no">No</label>
						</div><!--radios-->
<!--if above is answered no--><p class="label">Please List the On-Site Contact.</p>
						<div class="floating-placeholder"><input type="text" name="on-site-contact" id='on-site-contact' size="10"><label for='on-site-contact'>John Smith</label></div>
			        	<p class="label">Availability</p>
						<div class="availability">
							<div class="floating-placeholder left"><input type="text" name="start" id='start' size="10" class="datepicker"><label for='start'>start</label></div>
							<div class="floating-placeholder right"><input type="text" name="start-time" id='start-time' size="10"><label for='start-time'>time</label></div>
							<div class="radios">
								<input type="radio" id="start-am" name="start-time-apm" checked><label for="start-am">AM</label>
								<input type="radio" id="start-pm" name="start-time-apm"><label for="start-pm">PM</label>
							</div><!--radios-->
						</div><!--availability-->
						<div class="availability">
							<div class="floating-placeholder left"><input type="text" name="end" id='end' size="10" class="datepicker"><label for='end'>end</label></div>
							<div class="floating-placeholder right"><input type="text" name="end-time" id='end-time' size="10"><label for='end-time'>time</label></div>
							<div class="radios">
								<input type="radio" id="end-am" name="end-time-apm" checked><label for="end-am">AM</label>
								<input type="radio" id="end-pm" name="end-time-apm"><label for="end-pm">PM</label>
							</div><!--radios-->
						</div><!--availability-->
				        <select data-placeholder="Repeat" style="width: 100%" class="chosen-select-no-results">
				            <option value=""></option>
				            <option>None</option>
							<option>By Day</option>
							<option>By Week</option>
							<option>By Month</option>
							<option>By Year</option>
				        </select>
			    	</div><!--left-->
			    	<div class='right'>
			        	<p class="label">Area(s) of Interest</p>
						<div class="checks">
							  <input type="checkbox" id="early-education" name="check-interest"><label for="early-education">Early Education</label>
							  <input type="checkbox" id="k8-education" name="check-interest"><label for="k8-education">K-8 Education</label>
							  <input type="checkbox" id="hs-education" name="check-interest"><label for="hs-education">High School Education / ASUS</label>
							  <input type="checkbox" id="college-career" name="check-interest"><label for="college-career">College and Career</label>
							  <input type="checkbox" id="community" name="check-interest"><label for="community">Community Outreach</label>
							  <input type="checkbox" id="family" name="check-interest"><label for="family">Family Outreach</label>
							  <input type="checkbox" id="food-bank" name="check-interest"><label for="food-bank">Food Bank</label>
							  <input type="checkbox" id="meals-wheels" name="check-interest"><label for="meals-wheels">Meals on Wheels</label>
							  <input type="checkbox" id="operations" name="check-interest"><label for="operations">Operations</label>
							  <input type="checkbox" id="events" name="check-interest"><label for="events">Special Events</label>
							  <input type="checkbox" id="ideas" name="check-interest"><label for="ideas">New Ideas</label>
						</div><!--checks-->
			        	<p class="label">How did you hear about us?</p>
						<textarea class="smaller" type="text" name="reference" id='reference' size="10" placeholder="If you were referred to the Martha O’Bryan Center, who referred you?"></textarea>
			        	<p class="label">Describe your Group.</p>
						<textarea class="smaller" type="text" name="reference" id='reference' size="10" placeholder="(ages, sexes, affiliation, number of volunteers, etc.). If the group is comprised mostly of children under age 18, how many adults will be present?"></textarea>
			        	<p class="label">Why Are You Volunteering?</p>
						<textarea class="smaller" type="text" name="reference" id='reference' size="10" placeholder="If you are volunteering to earn community service hours for MDHA, court-ordered service, or any other mandatory service, please contact the Director of Community Outreach at 615.254.1791 x213 or at kawema@marthaobryan.org."></textarea>
					</div><!--right-->
			        <button class='submit spacer' type='submit' name='submit'>Volunteer</button>
			      </form>

			</div><!--form-volunteer-->

<!--end volunteer form, start feedback form-->

			<div class="form-feedback">

				<h2 class="sub">About Your Volunteer Experience</h2>

			    <form>
			        <div class='left'>
			        	<p class="label">Date of Volunteerism</p>
						<div class="floating-placeholder"><input type="text" name="feedback-start" id='feedback-start' size="10" class="datepicker"><label for='start'>start</label></div>
						<div class="floating-placeholder"><input type="text" name="feedback-end" id='feedback-end' size="10" class="datepicker"><label for='end'>end</label></div>
			        	<p class="label spacer">What Were Your Expectations?</p>
						<textarea type="text" name="expectations" id='expectations' size="10" placeholder="Please describe your expectations."></textarea>
			        	<p class="label">Were Your Expectations Met?</p>
						<div class="radios">
							<input type="radio" id="expectations-yes" name="expectations-met" checked><label for="expectations-yes">Yes</label>
							<input type="radio" id="expectations-mostly" name="expectations-met"><label for="expectations-mostly">Mostly</label>
							<input type="radio" id="expectations-somewhat" name="expectations-met"><label for="expectations-somewhat">Somewhat</label>
							<input type="radio" id="expectations-no" name="expectations-met"><label for="expectations-no">No</label>
						</div><!--radios-->
			        	<p class="label spacer">How adequate was your orientation, tour, or training?</p>
						<textarea type="text" name="adequate" id='adequate' size="10" placeholder="Please describe your orientation, tour, or training."></textarea>
			        	<p class="label">Would you recommend volunteering with MOBC?</p>
						<textarea type="text" name="recommend" id='recommend' size="10" placeholder="If no, please tell us why."></textarea>
			    	</div><!--left-->
			    	<div class='right'>
			        	<p class="label">How did you benefit from your experience?</p>
						<textarea type="text" name="benefit" id='benefit' size="10" placeholder="For example, share an anecdote or something you learned."></textarea>
			        	<p class="label">What suggestions, changes or recommendations do you have for our volunteer program?</p>
						<textarea type="text" name="suggestions" id='suggestions' size="10" placeholder="Let us know how we can improve."></textarea>
						<p class="label">There are occasions when Martha O'Bryan Center needs volunteers on short notice. Shifts vary in length and responsibility. We are creating a list of volunteers who would be willing to be contacted in these situations. Would you be willing to be contacted in the event Martha O'Bryan Center needs a volunteer on short notice? </p>
						<div class="radios">
							<input type="radio" id="short-yes" name="short-notice" checked><label for="short-yes">Yes</label>
							<input type="radio" id="short-no" name="short-notice"><label for="short-no">No</label>
						</div><!--radios-->
					</div><!--right-->
					<p class="spacer">Thank you for volunteering for Martha O'Bryan Center. Your information and responses will be kept confidential. </p>
				    <button class='submit' type='submit' name='submit'>Submit Feedback</button>
			      </form>

			</div><!--form-tour-->

<!--end feedback form-->

	    </div><!--inner-->

	</section><!--subpage-->

	<section id="crumbs">
		
		<div class="inner">
			
			<div class="left"><a href="/news/">&lt; News &amp; Events</a></div><!--left-->

			<div class="right"><a href="/contact/wish-lists">Wish Lists &gt;</a></div><!--right-->

		</div><!--inner-->

	</section><!--crumbs-->

</div><!--outreach-->

	<script type="text/javascript">
		$(document).ready(function(){

			function updateText(event){
					var input=$(this);
					setTimeout(function(){
						var val=input.val();
						if(val!="")
							input.parent().addClass("floating-placeholder-float");
						else
							input.parent().removeClass("floating-placeholder-float");
					},1)
				}
				$(".floating-placeholder input").keydown(updateText);
				$(".floating-placeholder input").change(updateText);
				$("input:text").val("");

				$('input[placeholder="mm/dd/yyyy"]').bind('keyup',function(){
					var strokes = $(this).val().length;
					if(strokes === 2 || strokes === 5){
							var thisVal = $(this).val();
							thisVal += '/';
							$(this).val(thisVal);
					}
			});

		});


    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }


  $(function() {
    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      showOn: "both",
      buttonImage: "/_assets/img/calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  });
</script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>