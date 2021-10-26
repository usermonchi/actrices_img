<?php include 'contenid.php' ?>;
<?php require 'head.php' ?>;
  </head>
  <body>
    
<!------ Llamada al HEADER  ------------>

<?php require "header.php" ?>;

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Práctica 1ªs en casa: 3 ACTRICES DE WOODY ALLEN</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">


      <?php
        foreach (ACTRICES as $key => $articulo) {
          echo
        '<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src=" img/act_00' . $articulo['id'] . '.jpg" class="img-fluid">

            <div class="card-body">
            <h2>' . $articulo['titulo'] . '</h2>
              <p class="card-text">' . $articulo['texto'] . '</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="' . $articulo['link'] . '" type="button" class="btn btn-sm btn-outline-secondary">Ver más</a>
                </div>
                <small class="text-muted">Tags:';
                   if (!isset($articulo['piniculas'])) {
                      echo 'No hay tags';
                 } else {
                foreach ($articulo['piniculas'] as $key => $value) {
                  echo '#' . $value . ',';
                }
              }
;
                echo '</small>
              </div>
            </div>
          </div>
        </div>';

        }

        ?>
        
        

        
        
      </div>
    </div>
  </div>

</main>

<!-- Llamada al FOOTER -->

<?php require 'footer.php' ?>;


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
