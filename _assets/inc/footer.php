
		<footer>

        <div class="inner">
            
            <div class="map">
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.004369232587!2d-86.75511999999999!3d36.1664483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88646630dd5f4d3d%3A0x1948db65d0e42022!2s711+S+7th+St%2C+Nashville%2C+TN+37206!5e0!3m2!1sen!2sus!4v1434047592560" width="100%" height="367" frameborder="0" style="border:0"></iframe>
            
            </div><!--map-->

            <form method='post' action='".$_SERVER['SCRIPT_NAME']."'> 
                <input type='text' name='name' id='name' size='10' placeholder='Name'>
                <input type='text' name='phone' id='phone' size='10' placeholder='Phone'>
                <input type='text' name='email' id='email' size='10' placeholder='Email'>
                <textarea name='desc' id='desc' size='10'>How can we help?</textarea>
                <input type='checkbox' checked name='newsletter' id='newsletter' size='10'><p class='checkbox'>I'd like to receive the newsletter.</p>
                <button class='submit' type='submit' name='submit'>Send Form</button>
            </form>

            <div class="footer-right">
              
                <div class="item"><a href="/store/"><span class="icon-basket"></span><p>Martha O'Bryan Store</p></a></div>

                <div class="item"><a href="/contact/wish-lists/"><span class="icon-present"></span><p>Wish Lists</p></a></div>

                <div class="item"><a href="/privacy/"><span class="icon-lock"></span><p>Privacy &amp; Transparency Statement</p></a></div>

                <p class="ours">Our Sponsors</p>

                <section class="slider">
                    <div class="sponsors">
                        <ul class="slides">
                            <li>
                                <img src="/_assets/img/logo-sitemason.png" />
                            </li>
                            <li>
                                <img src="/_assets/img/logo-sitemason.png" />
                            </li>
                            <li>
                                <img src="/_assets/img/logo-sitemason.png" />
                            </li>
                        </ul>
                    </div>
                </section>

            </div><!--footer-right-->

            <p>&copy;<?php echo date("Y"); ?> MARTHA O'BRYAN CENTER  |  <a href="/members/board/">Board Access</a>  |  711 South Seventh Street, Nashville, TN  |  37206-3895  |  Phone <a href="tel:16152541791">615-254-1791</a>  |  Fax 615-242-3411</p>

        </div><!--inner-->

		</footer>

    <script type="text/javascript">
      $(function(){
        SyntaxHighlighter.all();
      });
      $(window).load(function(){
        $('.flexslider').flexslider({
          animation: "fade",
          directionNav: false,
          start: function(slider){
            $('body').removeClass('loading');
          }
        });
        $('.sponsors').flexslider({
          itemWidth: 100,
          itemMargin: 0,
          minItems: 2,
          maxItems: 2,
          controlNav: false,
          directionNav: true,
          slideshow: false,
          animationLoop: true,
        });
        $('.sponsors-crankin').flexslider({
          slideshowSpeed: 3000,
          itemWidth: 100,
          itemMargin: 0,
          minItems: 2,
          maxItems: 7,
          controlNav: false,
          directionNav: true,
          animationLoop: true,
        });
        $('.sponsors-crankin-page').flexslider({
          slideshowSpeed: 4000,
          minItems: 1,
          maxItems: 1,
          controlNav: false,
          directionNav: true,
        });
        $('.jobs').flexslider({
          itemWidth: 100,
          itemMargin: 0,
          minItems: 2,
          maxItems: 4,
          controlNav: false,
          directionNav: true,
          animationLoop: true,
          slideshow: false,
        });
        $('.jobs-page').flexslider({
          itemWidth: 100,
          itemMargin: 0,
          minItems: 2,
          maxItems: 4,
          controlNav: false,
          directionNav: true,
          animationLoop: true,
          slideshow: true,
        });
        $('.leaders').flexslider({
          itemWidth: 100,
          itemMargin: 0,
          minItems: 2,
          maxItems: 5,
          controlNav: false,
          directionNav: true,
          animationLoop: true,
          slideshow: false,
        });
      });
    </script>

	</body>
</html>