<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
  
  <div class="intro">
        <div class="container">
            <h1 class="intro__title"><?php the_field('title'); ?></h1>
            <h3 class="intro__subtitle"><?php the_field('subtitle'); ?></h3>
            <?php the_field('services'); ?>
            <!-- <ul class="intro__list">
                <li class="intro__list-item">
                    Repair of any complexity of all brands of equipment
                </li>
                <li class="intro__list-item">
                    Affordable rates for various appliance repairs
                </li>
                <li class="intro__list-item">
                    Licensed, trained techs with years of experience
                </li>
                <li class="intro__list-item">
                    Same/next-day appointment
                </li>
            </ul> -->
            <a href="#">
                <div class="request-call-button">
                    <svg class="request-call-button__icon" width="15" height="15">
                        <use href="#phone"></use>
                    </svg>
                    <div class="request-call-button__text">Request a call</div>
                </div>
            </a>
        </div>
        <img src="<?php the_field('intro_image'); ?>" class="intro__img"></img>
    </div>

    <?php get_footer(); ?>