<?php if ($facebookPage): ?>
	<a href="https://www.facebook.com/<?php echo $facebookPage; ?>/" class="DesktopItem" target="_blank">
		<i class="fab fa-facebook-f"></i>
	</a>

	<a href="fb://page/?id=<?php echo $facebookid; ?>" class="MobileItem iOS">
		<i class="fab fa-facebook-f"></i>
	</a>

	<a href="fb://page/<?php echo $facebookid; ?>" class="MobileItem Android">
		<i class="fab fa-facebook-f"></i>
	</a>
<?php endif; ?>


<a href="https://www.instagram.com/<?php echo $instagram ?>" target="_blank">
	<i class="fab fa-instagram"></i>
</a>

<!-- <a href="https://www.youtube.com/<?php echo $youtube ?>/" target="_blank">
		<i class="fab fa-youtube"></i>
	</a> -->