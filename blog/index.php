<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Andrew Holloway Projects | Resume & Portfolios</title>
	<meta name="description" content="The resume & portfolio website for Andrew Holloway of Perth, Western Australia. Here are my projects I've worked on as an IT professional and music creator.">
	<meta name="keywords" content="Portfolio, Music, Technology Professional, Project, Resume, Hire, Perth Australia">
	<meta name="author" content="Andrew Holloway">
	<meta name="viewport" content="width=device-width,user-scalable=no" />
	<link rel="icon" href="/favicon.png?v=0002" />
	<link rel="canonical" href="https://andrewholloway.info/" />
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/css/home.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script defer>
		window.onscroll = function() {
			hideLogoOnScroll();
			let ahSignatureWrap = document.getElementById("ahsignatureWrapper");
			observer.observe(ahSignatureWrap);
		}
	</script>
</head>

<body>
	<div id="bodybg">
		<div index="1" class="bgball size2"></div>
		<div index="2" class="bgball size1"></div>
		<div index="3" class="bgball size3"></div>
		<div index="4" class="bgball size1"></div>
		<div index="5" class="bgball size1"></div>
		<div index="6" class="bgball size3"></div>
		<div index="7" class="bgball size1"></div>
		<div index="8" class="bgball size4"></div>
		<div index="9" class="bgball size2"></div>
		<div index="10" class="bgball size4"></div>
		<div index="11" class="bgball size1"></div>
	</div>
	<div id="head-scrollfix"></div>
	<?php include('./includes/header.php');	?>
	<main>
		<section>
			<div id="ahollowaytxt">
				<h1><span class="clr-accent">Welcome</span> To My Projects!</h1>
				<p>See below the list of project posts I’ve worked on and posted during my career.</p>
			</div>
		</section>
	</main>
	<section id="allposts">
		<div class="content">
		<?php 
    	$getposts = "SELECT * FROM wp_posts WHERE `post_status`='publish' AND `post_type`='post' ORDER BY id DESC";
			$result = mysqli_query($conn, $getposts);

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					?>

					<a tabindex="0" href="/post?id=<?php echo $row["ID"] ?>" class="post">
						<h2 class="posttitle"><?php echo $row["post_title"] ?></h2>
						<p class="postsnip"><?php post_echo($row["post_content"]); ?></p>
					</a>

					<?php
				}
			} else {
				echo "0 results";
			}
		?>
		</div>
	</section>
	<?php include('./includes/footer.php');	?>
</body>

</html>