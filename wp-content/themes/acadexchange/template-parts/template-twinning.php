<?php
/*
 *  Template Name: Twinning
 */
    get_header();
?>
<main class="main-twinning">
    <h2 class="hidden">
        <?php the_title();?>
    </h2>
    <div class="tw-main-box">
        <div class="tw-content-box">
            <div class="tw-content">
                <h3 role="heading" class="tw-tt-content">
                    <?php the_field('titre-twinning');?>
                </h3>
                <p class="tw-desc-content">
                    <?php the_field('description-twinning');?>
                </p>
            </div>
        </div>
    </div>
</main>

<?php
    get_footer();
?>