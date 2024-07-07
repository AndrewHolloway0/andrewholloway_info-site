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

	// <>>> OLD SET BY ID <<<>

	// if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
	// 	$getpost = "SELECT * FROM wp_posts WHERE `post_status`='publish' AND `post_type`='post' AND `id`=" . $_GET['id'];
	// 	$postresult = mysqli_query($conn, $getpost);
		
	// 	if (mysqli_num_rows($postresult) > 0) {
	// 		while ($row = mysqli_fetch_assoc($postresult)) {
	// 			// ID
	// 			$postID = $row["ID"];

	// 			// DATE
	// 			$postpredate = date_create($row["post_date"]);
	// 			$GLOBALS['postdate'] = date_format($postpredate, 'F jS, Y h:i A');
	// 			$GLOBALS['modifydate'] = $row["post_modified"];
	// 			$GLOBALS['modifypredate'] = date_create($row["post_modified"]);
	// 			$GLOBALS['postmodifydate'] = date_format($modifypredate, 'F jS, Y h:i A');
	// 			$postmodifydate2 = date_format($modifypredate, 'M j, Y');

	// 			// Title & URL Slug
	// 			$GLOBALS['post_title'] = $row["post_title"];
	// 			$GLOBALS['post_slug'] = $row["post_name"];

	// 			// Content
	// 			$GLOBALS['post_content'] = $row["post_content"];
	// 		}
		
	// 		$getcategory = "SELECT * FROM wp_term_relationships INNER JOIN wp_term_taxonomy ON (wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id AND wp_term_taxonomy.taxonomy='category') INNER JOIN wp_terms ON (wp_terms.term_id=wp_term_taxonomy.term_id ) WHERE object_id='".$postID."'";
	// 		$categoryresult = mysqli_query($conn, $getcategory);

	// 		while($catrow = mysqli_fetch_assoc($categoryresult)) {
	// 			// Category
	// 			$GLOBALS['post_category'] = $catrow['name'];
	// 		}
	// 	}
	// }

	function cleanUserInput($UserInputStr) {
		$invalid_characters = array("$", "%", "#", "<", ">", "|");

		$UserInputStr = str_replace("/post/", "", $UserInputStr);
		$UserInputStr = @strip_tags($UserInputStr);
        $UserInputStr = @stripslashes($UserInputStr);
        $UserInputStr = htmlspecialchars($UserInputStr);
		$UserInputStr = str_replace($invalid_characters, "", $UserInputStr);
        return $UserInputStr;
	}

	if($_SERVER['REQUEST_URI'] != "\/post/") {
		$cleanURI = cleanUserInput($_SERVER['REQUEST_URI']);
		$getpost = "SELECT * FROM wp_posts WHERE `post_status`='publish' AND `post_type`='post' AND `post_name`='" . $cleanURI ."'";
		$postresult = mysqli_query($conn, $getpost);
		
		if (mysqli_num_rows($postresult) > 0) {
			while ($row = mysqli_fetch_assoc($postresult)) {
				// ID
				$postID = $row["ID"];

				// DATE
				$postpredate = date_create($row["post_date"]);
				$GLOBALS['postdate'] = date_format($postpredate, 'F jS, Y h:i A');
				$GLOBALS['modifydate'] = $row["post_modified"];
				$GLOBALS['modifypredate'] = date_create($row["post_modified"]);
				$GLOBALS['postmodifydate'] = date_format($modifypredate, 'F jS, Y h:i A');
				$postmodifydate2 = date_format($modifypredate, 'M j, Y');

				// Title & URL Slug
				$GLOBALS['post_title'] = $row["post_title"];
				$GLOBALS['post_slug'] = $row["post_name"];

				// Content
				$GLOBALS['post_content'] = $row["post_content"];
			}
		
			$getcategory = "SELECT * FROM wp_term_relationships INNER JOIN wp_term_taxonomy ON (wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id AND wp_term_taxonomy.taxonomy='category') INNER JOIN wp_terms ON (wp_terms.term_id=wp_term_taxonomy.term_id ) WHERE object_id='".$postID."'";
			$categoryresult = mysqli_query($conn, $getcategory);

			while($catrow = mysqli_fetch_assoc($categoryresult)) {
				// Category
				$GLOBALS['post_category'] = $catrow['name'];
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- <title>Andrew Holloway Projects | Resume & Portfolios</title> -->
	<title><?php echo $post_title; ?> – Andrew Holloway's Blog</title>
	<meta name="keywords" content="Portfolio, Technology Professional, Project, Blog, Perth Australia">
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
	<?php include('../includes/header.php'); ?>
	<main>
		<section>
			<article>
				<div class="content post">
					<?php
						if (isset($postID) && mysqli_num_rows($postresult) > 0) {
					?>
						<h1 class="posttitle"><?php echo $post_title; ?></h1>
						<div class="posttopcredit">
							<span><?php echo $postmodifydate2; ?></span>
							<span>—</span>
							<span>by</span>
							<span class="name">Andrew Holloway</span>
							<span class="name posttag"><?php echo $post_category; ?></span>
						</div>
						<?php echo $post_content; ?>
					<?php
						} else {
					?>
						<h1>There was an error</h1>
						<p>No post is associated with that link. Please try again later.</p>
					<?php
						}
				?>
				</div>
				<?php if (isset($postID) && mysqli_num_rows($postresult) > 0) { ?>
				<footer class="content postcredits">
					<p>
						<b>Last Updated:</b> <time datetime="<?php echo $modifydate; ?>"><?php echo $postmodifydate; ?></time><br />
						Post by Andrew Holloway
						<br />
					</p>
				</footer>
				<?php } ?>
			</article>
		</section>
	</main>
	<?php include('../includes/footer.php'); ?>
</body>

</html>