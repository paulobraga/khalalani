<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="http://themes.googleusercontent.com" />

        <link rel="dns-prefetch" href="http://ajax.googleapis.com" />
        <link rel="dns-prefetch" href="http://cdnjs.cloudflare.com" />
        <link rel="dns-prefetch" href="http://agorbatchev.typepad.com" />

        <!-- Use the .htaccess and remove these lines to avoid edge case issues.
           More info: h5bp.com/b/378 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Login - Mango: Slick and Responsive Admin Template</title>
        <meta name="description" content="Mango is a slick and responsive Admin Template build with modern techniques like HTML5 and CSS3 to be used for backend solutions of any size.">
        <meta name="author" content="Simon Stamm & Markus Siemens">

        <!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- iPhone: Don't render numbers as call links -->
        <meta name="format-detection" content="telephone=no">

        <link rel="shortcut icon" href="favicon.ico" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
        <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->


        <!-- The Styles -->
        <!-- ---------- -->

        <!-- Layout Styles -->
        <?php
        $csspath = 'mangoadmin/css/';
        $layout_styles = array(
            $csspath . 'style',
            $csspath . 'grid',
            $csspath . 'layout'
        );
        echo $this->Html->css($layout_styles);
        ?>
        <!--	<link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/grid.css">
                <link rel="stylesheet" href="css/layout.css">-->

        <!-- Icon Styles -->
        <?php
        $icon_styles = array(
            $csspath . 'icons',
            $csspath . 'fonts/font-awesome'
        );
        echo $this->Html->css($icon_styles);
        ?>
        <!--	<link rel="stylesheet" href="css/icons.css">
                <link rel="stylesheet" href="css/fonts/font-awesome.css">-->
        <!--[if IE 8]><link rel="stylesheet" href="css/fonts/font-awesome-ie7.css"><![endif]-->

        <!-- External Styles -->
        <?php
        $external_styles = array(
            $csspath . 'external/jquery-ui-1.8.21.custom',
            $csspath . 'external/jquery.chosen',
            $csspath . 'external/jquery.cleditor',
            $csspath . 'external/jquery.colorpicker',
            $csspath . 'external/jquery.elfinder',
            $csspath . 'external/jquery.fancybox',
            $csspath . 'external/jquery.jgrowl',
            $csspath . 'external/jquery.plupload.queue',
            $csspath . 'external/syntaxhighlighter/shCore',
            $csspath . 'external/syntaxhighlighter/shThemeDefault'
        );
        echo $this->Html->css($external_styles);
        ?>
        <!--	<link rel="stylesheet" href="css/external/jquery-ui-1.8.21.custom.css">
                <link rel="stylesheet" href="css/external/jquery.chosen.css">
                <link rel="stylesheet" href="css/external/jquery.cleditor.css">
                <link rel="stylesheet" href="css/external/jquery.colorpicker.css">
                <link rel="stylesheet" href="css/external/jquery.elfinder.css">
                <link rel="stylesheet" href="css/external/jquery.fancybox.css">
                <link rel="stylesheet" href="css/external/jquery.jgrowl.css">
                <link rel="stylesheet" href="css/external/jquery.plupload.queue.css">
                <link rel="stylesheet" href="css/external/syntaxhighlighter/shCore.css" />
                <link rel="stylesheet" href="css/external/syntaxhighlighter/shThemeDefault.css" />-->

        <!-- Elements -->
        <?php
        $elements = array(
            $csspath . 'elements',
            $csspath . 'forms'
        );
        echo $this->Html->css($elements);
        ?>
        <!--	<link rel="stylesheet" href="css/elements.css">
                <link rel="stylesheet" href="css/forms.css">-->

        <!-- OPTIONAL: Print Stylesheet for Invoice -->
        <?php
        echo $this->Html->css($csspath . 'print-invoice');
        ?>
        <!--<link rel="stylesheet" href="css/print-invoice.css">-->

        <!-- Typographics -->
        <?php
        echo $this->Html->css($csspath . 'typographics');
        ?>
        <!--<link rel="stylesheet" href="css/typographics.css">-->

        <!-- Responsive Design -->
        <?php
        echo $this->Html->css($csspath . 'media-queries');
        ?>
        <!--<link rel="stylesheet" href="css/media-queries.css">-->

        <!-- Bad IE Styles -->
        <?php
        echo $this->Html->css($csspath . 'ie-fixes');
        ?>
        <!--<link rel="stylesheet" href="css/ie-fixes.css">-->

        <?php echo $this->Html->css('msdropdown/dd');?>



        <!-- The Scripts -->
        <!-- ----------- -->


        <!-- JavaScript at the top (will be cached by browser) -->

        <!-- Load Webfont loader -->
        <script type="text/javascript">
            window.WebFontConfig = {
                google: {families: ['PT Sans:400,700']},
                active: function() {
                    $(window).trigger('fontsloaded')
                }
            };
        </script>
        <script defer async src="https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js"></script>

        <!-- Essential polyfills -->
        <?php
        $jspath = 'mangoadmin/js/';
        $essential_polyfills = array(
            $jspath . 'mylibs/polyfills/modernizr-2.6.1.min',
            $jspath . 'mylibs/polyfills/respond',
            $jspath . 'mylibs/polyfills/matchmedia'
        );
        echo $this->Html->script($essential_polyfills);
        ?>
<!--	<script src="js/mylibs/polyfills/modernizr-2.6.1.min.js"></script>
        <script src="js/mylibs/polyfills/respond.js"></script>
        <script src="js/mylibs/polyfills/matchmedia.js"></script>-->
        <!--[if lt IE 9]><script src="js/mylibs/polyfills/selectivizr-min.js"></script><![endif]-->
        <!--[if lt IE 10]><script src="js/mylibs/charts/excanvas.js"></script><![endif]-->
        <!--[if lt IE 10]><script src="js/mylibs/polyfills/classlist.js"></script><![endif]-->

        <!-- Grab frameworks from CDNs -->
        <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
        <?php echo $this->Html->script($jspath . 'jquery.min'); ?>
        <?php echo $this->Html->script($jspath . 'jqueryui.min'); ?>
        <script>window.jQuery || document.write('<script src="<?php echo '/khalalani/' . JS_URL . $jspath . 'libs/jquery-1.7.2.min'; ?>"><\/script>')</script>

        <!-- Do the same with jQuery UI -->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>-->
        <script>window.jQuery.ui || document.write('<script src="<?php echo '/khalalani/' . JS_URL . $jspath . 'libs/jquery-ui-1.8.21.min'; ?>"><\/script>')</script>

        <!-- Do the same with Lo-Dash.js -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.4.2/lodash.min.js"></script>
        <script>window._ || document.write('<script src="<?php echo '/khalalani/' . JS_URL . $jspath . 'libs/lodash.min'; ?>"><\/script>')</script>



        <!-- scripts concatenated and minified via build script -->

        <!-- General Scripts -->
        <?php
        $general_scripts = array(
            $jspath . 'mylibs/jquery.hashchange',
            $jspath . 'mylibs/jquery.idle-timer',
            $jspath . 'mylibs/jquery.plusplus',
            $jspath . 'mylibs/jquery.jgrowl',
            $jspath . 'mylibs/jquery.scrollTo',
            $jspath . 'mylibs/jquery.ui.touch-punch',
            $jspath . 'mylibs/jquery.ui.multiaccordion',
            $jspath . 'mylibs/number-functions'
        );
        echo $this->Html->script($general_scripts);
        ?>
<!--	<script src="js/mylibs/jquery.hashchange.js"></script>
        <script src="js/mylibs/jquery.idle-timer.js"></script>
        <script src="js/mylibs/jquery.plusplus.js"></script>
        <script src="js/mylibs/jquery.jgrowl.js"></script>
        <script src="js/mylibs/jquery.scrollTo.js"></script>
        <script src="js/mylibs/jquery.ui.touch-punch.js"></script>
        <script src="js/mylibs/jquery.ui.multiaccordion.js"></script>
        <script src="js/mylibs/number-functions.js"></script>-->

        <!-- Forms -->
        <?php
        $forms = array(
            $jspath . 'mylibs/forms/jquery.autosize',
            $jspath . 'mylibs/forms/jquery.checkbox',
            $jspath . 'mylibs/forms/jquery.chosen',
            $jspath . 'mylibs/forms/jquery.cleditor',
            $jspath . 'mylibs/forms/jquery.colorpicker',
            $jspath . 'mylibs/forms/jquery.ellipsis',
            $jspath . 'mylibs/forms/jquery.fileinput',
            $jspath . 'mylibs/forms/jquery.fullcalendar',
            $jspath . 'mylibs/forms/jquery.maskedinput',
            $jspath . 'mylibs/forms/jquery.mousewheel',
            $jspath . 'mylibs/forms/jquery.placeholder',
            $jspath . 'mylibs/forms/jquery.pwdmeter',
            $jspath . 'mylibs/forms/jquery.ui.datetimepicker',
            $jspath . 'mylibs/forms/jquery.ui.spinner',
            $jspath . 'mylibs/forms/jquery.validate',
            $jspath . 'mylibs/forms/uploader/plupload',
            $jspath . 'mylibs/forms/uploader/plupload.html5',
            $jspath . 'mylibs/forms/uploader/plupload.html4',
            $jspath . 'mylibs/forms/uploader/plupload.flash',
            $jspath . 'mylibs/forms/uploader/jquery.plupload.queue/jquery.plupload.queue'
        );
        echo $this->Html->script($forms);
        ?>
<!--	<script src="js/mylibs/forms/jquery.autosize.js"></script>
        <script src="js/mylibs/forms/jquery.checkbox.js"></script>
        <script src="js/mylibs/forms/jquery.chosen.js"></script>
        <script src="js/mylibs/forms/jquery.cleditor.js"></script>
        <script src="js/mylibs/forms/jquery.colorpicker.js"></script>
        <script src="js/mylibs/forms/jquery.ellipsis.js"></script>
        <script src="js/mylibs/forms/jquery.fileinput.js"></script>
        <script src="js/mylibs/forms/jquery.fullcalendar.js"></script>
        <script src="js/mylibs/forms/jquery.maskedinput.js"></script>
        <script src="js/mylibs/forms/jquery.mousewheel.js"></script>
        <script src="js/mylibs/forms/jquery.placeholder.js"></script>
        <script src="js/mylibs/forms/jquery.pwdmeter.js"></script>
        <script src="js/mylibs/forms/jquery.ui.datetimepicker.js"></script>
        <script src="js/mylibs/forms/jquery.ui.spinner.js"></script>
        <script src="js/mylibs/forms/jquery.validate.js"></script>
        <script src="js/mylibs/forms/uploader/plupload.js"></script>
        <script src="js/mylibs/forms/uploader/plupload.html5.js"></script>
        <script src="js/mylibs/forms/uploader/plupload.html4.js"></script>
        <script src="js/mylibs/forms/uploader/plupload.flash.js"></script>
        <script src="js/mylibs/forms/uploader/jquery.plupload.queue/jquery.plupload.queue.js"></script>-->

        <!-- Charts -->
        <?php
        $charts = array(
            $jspath . 'mylibs/charts/jquery.flot',
            $jspath . 'mylibs/charts/jquery.flot.orderBars',
            $jspath . 'mylibs/charts/jquery.flot.pie',
            $jspath . 'mylibs/charts/jquery.flot.resize'
        );
        echo $this->Html->script($charts);
        ?>
<!--	<script src="js/mylibs/charts/jquery.flot.js"></script>
        <script src="js/mylibs/charts/jquery.flot.orderBars.js"></script>
        <script src="js/mylibs/charts/jquery.flot.pie.js"></script>
        <script src="js/mylibs/charts/jquery.flot.resize.js"></script>-->

        <!-- Explorer -->
        <?php
        echo $this->Html->script($jspath . 'mylibs/explorer/jquery.elfinder');
        ?>
        <!--<script src="js/mylibs/explorer/jquery.elfinder.js"></script>-->

        <!-- Fullstats -->
        <?php
        $fullstats = array(
            $jspath . 'mylibs/fullstats/jquery.css-transform',
            $jspath . 'mylibs/fullstats/jquery.animate-css-rotate-scale',
            $jspath . 'mylibs/fullstats/jquery.sparkline'
        );
        echo $this->Html->script($fullstats);
        ?>
<!--	<script src="js/mylibs/fullstats/jquery.css-transform.js"></script>
        <script src="js/mylibs/fullstats/jquery.animate-css-rotate-scale.js"></script>
        <script src="js/mylibs/fullstats/jquery.sparkline.js"></script>-->

        <!-- Syntax Highlighter -->
        <?php
        $highlighter = array(
            $jspath . 'mylibs/syntaxhighlighter/shCore',
            $jspath . 'mylibs/syntaxhighlighter/shAutoloader'
        );
        echo $this->Html->script($highlighter);
        ?>
<!--	<script src="js/mylibs/syntaxhighlighter/shCore.js"></script>
        <script src="js/mylibs/syntaxhighlighter/shAutoloader.js"></script>-->

        <!-- Dynamic Tables -->
        <?php
        $dynamic_tables = array(
            $jspath . 'mylibs/dynamic-tables/jquery.dataTables',
            $jspath . 'mylibs/dynamic-tables/jquery.dataTables.tableTools.zeroClipboard',
            $jspath . 'mylibs/dynamic-tables/jquery.dataTables.tableTools'
        );
        echo $this->Html->script($dynamic_tables);
        ?>
<!--	<script src="js/mylibs/dynamic-tables/jquery.dataTables.js"></script>
        <script src="js/mylibs/dynamic-tables/jquery.dataTables.tableTools.zeroClipboard.js"></script>
        <script src="js/mylibs/dynamic-tables/jquery.dataTables.tableTools.js"></script>-->

        <!-- Gallery -->
        <?php
        echo $this->Html->script($jspath . 'mylibs/gallery/jquery.fancybox');
        ?>
        <!--<script src="js/mylibs/gallery/jquery.fancybox.js"></script>-->

        <!-- Tooltips -->
        <?php
        echo $this->Html->script($jspath . 'mylibs/tooltips/jquery.tipsy');
        ?>
        <!--<script src="js/mylibs/tooltips/jquery.tipsy.js"></script>-->

        <!-- Do not touch! -->
        <?php
        $do_no_touch = array(
            $jspath . 'mango',
            $jspath . 'plugins',
            $jspath . 'script'
        );
        echo $this->Html->script($do_no_touch);
        ?>
<!--	<script src="js/mango.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>-->

        <?php echo $this->Html->script('msdropdown/jquery.dd'); ?>

        <!-- Your custom JS goes here -->
        <?php
        echo $this->Html->script($jspath . 'app');
        ?>
        <!--<script src="js/app.js"></script>-->

        <!-- end scripts -->

        <!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  -->
        <?php
        echo $this->Html->meta('icon');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <?php
        echo $this->Element('loading_box');
        echo $this->Element('lock_screen');
        echo $this->Element('settings_dialog');
        echo $this->Element('dialog_add_client');
        echo $this->Element('message_dialog');
        echo $this->Element('top_toolbar');
        echo $this->Element('header');
        ?>
        <!-- The container of the sidebar and content box -->
        <div role="main" id="main" class="container_12 clearfix">
            <?php
            echo $this->Element('blue_toolbar');
            echo $this->Element('sidebar');
            echo $this->fetch('content');
            ?>
        </div><!-- End of #main -->
        <?php
        echo $this->Element('footer');
        ?>

        <!-- Spawn $$.loaded -->
        <script>
            $$.loaded();
        </script>

        <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
           chromium.org/developers/how-tos/chrome-frame-getting-started -->
        <!--[if lt IE 7 ]>
        <script defer src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->

        <?php ?>
    </body>
</html>
