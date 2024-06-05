<?php get_header(); ?>




<div class="content area">
    <div class="man">
        <div class="container">
            <div class="row">
                <h1>Bem -vindo ao site de origamis</h1>

                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();
                ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <div><?php the_content(); ?></div>
                        </article>
                <?php
                        endwhile;
                    else:
                ?>
                    <p>Nothing to display.</p>
                <?php
                   endif; 
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>