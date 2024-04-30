<?php include 'header.php';
      $mensaje = $_GET['exito']?>

    <div class="container">
     <div class="row">
      
       <div class="col-12">
           
           <h1>Banner Popup</h1>
           <h4><?php echo $mensaje ?></h4>
           <form enctype="multipart/form-data" action="uploadbanner.php"
                 method="post">
                <input type="file" name="archivo" id="archivo">
                <input type="text" 
                       placeholder="Enlace Banner"
                       name="enlace" id="enlace">
                <select name="posi">
                  <option value="1" selected>Popup</option>
                  <option value="2">Slider 1</option>
                  <option value="3">Slider 2 </option>
                  <option value="4">Banner Turismo </option>
                  <option value="5">Banner Personajes </option>
                  <option value="6">Banner Pagina Interna 1 </option>
                  <option value="7">Banner Pagina Interna 2 </option>
                </select>
                <input type="submit" 
                       name="subir"
                       value="Subir banner">
            </form>
           
       </div>
     
     </div>
    </div>
