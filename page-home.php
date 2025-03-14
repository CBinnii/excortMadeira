<?php 
	get_header();
?>

    <section class="main">
        <div class="section">
            <div class="section-banner">
                <?php 
                    $banner_title = get_field('banner_title');
                    $banner_subtitle = get_field('banner_subtitle');
                    $banner_image = get_field('banner_image');
                ?>
                <div class="banner-image" style="background-image: url('<?php echo $banner_image ?>');">
                    <div class="container">
                        <div class="banner-text">
                            <h1><?php echo $banner_title ?></h1>
                            <p class="bench"><?php echo $banner_subtitle ?></p>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <div class="mouse"></div>
                </div>
            </div>

            <?php 
                $about_title = get_field('about_title');
                $about_subtitle = get_field('about_subtitle');
            ?>
            <?php if( !empty($about_title) || !empty($about_subtitle) ): ?>
                <div class="section-about">
                    <div class="container h-100">
                        <div class="row m-0 h-100">
                            <div class="col-md-12 left">
                                <div class="text-box h-100">
                                    <?php if( !empty($about_title) ): ?>
                                        <h2><?php echo $about_title ?></h2>
                                    <?php endif; ?>

                                    <?php if( !empty($about_subtitle) ): ?>
                                        <p><?php echo $about_subtitle ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php
                $args = array(
                    'post_type' => 'post',
                    'status' => 'publish',
                    'showposts' => 4,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $more = new WP_Query( $args );

                if (!empty($more->posts)): ?>
                    <div class="section-tiktok">
                        <div class="container">
                            <h3>De nieuwste TikTok video’s</h3>

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

                            <div class="button">
                                <a href="<?php echo get_home_url(); ?>/tiktok" target="_blank" class="button-gold">
                                    Bekijk ze allemaal
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; 
            ?>

            <?php 
                $contact_title = get_field('contact_title');
                $contact_button_text = get_field('contact_button_text');
                $contact_button_link = get_field('contact_button_link');
            ?>
            <?php if( !empty($contact_title) || !empty($contact_button_text) ): ?>
                <div class="section-contact">
                    <div class="container h-100">
                        <div class="row m-0 h-100">
                            <div class="col-md-12 left">
                                <div class="text-box h-100">
                                    <?php if( !empty($contact_title) ): ?>
                                        <h3><?php echo $contact_title ?></h3>
                                    <?php endif; ?>

                                    <?php if( !empty($contact_button_text) ): ?>
                                        <div class="button">
                                            <a href="<?php echo $contact_button_link ?>" target="_blank" class="button-dark">
                                                <?php echo $contact_button_text ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( have_rows('qea', 'option') ): ?>
                <div class="section-faq">
                    <div class="faq-title">
                        <div class="container">
                            <h3>Q&A</h3>                                        
                        </div>
                    </div>

                    <div class="faq">
                        <div class="container">
                            <div class="row m-0">
                                <div class="accordion" id="accordionExample">
                                    <?php
                                        while( have_rows('qea', 'option') ) : the_row();

                                            $question = get_sub_field('question');
                                            $answer = get_sub_field('answer');
                                        ?>
                                            <div class="accordion-item">
                                                <h4 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo get_row_index(); ?>" aria-expanded="true" aria-controls="collapse<?php echo get_row_index(); ?>">
                                                        <?php echo $question ?>
                                                    </button>
                                                </h4>
                                                <div id="collapse<?php echo get_row_index(); ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <?php echo $answer ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php 
                                        endwhile; 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php
	get_footer();
?>