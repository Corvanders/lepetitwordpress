<?php get_header(); ?>




<!--La boucle !!!!-->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<ul>
<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<?php the_post_thumbnail(); ?>
<h3><?php the_category() ?></h3>
<small><?php the_time('F jS, Y'); ?></small>
<?php the_author() ?>
<?php the_excerpt() ?>
<p>
    <a href="<?php the_permalink() ?>" class="container">Voir plus</a>
<?php endwhile; else: ?>
</ul>
    <p>Pas d'articles correspondants.</p>
    <?php endif; ?>
<!--Fin de la bouclette-->

<?php get_footer(); ?>