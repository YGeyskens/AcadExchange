<?php
/*
 Template Name: About
 */
get_header();
?>
<main class="main-ab">
    <h2 role="heading" class="hidden">
        <?php the_title();?>
    </h2>
    <div class="ab-ab-main-box">
            <h3 class="ab-ab-tt-content">
                <?php the_field('titre1');?>
            </h3>
            <p class="ab-ab-desc-content">
                <?php the_field('text1');?>
            </p>
    </div>
    <div class="ab-suc-main-box">
        <div class="ab-suc-content-box">
            <div class="ab-suc-content">
                <h3 role="heading" class="ab-suc-tt-content">
                    <?php the_field('success1');?>
                </h3>
                <p class="ab-suc-desc-content">
                    <?php the_field('success2');?>
                </p>
            </div>
        </div>
    </div>
    <div class="main-form">
        <h2 role="heading" class="hidden">
            Formulaire de contact
        </h2>
        <div class="cont-f">
            <div class="formulaire">
                <?= apply_filters('the_content','[contact-form-7 id="34" title="Contact-about-us"]');?>
            </div>
        </div>
    </div>
    <div class="ab-quote-box">
        <p class="ab-quote-content">
            <?php the_field('quote');?>
        </p>
    </div>
    <div class="ab-list-suc-main">
        <div class="ab-hist-suc-content-content">
            <h3 class="ab-hist-suc-title-content">
                <?php the_field('history');?>
            </h3>
            <?php
            $stories = new WP_Query(
                [
                    'post_type'=>'stories',
                    'order'=> 'DESC',
                    'order_by'=>'date'
                ]
            );
            if ($stories->have_posts()):while ($stories->have_posts()):$stories->the_post();
                ?>
                <div class="cont_proj">
                    <div>
                        <h3 class="title_proj">
                            <?php the_title();?>
                        </h3>
                        <div class="excerp_proj">
                            <?php the_excerpt();?>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>

            <?php endif;?>
    </div>
</main>
<?php
    get_footer();
?>
