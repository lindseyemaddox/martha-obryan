<script src="/_assets/js/fancybox.jquery.js"></script>

		<footer>

        <div class="inner">
            
            <div class="map">
            
                <a href="https://www.google.com/maps/place/711+S+7th+St,+Nashville,+TN+37206/@36.1664483,-86.75512,17z/data=!3m1!4b1!4m2!3m1!1s0x88646630dd5f4d3d:0x1948db65d0e42022" target="_blank"><img src="/_assets/img/map.jpg" title="map" alt="map"></a>
            
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
              
                <p class="ours">Our Sponsors</p>

                <section class="slider">
                    <div class="sponsors">
                        <ul class="slides">
                            <li>
                                <a href="http://www.sitemason.com/" target="_blank"><img src="/_assets/img/logo-sitemason.png" /></a>
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

                <div class="item"><a href="/careers/"><span class="icon-careers"></span><p>Careers</p></a></div>

                <div class="item"><a href="/site-map.php"><span class="icon-sitemap"></span><p>Site Map</p></a></div>

                <div class="item"><a href="/privacy" class="fancybox fancybox.iframe"><span class="icon-lock"></span><p>Privacy &amp; Transparency Statement</p></a></div>

            </div><!--footer-right-->

            <p>&copy;<?php echo date("Y"); ?> MARTHA O'BRYAN CENTER  |  <a href="/members/">Board Access</a>  |  711 South Seventh Street, Nashville, TN  |  37206-3895  |  Phone <a href="tel:16152541791">615-254-1791</a>  |  Fax 615-242-3411</p>

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
        $('.sponsors-champions-page').flexslider({
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