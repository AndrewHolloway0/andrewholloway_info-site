<footer>
    <h4>Andrew Holloway &copy; <?php

    if($_SERVER['SERVER_NAME'] == "development.andrewholloway.info" || $_SERVER['SERVER_NAME'] == "localhost") {
        echo "Development";
    } else {
        echo date("Y");
    }

    ?></h4>
    <div id="footlinks">
        <a href="/sitemap.txt">site map</a>
        <a href="mailto:localmusicproduced+web@gmail.com">contact</a>
    </div>
</footer>