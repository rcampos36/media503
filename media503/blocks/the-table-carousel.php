<div class="the-table-carousel-wrapper">
    
    <div class="items">
        <?php
            
            // check if the repeater field has rows of data
            if( have_rows('the_table_carousel') ):
            
                // loop through the rows of data
                while ( have_rows('the_table_carousel') ) : the_row();
            
            ?>
                <!--TESTIMONIAL 1 -->
                    <div class="shadow-effect">
                        <p class="name"><?php the_sub_field('the_table_carousel_name'); ?></p>
                        <?php $image = get_sub_field('the_table_carousel_image'); ?>
                        <div class="carousel-image">
                            <img src="<?php echo $image['url']; ?>" />
                        </div>
                        <?php the_sub_field('the_table_carousel_quote'); ?>
                    </div>
                <!--END OF TESTIMONIAL 1 -->	
            <?php      
            
                endwhile;
            
            else :
            
                // no rows found
            
            endif;
            
        ?>
    </div>
</div>