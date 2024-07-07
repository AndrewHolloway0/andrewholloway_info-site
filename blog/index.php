<?php
	$servername = "10.47.101.53";
	$username = "wordpress";
	$password = "6VaHr2VU7tk5fCfRJxLQ3y";
	$dbname = "wordpress";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Andrew Holloway Blog Home | Resume & Portfolios</title>
	<meta name="description" content="The blog website website for Andrew Holloway of Perth, Western Australia. Here are my projects I've worked on as an IT professional and enthusiast.">
	<meta name="keywords" content="Portfolio, Music, Technology Professional, Project, Resume, Hire, Perth Australia">
	<meta name="author" content="Andrew Holloway">
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="/favicon.png?v=0002" />
	<link rel="canonical" href="https://blog.andrewholloway.info/" />
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/css/home.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script defer>
		function hideLogoOnScroll() {
			var ajhlogo = document.getElementById("head-logo");
			if (jQuery(window).scrollTop() >= 50) {
					ajhlogo.style.opacity = 0;
					ajhlogo.style.scale = 0.9;
			} else {
					ajhlogo.style.opacity = 1;
					ajhlogo.style.scale = 1;
			}
			// alert(document.body.scrollY);
		}
		window.onscroll = function() {
			hideLogoOnScroll();
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
		<div id="ahollowaytxt">
			<h1><span class="clr-accent">Welcome</span> To My Projects!</h1>
			<p>See below the list of project posts I’ve worked on and posted during my career.</p>
		</div>
	</main>
	<div class="section-separator"></div>
	<section id="allposts">
		<div class="content">
		<?php 
			$getposts = "SELECT * FROM wp_posts WHERE `post_status`='publish' AND `post_type`='post' ORDER BY post_date DESC";
			$result = mysqli_query($conn, $getposts);

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$date = date_create($row["post_date"]);
					// $postdate = date_format($date, 'j/n/Y \@ h:i:s A');
					$postdate = date_format($date, 'F jS, Y h:i A');

					$getcategory = "SELECT *  FROM wp_term_relationships INNER JOIN wp_term_taxonomy ON (wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id AND wp_term_taxonomy.taxonomy='category') INNER JOIN wp_terms ON (wp_terms.term_id=wp_term_taxonomy.term_id ) WHERE object_id='".$row["ID"]."'";
					$categoryresult = mysqli_query($conn, $getcategory);

					?>
					<div class="post">
						<a tabindex="0" href="/post/<?php echo $row["post_name"] ?>">
							<h2 class="posttitle"><?php echo $row["post_title"] ?></h2>
							<p class="postsnip"><?php post_echo($row["post_content"]); ?></p>
						</a>
						<p class="postdetails">
							<time datetime="<?php echo $row["post_modified"]; ?>" class="postdate"><?php echo $postdate; ?></time>
							<?php 
								while($catrow = mysqli_fetch_assoc($categoryresult)) {
							?>
								<span class="posttag"><?php echo $catrow['name'] ?></span>
							<?php } ?>
						</p>
					</div>

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