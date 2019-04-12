<?php $page=basename($_SERVER['REQUEST_URI']);?>
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="social-links">
                    <a href="https://twitter.com/Protyles_" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/DrugU.in/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.top -->

<!-- Header -->
<header id="header" class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="header-wrap clearfix">
                <div class="col-md-6">
                    <div id="logo" class="logo">
                        <a href="<?php echo APP_ROOT_URL?>" rel="home">
                            <img src="<?php echo APP_ROOT_URL?>images/logo.png" title="drugu-logo" alt="drugu-logo-online medicine-Drug Drugu-Branded Drugs">
                        </a>
                    </div><!-- /.logo -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div>
                <div class="col-md-6 pos-static">
                    <div class="nav-wrap has-megamenu">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">

                                <li <?php echo $page=='drugu' || $page=='' ? 'class="home"': 'class="home"'; ?> >
                                    <a href="<?php echo APP_ROOT_URL;?>drugu">Home</a>
                                </li>
                                <li <?php echo $page=='faq'? 'class="home"': ''; ?> >
                                    <a href="<?php echo APP_ROOT_URL;?>faq">FAQ</a>
                                </li>
				<li <?php echo $page=='blog'? 'class="home"': ''; ?> >
                                    <a href="<?php echo APP_ROOT_URL;?>blog">Blog</a>
                                </li>
                                
                                <!--<li><a href="magazine.php">Magazine</a></li>
                                <li><a href="healthcare.php">Health Care</a></li>
                                <li><a href="community.php">Community</a></li>-->

                                <?php

                                    if(isset($_SESSION['user-id']))
                                    {
                                        if($page=="my-prescriptions") $user_menu1='class="home"' ; else $user_menu1='' ;
                                        echo '<li '.$user_menu1.'><a href="'.APP_ROOT_URL.'my-prescriptions">My Prescriptions</a></li>';

                                        if($page=="user-profile") $user_menu2='class="home"' ; else $user_menu2='' ;
                                        echo '<li '.$user_menu2.'><a href="'.APP_ROOT_URL.'user-profile">Profile</a></li>';

                                        echo '<li><a href="'.APP_ROOT_URL.'logout">Logout</a></li>';
                                    }
                                    elseif(isset($_SESSION['doctor-id']))
                                    {
                                        if($page=="doctor-prescriptions") $doctor_menu1='class="home"' ; else $doctor_menu1='' ;
                                        echo '<li '.$doctor_menu1.'>
                                                <a href="'.APP_ROOT_URL.'doctor-prescriptions">Write Prescriptions</a>
                                              </li>';

                                        if($page=="doctor-profile" || $page=="doctor-profile-edit" ||$page=="patient-history-doctor")
                                            $doctor_menu2='class="home"';
                                        else $doctor_menu2='' ;
                                        echo '<li '.$doctor_menu2.'><a href="'.APP_ROOT_URL.'doctor-profile">Profile</a></li>';

                                        echo '<li><a href="'.APP_ROOT_URL.'logout">Logout</a></li>';
                                    }
                                    elseif(isset($_SESSION['pharmacist-id']))
                                    {
                                        if($page=="pharmacist-profile") $pharmacist_menu1='class="home"' ; else $pharmacist_menu1='' ;
                                        echo '<li '.$pharmacist_menu1.'><a href="'.APP_ROOT_URL.'pharmacist-profile">Profile</a></li>';

                                        echo '<li><a href="'.APP_ROOT_URL.'logout">Logout</a></li>';
                                    }
                                    else
                                    {
                                        if($page=="register"||$page=="user-register"||$page=="doctor-register"||$page=="pharmacist-register") $menu='class="home"' ; else $menu='' ;
                                        echo '<li '.$menu.'><a href="'.APP_ROOT_URL.'register">Register</a></li>';
                                        if($page=="login") $menu='class="home"' ; else $menu='' ;
                                        echo '<li '.$menu.'><a href="'.APP_ROOT_URL.'login">Login</a></li>';
                                    }
                                ?>


                                <!--<li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>-->
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->

                </div>
            </div><!-- /.header-inner -->
        </div><!-- /.row -->
    </div>
</header><!-- /.header -->