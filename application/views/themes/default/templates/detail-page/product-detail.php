<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BASICS -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Kilimanjaro - Online Coffee Shopping Site</title>
        <?php
        $this->load->view("themes/" . THEME . "/headers/global.php");        
        echo $CI->assets->renderHead();
        ?>
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo createUrl('') ?>js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>

    <body>
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-89367361-1', 'auto');
          ga('send', 'pageview');

        </script>
        <div id="yt_wrapper">
            <div id="yt_header" class="yt-header wrap header2-wrap">
                <?php $this->load->view("themes/" . THEME . "/layout/inc-header"); ?>
                <?php // $this->load->view("themes/" . THEME . "/layout/inc-topsearch"); ?>
            </div>
        </div>
        
        
        
        
        <!--        <header id="header">
                    <?php $this->load->view("themes/" . THEME . "/layout/inc-header"); ?>
                </header>
                <section class="content-area">
                    <div class="container"> 
                        <div class="row mar-bot40">
                            <div class="subpages"> 
                                <?php
                                    echo $contents;
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <footer>
                    <?php $this->load->view("themes/" . THEME . "/layout/inc-footer"); ?>
                </footer>   -->
        
        <?php echo $CI->assets->renderFooter(); ?>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo createUrl('') ?>js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
