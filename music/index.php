<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musician, Artist and Producer | Andrew Holloway Portfolio</title>
    <meta name="description" content="Know me, Andrew Holloway, as a musician? Check out this portfolio website. I showcase all of my projects here (include work in progress peices!), so check it out!">
    <meta name="keywords" content="Portfolio, Music">
    <meta name="author" content="Andrew Holloway">
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <link rel="icon" href="/favicon.png?v=0001" />
    <link rel="stylesheet" href="/hamburgers.css">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="music.css">
    <script>
        function socialCardToggle() {
            var socialCard = document.getElementById("socialcard");
            if (socialCard.style.display === "inherit") {
                socialCard.style.display = "none";
            } else {
                socialCard.style.display = "inherit";
            }
        }

        function mobileNavToggle() {
            var mobilenavburger = document.getElementById("mobilenavburger").children;
            var mobilenavbg = document.getElementById("mobilenavbg");

            mobilenavburger[0].classList.toggle("is-active");
            if (mobilenavbg.style.display === "inherit") {
                mobilenavbg.style.display = "none";
            } else {
                mobilenavbg.style.display = "inherit";
            }
        }


        window.onscroll = function () { cornernavhide(); frontpageheightadjust(); upcomingzoom() };
        function cornernavhide() {
            if (document.documentElement.scrollTop > 2) {
                document.getElementById("cornernav").className = "fadeUpOut";
            } else {
                document.getElementById("cornernav").className = "";
            }
        }
        function frontpageheightadjust() {
            if (document.documentElement.scrollTop > 200) {
                document.getElementById("frontpage").style.maxHeight = "60vh";
            } else if (document.documentElement.scrollTop > 80) {
                document.getElementById("frontpage").style.maxHeight = "90vh";
            } else {
                document.getElementById("frontpage").style.maxHeight = "100vh";
            }
        }
        function upcomingzoom() {
            if(document.documentElement.scrollWidth >= 800) {
                var amount = 650;
            } else if(document.documentElement.scrollWidth > 570) {
                var amount = 400;
            } else {
                var amount = 130;
            }

            // console.log(document.documentElement.scrollTop);

            if (document.documentElement.scrollTop >= amount) {
                document.getElementById("albumartupcoming").className = "zoomedin";
            } else {
                document.getElementById("albumartupcoming").className = "";
            }
        }

    </script>
</head>
<body>
    <div id="mobilenavigator">
        <div id="mobilenavburger">
            <button class="hamburger hamburger--squeeze" type="button" onclick="mobileNavToggle()">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <div id="mobilenavbg">
            <a href="/">&#8249; Home</a>
        </div>
    </div>
    <div id="frontpage" class="fullpage">
        <div id="maintext">
            <div class="h0">ANDREW HOLLOWAY</div>
            <h1 class="subtext">music producer | artist | musician</h1>
        </div>
        <div id="cornernav">
            <h4>OTHER PAGES</h4>
            <span class="h4subtext subtext">
                <a href="/">Home</a>
                <span>|</span>
                <a title="Not Yet Available!">IT Professional</a>
                <span>|</span>
                <a title="Not Yet Available!">Programming</a>
            </span>
        </div>
    </div>
    <div id="earlyreleases" class="section">
        <div class="content">
            <h2>Get Releases Early</h2>
            <form>
                <!-- <input type="email" placeholder="email address" /> -->
                <!-- <button type="submit">Enter</button> -->
                <a class="basiccirclebutton" href="https://www.patreon.com/andrewhollowaymusic" target="_blank">Get Access Now!</a>
                <a href="#" target="_blank">Already subscribed? Click here to access content.</a>
            </form>
        </div>
    </div>
    <nav id="stickynav">
        <div class="content">
            <a href="#earlyreleases">early releases</a>
            <a href="#upcoming">upcoming</a>
            <a href="#discography">discography</a>
            <a href="#about">about</a>
            <a href="#contact">contact</a>
        </div>
    </nav>
    <div id="upcoming" class="fullpage">
        <div id="upcomingart"></div>
        <div id="upcomingtxt">
            <h1>UPCOMING!</h1>
            <div id="albumartupcoming"></div>
            <div id="albumtxt">
                <h1 id="albumtitle">"Fruity Bar"</h1>
                <span class="h1subtext subtext">Out on the 14th of October</span>
            </div>
        </div>
    </div>
    <div id="discography" class="section">
        <div class="content">
            <h2>Discography</h2>
            <div id="albumsandsingles">
                <a class="discoitem" id="d-03">
                    <div class="discoart"></div>
                    <span class="discotitle">This Week</span>
                    <span class="discotype">Single</span>
                </a>
                <a class="discoitem" id="d-02">
                    <div class="discoart"></div>
                    <span class="discotitle">Transcendence</span>
                    <span class="discotype">Album</span>
                </a>
                <a class="discoitem" id="d-01">
                    <div class="discoart"></div>
                    <span class="discotitle">Ocean Lake</span>
                    <span class="discotype">Single</span>
                </a>
                <div class="discoitem">
                    <div id="discomoresoon" class="discoart">
                        <span>More Coming Soon...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="section">
        <div class="content">
            <h2>About</h2>
            <div id="aboutcontent">
                <div id="aboutimg"></div>
                <div id="abouttxt">
                    <p>Hi! Thanks a lot for checking me out! I'm a solo artist from Perth,
                        Australia. I have over a decade of piano playing experience,
                        including performing and rehearsing. I started pursuing a music
                        career in high school with a few friends. We released a few songs
                        under the name The Supertonics with the help of a great musical
                        mentor and teacher, now friend.
                    </p>
                    <p>Some of core musical inspirations include Jacob Collier, Coldplay
                        (the early 2000s), blink-182, and as of lately, Cory Wong, Hans
                        Zimmer, and John Powell. I do prefer to listen to rock music,
                        however jazz is where I would like to be as a musician one day. I
                        love and am always open to collaboration with other artists, as
                        working with people that share the same passion for music as I
                        do creates a great environment for writing the best music!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="section">
        <div class="content">
            <h2>Contact</h2>
            <div>
                <a href="mailto:localmusicproduced+homeweb@gmail.com" class="intbuttons">Business Inquiry</a>
                <a href="https://www.paypal.com/donate/?business=NVEPYM738GEHJ&no_recurring=0&currency_code=AUD"
                    class="intbuttons" target="_blank">Donate</a>
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
    <?php require("../includes/footer.php"); ?>
</body>

</html>