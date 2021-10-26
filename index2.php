<?php include 'contenido.php' ?>
<?php require 'head.php' ?>
<meta name="description" content="PRÁCTICA LOOP FOREACH EN PHP">

  </head>
  <body>
    
<?php require 'header.php' ?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
  <div class="container">
  <h2> Práctica segunda para examen </h2><br>
  </div>
    <div class="container">

      <div class="row">
        

      <?php 
        foreach (ACTRICES as $key => $articul) {
          echo   
        '<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/act_00' . $articul['id'] .'.jpg" class="img-fluid">

            <div class="card-body">
              <p class="card-text">' . $articul['texto'] . '</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="' . $articul['url'] . '" type="button" class="btn btn-sm btn-outline-secondary">Ver más</a>
                </div>
                <small class="text-muted">Tags;';
                  if (!isset ($articul['piniculas'])) {
                    echo "No hay etiquetas";
                  }else {
                    foreach ($articul['piniculas'] as $key => $value) {
                      echo "#" . $value . ',';
                    
                  }
                }
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

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
