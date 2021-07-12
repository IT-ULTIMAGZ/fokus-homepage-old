<!-- NAVIGATION -->
<div class="fokus-navigation">
	<div class="fokus-sidebar-control"><div class="fa fa-bars" style="margin-top: 12px;"></div></div>
</div>

<!-- SIDEBAR -->
<div class="fokus-sidebar-container">
	<div class="fokus-sidebar">
		<div class="fokus-logo"></div>
		<ul class="fokus-menu">
			<a class="menu" href="/"><li class="fokus-button">HOME</li></a>
			<a class="menu" href="http://ultimagz.com/"><li class="fokus-button">ULTIMAGZ</li></a>
		</ul>
		<div class="fokus-copyright">
			<p>&copy 2017 ULTIMAGZ all rights reserved</p>
			<p>Membuat pembaca lebih tertarik untuk menyimak suatu informasi secara interaktif dengan menyajikan visual yang menarik.</p>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	$(document).ready(function()
	{
		$('.fokus-sidebar-control').click(function()
		{
			$('.fokus-sidebar').toggleClass('visible');
			$('.fokus-content').toggleClass('visible');
			$('.main-container').toggleClass('visible');
		});
	});
</script>