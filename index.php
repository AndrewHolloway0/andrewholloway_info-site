<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Andrew Holloway | Musician and IT Professional | Resume & Portfolios</title>
    <meta name="description" content="The resume, portfolio & project website for Andrew Holloway of Perth, Western Australia. Here are my projects I've worked on as an IT professional and music creator.">
    <meta name="keywords" content="Portfolio, Music, Technology Professional, Project, Resume, Hire">
    <meta name="author" content="Andrew Holloway">
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <link rel="icon" href="/favicon.png?v=0002" />
    <link rel="stylesheet" href="main2.css" />
    <link rel="stylesheet" href="home.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        function mobileNavToggle() {
            var mobilenavburger = document.getElementById("head-mobnav").children;
            var headerBottom = document.getElementById("head-bottom");
            var header = document.getElementsByTagName("header");

            mobilenavburger[0].classList.toggle("is-active");
            headerBottom.classList.toggle("activated");
            header[0].classList.toggle("activated");
        }

        function resetMobNav() {
            var mobilenavburger = document.getElementById("head-mobnav").children;
            var headerBottom = document.getElementById("head-bottom");
            var header = document.getElementsByTagName("header");

            mobilenavburger[0].classList.remove("is-active");
            headerBottom.classList.remove("activated");
            header[0].classList.remove("activated");
        }

        function hideLogoOnScroll() {
            var ajhlogo = document.getElementById("head-logo");
            if (jQuery(window).scrollTop() >= 50) {
                ajhlogo.style.opacity = 0;
            } else {
                ajhlogo.style.opacity = 1;
            }
            // alert(document.body.scrollY);
        }

        window.onscroll = function() {
            resetMobNav();
            hideLogoOnScroll();
        }

        var body = document.body,
            html = document.documentElement;

        var height = Math.max( body.scrollHeight, body.offsetHeight, 
            html.clientHeight, html.scrollHeight, html.offsetHeight );
        
        alert(height);

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
    <?php require("./includes/header.php"); ?>
    <main>
        <section>
            <div id="ahollowaytxt">
                <h1><span class="clr-accent">Andrew</span> Holloway</h1>
                <p>IT PROFESSIONAL AND ENTHUSIAST</p>
            </div>
            <div id="summary" class="box box-highlighted">
                <h2>Executive Summary</h2>
                <p>
                    I am a motivated and experienced individual with a demonstrated history working 
                    professionally and efficiency in fast pasted environments. I am highly skilled in 
                    advanced computer networking, team leadership, and programming languages like 
                    Powershell, PHP, HTML and Javascript. I take pride in my customer-focused, work 
                    ethic and ability to plan, document and communicate tasks for future repeatability 
                    and cohesive knowledge across a team.
                </p>
            </div>
        </section>
    </main>
    <section id="experience" class="purp-gradient-bg">
        <div class="header">
            <h2>Experience & Roles</h2>
            <p>
                All of my previous roles provided me helpful experience in handling pressure,
                time, and communication. Below, I show my growth, click for more info.
            </p>
        </div>
        <div class="content">
            <button tabindex="10" class="box box-highlighted">
                <div class="box-image scc"></div>
                <div class="box-title heading">Seton Catholic College</div>
                <div class="box-desc">ICT Officer</div>
            </button>
            <button tabindex="11" class="box">
                <div class="box-image trs"></div>
                <div class="box-title heading">The Reject Shop</div>
                <div class="box-desc">Team Leader</div>
            </button>
        </div>
    </section>
    <section id="skills">
        <div class="header">
            <h2>Skills & Certifications</h2>
            <p>
                I've always had a passion to learn and grow
                my knowledge. In the time I've been working,
                I've also been studying. Here are some of
                the certifications and skills I've acquired.
            </p>
        </div>
        <div class="content">
            <button tabindex="12" class="box" onclick="openBoxInfo('networking')">
                <div class="box-image networking"></div>
                <div class="box-title heading">Diploma</div>
                <div class="box-desc">IT Networking</div>
            </button>
            <button tabindex="13" class="box" onclick="openBoxInfo('business')">
                <div class="box-image business"></div>
                <div class="box-title heading">Certificate IV</div>
                <div class="box-desc">Business</div>
            </button>
            <button style="display:none;" tabindex="14" class="box" onclick="openBoxInfo('aws')">
                <div class="box-image amazon"></div>
                <div class="box-title heading">Certification</div>
                <div class="box-desc">AWS Architect</div>
            </button>
        </div>
        <a tabindex="15" href="#" class="btn">LEARN MORE</a>
    </section>
    <section id="education" class="purp-gradient-bg">
        <div class="header">
            <h2>Education History</h2>
            <p>
                As and example of my passion and drive, during my final year of high school I was also
                studying Cyber Security and Music Industry at South Metropolitan TAFE.
            </p>
        </div>
        <div class="content">
            <button tabindex="16" class="box box-highlighted">
                <div class="box-image networking"></div>
                <div class="box-title heading">Diploma</div>
                <div class="box-desc">IT Networking</div>
            </button>
            <button tabindex="17" class="box">
                <div class="box-image business"></div>
                <div class="box-title heading">Certificate IV</div>
                <div class="box-desc">Business</div>
            </button>
            <button tabindex="18" class="box">
                <div class="box-image music"></div>
                <div class="box-title heading">Certificate II</div>
                <div class="box-desc">Music Industry</div>
            </button>
        </div>
    </section>
    <section id="portfolios">
        <div class="header">
            <h2>Portfolios & Projects</h2>
            <p>
                I spend my extra time doing things I love, 
                which includes creating music, programming
                and much more. Here I've displayed some 
                of my most interesting and best projects.
            </p>
        </div>
        <div class="content">
            <a tabindex="19" href="/music/" class="box">
                <div class="box-image music"></div>
                <div class="box-title heading">Music</div>
            </a>
            <div class="box">
                <div class="box-image program"></div>
                <div class="box-title heading">Programming</div>
            </div>
            <div class="box">
                <div class="box-image web"></div>
                <div class="box-title heading">Websites</div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="header">
            <h2>Contact</h2>
            <p>
                If your interested in contacting me, feel free below. I'm always looking for new
                opportunities, and if you think your team could use someone like me, shoot me a
                message. Chat soon!
            </p>
        </div>
        <div class="btn-container">
            <a tabindex="20" href="mailto:andrew.k.holloway+site@hotmail.com" class="btn">Business Inquiry</a>
            <a tabindex="21" href="https://www.linkedin.com/in/andrew-holloway/" class="btn" target="_blank">LinkedIn</a>
        </div>
    </section>
    <?php require("./includes/footer.php"); ?>
</body>
</html>