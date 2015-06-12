<div id="container">
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/9.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>		
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/2.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/3.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/4.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>
	

	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/1.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>	
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/6.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>

	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/5.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/7.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>	
	
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="/_assets/img/flipper/8.jpg" alt="" />
			<div class="thumb-detail">
				<img src="/_assets/img/flipper/1.jpg">
			</div>
		</div>
	</div>

</div>

	<script type="text/javascript">
	$(function () {
	

		if ($('html').hasClass('csstransforms3d')) {	
		
			$('.thumb').removeClass('scroll').addClass('flip');		
			$('.thumb.flip').hover(
				function () {
					$(this).find('.thumb-wrapper').addClass('flipIt');
				},
				function () {
					$(this).find('.thumb-wrapper').removeClass('flipIt');			
				}
			);
			
		} else {

			$('.thumb').hover(
				function () {
					$(this).find('.thumb-detail').stop().animate({bottom:0}, 500, 'easeOutCubic');
				},
				function () {
					$(this).find('.thumb-detail').stop().animate({bottom: ($(this).height() * -1) }, 500, 'easeOutCubic');			
				}
			);

		}
	
	});
	</script>