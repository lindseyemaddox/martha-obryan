<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<div id="store" class="sub">

	<section class="header">
	
		<div class="gradient"></div>

		<div class="inner">
			
			<h1>Store</h1>

		</div><!--inner-->

	</section><!--header-->

	<section class="subpage">

		<div class="inner">
		
			<h2>Break the Line T-shirts: Only $15!</h2>

			<p>Show your support for the Martha O'Bryan Center with a Break the Line T-shirt, which look great or make a great gift!</p>

			<div class="img"><img src="/_assets/img/tshirt-btl.jpg" alt="Break the Line tshirt"></div><!--img-->

		    <form>
		        <div class='left'>
		        	<p class="label">Adult unisex sizes: choose your size and quantity.</p>
		        	<div class="four">
						<div class="floating-placeholder"><input type="text" name="small" id='small' size="10"><label for='small'>Small</label></div>
						<div class="floating-placeholder"><input type="text" name="medium" id='medium' size="10"><label for='medium'>Medium</label></div>
						<div class="floating-placeholder"><input type="text" name="large" id='large' size="10"><label for='large'>Large</label></div>
						<div class="floating-placeholder"><input type="text" name="xl" id='xl' size="10"><label for='xl'>XL</label></div>
					</div><!--four-->
		    	</div><!--left-->
		    	<div class='right'>
		        	<p class="label">Adult women's sizes: sizes run small. Order 2 sizes larger.</p>
		        	<div class="four">
						<div class="floating-placeholder"><input type="text" name="w-small" id='w-small' size="10"><label for='w-small'>Small</label></div>
						<div class="floating-placeholder"><input type="text" name="w-medium" id='w-medium' size="10"><label for='w-medium'>Medium</label></div>
						<div class="floating-placeholder"><input type="text" name="w-large" id='w-large' size="10"><label for='w-large'>Large</label></div>
						<div class="floating-placeholder"><input type="text" name="w-xl" id='w-xl' size="10"><label for='w-xl'>XL</label></div>
					</div><!--four-->
				</div><!--right-->
		        <button class='submit spacer' type='submit' name='submit'>Calculate and Continue</button>
		      </form>

	    </div><!--inner-->

	</section><!--subpage-->

	<section id="crumbs">
		
		<div class="inner">
			
			<div class="left"><a href="/contact/wish-lists/adult-education/">&lt; Adult Education &amp; GED</a></div><!--left-->

			<div class="right"><a href="/members/">Members &gt;</a></div><!--right-->

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

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>