<?php
get_header();
?>
    <main>
        <div class="project-main">
            <div class="project-s-main">
                <h3 role="heading" class="project-title"><?php the_title();?></h3>
                <div class="proj-main-desc">
                    <?php the_field('description')?>
                </div>
                <div class="proj-main-img">
                    <img src="<?php the_field('image');?>" alt="">
                </div>
                <div class="proj-main-link">
                    <ul class="proj-main-list-link">
                        <li class="proj-main-list-link-item">
                            <a href="<?php the_field('github');?>">Voir sur Github</a>
                        </li>
                        <li class="proj-main-list-link-item">
                            <a href="<?php the_field('website');?>">Voir le site</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();
?>