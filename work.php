<?php 

/**
 * 
 * Work page
 * 
 * */

?>

<?php include_once( 'include/head.php' ); ?>

<div class="max-width">	
	<div class="logo">
		<div class="logo-inner">
			<a href="<?php echo BASE_URL; ?>/work.php">
				<div class="label-logo on-hover--40 text-color-white"></div>
			</a>
		</div>
	</div>
	<div class="top-bottom-margin animate">	

		<!-- Work -->
		<a href="<?php echo BASE_URL; ?>/edtutor.php">
			<div class="on-hover-40 hide-text-block work-block">
				<h2 class="text-color-white">EdTutor</h2>
				<p class="size-small text-color-red">Education App</p>
			</div>
		</a>
		<a href="<?php echo BASE_URL; ?>/freelance.php">
			<div class="on-hover-40 hide-text-block work-block">
				<h2 class="text-color-white">Freelance</h2>
				<p class="size-small text-color-red">Selected freelance projects</p>
			</div>
		</a>
		<!-- Work -->

	</div>
</div>

<?php include_once ( 'include/footer.php' ); ?>
