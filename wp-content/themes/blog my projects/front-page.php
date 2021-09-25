<?php 
get_header( );?>

<?php echo do_shortcode('[smartslider3 slider="2"]');?>

<h1 class="actu">Upgrades</h1>
    <ul class="lista-proyect">
        <?php
        $args = array(
            'post_type' => 'proyect_servicios',
            'posts_per_page' => 6
        );
        $clases = new WP_Query($args);
        while($clases->have_posts()): $clases->the_post();?>
        <div class="container">
        <div class="card">
        <div class="img-box">
        <?php the_post_thumbnail('cajas' );?>
        </div>
        <div class="content">
        <a href="<?php the_permalink();?>">
        <h3> <?php the_title( );?></h3>
        </a>
     </div>
     </div>
    </div>

        <?php endwhile; wp_reset_postdata(  );?>
        <div class="see">
      <a href="#" class="">see more</a>
  </div>
  
  <ul class="lista-noticias">
  <h1 class="actu">Noticias</h1>
  
        <?php
        $args = array(
            'post_type' => 'noticias',
            'posts_per_page' => 4
        );
        $clases = new WP_Query($args);
        while($clases->have_posts()): $clases->the_post();?>

        <li class="clase card gradient">
        <?php the_post_thumbnail('mediano' );?>
        <div class="noticias">
        
        <h3 class="titulo-noticia"> <?php the_title( );?></h3>
        <p><?php the_content(); /*para traer el contenido de la pagina de manera dinamica*/?></p>
        </a>
     </div>
        </li>

        <?php endwhile; wp_reset_postdata(  );?>
    </ul>
    </ul>


    <div class="art">
    
    <?php while(have_posts()): the_post();?>
    <a href="<?php the_permalink();?>">
    <div class="imgArticulos">
        <?php the_post_thumbnail('cajas' );?>
        <h2 class="articulos"> <?php the_title();?></h2>
    <div class="comment">
        <?php 
        $args = array(
            'post_id' => get_the_ID(),   // Use post_id, not post_ID
                'count'   => true // Return only the count
        );
        $comments_count = get_comments( $args );
        echo $comments_count . " comments";
        ?>
</div>
    </div>

    
<?php endwhile; ?>
</div>
<?php get_footer( );?>