<?php 

/**
 * 
 * Home page
 * 
 * */

?>

<?php include_once( 'include/head.php' ); ?>

<div class="hide-mobile mobile-tap-area">
	<div class="max-width">
		<div class="vertical-center">
			<h1>
				<div class="text-color-white hide-text-block">
					<div class="animate toggle-mobile-first">Hello.</div>
				</div>
				<div class="text-color-red hide-text-block">
					<div class="animate delay04 toggle-mobile-first">I am</div>
				</div>
				<div class="text-color-red hide-text-block">
					<div class="animate delay08 toggle-mobile-first">Noman</div>
				</div>
			</h1>
		</div>
	</div>
	<div class="tap-indication">Tap anywhere</div>
</div>

<div class="max-width">
	<div class="vertical-center">
		<h1>
			<div class="hide-text-block">
				<a href="<?php echo BASE_URL; ?>/about.php">
					<div class="animate text-color-white on-hover-40 hide-web label-hello "><span class="wave">👋</span></div>
					<div class="animate text-color-white on-hover-40 hide-mobile toggle-mobile-second">About</div>
				</a>
			</div>
			<div class="hide-text-block">
				<a href="<?php echo BASE_URL; ?>/work.php">
					<div class="animate text-color-red on-hover-40 delay04 hide-web label-iam"></div>
					<div class="animate text-color-red on-hover-40 delay04 hide-mobile toggle-mobile-second">Work</div>
				</a>
			</div>
			<div class="hide-text-block">
				<a href="<?php echo BASE_URL; ?>/contact.php">
					<div class="animate text-color-red on-hover-40 delay08 hide-web label-noman"></div>
					<div class="animate text-color-red on-hover-40 delay08 hide-mobile toggle-mobile-second">Contact</div>
				</a>
			</div>
		</h1>
	</div>
</div>
<div class="bg-photo"></div>

<?php include_once ( 'include/footer.php' ); ?>

