<?php
    while(have_posts(  )): the_post(  );
        ?>

    <h1 class="text-center texto-primario"><?php the_title( ); ?></h1>
    
    <?php 
    //Revisar si el custom post type es clases
    if(get_post_type() === 'gymfitness_clases'){
        $hora_inico = get_field('hora_inico');
        $hora_fin = get_field('hora_fin');
    
    ?>
        <p class="informacion-clase"><?php the_field('dias_de_clase');?> - <?php echo $hora_inico ?> a <?php echo $hora_fin;?></p>
<?php  } ?>
    <?php the_content( );?>
    
    <?php endwhile;?>