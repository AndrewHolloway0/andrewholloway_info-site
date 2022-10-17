<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Andrew Holloway | Musician and IT Professional | Portfolios</title>
    <meta name="description" content="The resume, portfolio & project website for Andrew Holloway of Perth, Western Australia. Here are my projects I've worked on as an IT professional and music creator.">
    <meta name="keywords" content="Portfolio, Music, Technology Professional, Project, Resume, Hire">
    <meta name="author" content="Andrew Holloway">
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <link rel="icon" href="/favicon.png?v=0002" />
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="home.css" />
    <script>
        function socialCardToggle() {
            var socialCard = document.getElementById("socialcard");
            if (socialCard.style.display === "inherit") {
                socialCard.style.display = "none";
            } else {
                socialCard.style.display = "inherit";
            }
        }
    </script>
</head>

<body>
    <header>
        <div class="h3">Andrew Holloway</div>
    </header>
    <div class="content">
        <div id="introduction">
            <div class="h1">hi there!</div>
            <p class="h1subtext subtext">select the portfolio</p>
        </div>
        <a href="/music" id="musicianartist" class="module unselectable">
            <div class="moduletext">
                <div class="h2">Andrew Holloway</div>
                <p class="h2subtext subtext">musician & artist</p>
            </div>
            <div class="h2 comingsoontxt">Coming Soon</div>
        </a>
        <a id="itprofessional" class="module comingsoon unselectable">
            <div class="moduletext">
                <div class="h2">Andrew Holloway</div>
                <p class="h2subtext subtext">it professional</p>
            </div>
            <div class="h2 comingsoontxt">Coming Soon</div>
        </a>
        <a id="programmer" class="module comingsoon unselectable">
            <div class="moduletext">
                <div class="h2">Andrew Holloway</div>
                <p class="h2subtext subtext">programmer</p>
            </div>
            <div class="h2 comingsoontxt">Coming Soon</div>
        </a>
        <div id="contact">
            <h2>Contact</h2>
            <div>
                <a href="mailto:localmusicproduced+homeweb@gmail.com" class="intbuttons">Business Inquiry</a>
                <a href="https://www.paypal.com/donate/?business=NVEPYM738GEHJ&no_recurring=0&currency_code=AUD" class="intbuttons" target="_blank">Donate</a>
                <button class="intbuttons" id="socialbutton" onclick="socialCardToggle();">Socials</button>
                <div id="socialcard">
                    <a href="https://www.instagram.com/rectath_nehb/" target="_blank">
                        <img src="/media/icons/insta.svg" alt="instagram" />
                    </a>
                    <a href="https://www.linkedin.com/in/andrew-holloway/" target="_blank">
                        <img src="/media/icons/linkedin.svg" alt="linkedin" />
                    </a>
                    <a href="https://open.spotify.com/artist/2sbHQ4QlPdaefcIUNctmYl" target="_blank">
                        <img src="/media/icons/spotify.svg" alt="spotify" />
                    </a>
                    <a href="https://twitter.com/eww_disgusting" target="_blank">
                        <img src="/media/icons/twitter.svg" alt="twitter" />
                    </a>
                    <a href="https://www.youtube.com/channel/UCUPrXBGMPUKiB7j1BDgoU5w" target="_blank">
                        <img src="/media/icons/youtube.svg" alt="youtube" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php require("./includes/footer.php"); ?>
</body>
</html>