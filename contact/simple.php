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
						<textarea type="text" name="generalQuestion" id='generalQuestion' size="10"></textarea>
						<div class="checks">
							  <input type="checkbox" id="newsletter" name="check-action" checked><label for="newsletter">I’d like to receive the newsletter.</label>
							  <input type="checkbox" id="donation" name="check-action"><label for="donation">I’d like to make a donation.</label>
							  <input type="checkbox" id="patron" name="check-action"><label for="patron">I’d like to become a patron.</label>
							  <input type="checkbox" id="tour" name="check-action"><label for="tour">I’d like to schedule a tour.</label>
							  <input type="checkbox" id="volunteer" name="check-action"><label for="volunteer">I’d like to volunteer.</label>
							  <input type="checkbox" id="volunteer-feedback" name="check-action"><label for="volunteer-feedback">I’d like to submit volunteer feedback.</label>
							  <input type="checkbox" id="job" name="check-action"><label for="job">I’d like to apply for a job.</label>
						</div><!--checks-->
					</div><!--right-->
			        <button class='submit spacer' type='submit' name='submit'>Enter Information and Continue</button>
			      </form>

			</div><!--form-simple-->

			<hr>

<!--end preliminary contact form, start crankin form-->

			<h2 class="sub">Purchase Crankin' Tickets</h2>

			<p>All admission tickets will be delivered to the email address you submit. If you encounter a problem, please contact Jennifer Jackson at jjackson@marthaobryan.org or call 615-254-1791 x 122. (Under 2 is free; child is 3-12; adult is 13 and up.)</p>

			<div class="form-crankin">

			    <form>
			        <div class='left'>
			        	<p class="label">Adult Tickets</p>
						<div class="floating-placeholder"><input type="text" name="crankinAdult" id='crankinAdult' size="10"><label for='crankinAdult'>$10</label></div>
			        	<p class="label">Child Tickets</p>
						<div class="floating-placeholder"><input type="text" name="crankinChild" id='crankinChild' size="10"><label for='crankinChild'>$8</label></div>
			    	</div><!--left-->
			    	<div class='right'>
			        	<p class="label">Comment or Question</p>
						<textarea type="text" name="crankinQuestion" id='crankinQuestion' size="10"></textarea>
					</div><!--right-->
			        <button class='submit spacer' type='submit' name='submit'>Enter Information and Continue to Billing</button>
			      </form>

			</div><!--form-crankin-->

			<hr>

<!--end crankin form, start crankin patron form-->

			<h2 class="sub">Become a Crankin' Patron</h2>

			<p>Please contact Jennifer Jackson by email or 615.254.1791 x122 for more information. You may also call to become a patron, or complete the form below.</p>

			<div class="form-crankin-patron">

			    <form>
			        <div class='left'>
			        	<p class="label">Patron Level</p>
						<div class="radios">
							<input type="radio" id="strawberry" name="crankinPatron-type" checked><label for="strawberry">Strawberry Supporter ($100)</label><br/><br/>
							<input type="radio" id="chocolate" name="crankinPatron-type"><label for="chocolate">Chocolate Club ($150)</label><br/><br/>
							<input type="radio" id="vanilla" name="crankinPatron-type"><label for="vanilla">Vanilla Circle ($250)</label><br/><br/>
							<input type="radio" id="neapolitan" name="crankinPatron-type"><label for="neapolitan">Neapolitan Society ($500)</label>
						</div><!--radios-->
			    	</div><!--left-->
			    	<div class='right'>
			        	<p class="label">How do you prefer to be publicly recognized?</p>
						<div class="floating-placeholder"><input type="text" name="patronRecognition" id='patronRecognition' size="10"><label for='patronRecognition'>John Smith of Company Name</label></div>
					</div><!--right-->
			        <button class='submit spacer' type='submit' name='submit'>Enter Information and Continue to Billing</button>
			      </form>

			</div><!--form-crankin-patron-->

			<hr>

<!--end crankin patron form, start donate form-->

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
							<input type="radio" id="expectations-yes" name="expectations-met"><label for="expectations-yes">Yes</label>
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
							<input type="radio" id="short-yes" name="short-notice"><label for="short-yes">Yes</label>
							<input type="radio" id="short-no" name="short-notice"><label for="short-no">No</label>
						</div><!--radios-->
					</div><!--right-->
					<p class="spacer">Thank you for volunteering for Martha O'Bryan Center. Your information and responses will be kept confidential. </p>
				    <button class='submit' type='submit' name='submit'>Submit Feedback</button>
			      </form>

			</div><!--form-feedback-->

<!--end feedback form start apply form-->

			<div class="form-apply">

				<h2 class="sub">Submit Documents</h2>

				<form action="upload.php" method="post" enctype="multipart/form-data">
					<div class="left">
			        	<p class="label">Select Opening</p>
				        <select data-placeholder="Opening" style="width: 100%" class="chosen-select-no-results">
				            <option value=""></option>
				            <option>[populate these with job titles]</option>
				        </select>
			    	</div><!--left-->
			    	<div class='right'>
			        	<p class="label">Upload Cover Letter</p>
						<input type="file" name="coverLetter" id='coverLetter' size="10">
			        	<p class="label">Upload Resume</p>
						<input type="file" name="resume" id='resume' size="10">
			    	</div>
				    <button class='submit' type='submit' name='submit'>Submit Documents and Continue</button>
				</form>

			</div><!--form-apply-->

			<hr/>

			<div class="form-details">

				<h2 class="sub">Job Application</h2>
				<p>Please note: convictions are not necessarily barriers to this employment opportunity.</p>

				<form>
					<div class="left">
			        	<p class="label">Are you 18 years of age or older?</p>
						<div class="radios">
							<input type="radio" id="eighteen-yes" name="eighteen"><label for="eighteen-yes">Yes</label>
							<input type="radio" id="eighteen-no" name="eighteen"><label for="eighteen-no">No</label>
						</div><!--radios-->
			        	<p class="label">Can you submit legal verification of your right to be employed in the United States?</p>
						<div class="radios">
							<input type="radio" id="verification-yes" name="verification"><label for="verification-yes">Yes</label>
							<input type="radio" id="verification-no" name="verification"><label for="verification-no">No</label>
						</div><!--radios-->
			        	<p class="label">Have you ever been convicted of any crime (excluding minor traffic violations) including DWI? </p>
						<div class="radios">
							<input type="radio" id="conviction-yes" name="conviction"><label for="conviction-yes">Yes</label>
							<input type="radio" id="conviction-no" name="conviction"><label for="conviction-no">No</label>
						</div><!--radios-->
			        	<p class="label">Are you presently charged with any violation of the law other than traffic violations?</p>
						<div class="radios">
							<input type="radio" id="charged-yes" name="charged"><label for="charged-yes">Yes</label>
							<input type="radio" id="charged-no" name="charged"><label for="charged-no">No</label>
						</div><!--radios-->
			        	<p class="label">If your response to either of the last two questions was "Yes," give the date, place and nature of each such conviction or pending charge.</p>
						<textarea type="text" name="conviction-explain" id='conviction-explain' size="10" placeholder="Please explain."></textarea>
					</div><!--left-->
					<div class="right">
			        	<p class="label">Do you have any obligations or conditions which would limit your ability to work overtime?</p>
						<div class="radios">
							<input type="radio" id="overtime-yes" name="overtime"><label for="overtime-yes">Yes</label>
							<input type="radio" id="overtime-no" name="overtime"><label for="overtime-no">No</label>
						</div><!--radios-->
			        	<p class="label">If yes, please explain.</p>
						<textarea type="text" name="overtime-explain" id='overtime-explain' size="10" placeholder="Please explain."></textarea>
			        	<p class="label">Are there any days or hours you would be unable or unwilling to work?</p>
						<div class="radios">
							<input type="radio" id="unable-yes" name="unable"><label for="unable-yes">Yes</label>
							<input type="radio" id="unable-no" name="unable"><label for="unable-no">No</label>
						</div><!--radios-->
			        	<p class="label">If yes, please specify those days or hours you would be unable or unwilling to work.</p>
						<textarea type="text" name="unable-explain" id='unable-explain' size="10" placeholder="Please explain."></textarea>
					</div><!--right-->

				    <button class='submit' type='submit' name='submit'>Submit Information and Continue</button>

				</form>

				<h2 class="sub">Future Employment</h2>

				<form>
					<div class="left">
   			        	<p class="label">When are you available to start?</p>
						<div class="floating-placeholder"><input type="text" name="start" id='start' size="10" class="datepicker"><label for='start'>00/00/0000</label></div>
   			        	<p class="label">What is your minimum required salary per month?</p>
						<div class="floating-placeholder"><input type="text" name="salary" id='salary' size="10"><label for='salary'>$0/month</label></div>
			        	<p class="label">Do you expect to be engaged in any other business or employment?</p>
						<div class="radios">
							<input type="radio" id="engaged-yes" name="engaged"><label for="engaged-yes">Yes</label>
							<input type="radio" id="engaged-no" name="engaged"><label for="engaged-no">No</label>
						</div><!--radios-->
			        	<p class="label">If yes, please explain.</p>
						<textarea type="text" name="engaged-explain" id='engaged-explain' size="10" placeholder="Please explain."></textarea>
					</div><!--left-->
					<div class="right">
			        	<p class="label">Is there any reason you would be unable or unwilling to perform any of the tasks required by the job you are applying for?</p>
						<div class="radios">
							<input type="radio" id="tasks-yes" name="tasks"><label for="tasks-yes">Yes</label>
							<input type="radio" id="tasks-no" name="tasks"><label for="tasks-no">No</label>
						</div><!--radios-->
			        	<p class="label">If yes, please explain.</p>
						<textarea type="text" name="tasks-explain" id='tasks-explain' size="10" placeholder="Please explain."></textarea>
			        	<p class="label">Is there any reason you would be unable or unwilling to report to work on time every day on a regular and consistent basis?</p>
						<div class="radios">
							<input type="radio" id="report-yes" name="report"><label for="report-yes">Yes</label>
							<input type="radio" id="report-no" name="report"><label for="report-no">No</label>
						</div><!--radios-->
					</div><!--right-->

				    <button class='submit' type='submit' name='submit'>Submit Information and Continue</button>

				</form>

				<h2 class="sub">Education</h2>

				<form>

					<p>You may use this section to describe your education history if it is not on your resume.</p>

					<div class="left">

   			        	<p class="label">High School</p>
						<div class="floating-placeholder"><input type="text" name="high-school" id='high-school' size="10"><label for='high-school'>High School</label></div>
			        	<p class="label">Did you graduate?</p>
						<div class="radios">
							<input type="radio" id="graduate-yes" name="graduate"><label for="graduate-yes">Yes</label>
							<input type="radio" id="graduate-no" name="graduate"><label for="graduate-no">No</label>
						</div><!--radios-->
   			        	<p class="label">College or Trade School</p>
						<div class="floating-placeholder"><input type="text" name="college" id='college' size="10"><label for='college'>College</label></div>
			        	<p class="label">Did you graduate?</p>
						<div class="radios">
							<input type="radio" id="college-yes" name="college"><label for="college-yes">Yes</label>
							<input type="radio" id="college-no" name="college"><label for="college-no">No</label>
						</div><!--radios-->
					</div><!--left-->
					<div class="right">
   			        	<p class="label">Graduate School and Dates Attended</p>
						<div class="floating-placeholder"><input type="text" name="graduate" id='graduate' size="10"><label for='graduate'>school, date</label></div>
			        	<p class="label">Did you graduate?</p>
						<div class="radios">
							<input type="radio" id="graduate-yes" name="graduategraduate"><label for="graduate-yes">Yes</label>
							<input type="radio" id="graduate-no" name="graduategraduate"><label for="graduate-no">No</label>
						</div><!--radios-->
			        	<p class="label">Other Education or Training</p>
						<textarea type="text" name="education-explain" id='education-explain' size="10" placeholder="List other education."></textarea>
					</div><!--right-->

				    <button class='submit' type='submit' name='submit'>Submit Education and Continue</button>

				</form>

				<h2 class="sub">Work History</h2>

				<p>You may provide information about your duties and accomplishments if not already on your resume. Please type "N/A" in applicable fields if there is no prior employment.</p>

				<form>

					<div class="left">
   			        	<p class="label">Last/Current Employer</p>
						<div class="floating-placeholder"><input type="text" name="current" id='current' size="10"><label for='current'>last or current employer</label></div>
   			        	<p class="label">City and State</p>
						<div class="floating-placeholder"><input type="text" name="current-citystate" id='current-citystate' size="10"><label for='current-citystate'>City, State</label></div>
			        	<p class="label">Dates of Employment</p>
						<div class="availability-job">
							<div class="floating-placeholder left"><input type="text" name="job-start" id='job-start' size="10" class="datepicker"><label for='start'>start</label></div>
							<div class="floating-placeholder right"><input type="text" name="job-end" id='job-end' size="10" class="datepicker"><label for='end'>end</label></div>
						</div><!--availability-job-->
   			        	<p class="label">Job Title</p>
						<div class="floating-placeholder"><input type="text" name="job-title" id='job-title' size="10"><label for='job-title'>Job Title</label></div>
   			        	<p class="label">Pay Rate</p>
						<div class="floating-placeholder left"><input type="text" name="job-start-pay" id='job-start-pay' size="10"><label for='job-start-pay'>starting pay</label></div>
						<div class="floating-placeholder right"><input type="text" name="job-end-pay" id='job-end-pay' size="10"><label for='job-end-pay'>ending pay</label></div>
			        	<p class="label">Job Duties and Responsibilities</p>
						<textarea type="text" name="responsibilites" id='responsibilites' size="10" placeholder="List duties and responsibilities."></textarea>
			        	<p class="label">Job Accomplishments</p>
						<textarea type="text" name="accomplishments" id='accomplishments' size="10" placeholder="List accomplishments."></textarea>
   			        	<p class="label">Prior Employer</p>
						<div class="floating-placeholder"><input type="text" name="prior" id='prior' size="10"><label for='prior'>prior employer</label></div>
   			        	<p class="label">City and State</p>
						<div class="floating-placeholder"><input type="text" name="prior-citystate" id='prior-citystate' size="10"><label for='prior-citystate'>City, State</label></div>
			        	<p class="label">Dates of Employment</p>
						<div class="availability-job">
							<div class="floating-placeholder left"><input type="text" name="prior-job-start" id='prior-job-start' size="10" class="datepicker"><label for='start'>start</label></div>
							<div class="floating-placeholder right"><input type="text" name="prior-job-end" id='prior-job-end' size="10" class="datepicker"><label for='end'>end</label></div>
						</div><!--availability-job-->
   			        	<p class="label">Job Title</p>
						<div class="floating-placeholder"><input type="text" name="prior-job-title" id='prior-job-title' size="10"><label for='prior-job-title'>Job Title</label></div>
   			        	<p class="label">Pay Rate</p>
						<div class="floating-placeholder left"><input type="text" name="prior-job-start-pay" id='prior-job-start-pay' size="10"><label for='prior-job-start-pay'>starting pay</label></div>
						<div class="floating-placeholder right"><input type="text" name="prior-job-end-pay" id='prior-job-end-pay' size="10"><label for='prior-job-end-pay'>ending pay</label></div>
			        	<p class="label">Job Duties and Responsibilities</p>
						<textarea type="text" name="prior-responsibilites" id='prior-responsibilites' size="10" placeholder="List duties and responsibilities."></textarea>
			        	<p class="label">Job Accomplishments</p>
						<textarea type="text" name="prior-accomplishments" id='prior-accomplishments' size="10" placeholder="List accomplishments."></textarea>
					</div><!--left-->
					<div class="right">
   			        	<p class="label">Prior Employer</p>
						<div class="floating-placeholder"><input type="text" name="prior2" id='prior2' size="10"><label for='prior2'>prior employer</label></div>
   			        	<p class="label">City and State</p>
						<div class="floating-placeholder"><input type="text" name="prior-citystate2" id='prior-citystate2' size="10"><label for='prior-citystate2'>City, State</label></div>
			        	<p class="label">Dates of Employment</p>
						<div class="availability-job">
							<div class="floating-placeholder left"><input type="text" name="prior-job-start2" id='prior-job-start2' size="10" class="datepicker"><label for='start'>start</label></div>
							<div class="floating-placeholder right"><input type="text" name="prior-job-end2" id='prior-job-end2' size="10" class="datepicker"><label for='end'>end</label></div>
						</div><!--availability-job-->
   			        	<p class="label">Job Title</p>
						<div class="floating-placeholder"><input type="text" name="prior-job-title2" id='prior-job-title2' size="10"><label for='prior-job-title2'>Job Title</label></div>
   			        	<p class="label">Pay Rate</p>
						<div class="floating-placeholder left"><input type="text" name="prior-job-start-pay2" id='prior-job-start-pay2' size="10"><label for='prior-job-start-pay2'>starting pay</label></div>
						<div class="floating-placeholder right"><input type="text" name="prior-job-end-pay2" id='prior-job-end-pay2' size="10"><label for='prior-job-end-pay2'>ending pay</label></div>
			        	<p class="label">Job Duties and Responsibilities</p>
						<textarea type="text" name="prior-responsibilites2" id='prior-responsibilites2' size="10" placeholder="List duties and responsibilities."></textarea>
			        	<p class="label">Job Accomplishments</p>
						<textarea type="text" name="prior-accomplishments2" id='prior-accomplishments2' size="10" placeholder="List accomplishments."></textarea>
			        	<p class="label">Please provide the names, titles, phone numbers and email addresses of 3 professional references. References will not be contacted until the final stages of the recruitment process.</p>
						<textarea type="text" name="prior-responsibilites2" id='prior-responsibilites2' size="10" placeholder="John Smith, Job Title, (615) 555-5555, name@domain.com"></textarea>
					</div><!--right-->

				    <button class='submit' type='submit' name='submit'>Submit Work History and Complete</button>

				</form>

			</div><!--form-application-details-->

	    </div><!--inner-->

	</section><!--subpage-->

	<section id="crumbs">
		
		<div class="inner">
			
			<div class="left"><a href="/news/">&lt; News &amp; Events</a></div><!--left-->

			<div class="right"><a href="/wish-lists.php">Wish Lists &gt;</a></div><!--right-->

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