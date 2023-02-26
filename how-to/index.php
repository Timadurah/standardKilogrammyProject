<?php
$title = $_GET['title'];
require_once('../inc/dbconfig.php');
$id = $_GET['id'];
?>
<?php
                                        $query3 = "SELECT id, postTitle,description  FROM blog_posts ORDER BY id DESC LIMIT 0,5";
                                        $result3 = mysqli_query($con, $query3);
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row3 = mysqli_fetch_assoc($result3)) {

                                                $title = $row3['postTitle'];
                                                $description = $row3['description'];
                                             
                                            }


                                        }
                                        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="shortcut icon" href="../../assets/images/logo/logo.png" type="image/x-icon">
    <title>Kilogrammy- <?=$title?></title>

    <meta property="og:site_name" content="Kilogrammy" />

    <meta property="og:type" content="website" />

    <meta property="og:url" content="https://www.kilogrammy.com" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:creator" content="@The_kilogrammy" />

    <meta name="twitter:site" content="@The_kilogrammy" />

    <meta property="og:title"
        content="<?=$title?>" />

    <met win="twitter:title" c seo
        worldontent="<?=$title?>" />

    <meta property="og:description"
        content="<?=$description?>" />

    <meta name="description"
        content="<?=$description?>" />

    <meta property="og:image" content="../../assets/images/banner/kilogrammy.png" />

    <meta name="twitter:image" content="../../assets/images/banner/kilogrammy.png" />
    <!-- CSS
        ============================================ -->

    <!-- Font Family CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="../../assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Red+Hat+Display:400,500,900&display=swap");


        .center {
            position: absolute;
            top: 50%;
            left: calc(50% + 12rem);
            transform: translate(-50%, -50%);
        }

        .pic {
            width: 4rem;
            height: 4rem;
            background-size: cover;
            background-position: center;
            border-radius: 50%;
        }

        .contact {
            position: relative;
            padding-left: 5rem;
            height: 4.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact .pic {
            position: absolute;
            left: 0;
        }

        .contact .name {
            font-weight: 500;
            margin-bottom: 0.125rem;
        }

        .contact .message,
        .contact .seen {
            font-size: 0.9rem;
            color: #999;
        }

        .contact .badge {
            box-sizing: border-box;
            position: absolute;
            width: 1.5rem;
            height: 1.5rem;
            text-align: center;
            font-size: 0.9rem;
            padding-top: 0.125rem;
            border-radius: 1rem;
            top: 0;
            left: 2.5rem;
            background: #333;
            color: white;
        }

        .contacts {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translate(-6rem, -50%);
            width: 24rem;
            height: 32rem;
            padding: 1rem 2rem 1rem 1rem;
            box-sizing: border-box;
            border-radius: 1rem 0 0 1rem;
            cursor: pointer;
            background: white;
            box-shadow: 0 0 8rem 0 rgba(0, 0, 0, 0.1), 2rem 2rem 4rem -3rem rgba(0, 0, 0, 0.5);
            transition: transform 500ms;
        }

        .contacts h2 {
            margin: 0.5rem 0 1.5rem 5rem;
        }

        .contacts .fa-bars {
            position: absolute;
            left: 2.25rem;
            color: #999;
            transition: color 200ms;
        }

        .contacts .fa-bars:hover {
            color: #666;
        }

        .contacts .contact:last-child {
            margin: 0;
        }

        .contacts:hover {
            transform: translate(-23rem, -50%);
        }

        .chat {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 100%;
            height: 100vh;
            z-index: 2;
            box-sizing: border-box;
            border-radius: 1rem;
            background: white;
            box-shadow: 0 0 8rem 0 rgba(0, 0, 0, 0.1), 0rem 2rem 4rem -3rem rgba(0, 0, 0, 0.5);
        }

        .chat .contact.bar {
            flex-basis: 3.5rem;
            flex-shrink: 0;
            margin: 1rem;
            box-sizing: border-box;
        }

        .chat .messages {
            padding: 1rem;
            background: #F7F7F7;
            flex-shrink: 2;
            overflow-y: auto;
            box-shadow: inset 0 2rem 2rem -2rem rgba(0, 0, 0, 0.05), inset 0 -2rem 2rem -2rem rgba(0, 0, 0, 0.05);
        }

        .chat .messages .time {
            font-size: 0.8rem;
            background: #EEE;
            padding: 0.25rem 1rem;
            border-radius: 2rem;
            color: #999;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            margin: 0 auto;
        }

        .chat .messages .message {
            box-sizing: border-box;
            padding: 0.5rem 1rem;
            margin: 1rem;
            background: #FFF;
            border-radius: 1.125rem 1.125rem 1.125rem 0;
            min-height: 2.25rem;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            max-width: 66%;
            box-shadow: 0 0 2rem rgba(0, 0, 0, 0.075), 0rem 1rem 1rem -1rem rgba(0, 0, 0, 0.1);
        }

        .chat .messages .message.parker {
            margin: 1rem 1rem 1rem auto;
            border-radius: 1.125rem 1.125rem 0 1.125rem;
            background: #333;
            color: white;
        }

        .chat .messages .message .typing {
            display: inline-block;
            width: 0.8rem;
            height: 0.8rem;
            margin-right: 0rem;
            box-sizing: border-box;
            background: #ccc;
            border-radius: 50%;
        }

        .chat .messages .message .typing.typing-1 {
            -webkit-animation: typing 3s infinite;
            animation: typing 3s infinite;
        }

        .chat .messages .message .typing.typing-2 {
            -webkit-animation: typing 3s 250ms infinite;
            animation: typing 3s 250ms infinite;
        }

        .chat .messages .message .typing.typing-3 {
            -webkit-animation: typing 3s 500ms infinite;
            animation: typing 3s 500ms infinite;
        }

        .chat .input {
            box-sizing: border-box;
            flex-basis: 4rem;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            padding: 0 0.5rem 0 1.5rem;
        }

        .chat .input i {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: #666;
            cursor: pointer;
            transition: color 200ms;
        }

        .chat .input i:hover {
            color: #333;
        }

        .chat .input input {
            border: none;
            background-image: none;
            background-color: white;
            padding: 0.5rem 1rem;
            margin-right: 1rem;
            border-radius: 1.125rem;
            flex-grow: 2;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1), 0rem 1rem 1rem -1rem rgba(0, 0, 0, 0.2);
            font-family: Red hat Display, sans-serif;
            font-weight: 400;
            letter-spacing: 0.025em;
        }

        .chat .input input:placeholder {
            color: #999;
        }

        @-webkit-keyframes typing {

            0%,
            75%,
            100% {
                transform: translate(0, 0.25rem) scale(0.9);
                opacity: 0.5;
            }

            25% {
                transform: translate(0, -0.25rem) scale(1);
                opacity: 1;
            }
        }

        @keyframes typing {

            0%,
            75%,
            100% {
                transform: translate(0, 0.25rem) scale(0.9);
                opacity: 0.5;
            }

            25% {
                transform: translate(0, -0.25rem) scale(1);
                opacity: 1;
            }
        }

        .pic.stark {
  background-image: url("../assets/images/logo/me.png");
  background-size: 50%;
  background-repeat: no-repeat;
  background-position: center;
}
    </style>
</head>

<body>

    <!--====================  header area ====================-->
    <div class="header-area header-area--absolute">
        <div class="preview-header-inner header-sticky">
            <div class="container-fluid container-fluid--cp-150">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header position-relative">
                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="../../">
                                    <img src="../../assets/images/logo/white-logo.png" width="160" height="48"
                                        class="img-fluid light-logo" alt="Kilogrammy Logo">
                                    <img src="../../assets/images/logo/logo.png" width="160" height="48"
                                        class="img-fluid dark-logo" alt="Kilogrammy Logo">
                                </a>
                            </div>
                            <!-- navigation menu -->
                            <div class="header__navigation menu-style-four preview-menu d-none d-xl-block">
                                <nav class="navigation-menu navigation-menu--onepage navigation-menu-right">
                                    <ul>
                                        <li><a href="../../service"><span>Services</span></a></li>
                                        <li>
                                            <a href="../../our-works"><span>Our Works</span></a>
                                        </li>
                                        <li><a href="../../blog"><span>Blog</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- header actions -->
                            <div class="header__actions--preview">
                                <div class="header__actions">
                                    <div class="header__icons-wrapper header-right-inner" id="hidden-icon-wrapper">
                                        <div class="header-button downlode-btn ml-4">
                                            <a href="../../contact-us" class="ht-btn ht-btn-md"> Lets Make Deal </a>
                                        </div>
                                    </div>
                                    <!-- mobile menu -->
                                    <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                        <i></i>
                                    </div>
                                    <!-- hidden icons menu -->
                                    <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                        <a href="javascript:void(0)">
                                            <i class="far fa-ellipsis-h-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->






    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Blog Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->











    <div id="main-wrapper">
        <div class="site-wrapper-reveal">








            <!--====================  Blog Area Start ====================-->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 order-lg-1 order-2">
                            <div class="page-sidebar-content-wrapper page-sidebar-left  small-mt__40 tablet-mt__40">

                                <!--=== Sidebar Widget Start ===-->
                                <div class="sidebar-widget search-post wow move-up">
                                    <div class="widget-title">
                                        <h4 class="sidebar-widget-title">Search</h4>
                                    </div>
                                        <div class="widget-search">
                                            <form action="../../search/index.php" method="post">
                                                <input type="text" name="term" placeholder="Enter search keyword…">
                                                  <button type="submit" class="search-submit">
                                                <span class="search-btn-icon fa fa-search"></span>
                                            </button>

                                        </div>
                                    </form>
                                </div>
                                <!--=== Sidebar Widget End ===-->


                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-blog-recent-post wow move-up">

                                    <h4 class="sidebar-widget-title">Recent Posts</h4>

                                    <ul>

                                        <!-- //********************************************* Recent Posts ***************************************** -->
                                        <?php
                                        $query2 = "SELECT id, postTitle FROM blog_posts ORDER BY id DESC LIMIT 0,5";
                                        $result2 = mysqli_query($con, $query2);
                                        if (mysqli_num_rows($result2) > 0) {
                                            while ($row2 = mysqli_fetch_assoc($result2)) {

                                                echo "  <li>
                                <a href='../how-to/" . $row2['id'] . "/" . $row2['postTitle'] . "' >" . $row2['postTitle'] . "</a>
                            </li>";
                                            }


                                        }
                                        ?>
                                        <!-- // recent if closed  -->


                                    </ul>

                                </div>
                                <!-- === Sidebar Widget End === -->

                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-images wow move-up">

                                    <img class="img-fluid"
                                        src="../../assets/images/hero/mitech-landing-main-slider-slide-01-image-04.png"
                                        alt="Kilogrammy make It solution easy" style="border-radius:20px;">

                                </div>
                                <!-- === Sidebar Widget End === -->




                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-tag wow move-up">
                                    <h4 class="sidebar-widget-title">Tags</h4>

                                    <?php


                                    //*********************************************** Categories list ************************************
                                    
                                    $catq = "SELECT catID, catTitle, catSlug FROM blog_cats";
                                    $result3 = mysqli_query($con, $catq);
                                    if (mysqli_num_rows($result3) > 0) {
                                        while ($row3 = mysqli_fetch_assoc($result3)) {

                                            $catnum = "SELECT id, content, catinfo FROM blog_posts WHERE catinfo = " . $row3['catID'] . "";
                                            $rescat = mysqli_query($con, $catnum);
                                            $num = mysqli_num_rows($rescat);

                                            echo '<a href="../../cat/?catid=' . $row3['catID'] . '&category=' . $row3['catTitle'] . '" class="ht-btn ht-btn-xs">' . $row3['catTitle'] . '&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">' . $num . '</a>';
                                        } // category while closed
                                    

                                    } // category if closed
                                    else {
                                        echo '<div class="alert alert-warning text-center"><h3>No category yet!</h3></div>';
                                        die();
                                    }

                                    ?>
                                </div>
                                <!-- === Sidebar Widget End === -->


                            </div>
                        </div>
                        <?php

                        $query = "SELECT id, postTitle, description, content, post_date, auther, catinfo FROM blog_posts WHERE id = '$id'";
                        $result = mysqli_query($con, $query);


                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $row['description'], $urls);
                                $urls = $urls[1];


                                $forcat = "SELECT catID, catTitle, catSlug FROM blog_cats WHERE catID = " . $row['catinfo'] . "";
                                $result1 = mysqli_query($con, $forcat);
                                if (mysqli_num_rows($result1) > 0) {
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        $cat = $row1['catTitle'];
                                    }
                                }

                                ?>





                                <div class="col-lg-8 order-lg-2 order-1">
                                    <div class="main-blog-wrap">
                                        <!--======= Single Blog Item Start ========-->
                                        <div class="single-blog-item">
                                            <!-- Post Feature Start -->
                                            <div class="post-feature blog-thumbnail wow move-up">
                                                <?php if ($urls == null) {
                                                } else {
                                                    echo '<img class="img-fluid" src="$urls" alt="' . $row["postTitle"] . '">';
                                                } ?>
                                            </div>
                                            <!-- Post Feature End -->







                                            <!-- Post info Start -->
                                            <div class="post-info lg-blog-post-info  wow move-up">
                                                <div class="post-categories">
                                                    <a href="#">
                                                        <?= $cat ?>
                                                    </a>
                                                </div>

                                                <h3 class="post-title">
                                                    <?= $row['postTitle'] ?>
                                                </h3>

                                                <div class="post-meta mt-20">
                                                    <div class="post-author">
                                                        <a href="#">
                                                            <img class="img-fluid avatar-96" src="../assets/images/logo/me.png"
                                                                alt=""> A.Aduragbemi
                                                        </a>
                                                    </div>
                                                    <div class="post-date">
                                                        <span class="far fa-calendar meta-icon"></span>
                                                        <?= date('jS M Y H:i:s', strtotime($row['post_date'])) ?>
                                                    </div>

                                                </div>

                                                <div class="post-excerpt mt-15">

                                                    <blockquote>
                                                        <p class="p1">
                                                            <?= $row['description'] ?>
                                                        </p>
                                                    </blockquote>

                                                    <p>
                                                        <?= $row['content'] ?>
                                                    </p>
                                                    <p>Source:&nbsp;Kilogrammy.com</p>

                                                    <div class="entry-post-share-wrap  border-bottom">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="entry-post-tags">
                                                                    <div class="tagcloud-icon">
                                                                        <i class="far fa-tags"></i>
                                                                    </div>
                                                                    <div class="tagcloud">
                                                                        <a href="#"> Mobile app and Web develoment</a>, <a
                                                                            href="#">Seo</a>, <a href="#">Logo</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="entry-post-share">
                                                                    <div class="share-label">
                                                                        Share this post
                                                                    </div>
                                                                    <div class="share-media">
                                                                        <span class="share-icon far fa-share-alt"></span>

                                                                        <div class="share-list">
                                                                            <a class="hint--bounce hint--top hint--primary twitter"
                                                                                target="_blank" aria-label="Twitter" href="#">
                                                                                <i class="fab fa-twitter"></i>
                                                                            </a>
                                                                            <a class="hint--bounce hint--top hint--primary facebook"
                                                                                target="_blank" aria-label="Facebook" href="#">
                                                                                <i class="fab fa-facebook-f"></i>
                                                                            </a>
                                                                            <a class="hint--bounce hint--top hint--primary linkedin"
                                                                                target="_blank" aria-label="Linkedin" href="#">
                                                                                <i class="fab fa-linkedin"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="entry-author">
                                                        <div class="author-info">
                                                            <div class="author-avatar">
                                                                <img src="../../assets/images/logo/me.png" alt="" width="50" ?>
                                                                <div class="author-social-networks">
                                                                    <div class="inner">
                                                                        <a class="hint--bounce hint--top hint--primary"
                                                                            aria-label="Twitter"
                                                                            href="https://twitter.com/The_kilogrammy"
                                                                            target="_blank">
                                                                            <i class="fab fa-twitter"></i>
                                                                        </a>

                                                                        <a class="hint--bounce hint--top hint--primary"
                                                                            aria-label="Facebook"
                                                                            href="https://facebook.com/@The_kilogrammy"
                                                                            target="_blank">
                                                                            <i class="fab fa-facebook-f"></i>
                                                                        </a>

                                                                        <a class="hint--bounce hint--top hint--primary"
                                                                            aria-label="Instagram"
                                                                            href="https://instagram.com/@The_kilogrammy"
                                                                            target="_blank">
                                                                            <i class="fab fa-instagram"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="author-description">
                                                                <h6 class="author-name">Kilogrammy Ceo</h6>

                                                                <div class="author-biographical-info">
                                                                    Ademola Aduragbemi is an author, blogger, and Computer
                                                                    Mathematician, Ceo of kilogrammy.
                                                                    I Adura and my team which some are mathematicians, Data
                                                                    sciencetist, Social marketers, computer programers, computer
                                                                    sciencetist and graphic designers. We are extremely
                                                                    passionate about what we do and have always put our clients
                                                                    first.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <!-- Post info End -->
                                            </div>
                                            <!--===== Single Blog Item End =========-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====================  Blog Area End  ====================-->










                    </div>







                    <?php
                            }
                        }
                        require '../components/footter.php';

                        ?>