<?php



    $page_meta_value = get_post_meta(get_the_ID(), 'page_meta_box', true);

    $is_news = is_category('News') || is_single();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title('|', 1, 'right'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

        <!-- Le styles -->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">


</head>

    <body>






        <div class="header">
            <div class="container">
                <div class="col-md-10 logo">
                    <h1><img class="img-responsive" src="<?= get_theme_mod( 'logo_setting', '' ) ?>" alt="logo" /></h1>
                </div>
                <div class="col-md-2 darkgrey visible-lg">
                    <p>
                        <br />
                        <strong>Have any questions?</strong><br />
                        <small>Don't hesitate to contact us</small>
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-earphone head-tel" aria-hidden="true">&nbsp;</span>
                        <span><?= get_theme_mod( 'tel', '' ) ?></span>
                        <br />
                        <span class="glyphicon glyphicon-envelope head-email" aria-hidden="true">&nbsp;</span>
                        <a href="mailto:<?= get_theme_mod( 'email', '' ) ?>"><?= get_theme_mod( 'email', '' ) ?></a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#"><?php bloginfo('name') ?> </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <?php
                    	wp_nav_menu(array(
                            'theme_location' => 'header_navigation',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'default_header_nav',
                            'link_before'=>'<span class="text-uppercase">',
                            'link_after'=>'</span>'
                        ));
                    ?>
                </div>
            </div>
        </nav>

        <!-- BANNER -->
        <div class="banner" role="tabpanel">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active"
                         data-networks="<?= get_theme_mod( "banner_logistics_networks") ?>"
                         data-media="<?= get_theme_mod( "banner_media") ?>"
                         data-ecommerce="<?= get_theme_mod( "banner_ecommerce") ?>"
                         style="background-image: url(<?= get_theme_mod("banner_main") ?>)">
                    </div> 
                      
                </div>
            </div>
            <br>
            <div class="container-fluid banner-inner">
                <div class="container">
                    <div class="banner-text">
                        <div class="slide-left">
                        <h2 class="title">
                            <?php if(isset($page_meta_value['page_title'])): ?>
                                <?= $page_meta_value['page_title'] ?>
                            <?php elseif($is_news): ?>
                                News
                            <?php endif ?>
                        </h2>
                        </div>
                        <br>
                        <p class="hightlight">
                            <?php if(isset($page_meta_value['page_hightlight'])): ?>
                                <?= $page_meta_value['page_hightlight'] ?>
                            <?php elseif($is_news): ?>
                                X2 Group In The Media
                            <?php endif ?>
                        </p>
                    </div>

                  


                </div>
            </div>
              <!-- Networks Icons --!>
            <div class="container-fluid caption">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="">
                        <div class="container visible-lg">
                        <div class="col-lg-4">
                            <a href="#networks_tab" aria-controls="networks_tab" role="tab" data-toggle="tab">
                                <div id="networks" class="tri-down">
                                    <a href="#networks_tab">
                                        <img style='height: 100%; width: 60px; object-fit: contain' src="<?= Get_template_directory_uri() ?>/images/networks/x2_logistics.png" alt="x2elite" />
                                    </a>
                                    X2 Logistics Networks
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#media_tab" aria-controls="media_tab" role="tab" data-toggle="tab">
                                <div id="media" class="tri-down">
                                  
                                   <a href="http://www.x2globalmedia.com" target="_blank">
                                        <img style='height: 100%; width: 60px; object-fit: contain' src="<?= Get_template_directory_uri() ?>/images/networks/x2global.png" alt="x2global" />
                                    </a>
                                    X2 Global Media
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#ecommerce_tab" aria-controls="ecommerce_tab" role="tab" data-toggle="tab">
                                <div id="ecommerce" class="tri-down">
                                      <a href="http://www.onemonocle.com" target="_blank">
                                      <img style='height: 100%; width: 60px; object-fit: contain' src="<?= Get_template_directory_uri() ?>/images/networks/one_monocale.png" alt="one_monocle" />
                                    </a>
                                    One Monocle
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>
<div class="tab-pane" role="tabpanel" id="networks_tab">
                        <div class="container visible-lg text-center">
                            <div class="network-logo col-lg-10ths">
                                <p>
                                    <a href="http://www.x2elite.com" target="_blank">
                                        <img src="<?= Get_template_directory_uri() ?>/images/networks/x2elite.png" alt="x2elite" />
                                    </a>
                                </p>
                            </div>
                            <div class="network-text col-lg-10ths">
                                <span>Professional Global Logistics</span>
                            </div>
                            <div class="network-logo col-lg-10ths">
                                <p>
                                    <a href="http://www.x2projects.com" target="_blank">
                                        <img src="<?= Get_template_directory_uri() ?>/images/networks/x2projects.png" alt="x2projects" />
                                    </a>
                                </p>
                            </div>
                            <div class="network-text col-lg-10ths">
                                <span>Independent Projects Network</span>
                            </div>
                            <div class="network-logo col-lg-10ths">
                                <p>
                                    <a href="http://www.x2coldchain.com" target="_blank">
                                        <img src="<?= Get_template_directory_uri() ?>/images/networks/x2coldchain.png" alt="x2coldchain" />
                                    </a>
                                </p>
                            </div>
                            <div class="network-text col-lg-10ths">
                                <span>Temperature Sensitive Logistics</span>
                            </div>
                            <div class="network-logo col-lg-10ths">
                                <p>
                                    <a href="http://www.x2movers.com" target="_blank">
                                        <img src="<?= Get_template_directory_uri() ?>/images/networks/x2movers.png" alt="x2movers" />
                                    </a>
                                </p>
                            </div>
                            <div class="network-text col-lg-10ths">
                                <span>Professional Moving Services</span>
                            </div>
                            <div class="network-logo col-lg-10ths">
                                <p>
                                    <a href="http://www.x2critical.com" target="_blank">
                                        <img src="<?= Get_template_directory_uri() ?>/images/networks/x2critical.png" alt="x2critical" />
                                    </a>
                                </p>
                            </div>
                            <div class="network-text col-lg-10ths">
                                <span>Time<br />Critical Logistics</span>
                            </div>
                        </div>
                    </div>


                    <!-- Networks Tab --!>
                    
        <div class="container-fluid">
            <div class="container">
