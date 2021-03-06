<?php 
get_header();
if( have_posts() ) : while ( have_posts() ) : the_post(); 
$tag = \Admin\View::get_tag();
$reading_time = \Admin\View::count_words();
?>

<!-- IMAGE -->
<figure class="text-center">
    <?php the_post_thumbnail(); ?>
</figure>
<!-- TITLE -->
<div class="container">
    <div class="row mx-auto py-4">
        <div class="col-12 d-flex justify-content-center flex-column align-items-center">
            <p class="text-center">by <span class="text-secondary"><?php the_author() ?></span></p>
            <h1 class="text-center text-primary"> <?php the_title() ?></h1>
        </div>
    </div>
<!-- SEPARATOR -->
<div class="row mx-auto">
    <div class="col-12">
        <hr class="bg-secondary">
    </div>
</div>
    <div class="row mx-auto">    
        <!-- Tag -->
        <div class="col-2">
            <em class="text-secondary"><?= $tag ?></em>
        </div>  
        <!-- Date -->
        <div class="col-3">
            <em class="text-muted text-left"><?= the_date() ?></em>
        </div>
        <!-- Reading Time -->
        <div class="offset-4 col-3">
            <em class="text-muted text-sm-center text-md-right text-lg-right text-xl-right">Reading Time : <?= $reading_time ?> min</em>
        </div>
    </div>
<!-- CONTENT -->
    <div class="row mx-auto py-5" id="article-content">
        <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <p><?= the_content() ?></p>
        </div>
    </div>

<div class="row mx-auto pt-2">
    <div class="col-10 offset-1 d-flex flex-column">
    <?php endwhile; endif;
    if (comments_open() || get_comments_number()) 
    {
        comments_template();
    }
    ?>
    </div>
</div>


<div class="row mx-auto pt-5">
        <div class="col-6 text-left"> <?php previous_post_link( '← <strong>%link</strong>' ); ?></div>
        <div class="col-6 text-right"><?php next_post_link( '<strong>%link</strong> →' ); ?></div>
</div>




<?php get_footer(); ?>
