<?php
function post_echo($x) {
	$length = 240;
	$x = strip_tags($x);
	if (strlen($x) <= $length) {
		echo $x;
	} else {
		$y = substr($x, 0, $length) . '...';
		echo $y;
	}
}

date_default_timezone_set('GMT');
?>
<header>
	<div class="wrapper">
		<div id="head-top">
			<div class="head-socials">
				<a tabindex="0" href="mailto:andrew@andrewholloway.info"><img src="/media/icons/email.svg" alt="email" /></a>
				<a tabindex="0" href="https://www.linkedin.com/in/andrew-holloway/" target="_blank"><img src="/media/icons/linkedin.svg" alt="linkedin" /></a>
			</div>
			<a tabindex="0" href="/" id="head-logo"></a>
			<div id="">
				<a tabindex="0" href="https://andrewholloway.info">Back Home</a>
			</div>
		</div>
	</div>
</header>