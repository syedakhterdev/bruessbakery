<div class="footer-container">
            <footer class="wrapper">
                <p><?php echo get_theme_mod('copyright'); ?></p>
                <p><a href="https://www.google.com/maps/place/102+E+Grand+Ave,+Des+Moines,+IA+50309/@41.6059754,-93.7907318,14z/data=!4m5!3m4!1s0x87ee99aea8b65455:0x24371ef9e533793b!8m2!3d41.589617!4d-93.616381" target="_blank"><?php echo get_theme_mod('address'); ?></a><br><a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a></p>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
<?php wp_footer(); ?>

    </body>
</html>