<?php get_header(); ?>
<div class="main-content">
    <div class="container">
        <section>
            <div class="row">
                <?php

                            // La Query
                $cv_the_query = new WP_Query( 'page_id=28' );

                // Il Loop
                while ( $cv_the_query->have_posts() ) :
                    $cv_the_query->the_post(); ?>


                    <?php $cv_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'cv_big');?>

                    <div class="home-hero-banner" style="background-image: url(<?php echo $cv_image_attributes[0]; ?>);"></div>
                    <?php endwhile;

                // Ripristina Query & Post Data originali
                wp_reset_query();
                wp_reset_postdata(); ?>
                <div class="col-12 col-hero-tab-menu">
                    <div class="hero-tab-menu">
                        <ul class="nav nav-tabs" id="tab-menu-hero" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Find-tab" data-toggle="tab" href="#Find" role="tab" aria-controls="Find" aria-selected="true"><?php esc_html_e( 'Find a car', 'cv' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Value-tab" data-toggle="tab" href="#Value" role="tab" aria-controls="Value" aria-selected="false"><?php esc_html_e( 'Value my car', 'cv' ); ?></a>
                            </li>
                         </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane show active" id="Find" role="tabpanel" aria-labelledby="Find-tab">

                                <form>
                                   <div class="row-tab-form-hero">
                                        
                                        <div class="custom-select">
                                        <span><i class="fas fa-chevron-down animate-fast"></i></span>
                                            <select>
                                                <option value="0">Select car:</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                           
                                        </div>
                                    </div>





                                
                                    <button type="submit" class="btn btn-primary button-orange"><p><i class="fas fa-search"></i><?php esc_html_e( '29 Cars', 'cv' ); ?></p></button>
                                </form>



                            
                            </div>
                            <div class="tab-pane" id="Value" role="tabpanel" aria-labelledby="Value-tab">
                            DASDSADASSDADASDSADASSDADASDSADASSDADASDSADASSDADASDSADASSDADASDSADASSDADASDSADASSDA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          
    </div>

</div>




<?php get_footer(); ?>
