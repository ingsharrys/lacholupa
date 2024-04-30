<?php include 'header.php' ?>
      <body>
      
      <?php $idcatego = $_GET["c"]; 
      $categoria = array('','Actualidad','','','Turismo','Gastronomía','Personajes','Emprendimiento');?>
      <title><?php echo $categoria[$idcatego];?></title>
      <meta property="og:type" content="article" />
      <meta property="og:title" content="<?php echo $categoria[$idcatego];?>" />
      <meta property="og:description" content="Medio digital de expresión cultural popular huilense independiente, moderno y de calidad" />
      <meta property="og:image" content="https://lacholupa.com/img/logo.jpg" />
      <meta property="og:url" content="https://lacholupa.com/categoria.php?c=<?php echo $idcatego ?>" />
      <meta property="og:site_name" content="La Cholupa" />

        
        <div class="container">
          <div class="row">
            <div class="col-sm-12"> <br><br><br></div>     
            <div class="col-sm-10"> 
                <div class="row">
                 
                <?php 
                $categoria = array('cat' => $idcatego,'post_type' => 'post','post_status' => 'publish','posts_per_page' => 20,);
                $the_query = new WP_Query($categoria);
            
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $post_slug = get_post_field('post_name', get_the_ID());
                        $post_id = get_the_ID();
                  if($post_id == NULL){ }else{
                ?>
                
                
                 <div class='col-sm-4'>   
                 <br><br>
                  <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'img-fluid')); // Asegura que la imagen sea responsive y se ajuste al contenedor
                        } ?>
                 </div>
                 <div class='col-sm-8'>
                     <br><br>
                     <p style='color: #f24921;margin-bottom: 0;'>
                         <?php if($idcatego == 1){ ?>
                           Actualidad 
                          <?php } 
                         if($idcatego == 4){ ?>
                           Turismo <?php } 
                           if($idcatego == 5){ ?>
                           Gastronomía <?php } 
                           if($idcatego == 6){ ?>
                           Personajes <?php } 
                           if($idcatego == 7){ ?>
                           Personajes <?php } ?>
                         </p>  
                               
                    <a href="https://lacholupa.com/<?php echo $post_slug; ?>/<?php echo $post_id; ?>">        
                     <p style='font-size: 15pt;color:#211915;font-weight: 500;line-height: 1;'><?php the_title(); ?></p>
                
                     <div style='color: #5b5b5e;margin-top: 15px;font-family: helvetica;text-align: left;font-weight: 500;'>
                         <?php echo wp_trim_words(get_the_excerpt(), 15, ' [...]'); // Muestra el resumen del post ?>
                     </div>     
                      </a> 
                     
                 </div>
                 
                 <div class='col-sm-12'>
                     <br><br>
                 </div>
                 
                 
              <?php   
                 
                  }}}
                 
                 ?>
                 
             </div>
             
        
             </div>
        
                
             <div class="col-sm-2">
              
                               <br><br>
                               
                   <?php  $consulta = "SELECT * FROM banner WHERE posicion = 6  ORDER BY id DESC  LIMIT 1";
                    $resultados = mysqli_query($connect,$consulta);
 
                    //$tabla = mysqli_fetch_assoc($resultados);
                    while($row = mysqli_fetch_array($resultados)){   
                        $namimg = $row['name'];
                        $linksli = $row['link'];
                    ?> 
                    <a href="<?php echo $linksli ?>">
                    <img src="access/banner/<?php echo $namimg ?>"
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
                    <a href="<?php echo $linksli ?>">
                    <img src="access/banner/<?php echo $namimg ?>"
                         class="img-fluid">
                    </a>
                     <?php } ?>  
             
             </div> 
             
             <div class="col-sm-1">
                  
             
             </div> 

      </div> 
      </div> 
      
      
      
      <?php include 'footer.php' ?>
      
      

      <script>
          
          document.querySelector('.input-icono').addEventListener('click', function() {
    this.querySelector('input').focus();
});
          
      </script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>