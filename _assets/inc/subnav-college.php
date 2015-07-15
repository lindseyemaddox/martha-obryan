<section id="subpage-nav">

	<div class="inner">
	
		<ul>
			<li><a href="/outreach/">Outreach &gt;&gt;<br/>&nbsp;</a></li>
			<li><a href="/outreach/college/">College &gt;&gt;<br/>&nbsp;</a></li>
			<li><a href="/outreach/college/post-secondary.php">Post-Secondary <br/>Success Initiative</a></li>
			<li><a href="/outreach/college/chapter-2.php">Chapter 2<br/>&nbsp;</a></li>
			<li><a href="/outreach/college/adult-education.php">Adult <br/>Education</a></li>
		</ul>

		<div class="clear"></div>

	</div><!--inner-->

</div><!--subnav-cont-->

<script>
$(function() {
	var url = location.pathname.split('/');
	var activeURL = url[url.length -2];
	console.log(activeURL);
 	{	
		$('#subpage-nav a[href$="/'+activeURL+'"]').addClass('active');
	}

	if ($('#subpage-nav a').hasClass('active')) {
		$('#subpage-nav li').addClass('green');
	} else {
		$('#subpage-nav li').removeClass('green');
	}
	return false;

});
</script>