<!DOCTYPE html>
<html lang="en">
   
    <?php 
    get_header();
    ?>
        

        <article class="content-wrap">

            <?php
                if( have_posts() ){
                    while( have_posts() ){

                        the_post();
                        
                        get_template_part( 'template-parts/content' , 'article' );
                        
                    }
                }

            ?>




        </article>

    <?php
    get_footer();
    ?>

        

        
    </body>
</html>