<footer>
    <div class="wrapper">
        <h4>Andrew Holloway &copy;
            <?php

            if ($_SERVER['SERVER_NAME'] !== "andrewholloway.info") {
                echo "Development";
            } else {
                echo date("Y");
            }

            ?>
        </h4>
        <div id="footlinks">
            <a tabindex="0" href="/sitemap.txt">site map</a>
            <a tabindex="0" href="mailto:site@andrewholloway.info">contact</a>
        </div>
        <?php if (isset($_GET['proudMessage'])) { ?>
            <div id="popup-modal-msg" <?php if (isset($_GET['proudType'])) { echo ' class="' . $_GET['proudType'] . '"'; } ?>>
                <span><?php echo $_GET['proudMessage']; ?></span>
            </div>
            <script>
                var proudPopup = document.getElementById("popup-modal-msg");
                setTimeout(function() {
                    proudPopup.classList.add("hidden");
                }, 3000);
            </script>
        <?php } ?>
    </div>
</footer>