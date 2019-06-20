<?php
/*
 Template Name: Donnation & Demand
 */
    get_header();
?>
<main class="main-dd">
    <h2 role="heading" class="hidden">
        <?php the_title();?>
    </h2>
    <div class="dd-don-main-box">
        <div class="dd-don-content-box">
            <div class="dd-don-content">
                <h3 role="heading" class="dd-don-tt-content">
                    <?php the_field('titre');?>
                </h3>
                <p class="dd-don-desc-content">
                    <?php the_field('text1');?>
                </p>
                <a href="#">Donation</a>
            </div>
        </div>
    </div>
    <div class="dd-quote-box">
        <p class="dd-quote-content">
            <?php the_field('quote1');?>
        </p>
    </div>
    <div class="dd-dem-main-box">
        <div class="dd-dem-content-box">
            <div class="dd-dem-content">
                <h3 role="heading" class="dd-dem-tt-content">
                    <?php the_field('titre2');?>
                </h3>
                <p class="dd-dem-desc-content">
                    <?php the_field('text2');?>
                </p>
                <a href="#">Make a demand</a>
            </div>
        </div>
    </div>
</main>

<?php
    get_footer();
?>
