<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src="/_assets/js/chosen.jquery.min.js" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<div id="contact" class="sub">

	<section class="header">
	
		<div class="gradient"></div>

		<div class="inner">
			
			<h1>Contact Us</h1>

		</div><!--inner-->

	</section><!--header-->

	<section class="subpage">

		<div class="inner">
		
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
							  <input type="checkbox" id="tour" name="check-action"><label for="tour">I’d like to schedule a tour.</label>
							  <input type="checkbox" id="volunteer" name="check-action"><label for="volunteer">I’d like to volunteer.</label>
							  <input type="checkbox" id="patron" name="check-action"><label for="patron">I’d like to become a patron.</label>
						</div><!--checks-->
				        <button class='submit' type='submit' name='submit'>Enter Information and Continue</button>
					</div><!--right-->
			      </form>

			</div><!--form-simple-->

			<hr>

			<h2>Make A Donation</h2>

			<p>Since our founding in 1894, Martha O'Bryan Center has worked to help families living in poverty reach self-sufficiency. We are grateful to all who choose to support Martha O'Bryan by making a tax-deductible gift.</p>

			<p>If you would prefer to mail a check, please send it to Development Office, Martha O'Bryan Center, 711 South Seventh Street, Nashville, TN 37206. Please include a phone number so that we can confirm receipt.</p>

			<p>Martha O'Bryan Center values the security of our donors. To safeguard your information, MOBC submits all online donations to a high level of security. If you have issues processing your donation, please contact Shannon Wagner at (615) 254-1791 ext. 123. Thank you for your support.</p>

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
						<textarea type="text" name="phone" id='phone' size="10"></textarea>
			        	<p class="label">Additional Comments</p>
						<textarea type="text" name="phone" id='phone' size="10">Include name and address for us to send an acknowledgement if this gift honors a special person or occasion, etc.</textarea>
			        	<p class="label">Company Name</p>
						<div class="floating-placeholder"><input type="text" name="company" id='company' size="10"><label for='company'>(if applicable)</label></div>
						<div class="checks">
							<br/>
							  <input type="checkbox" id="company-card" name="check-action"><label for="company-card">This donation is being made on a business credit card.</label>
							  <input type="checkbox" id="company-matching" name="check-action"><label for="company-matching">My company has a matching gift program.</label>
						</div><!--checks-->
						<div class="g-recaptcha" data-sitekey="6LctHwkTAAAAAH0qiULCswpucv3lWfFNMfooPyPX"></div>
				        <button class='submit' type='submit' name='submit'>Make Donation</button>
					</div><!--right-->
			      </form>


			</div><!--form-donate-->

	    </div><!--inner-->

	</section><!--subpage-->

	<section id="crumbs">
		
		<div class="inner">
			
			<div class="left"><a href="/news/">&lt; News &amp; Events</a></div><!--left-->

			<div class="right"><a href="/privacy">Privacy &amp; Transparency Statement &gt;</a></div><!--right-->

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
	</script>

  <script type="text/javascript">
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
  </script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>