        <!--Libs-->
        <!--head libs-->
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/js/jquery-2.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/jquery.queryloader2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/modernizr.js"></script>
        <script>
            $('html').addClass('d_none');
            $(document).ready(function(){
                $('html').show();
                $("body").queryLoader2({
                    backgroundColor: '#fff',
                    barColor : '#35eef6',
                    barHeight: 4,
                    percentage:true,
                    deepSearch:true,
                    minimumTime:1000
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/jquery.appear.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/afterresize.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/jquery.easytabs.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/jackbox/js/jackbox-packed.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/twitter/jquery.tweet.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/flickr.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/plugins/colorpicker/colorpicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/js/styleswitcher.js"></script>

        <!--Theme Initializer-->
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/js/theme.plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/public/sucofindo/js/theme.js"></script>
        <?php echo isset($js) ? $js : ""; ?>
    </body>
</html>