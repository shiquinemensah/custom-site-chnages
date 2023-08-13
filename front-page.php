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
                        the_content();
                        
                    }
                }

            ?>

        </article>

    <?php
    get_footer();
    ?>

        

        
    </body>
</html>