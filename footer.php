<footer class="footer">
        <div class="container">
            <div class="footer-grid">

                <div class="footer-grid__item footer__logo">
                <?php the_custom_logo(); ?>
                </div>

                <address class="footer-grid__item footer__contacts">
                    <a href="tel:<?php the_field('phone') ?>" class="footer__contacts-phone phone-number">
                        <?php the_field('phone'); ?>
                    </a>
                    <div class="footer__contacts-address">
                    <?php the_field('address'); ?>
                    </div>
                    <a href="mailto:<?php the_field('email'); ?>" class="footer__contacts-email">
                    <?php the_field('email'); ?>
                    </a>
                </address>

                <div class="footer-grid__item footer__about-nav">
                    <h3 class="footer__title">
                        About company
                    </h3>
                    <nav class="footer__nav">
                        <a href="#" class="footer__nav-link">Maintance Plans</a>
                        <a href="#" class="footer__nav-link">Coupons</a>
                        <a href="#" class="footer__nav-link">Review</a>
                        <a href="#" class="footer__nav-link">FAQ</a>
                        <a href="#" class="footer__nav-link">Blog</a>
                        <a href="#" class="footer__nav-link">Contact</a>
                    </nav>
                </div>

                <div class="footer-grid__item footer__services-nav">
                    <h3 class="footer__title">
                        Custumer services
                    </h3>
                    <nav class="footer__nav">
                        <a href="#" class="footer__nav-link">Residential</a>
                        <a href="#" class="footer__nav-link">Commercial</a>
                        <a href="#" class="footer__nav-link">Repair</a>
                        <a href="#" class="footer__nav-link">Installation</a>
                    </nav>
                </div>

                <div class="footer-grid__item footer__help-nav">
                    <h3 class="footer__title">
                        Help and support
                    </h3>
                    <nav class="footer__nav">
                        <a href="#" class="footer__nav-link">Appliance Repair Warranty</a>
                        <a href="#" class="footer__nav-link">Cancellation Policy</a>
                        <a href="#" class="footer__nav-link">Privacy Policy</a>
                        <a href="#" class="footer__nav-link">Careers</a>
                </div>

                <div class="footer-grid__item footer__book-online-button">
                    <a href="#" class="book-online-button">
                        <div class="book-online-button__icon"></div>
                        <div class="book-online-button__text">Book online</div>
                    </a>
                </div>

                <div class="footer-grid__item footer__socials">
                    <div class="socials">

                        <a href="<?php the_field('youtube_link'); ?>" class="socials-item">
                            <svg class='socials-icon socials__youtube' width='30' height='30'>
                                <use href='#youtube'></use>
                            </svg>
                        </a>

                        <a href="<?php the_field('facebook_link'); ?>" class="socials-item">
                            <svg class='socials-icon socials__facebook' width='30' height='30'>
                                <use href='#facebook'></use>
                            </svg>
                        </a>

                        <a href="<?php the_field('pinterest_link'); ?>" class="socials-item">
                            <svg class='socials-icon socials__pinterest' width='30' height='30'>
                                <use href='#pinterest'></use>
                            </svg>
                        </a>
                        <a href="<?php the_field('instagram_link'); ?>" class="socials-item">
                            <svg class='socials-icon socials__instagram' width='30' height='30'>
                                <use href='#instagram'></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-grid__item footer__copyright">All rights reserved © 2005-2021</div>

            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>