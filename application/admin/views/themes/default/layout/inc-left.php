<!--<div id="tour-8" class="sidebar-content">
    <div class="media">
        <a class="pull-left has-notif avatar" href="">
            <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">
            <i class="online"></i>
        </a>
        <div class="media-body">
            <h4 class="media-heading">Hello, <span>Lee</span></h4>
            <small>Web Designer</small>
        </div>
    </div>
</div>-->
<?php // echo $this->router->fetch_class(); ?>
<ul id="tour-9" class="sidebar-menu">
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'dashboard') {
        echo 'active';
    }
    ?>">
        <a href="<?= base_url(); ?>">
            <span class="icon"><i class="fa fa-home"></i></span>
            <span class="text">Dashboard</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'dashboard') {
                echo 'selected';
            }
            ?>"></span>
        </a>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'escort') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-female"></i></span>
            <span class="text">Escorts</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'escort') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'escort') {
                echo 'active';
            }
            ?>"><a href="escort">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'escort/add') {
                echo 'active';
            }
            ?>"><a href="escort/add">Add New</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'page') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-file-text"></i></span>
            <span class="text">Pages</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'page') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'cms/page') {
                echo 'active';
            }
            ?>"><a href="cms/page">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'cms/page/add') {
                echo 'active';
            }
            ?>"><a href="cms/page/add">Add New</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'applications') {
        echo 'active';
    }
    ?>">
        <a href="applications">
            <span class="icon"><i class="fa fa-clipboard"></i></span>
            <span class="text">Applications</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'applications') {
                echo 'selected';
            }
            ?>"></span>
        </a>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'bookings') {
        echo 'active';
    }
    ?>">
        <a href="bookings">
            <span class="icon"><i class="fa fa-calendar-o"></i></span>
            <span class="text">Bookings</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'bookings') {
                echo 'selected';
            }
            ?>"></span>
        </a>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'enquiries') {
        echo 'active';
    }
    ?>">
        <a href="enquiries">
            <span class="icon"><i class="fa fa-comments-o"></i></span>
            <span class="text">Enquiries</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'enquiries') {
                echo 'selected';
            }
            ?>"></span>
        </a>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'blog') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-pencil"></i></span>
            <span class="text">Blog</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'blog') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'blog') {
                echo 'active';
            }
            ?>"><a href="blog">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'blog/add') {
                echo 'active';
            }
            ?>"><a href="blog/add">Add New</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'news') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-pencil"></i></span>
            <span class="text">News</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'news') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'news') {
                echo 'active';
            }
            ?>"><a href="news">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'news/add') {
                echo 'active';
            }
            ?>"><a href="news/add">Add New</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'faq') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-pencil"></i></span>
            <span class="text">FAQs</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'faq') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'faq') {
                echo 'active';
            }
            ?>"><a href="faq">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'faq/add') {
                echo 'active';
            }
            ?>"><a href="faq/add">Add FAQ</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'offer') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-pencil"></i></span>
            <span class="text">Offers</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'offer') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'offer') {
                echo 'active';
            }
            ?>"><a href="offer">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'offer/add') {
                echo 'active';
            }
            ?>"><a href="offer/add">Add Offer</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'rates') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-gbp"></i></span>
            <span class="text">Rates</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'rates') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'rates') {
                echo 'active';
            }
            ?>"><a href="rates">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'rates/add') {
                echo 'active';
            }
            ?>"><a href="rates/add">Add New</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'reviews') {
        echo 'active';
    }
    ?>">
        <a href="reviews">
            <span class="icon"><i class="fa fa-star-half-o"></i></span>
            <span class="text">Reviews</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'reviews') {
                echo 'selected';
            }
            ?>"></span>
        </a>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'categories') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-list"></i></span>
            <span class="text">Categories</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'categories') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'categories') {
                echo 'active';
            }
            ?>"><a href="categories">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'categories/add') {
                echo 'active';
            }
            ?>"><a href="categories/add">Add New</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'location') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-list"></i></span>
            <span class="text">Locations</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'location') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'location') {
                echo 'active';
            }
            ?>"><a href="location">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'location/add') {
                echo 'active';
            }
            ?>"><a href="location/add">Add New</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'slide') {
        echo 'active';
    }
    ?>">
        <a href="javascript:void(0)">
            <span class="icon"><i class="fa fa-list"></i></span>
            <span class="text">Slides</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'slide') {
                echo 'selected';
            }
            ?>"></span>
        </a>
        <ul>
            <li class="<?php
            if (uri_string() == 'slideshow/slide/index/1') {
                echo 'active';
            }
            ?>"><a href="slideshow/slide/index/1">Manage</a></li>
            <li class="<?php
            if (uri_string() == 'slideshow/slide/add/1') {
                echo 'active';
            }
            ?>"><a href="slideshow/slide/add/1">Add New</a></li>
        </ul>
    </li>
    <li class="submenu <?php
    if ($this->router->fetch_class() == 'settings') {
        echo 'active';
    }
    ?>">
        <a href="setting/settings/index">
            <span class="icon"><i class="fa fa-cogs"></i></span>
            <span class="text">Settings</span>
            <span class="arrow"></span>
            <span class="<?php
            if ($this->router->fetch_class() == 'settings') {
                echo 'selected';
            }
            ?>"></span>
        </a>
    </li>
</ul>
<!--<div id="tour-10" class="sidebar-footer hidden-xs hidden-sm hidden-md">
    <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
    <a id="lock-screen" data-url="page-signin.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
    <a id="logout" data-url="page-lock-screen.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
</div>-->