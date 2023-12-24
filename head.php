<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<div id="my_switcher" class="my_switcher">
    <ul>
        <li>
            <a href="javascript: void(0);" data-theme="light" class="setColor light">
                <span title="Light Mode"><i class="fas fa-sun"></i></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                <span title="Dark Mode"><i class="fas fa-moon"></i></span>
            </a>
        </li>
    </ul>
</div>
<div class="main-content">
    <!-- Start Header -->
    <?php
   
  require("dbcon.php");
  $sql = "SELECT `id`, `link`, `desc`, `date` FROM `wallpaper` ORDER BY RAND() LIMIT 1;";
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);
  if ($count > 0) {
      // Output the details within a table with Bootstrap styes
      while ($data = mysqli_fetch_assoc($res)) {
          $link = $data['link'];
          $desc = $data['desc'];
          echo "<img src='wallpaper/$link' alt='$desc' style='width:100%;height: 35%;position: absolute;object-fit:cover;'>";
      }
  }
  ?>

    <header class="header axil-header header-style-3  header-light    ">
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="logo">
                            <a href="https://feoux.com/" title="truely" rel="home">
                                <img class="dark-logo" src="assets/content/themes/blogar/assets/images/logo/logo.png"
                                    alt="feoux">
                                <img class="light-logo" src="assets/content/themes/blogar/assets/images/logo/logo.png"
                                    alt="feoux">
                            </a>

                        </div>
                        <!-- End Logo-->
                    </div>
                    <div class="logo">
                        <?php
                                    require("dbcon.php");
                                    $sql = "SELECT `id`, `update`, `date` FROM `wishes` ORDER BY id DESC LIMIT 1";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            $update = $data['update'];
                                            echo "<span class='wishes'>$update</span>";
                                        }
                                    }
                      
      ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row justify-content-center justify-content-xl-between align-items-center">
                    <div class="col-md-6 col-sm-3 col-4 col-xl-8">
                        <div class="mainmenu-wrapper d-none d-xl-block">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul id="main-menu" class="mainmenu">
                                    <li id="menu-item-675"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page">
                                        <a href="#">Latest </a>
                                        <ul class="megamenu-sub-menu">
                                            <li class="megamenu-item">
                                                <div data-elementor-type="wp-post" data-elementor-id="668"
                                                    class="elementor elementor-668" data-elementor-settings="[]">
                                                    <div class="elementor-inner">
                                                        <div class="elementor-section-wrap">
                                                            <section
                                                                class="elementor-section elementor-top-section elementor-element elementor-element-a92f387 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                data-id="a92f387" data-element_type="section">
                                                                <div
                                                                    class="elementor-container elementor-column-gap-no">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0b79c7"
                                                                            data-id="a0b79c7"
                                                                            data-element_type="column">
                                                                            <div
                                                                                class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-4b9ba68 elementor-widget elementor-widget-blogar-Vertical-tab-with-post"
                                                                                        data-id="4b9ba68"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="blogar-Vertical-tab-with-post.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <!-- Start Banner Area -->
                                                                                            <div
                                                                                                class="vertical-tab-with-post-area">
                                                                                                <!-- Start vertical Nav  -->
                                                                                                <div
                                                                                                    class="axil-vertical-nav">
                                                                                                    <!-- Start Tab Button  -->
                                                                                                    <ul
                                                                                                        class="vertical-nav-menu">
                                                                                                        <li
                                                                                                            class="vertical-nav-item active">
                                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                                href="#tab-4b9ba681"><span
                                                                                                                    class="hover-flip-item"><span
                                                                                                                        data-text="Music">Music</span></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="vertical-nav-item ">
                                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                                href="#tab-4b9ba685"><span
                                                                                                                    class="hover-flip-item"><span
                                                                                                                        data-text="Sports">Sports</span></span></a>
                                                                                                        </li>

                                                                                                        <li
                                                                                                            class="vertical-nav-item ">
                                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                                href="#tab-4b9ba683"><span
                                                                                                                    class="hover-flip-item"><span
                                                                                                                        data-text="Movies">Movies</span></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="vertical-nav-item ">
                                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                                href="#tab-4b9ba684"><span
                                                                                                                    class="hover-flip-item"><span
                                                                                                                        data-text="News">News</span></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="vertical-nav-item ">

                                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                                href="#tab-4b9ba682"><span
                                                                                                                    class="hover-flip-item"><span
                                                                                                                        data-text="Gaming">Gaming</span></span></a>
                                                                                                        </li>



                                                                                                    </ul>
                                                                                                    <!-- End Tab Button  -->
                                                                                                </div>
                                                                                                <!-- Start vertical Nav  -->
                                                                                                <!-- Start vertical Menu  -->
                                                                                                <div
                                                                                                    class="axil-vertical-nav-content">
                                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                                        id="tab-4b9ba681"
                                                                                                        style="display: block;">
                                                                                                        <div
                                                                                                            class="axil-vertical-single">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <!-- Start Post List  -->
                                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%Music%' ORDER BY `id` DESC LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];

                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='category/$cat/'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                                        id="tab-4b9ba682">
                                                                                                        <div
                                                                                                            class="axil-vertical-single">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <?php
           require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%Sports%' ORDER BY `id` DESC LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];

                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='category/$cat/'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                                                <!-- End Post List  -->
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                                        id="tab-4b9ba683">
                                                                                                        <div
                                                                                                            class="axil-vertical-single">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%Film%' ORDER BY `id` DESC LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];

                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='category/$cat/'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                                        id="tab-4b9ba684">
                                                                                                        <div
                                                                                                            class="axil-vertical-single">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%News%' ORDER BY `id` DESC LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];
                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='category/$cat/'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                                        id="tab-4b9ba685">
                                                                                                        <div
                                                                                                            class="axil-vertical-single">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%Gaming%' ORDER BY `id` DESC LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];

                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='category/$cat/'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                                </div>
                                                                                                <!-- End vertical Menu  -->
                                                                                            </div>
                                                                                            <!-- End Banner Area -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-437"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-437 axil-post-type-page has-dropdown is-active  is-active">
                                        <a href="ask-now/">Ask Feoux</a>
                                    </li>
                                    <li id="menu-item-280"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page">
                                        <a href="extra/Help/">Help</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <!-- Start Hamburger Menu  -->
                        <div class="text-left d-block d-xl-none">
                            <div class="hamburger-menu d-inline-block text-left">
                                <div class="hamburger-inner">
                                    <div class="icon"><i class="fas fa-bars"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Hamburger Menu  -->
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-9 col-8">
                        <div class="header-search d-flex align-items-center justify-content-xl-end justify-content-end">
                            <form id="header-search-1" action="search/" method="get" class="blog-search">
                                <div class="axil-search form-group">
                                    <button type="submit" name="search" class="search-button"><i
                                            class="bi bi-search"></i></button>
                                    <input type="text" name="input" title="Type to search Anything" class="form-control"
                                        placeholder="Search ..." autocomplete="off" value="" />
                                </div>
                            </form>
                            <?php
                               
                                 if (!isset($_SESSION['username'])) {
                                     echo'<ul class="metabar-block">
                                    <li class="icon"><a href="my-account/" title="My Account"><span class="mini-cart"><i class="fas fa-user"></i></span></a></li>
                                </ul>';
                                 } else {
                                     require("dbcon.php");
                                     $username = $_SESSION["username"];
                                     $sql = "SELECT `id`,`avatar` FROM `user` WHERE `username`='$username' or email='$username'";
                                     $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                     if ($count > 0) {
                                         // Output the details within a table with Bootstrap styes
                                         while ($data = mysqli_fetch_assoc($res)) {
                                             $userid = $data['id'];
                                             $avatar = $data['avatar'];
                                             echo"<ul class='metabar-block'>
                                            <li class='icon'><a href='my-account/' title='My Account' style='background:transparent'><span class='mini-cart'><img src='my-account/$avatar' alt='$username' title='$username' style='width:100%;height:100%;object-fit:cover;margin:none'></span></a></li>
                                        </ul>";
                                         }
                                     }
                                 }
                                ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <style>
    .mainmenu-nav ul.mainmenu>li>a {
        color: white;
    }
    </style>
    <!-- Start Header -->
    <!-- Start Mobile Menu Area  -->
    <div class="popup-mobilemenu-area">
        <div class="inner">
            <div class="mobile-menu-top">
                <div class="logo">
                    <a href="./" title="feoux" rel="home">
                        <img class="dark-logo" src="assets/content/themes/blogar/assets/images/logo/logo.png"
                            alt="feoux">
                        <img class="light-logo" src="assets/content/themes/blogar/assets/images/logo/logo.png"
                            alt="feoux">
                    </a>
                </div>
                <div class="mobile-close">
                    <div class="icon">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
            <nav class="menu-item">
                <ul id="mobile-menu" class="mainmenu-item">
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper menu-item-has-children has-children axil-post-type-page">
                        <a href="#">Latest </a>
                        <ul class="megamenu-sub-menu ">
                            <li class="megamenu-item">
                                <div data-elementor-type="wp-post" data-elementor-id="668"
                                    class="elementor elementor-668" data-elementor-settings="[]">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-a92f387 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="a92f387" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0b79c7"
                                                            data-id="a0b79c7" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-4b9ba68 elementor-widget elementor-widget-blogar-Vertical-tab-with-post"
                                                                        data-id="4b9ba68" data-element_type="widget"
                                                                        data-widget_type="blogar-Vertical-tab-with-post.default">
                                                                        <div class="elementor-widget-container">
                                                                            <!-- Start Banner Area -->
                                                                            <div class="vertical-tab-with-post-area">
                                                                                <!-- Start vertical Nav  -->
                                                                                <div class="axil-vertical-nav">
                                                                                    <!-- Start Tab Button  -->
                                                                                    <ul class="vertical-nav-menu">
                                                                                        <li
                                                                                            class="vertical-nav-item active">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#tab-4b9ba681"><span
                                                                                                    class="hover-flip-item"><span
                                                                                                        data-text="Music">Music</span></span></a>
                                                                                        </li>
                                                                                        <li class="vertical-nav-item ">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#tab-4b9ba685"><span
                                                                                                    class="hover-flip-item"><span
                                                                                                        data-text="Sports">Sports</span></span></a>
                                                                                        </li>

                                                                                        <li class="vertical-nav-item ">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#tab-4b9ba683"><span
                                                                                                    class="hover-flip-item"><span
                                                                                                        data-text="Movies">Movies</span></span></a>
                                                                                        </li>
                                                                                        <li class="vertical-nav-item ">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#tab-4b9ba684"><span
                                                                                                    class="hover-flip-item"><span
                                                                                                        data-text="News">News</span></span></a>
                                                                                        </li>
                                                                                        <li class="vertical-nav-item ">

                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#tab-4b9ba682"><span
                                                                                                    class="hover-flip-item"><span
                                                                                                        data-text="Gaming">Gaming</span></span></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <!-- End Tab Button  -->
                                                                                </div>
                                                                                <!-- Start vertical Nav  -->
                                                                                <!-- Start vertical Menu  -->
                                                                                <div class="axil-vertical-nav-content">
                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                        id="tab-4b9ba681"
                                                                                        style="display: block;">
                                                                                        <div
                                                                                            class="axil-vertical-single">
                                                                                            <div class="row">
                                                                                                <!-- Start Post List  -->
                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category`like '%Music%' ORDER BY `id` DESC LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $date = $data['date'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];
                    $channell = str_ireplace(' ', '-', $channel);
                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='$link'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                        id="tab-4b9ba682">
                                                                                        <div
                                                                                            class="axil-vertical-single">
                                                                                            <div class="row">
                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%Sports%' ORDER BY `id` DESC  LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $date = $data['date'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];
                    $channell = str_ireplace(' ', '-', $channel);

                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='$link'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                                <!-- End Post List  -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                        id="tab-4b9ba683">
                                                                                        <div
                                                                                            class="axil-vertical-single">
                                                                                            <div class="row">
                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%Film%' ORDER BY `id` DESC  LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $date = $data['date'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];
                    $channell = str_ireplace(' ', '-', $channel);

                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='$link'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                        id="tab-4b9ba684">
                                                                                        <div
                                                                                            class="axil-vertical-single">
                                                                                            <div class="row">
                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%News%' ORDER BY `id` DESC  LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $date = $data['date'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];
                    $channell = str_ireplace(' ', '-', $channel);

                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='$link'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                    <!-- Start Tab Content Wrapper  -->
                                                                                    <div class="axil-vertical-inner tab-content"
                                                                                        id="tab-4b9ba685">
                                                                                        <div
                                                                                            class="axil-vertical-single">
                                                                                            <div class="row">
                                                                                                <?php
            require("dbcon.php");
            $sql = "SELECT * FROM `post` WHERE `category` like '%Gaming%' ORDER BY `id` DESC  LIMIT 4";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            if ($count > 0) {
                // Output the details within a table with Bootstrap styes
                while ($data = mysqli_fetch_assoc($res)) {
                    $channel = $data['channel'];
                    $channell = str_ireplace(' ', '-', $channel);
                    $title = $data['title'];
                    $desc = $data['desc'];
                    $date = $data['date'];
                    $img = $data['image'];
                    $cat = $data['category'];
                    $link = $data['link'];
                    $channell = str_ireplace(' ', '-', $channel);
                    echo "<div class='col-lg-3'>
                <div class='content-block image-rounded'>
                    <!-- Start Post Thumbnail  -->
                    <div class='post-thumbnail mb--20'>
                        <a href='$link'>
<img width='390' height='260' src='channel/$img' class='attachment-axil-tab-post-thumb size-axil-tab-post-thumb wp-post-image' alt='$title' loading='lazy' /></a>
                    </div>
                    <!-- End Post Thumbnail  -->
                    <div class='post-content'>
                        <div class='post-cat'>
                            <div class='post-cat-list'>
                                <a class='hover-flip-item-wrapper' href='$link'>
<span class='hover-flip-item'><span data-text='$cat'>$cat</span></span>
</a> </div>
                        </div>
                        <h5 class='title'><a href='$link'>$title</a></h5>
                    </div>
                </div>
            </div>
            <!-- End Post List  -->";
                }
            }
            ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End Tab Content Wrapper  -->
                                                                                </div>
                                                                                <!-- End vertical Menu  -->
                                                                            </div>
                                                                            <!-- End Banner Area -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-437 axil-post-type-page">
                        <a href="ask-now/">Ask Feoux</a>

                    </li>
                    <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-280 axil-post-type-page ">
                        <a href="extra/Help/">Help</a>

                    </li>
                    <style>
                    .axil-header {
                        background: transparent;
                    }

                    .axil-header.header-style-3 .header-bottom {
                        border-top: 0pc;
                    }

                    .search-button {
                        background: transparent;
                    }
                    </style>
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page ">
                        <a href="extra/privacy-policy/">Privacy Policy</a></li>

                </ul>
            </nav>
        </div>
    </div>
    <!-- End Mobile Menu Area  -->