
<?php
	require_once('../inc/dbconfig.php');
	$title = "Sarch Results";
	$key = $_POST['term'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
     <link rel="shortcut icon" href="../assets/images/logo/logo.png" type="image/x-icon">
     <title>Kilogrammy- <?=$key?></title>
     <meta property="og:site_name" content="Kilogrammy" />

<meta property="og:type" content="website" />

<meta property="og:url" content="https://www.kilogrammy.com" />

<meta name="twitter:card" content="summary_large_image" />

<meta name="twitter:creator" content="@The_kilogrammy" />

<meta name="twitter:site" content="@The_kilogrammy" />

<meta property="og:title" content="<?=$key?>" />

<met win="twitter:title" content="<?=$key?>" />

<meta
  property="og:description"
  content=" <?=$key?> Responsive and Seo structured website.
Cross-platform mobile app that can work on andriod and ios.
Api development with advance Technology structure.
Advance and popular framework structure of project.
Identify the problem of existing project and solve it
creatively Ui/Ux design
Logo creating
24/7/365 online Or offline support on Seo.."
/>

<meta
  name="description"
  content=" <?=$key?> Responsive and Seo structured website.
Cross-platform mobile app that can work on andriod and ios.
Api development with advance Technology structure.
Advance and popular framework structure of project.
Identify the problem of existing project and solve it
creatively Ui/Ux design
Logo creating
24/7/365 online Or offline support on Seo.."
/>

<meta
  property="og:image"
  content="../assets/images/banner/kilogrammy.png"
/>

<meta
  name="twitter:image"
  content="../assets/images/banner/kilogrammy.png"
/>
    <!-- CSS
        ============================================ -->

    <!-- Font Family CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
<style>@import url("https://fonts.googleapis.com/css?family=Red+Hat+Display:400,500,900&display=swap");


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
.contact .message, .contact .seen {
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
  0%, 75%, 100% {
    transform: translate(0, 0.25rem) scale(0.9);
    opacity: 0.5;
  }
  25% {
    transform: translate(0, -0.25rem) scale(1);
    opacity: 1;
  }
}

@keyframes typing {
  0%, 75%, 100% {
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
}</style>
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
                                <a href="../">
                                    <img src="../assets/images/logo/white-logo.png" width="160" height="48" class="img-fluid light-logo" alt="Kilogrammy Logo">
                                    <img src="../assets/images/logo/logo.png" width="160" height="48" class="img-fluid dark-logo" alt="Kilogrammy Logo">
                                </a>
                            </div>
                            <!-- navigation menu -->
                            <div class="header__navigation menu-style-four preview-menu d-none d-xl-block">
                                <nav class="navigation-menu navigation-menu--onepage navigation-menu-right">
                                    <ul>
                                        <li><a href="../service"><span>Services</span></a></li>
                                        <li>
                                            <a href="../our-works"><span>Our Works</span></a>
                                       </li>
                                        <li><a href="../blog"><span>Blog</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- header actions -->
                            <div class="header__actions--preview">
                                <div class="header__actions">
                                    <div class="header__icons-wrapper header-right-inner" id="hidden-icon-wrapper">
                                        <div class="header-button downlode-btn ml-4">
                                            <a href="../contact-us" class="ht-btn ht-btn-md"> Lets Make Deal </a>
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
                        <h2 class="breadcrumb-title">Blog Update</h2>
                       
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
                        

                  





                        <?php

$query = "SELECT * FROM blog_posts WHERE postTitle LIKE '%".$_POST['term']."%' OR description LIKE '%".$_POST['term']."%' OR content  LIKE '%".$_POST['term']."%'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0)
{
  foreach ($result as $row) {
    # code...
 
echo " <div class='col-lg-4 col-md-6  mb-30 wow move-up'>
        <!--======= Single Blog Item Start ========-->
        <div class='single-blog-item blog-grid'>
                      <!-- Post Feature End -->
            <!-- Post info Start -->
            <div class='post-info lg-blog-post-info'>
                <div class='post-meta'>
                    <div class='post-date'>
                        <span class='far fa-calendar meta-icon'></span>";

                 echo  date('jS M Y H:i:s', strtotime($row['post_date'])) .' || '. $row['auther'];
               echo    " </div>
                </div>
                <h5 class='post-title font-weight--bold'>";
                echo    " <a href='../how-to/".$row['id']."/".$row['postTitle']."' >".$row['postTitle']."</a>";
                echo    "</h5>
                <div class='post-excerpt mt-15'>";
                echo    "<p>".$row['description']." …</p>";
                echo    "</div>
                <div class='btn-text'>";
                echo    "<a href='../how-to/".$row['id']."/".$row['postTitle']."'>Read more <i class='ml-1 button-icon far fa-long-arrow-right'></i></a>";
                echo    "</div>
            </div>
            <!-- Post info End -->
        </div>
        <!--===== Single Blog Item End =========-->
    </div>";
    }
} // Post list if closed.
else
{
    echo '<div class="alert alert-warning text-center col-md-offset-4 col-md-4 col-sm-12"><h3>No Search found, try something ease! <a href="../../" > <- Back Home </a></h3></div>';
    die();
}

mysqli_close($con);

?>








                        
                        
                        <div class="col-lg-12 wow move-up">
                            <div class="ht-pagination mt-30 pagination justify-content-center">
                                <div class="pagination-wrapper">

                                    <ul class="page-pagination">
                                        <li><a class="prev page-numbers" href="#">Prev</a></li>
                                        <li><a class="page-numbers current" href="#">1</a></li>
                                        <li><a class="page-numbers" href="#">2</a></li>
                                        <li><a class="next page-numbers" href="#">Next</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--====================  Blog Area End  ====================-->











            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--one text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->





    




<?php
require '../components/footter.php';

?>