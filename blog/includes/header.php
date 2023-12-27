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

	function post_echo($x)	{
		$length = 180;
		$x = strip_tags($x);
		if(strlen($x)<=$length)
		{
			echo $x;
		}
		else
		{
			$y=substr($x,0,$length) . '...';
			echo $y;
		}
	}
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