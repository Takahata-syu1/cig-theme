<div class="burger-btn-bg">
    <div class="burger-btn">
        <!-- ③ハンバーガーボタン -->
        <span class="bar bar_top"></span>
        <span class="bar bar_mid"></span>
        <span class="bar bar_bottom"></span>
    </div>
</div>
<!--burger-btn-bg-->


<div class="burger-nav">
    <nav class="burger-nav__wrapper">
        <!-- ②ナビゲーションメニュー -->
        <div class="burger-nav__wrapper__content">
            <div class="header__logo">
                <!--- サイトロゴ --->
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <img class="change arche-img" src="<?php echo get_template_directory_uri(); ?>/img/header-arche_pc.svg">
            <div class="body">

                <figure class="golf-ball-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/golf-ball-img.png">
                </figure>

                <div class="list-outer">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/simulator-golf/">
                                <span>シミュレーターゴルフ紹介</span>
                            </a>
                        </li>
                        <li><a href="<?php echo home_url(); ?>">
                                <span>施設案内</span>
                            </a>
                        </li>
                        <li><a href="<?php echo home_url(); ?>/price-guide/">
                                <span>利用料金</span>
                            </a>
                        </li>
                        <li><a href="<?php echo home_url(); ?>/company/">
                                <span>会社概要</span>
                            </a>
                        </li>
                        <li><a href="<?php echo home_url(); ?>/contect/">
                                <span>お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                    <figure class="yashinoki-left yashinoki">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/burger-nav-yashinoki-img.png">
                    </figure>
                    <figure class="yashinoki-right yashinoki">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/burger-nav-yashinoki-img.png">
                    </figure>
                </div>

                <div class="reservation-wrapper">
                    <a href="">WEB予約はこちら</a>
                </div><!--reservation-wrapper-->
            </div>
            <!--body-->
        </div>
        <!--inner-->
    </nav>
    <!--sp-nav-wrapper--->
</div>
