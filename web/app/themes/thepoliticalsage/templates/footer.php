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
            <div>
                <ul class="icons">
                    <li><a href="https://twitter.com/ourpoliticalrev" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/ThePoliticalRev/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                    <!-- {% if site.gitlab_url %}
                    <li><a href="{{ site.gitlab_url }}" class="icon fa-gitlab" target="_blank"><span class="label">GitLab</span></a></li>
                    {% endif %} -->
                    <li><a href="https://github.com/politicalrev" class="icon fa-github" target="_blank"><span class="label">GitHub</span></a></li>
                    <li><a href="https://medium.com/voices-of-the-political-revolution/the-smear-is-here-for-keith-ellison-651c9be0992c#.vbklzk4ae" class="icon fa-medium" target="_blank"><span class="label">Medium</span></a></li>
                    <li><a href="https://polrevvols.herokuapp.com/" class="icon fa-slack" target="_blank"><span class="label">Slack</span></a></li>
                    <li><a href="https://www.reddit.com/r/Political_Revolution/" class="icon fa-reddit-alien" target="_blank"><span class="label">LinkedIn</span></a></li>
                </ul>
            </div>
            <div>
                <span class="copyright">&copy; <?= bloginfo('title'); ?> 2017</span>
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/button.svg" />
                <ul class="footernav">
                    <li>Contact Us</li>
                    <li>Search</li>
                    <li>By-laws</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
              <?php if (is_page_template('templates/template-petition.php')) : ?>
                <script>
                    $(document).ready(function(){
                        $('input').placeholder();
                        $('#signers').sheetrock({
                        url: 'https://docs.google.com/spreadsheets/d/1Hal66qTxrF5g2HlPpKhzW-MgSa2Suz0Vz2c94ucc2wA/edit#gid=0',
                        sql: "select A",
                        fetchSize: 2
                        });
                        $('#googleform').one('submit',function(){
                        var inputq1 = encodeURIComponent($('#email').val());
                        var inputq2 = encodeURIComponent($('#zip').val());
                        var inputq7 = encodeURIComponent($('#source').val());
                        var q1ID = "entry.1631344322";
                        var q2ID = "entry.134615433";
                        var q7ID = "entry.60866946";
                        var baseURL = 'https://docs.google.com/a/middleseat.co/forms/d/e/1FAIpQLSco6Tcc8hT9RwY6fIdSIoIiMUVl5Te91t4OwGFk7xUQynp5Dw/formResponse?';
                        var submitRef = '&submit=Submit';
                        var submitURL = (baseURL + q1ID + "=" + inputq1 + "&" + q2ID + "=" + inputq2 + "&" + q7ID + "=" + inputq7 + submitRef);
                        console.log(submitURL);
                        $(this)[0].action=submitURL;
                            $('.start').hide();
                            $('html,body').scrollTop(0);
                        $('.thankyou').show();
                            fbq('track', 'Lead');
                            ga('send', 'event', 'Petition', 'Signed');
                    });
                    });
                    $(document).ready(function()
                    {
                        function getParameterByName(name) {
                    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                        results = regex.exec(location.search);
                    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
                }


                    $("#source").val(getParameterByName("source"));
                    var sourcestring = encodeURIComponent($('#source').val());

                    });
                    
                </script>
            <?php endif; ?>
    </footer>

</div>
<!-- Wrapper -->

</body>

</html>