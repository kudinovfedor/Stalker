</div><!-- .page-wrapper end-->

<footer class="footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 footer-logo">
                    <div class="footer-logo-desc"><?php bloginfo('description'); ?></div>
                </div>
                <div class="col-md-8 col-lg-6 footer-info">
                    <?php if (has_phones()) { ?>
                        <ul class="phone">
                            <?php foreach (get_phones() as $phone) { ?>
                                <li class="phone-item">
                                    <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>"
                                       class="phone-number">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/kyivstar-icon.png' ?>"
                                             alt="kyivstar icon">
                                        <?php echo esc_html($phone); ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <?php if (has_social()) { ?>
                        <ul class="social">
                            <?php foreach (get_social() as $social) { ?>
                                <li class="social-item">
                                    <a href="<?php echo esc_attr(esc_url($social['url'])); ?>" class="social-link"
                                       target="_blank">
                                        <i class="<?php echo esc_attr($social['icon']); ?>" aria-hidden="true"
                                           aria-label="<?php echo esc_attr($social['text']); ?>"></i>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
                <div class="col-md-12 col-lg-3 footer-informer">
                    <div id="SinoptikInformer" style="width:240px;" class="SinoptikInformer type1"><div class="siHeader"><div class="siLh"><div class="siMh"><a onmousedown="siClickCount();" class="siLogo" href="https://sinoptik.ua/" target="_blank" rel="nofollow" title="Погода"> </a>Погода <span id="siHeader"></span></div></div></div><div class="siBody"><a onmousedown="siClickCount();" href="https://sinoptik.ua/погода-киев" title="Погода в Киеве" target="_blank"><div class="siCity"><div class="siCityName"><span>Киев</span></div><div id="siCont0" class="siBodyContent"><div class="siLeft"><div class="siTerm"></div><div class="siT" id="siT0"></div><div id="weatherIco0"></div></div><div class="siInf"><p>влажность: <span id="vl0"></span></p><p>давление: <span id="dav0"></span></p><p>ветер: <span id="wind0"></span></p></div></div></div></a><div class="siLinks">Погода на 10 дней от <a href="https://sinoptik.ua/погода-киев/10-дней" title="Погода на 10 дней" target="_blank" onmousedown="siClickCount();">sinoptik.ua</a></div></div><div class="siFooter"><div class="siLf"><div class="siMf"></div></div></div></div><script type="text/javascript" charset="UTF-8" src="//sinoptik.ua/informers_js.php?title=4&amp;wind=3&amp;cities=303010783&amp;lang=ru"></script>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <?php _e('Developed by', 'brainworks') ?>
            <a href="https://brainworks.com.ua/" target="_blank">BRAIN WORKS</a>
            &copy; <?php echo date('Y'); ?>
        </div>
    </div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
