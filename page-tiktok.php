<?php 
	get_header();
?>

    <section class="main">
        <div class="section">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'status' => 'publish',
                    'showposts' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $more = new WP_Query( $args );

                if (!empty($more->posts)): ?>
                    <div class="section-tiktok" style="padding-top:100px;">
                        <div class="container">
                            <h3>Alle TikTok video’s</h3>

                            <div class="row m-0">
                                <?php foreach ( $more->posts as $post ): ?>
                                    <div class="col-md-3 mb-4">
                                        <a href="<?php echo $post->post_name; ?>" class="tiktok-video">
                                            <div class="content-text height">
                                                <p class="title-video"><?php echo get_the_title($post->ID); ?></p>
                                            </div>
                                            <div class="img-thumbnail">
                                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="">
                                            </div>
                                            <div class="content-text">
                                                <p><?php echo get_the_excerpt($post->ID); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; 
            ?>
        </div>
    </section>

<?php
	get_footer();
?>