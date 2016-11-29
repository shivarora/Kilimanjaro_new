<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Welcome To Admin Panel</title>
        <base href="<?php echo base_url(); ?>" />
        <?php
        $this->load->view("headers/global");
        echo cms_head();
        echo cms_css();
        echo cms_js();
        ?> 
        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/login.css" type="text/css" media="screen" />
        <!--[if lte IE 6]>
        <link rel="stylesheet" type="text/css" href="css/css_iehacks.css" />
        <![endif]-->
        <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/css_ie7hacks.css" />
        <![endif]-->

        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
        <div id="wrap">
            <div id="sign-wrapper">
                <?php $this->load->view('inc-messages'); ?>
                <form action="welcome/index/" method="post" enctype="multipart/form-data" class="sign-in form-horizontal shadow rounded no-overflow">
                    <div class="sign-header">
                        <div class="form-group">
                            <img src="images/logo.png" alt="" border="0" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="sign-body">
                        <div class="form-group">
                            <div class="input-group input-group-lg rounded no-overflow">
                                <input type="text" class="form-control input-sm" placeholder="Username" name="login_identity">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg rounded no-overflow">
                                <input type="password" class="form-control input-sm" placeholder="Password" name="login_password">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sign-footer">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <a href="welcome/lostpasswd/" title="lost password">Lost password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login_user" value="Sign In" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">
                        </div>
                    </div>
                </form>
            </div>
<!--

            <div class="pageTop">

            </div>
            <div class="clearfix"></div>
            <div id="page">
                <div class="pageContent">
                    <div class="innerLeft" style="width:100%">
                        <h2>Control Panel Login</h2>
                        <hr />

                        <fieldset>
                            <label for="username">Username</label>
                            <input type="text" class="smallField" id="username" name="username" />
                            <small>Please fill in your username</small>

                            <label for="passwd">Password</label>
                            <input type="password" class="mediumField" id="passwd" name="passwd" />
                            <small>Please fill in the matching password for this username</small>

                            <input class="button" type="submit" name="submit" value="Login" />
                            <div class="retr"><a href="welcome/lostpasswd/">retrieve account</a></div>

                        </fieldset>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>-->

            <div class="footer"><?php $this->load->view('layout/inc-footer'); ?></div>
            <?php
            echo cms_foot_js();
            echo cms_footer();
            ?>
        </div>

    </body>
</html>