<?php wp_head()?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">



<?php 
global $themify;
$themify->isPage=true;
get_template_part('index');




?>


<section>

    <div class="scroll text4">
        <div>
        <img class = 'ticker-img' src="<?php echo get_stylesheet_directory_uri(); ?>/img/LOGO.png" /><span> GET IN TOUCH </span> SXOD <span> CONTACT </span> SXOD <span> GET IN TOUCH </span> SXOD <span> CONTACT </span>
        </div>
        <div>
         SXOD <span> GET IN TOUCH </span> SXOD <span> CONTACT </span> SXOD <span> GET IN TOUCH </span> 
        </div>
    </div>
            
</section>





<?php wp_footer()?>