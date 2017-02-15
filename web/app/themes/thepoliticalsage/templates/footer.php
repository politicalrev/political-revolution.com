</main>
<!-- Main -->


<!--<footer class="content-info">
      <div class="container">
        <?php
//dynamic_sidebar('sidebar-footer');
?>
      </div>
    </footer>-->

<footer id="footer">
    <div class="footer-color">
        <div class="disclaimer">
            Paid for by <a href="<?= home_url(); ?>">The Political Revolution</a> and not authorized by any candidate
            or candidate's committee.
        </div>
        <div class="privacy-policy">
            Privacy Policy
        </div>
    </div>
    <div class="footer-white">
        <span class="footer-left">&copy; <?= bloginfo('title'); ?> 2017</span>
        <img alt="Political Revolution Bird Logo"
             src="<?= get_stylesheet_directory_uri(); ?>/assets/images/button.svg"/>
        <!--                <ul class="footernav">-->
        <!--                    <li>Contact Us</li>-->
        <!--                    <li>Search</li>-->
        <!--                    <li>By-laws</li>-->
        <!--                    <li>Privacy Policy</li>-->
        <!--                </ul>-->
        <span class="footer-right">
        <ul class="icons">
            <li>
                <a href="https://twitter.com/ourpoliticalrev" class="icon fa-twitter" target="_blank">
                    <span class="label">Twitter</span>
                    <div class="icon-detail">@OurPoliticalRev</div>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/ThePoliticalRev/" class="icon fa-facebook" target="_blank">
                    <span class="label">Facebook</span>
                    <div class="icon-detail">Facebook</div>
                </a>
            </li>
            <li>
                <a href="https://github.com/politicalrev" class="icon fa-github" target="_blank">
                    <span class="label">GitHub</span>
                    <div class="icon-detail">Github</div>
                </a>
            </li>
            <li>
                <a href="https://medium.com/voices-of-the-political-revolution" class="icon fa-medium" target="_blank">
                    <span class="label">Medium</span>
                    <div class="icon-detail">Voices</div>
                </a>
            </li>
            <!--<li>
                <a href="https://polrevvols.herokuapp.com/" class="icon fa-slack" target="_blank">
                    <span class="label">Slack</span>
                    <div class="icon-detail">Chat</div>
                </a>
            </li>-->
            <li>
                <a href="https://www.reddit.com/r/Political_Revolution/" class="icon fa-reddit-alien" target="_blank">
                    <span class="label">LinkedIn</span>
                    <div class="icon-detail">/r/Political_Revolution</div>
                </a>
            </li>
        </ul>
        </span>
    </div>
</footer>

</div>
<!-- Wrapper -->

<!--Google Analytics Script-->
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-88853144-1', 'auto');
 ga('send', 'pageview');

</script>