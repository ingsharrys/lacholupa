<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    
    <meta property="og:type" content="article" />
    <meta property="og:title" content="La Cholupa" />
    <meta property="og:description" content="Medio digital de expresión cultural popular huilense independiente, moderno y de calidad" />
    <meta property="og:image" content="https://lacholupa.com/img/logo.jpg" />
    <meta property="og:url" content="https://lacholupa.com/" />
    <meta property="og:site_name" content="La Cholupa" />
    <?php include 'header.php'; require_once('editor/wp-load.php'); ?>
    <script type="text/javascript"> $(window).load(function() { $('#videopromo').modal('show');}); </script>


              <!-- Modal 
            <div class="modal fade" id="videopromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content"
                     style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body"
                       style="padding:2px">
                   
                   <!?php 
                    $consulta = "SELECT * FROM banner WHERE posicion = 1 ORDER BY id DESC  LIMIT 1";
                    $resultados = mysqli_query($connect,$consulta);
 
                    //$tabla = mysqli_fetch_assoc($resultados);
                    while($row = mysqli_fetch_array($resultados)){   
                        $namimg = $row['name'];
                    ?>  
                    <!?php 
                    $consulta = "SELECT * FROM banner WHERE posicion = 1  ORDER BY id DESC  LIMIT 1";
                    $resultados = mysqli_query($connect,$consulta);
 
                    //$tabla = mysqli_fetch_assoc($resultados);
                    while($row = mysqli_fetch_array($resultados)){   
                        $namimg = $row['name'];
                        $linksli = $row['link'];
                    ?> 
                    <a href="<!?php echo $linksli ?>" target="_blank">
                        <img src="access/banner/<!?php echo $namimg ?>" class="img-fluid">
                    </a>
                     <!?php }} ?>
                  </div>
                 
                </div>
              </div>
            </div>-->
              
         
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="padding: 0;">
                <div id="slideprincipal" class="carousel slide cropped" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php   $args = array('category_name' => 'destacado','post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
                                $the_query = new WP_Query($args);
                                $first_post = true;  // Flag para marcar el primer post como activo.
                        
                                if ($the_query->have_posts()) {
                                    while ($the_query->have_posts()) {
                                        $the_query->the_post();
                                        $post_slug = $post->post_name;
                                        $post_id = get_the_ID(); ?>
                        
                                        <div class="carousel-item <?php if ($first_post) { echo 'active'; $first_post = false; } ?>">
                                            <a href='https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>'>
                                                <?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail('full');
                                                } ?>
                                            </a>
                                        </div>
                                    <?php } 
                                } else {
                                    echo 'No se encontraron posts en esta categoría.';
                                }
                                wp_reset_postdata();
                                ?>
                                               
                       
                    
                    <div class="carousel-item">       
                        <?php 
                        $consulta = "SELECT * FROM banner WHERE posicion = 2  ORDER BY id DESC  LIMIT 1";
                        $resultados = mysqli_query($connect,$consulta);
     
                        //$tabla = mysqli_fetch_assoc($resultados);
                        while($row = mysqli_fetch_array($resultados)){   
                            $namimg = $row['name'];
                            $linksli = $row['link'];
                        ?> 
                        <a href="<?php echo $linksli ?>">
                            <img src="access/banner/<?php echo $namimg ?>"  class="imslide">
                             <?php } ?>
                        </a>
                    </div>
                    <div class="carousel-item">
                       <?php $consulta = "SELECT * FROM banner WHERE posicion = 3  ORDER BY id DESC  LIMIT 1";
                             $resultados = mysqli_query($connect,$consulta);
     
                        //$tabla = mysqli_fetch_assoc($resultados);
                        while($row = mysqli_fetch_array($resultados)){   
                            $namimg = $row['name'];
                            $linksli = $row['link'];
                        ?> 
                        <a href="<?php echo $linksli ?>">
                        <img src="access/banner/<?php echo $namimg ?>" class="imslide">
                         <?php } ?>
                        </a>
                    </div>
                    </div>
                       <button class="carousel-control-prev" type="button" data-target="#slideprincipal" style="background: #ff000000;border: 0;"data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                       </button>
                       <button class="carousel-control-next" type="button" data-target="#slideprincipal" style="background: #ff000000;border: 0;" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </button>
                </div>
                        
                
                
                
              
              
              </div>
              
              
              
              
            </div>
        </div>
        
        
        <div class="container">
          <div class="row">
            <div class="col-sm-12"><br></div> 
            
            <div class="col-sm-12" style="background:#eab40b;height: 10px;"></div>     
            
             <div class="col-sm-12"> 
               <p style="text-align: left;color: #000;font-size:3.5vw;font-family: Century Gothic;">
                   Actualidad
               </p>
             <div class="row">
                <?php 
                $actualidad = array('category_name' => 'actualidad','post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
                $the_query = new WP_Query($actualidad);
            
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $post_slug = get_post_field('post_name', get_the_ID());
                        $post_id = get_the_ID();
                ?>

                <div class="col-sm-4">  
                    <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'img-fluid')); // Asegura que la imagen sea responsive y se ajuste al contenedor
                        } ?>
                    </a>
                    <h3><a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">
                        <?php the_title(); // Muestra el título del post ?>
                    </a></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 15, ' [...]'); // Muestra el resumen del post ?></p> 
                    <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-align:right; display:block; margin-top:3%;">Ver más -></a>
                </div>

                    <?php  }} else { echo 'No se encontraron posts en esta categoría.'; } wp_reset_postdata(); ?>
                    
                    <div class="col-sm-12" style="background:#000; margin-top:2%; height:3px"></div>
                </div>

             </div>
             
             
             <!-- TURISMO -->
             
             
             <div class="col-sm-12"><br></div> 
             <div class="col-sm-12" style="background:#72A106;height: 10px;"></div>     
             <div class="col-sm-12"> 
               <p style="text-align: left;color: #000;font-size:3.5vw;font-family: Century Gothic;">  Turismo </p>
                <div class="row">
                    <?php   $args = array('category_name' => 'turismo','post_type' => 'post','post_status' => 'publish','posts_per_page' => 1,);
                            $the_query = new WP_Query($args);
                        
                            if ($the_query->have_posts()) {
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                                    $post_slug = get_post_field('post_name', get_the_ID());
                                    $post_id = get_the_ID(); ?>
    
                    <div class='col-sm-5'>  
                          
                        <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">        
                            <h3><?php the_title(); // Muestra el título del post ?> </h3>               
                        </a>    
                        
                        <p>
                            <?php echo get_the_excerpt(); // Muestra el resumen del post ?>
                        </p>
                        <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">
                            <p style='font-size: 14pt; color:#211915; text-align:right; margin-top: 3%; font-weight: 500; line-height: 1;'>Ver más -></p>
                        </a>
                    </div>
    
                    <div class='col-sm-4'>
                        <div class="imgcrop">
                        <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">    
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full'); // Removí 'img-fluid' para evitar conflictos de estilo
                            } ?>
                        </a>
                        </div>
                    </div>
    
                    <div class='col-sm-3'>
                        <?php $consulta = "SELECT * FROM banner WHERE posicion = 4 ORDER BY id DESC LIMIT 1";
                              $resultados = mysqli_query($connect,$consulta);
                              while($row = mysqli_fetch_array($resultados)){   
                                    $namimg = $row['name'];
                                    $linksli = $row['link'];
                        ?> 
                        <a href="<?php echo $linksli ?>" target="_blank">
                            <img src="access/banner/<?php echo $namimg ?>" class="publientre img-fluid">
                        </a>
                        <?php } ?>
                    </div>
    
                    <?php }} else { echo 'No se encontraron posts en esta categoría.'; } wp_reset_postdata();  ?>

                    <div class='col-sm-12' style="background:#000; margin-top:2%; height:3px"></div>
                </div>

             </div>
             
             
             
             
             <!-- GASTRONOMIA -->
             
             
             <div class="col-sm-12">
            <br>
            </div> 
            
            <div class="col-sm-12"
                 style="background:#eab40b;
                        height: 10px;">
            </div>     
            
             <div class="col-sm-12"> 
               <p style="text-align: left;
                         color: #000;
                         font-size:3.5vw;
                         font-family: Century Gothic;">
                   Gastronomía
               </p>
             <div class="row">
                <?php 
                $gastronomia = array('category_name' => 'gastronomia','post_type' => 'post','post_status' => 'publish', 'posts_per_page' => 3,);
                $the_query = new WP_Query($gastronomia);
            
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $post_slug = get_post_field('post_name', get_the_ID());
                        $post_id = get_the_ID();
                ?>

                <div class="col-sm-4">  
                    <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'img-fluid')); // Asegura que la imagen sea responsive y se ajuste al contenedor
                        } ?>
                    </a>
                                 
                    <h3><a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">
                        <?php the_title(); // Muestra el título del post ?>
                    </a></h3>
            
                    <p><?php echo wp_trim_words(get_the_excerpt(), 15, ' [...]'); // Muestra el resumen del post ?></p> 
                    <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-align:right; display:block; margin-top:3%;">Ver más -></a>
                </div>

                    <?php }} else { echo 'No se encontraron posts en esta categoría.';  }  wp_reset_postdata(); ?>
                   
                    <div class="col-sm-12" style="background:#000; margin-top:2%; height:3px"></div>
                </div>
             </div>
             
             
             
             <!-- personajes -->
             
             
             <div class="col-sm-12">
            <br>
            </div> 
            
            <div class="col-sm-12"
                 style="background:#C50022;
                        height: 10px;">
            </div>     
            
             <div class="col-sm-12"> 
               <p style="text-align: left;
                         color: #000;
                         font-size:3.5vw;
                         font-family: Century Gothic;">
                   Personajes
               </p>
             <div class="row">
                    <?php   $personajes = array('category_name' => 'personajes','post_type' => 'post','post_status' => 'publish','posts_per_page' => 1,);
                            $the_query = new WP_Query($personajes);
                        
                            if ($the_query->have_posts()) {
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                                    $post_slug = get_post_field('post_name', get_the_ID());
                                    $post_id = get_the_ID(); ?>
    
                    <div class='col-sm-5'>  
                                
                        <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">        
                            <h3><?php the_title(); // Muestra el título del post ?> </h3>               
                        </a>    
                        
                        <p>
                            <?php echo get_the_excerpt(); // Muestra el resumen del post ?>
                        </p>
                        <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">
                            <p style='font-size: 14pt; color:#211915; text-align:right; margin-top: 3%; font-weight: 500; line-height: 1;'>Ver más -></p>
                        </a>
                    </div>
    
                    <div class='col-sm-4'>
                        <div class="imgcrop">
                        <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">    
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full'); // Removí 'img-fluid' para evitar conflictos de estilo
                            } ?>
                        </a>
                        </div>
                    </div>
    
                    <div class='col-sm-3'>
                        <?php $consulta = "SELECT * FROM banner WHERE posicion = 5 ORDER BY id DESC LIMIT 1";
                              $resultados = mysqli_query($connect,$consulta);
                              while($row = mysqli_fetch_array($resultados)){   
                                    $namimg = $row['name'];
                                    $linksli = $row['link'];
                        ?> 
                        <a href="<?php echo $linksli ?>" target="_blank">
                            <img src="access/banner/<?php echo $namimg ?>" class="publientre img-fluid">
                        </a>
                        <?php } ?>
                    </div>
    
                    <?php }} else { echo 'No se encontraron posts en esta categoría.'; } wp_reset_postdata();  ?>

                    <div class='col-sm-12' style="background:#000; margin-top:2%; height:3px"></div>
                </div>
             </div>
             
             
             
             <!-- EMPRENDIMIENTOS -->
             
             
             <div class="col-sm-12">
            <br>
            </div> 
            
            <div class="col-sm-12"
                 style="background:#eab40b;
                        height: 10px;">
            </div>     
            
             <div class="col-sm-12"> 
               <p style="text-align: left;color: #000;font-size:3.5vw;font-family: Century Gothic;">
                   Emprendimientos
               </p>
             <div class="row">
                <?php 
                $emprendimientos = array(
                    'category_name' => 'emprendimientos',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                );
                $the_query = new WP_Query($emprendimientos);
            
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $post_slug = get_post_field('post_name', get_the_ID());
                        $post_id = get_the_ID();
                ?>

                <div class="col-sm-4">  
                    <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'img-fluid')); // Asegura que la imagen sea responsive y se ajuste al contenedor
                        } ?>
                    </a>
                                 
                    <h3><a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-decoration: none; color:#211915;">
                        <?php the_title(); // Muestra el título del post ?>
                    </a></h3>
            
                    <p><?php echo wp_trim_words(get_the_excerpt(), 15, ' [...]'); // Muestra el resumen del post ?></p> 
                    <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-align:right; display:block; margin-top:3%;">Ver más -></a>
                </div>

                    <?php 
                        }
                    } else {
                        echo 'No se encontraron posts en esta categoría.';
                    }
                    wp_reset_postdata();
                    ?>
                    
                    <div class="col-sm-12" style="background:#000; margin-top:2%; height:3px"></div>
                </div>
             </div>
             
      </div> 
      </div> 
      
      
      
     <?php include 'footer.php' ?>
      
      

      <script> document.querySelector('.input-icono').addEventListener('click', function() {
               this.querySelector('input').focus();});
      </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>