<!doctype html>
<html lang="es">
  <head>

 <?php require_once('editor/wp-load.php');
 $idpost = isset($_GET["a"]) ? intval($_GET["a"]) : 0; // Convierte a entero para asegurar que es un número válido.

if ($idpost <= 0) {
    die('ID de artículo no válido.');
}

        $post = get_post($idpost);
 
        if (!$post) {die('Artículo no encontrado.');}

        // Ahora puedes acceder a los datos del post.
        $titulo = get_the_title($post);
        $slug = $post->post_name;
        $nota = apply_filters('the_content', $post->post_content);
        $fech = $post->post_date;
        
        // Para obtener la categoría.
        $categorias = get_the_category($post->ID);
        $categor = $categorias ? $categorias[0]->name : 'Sin categoría';
        
        // Para obtener la imagen destacada.
        $imagen = get_the_post_thumbnail_url($post, 'full');
 
 
                  
                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");         
                   setlocale(LC_TIME, "spanish");
                  // $fecha = strftime( "%d %B  %Y", strtotime($fech));
                     $resumen = substr($nota, 0, 104);
      
                  ?>
                  
                  <meta property="og:url" content="https://lacholupa.com/<?php echo $slug ?>/<?php echo $idpost ?>" />
                    <meta property="og:type" content="article" />
                    <meta property="og:title" content="<?php echo $titulo; ?>" />
                    <meta property="og:description" content="<?php echo $resumen ?>" />
                    <meta property="og:image" content="<?php echo $imagen ?>" >
                    <title><?php echo $titulo ?></title>

<?php include 'header.php' ?>
      <body>
      <style>
          img{ width:100%;}
      </style>
     
        
        <div class="container"
             style="margin-top:6%">
          <div class="row">
          
            <div class="col-sm-12">
            <br>
            </div>     
          
            <div class="col-sm-9"> 
            
        
                  <p style='font-size: 25pt;
                            font-weight: 500;
                             line-height: 1;'>
                        <?php echo $titulo ?>
                  </p>
               
                 <div class='cropped'
                      style="margin-bottom: 5%;">
                    <img src="<?php echo $imagen ?>" class="img-fluid">
                </div>
                    
                     <p style='color: #5b5b5e;
                               text-align: justify;
                               font-weight: 500;'>
                     <?php echo $nota ?> 
                   
                     
                     </p>     
              </div>
             
              <div class="col-sm-3">
                <br>
                 
              <?php  $consulta = "SELECT * FROM banner WHERE posicion = 6  ORDER BY id DESC  LIMIT 1";
                    $resultados = mysqli_query($connect,$consulta);
 
                    //$tabla = mysqli_fetch_assoc($resultados);
                    while($row = mysqli_fetch_array($resultados)){   
                        $namimg = $row['name'];
                        $linksli = $row['link'];
                    ?> 
                    <a href="<?php echo $linksli ?>"
                       target='_blank'>
                    <img src="https://lacholupa.com/access/banner/<?php echo $namimg ?>"
                         class="img-fluid">
                    </a>
                     <?php } ?>  
                         <br><br>
                         
                              <?php 
                    $consulta = "SELECT * FROM banner WHERE posicion = 7  ORDER BY id DESC  LIMIT 1";
                    $resultados = mysqli_query($connect,$consulta);
 
                    //$tabla = mysqli_fetch_assoc($resultados);
                    while($row = mysqli_fetch_array($resultados)){   
                        $namimg = $row['name'];
                        $linksli = $row['link'];
                    ?> 
                    <a href="<?php echo $linksli ?>"
                       target='_blank'>
                    <img src="https://lacholupa.com/access/banner/<?php echo $namimg ?>"
                         class="img-fluid">
                    </a>
                     <?php } ?>  
                         <br>
                       <br>
                    
             
             </div> 
             
             <div class="col-sm-9">
                 
                  <p style='font-size: 19pt;
                               font-weight: 500;
                               line-height: 1;'>
                          <br><br>     
                               Comentar este Post</p>
                    
                    <div class="fb-comments" data-href="https://lacholupa.com/articulo.php?a=<?php echo $idpost ?> " data-width="100%" data-numposts="20"></div>
                    
                    
                <p style='font-size: 19pt;
                               font-weight: 500;
                               line-height: 1;'>
                          <br><br>     
                               Noticias Relacionadas </p>
                 <div class="row">
                   
                  <?php 
                   $args = array('category_name' => "actualidad",'post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
        $the_query = new WP_Query($args);
        $first_post = true;  // Flag para marcar el primer post como activo.

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                $post_slug = $post->post_name;
                $post_id = get_the_ID(); ?>
  
                  
                 
                
                 <div class='col-sm-4'>  
                      <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'img-fluid')); // Asegura que la imagen sea responsive y se ajuste al contenedor
                        } ?>
                    </a>
            
                     <p style='color: #f24921;
                               margin-bottom: 0;'>
                         <?php if($categor == 1){echo "Actualidad";}elseif($categor == 4){echo "Turismo";}elseif($categor == 5){echo "Gastronompía";}elseif($categor == 6){echo "Personajes";}elseif($categor == 7){echo "Emprendimientos";}else{echo"";} ?>
                     </p>  
                               
                    <a href="https://lacholupa.com/<?php echo "$post_slug" ?>/<?php echo $post_id ?>"
                       style='text-decoration: none;
                              color:#211915; '>           
                     <p style='font-size: 15pt;
                               color:#211915;
                               margin-top: 3%;
                               font-weight: 500;
                               line-height: 1;'>
                        <?php the_title(); // Muestra el título del post ?>
                     </p>
                      <p style='font-size: 7pt;
                               color:#211915;
                               margin-top: 3%;
                               font-weight: 500;
                               line-height: 1;'>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 15, ' [...]'); // Muestra el resumen del post ?></p> 
                    <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>" style="text-align:right; display:block; margin-top:3%;">Ver más -></a>
                     </p>
                    </a>           
                 </div>
                 
                 <?php
                
                 }}
                ?>
                
                <div class='col-sm-12'
                     style="background:#000;
                            margin-top:2%;
                            height:3px">
                    
                </div>
                
             </div>
                
                
                 
             </div> 
             <div class="col-sm-3">
             </div> 

      </div> 
      </div> 
      
      
      
      <?php include 'footer.php' ?>
      
      

      <script>
          
          document.querySelector('.input-icono').addEventListener('click', function() {
    this.querySelector('input').focus();
});
          
      </script>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>