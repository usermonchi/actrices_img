<?php include 'contenid.php' ?>
<?php require 'head.php' ?>
<title>PRÁCTICA 1ª EN CASA P'AL EXAMEN</title>
<meta name="description" content="PRÁCTICA LOOP FOREACH EN PHP">


<?php 
$idPaginal = intval($_GET['id']);
?>


  </head>
  <body>
    
<?php require 'header.php' ?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>PLANTILLA PÁGINA CONTENIDOS<br>Práctica 1ª casa</h1>
      <p class="lead text-muted">Plantilla 1ª de artículos</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Un artículo</a>
        <a href="#" class="btn btn-secondary my-2">Segundo artículo</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
  
  <div class="container">
    <div class="row">
      <div class="col-md-6 py3">
        <img src="<?php echo ACTRICES[$idPaginal]['imgPrincipal'] ?>" alt="no sale na" class="img-fluid">
      </div>
      <div class="col-md-6 py3">
      <h2><?php echo ACTRICES[$idPaginal]['titulo']?></h2>
      <p><?php echo ACTRICES[$idPaginal]['texto'] ?></p>
      <p><small>TAGGSS:<b>
      <?php 
      if (!isset(ACTRICES[$idPaginal]['piniculas'])) {
        echo "No hay tags";
      }else{
        foreach (ACTRICES[$idPaginal]['piniculas'] as $key=>$value) {
          echo '#' .  $value . ' ';
        }
      }
      ;
      ?>
      </b></small>

      </div>
    </div>
  </div>
</div>
 

  <!-- <div class="container"> -->
      <div class="row">  <!-- Row del artículo principal  -->
        <div class="col-md-6 py-3"> 
          <h2> Enlaces de páginas con fotos </h2>
          <div class="row">
          <?php
            foreach (ACTRICES as $key => $valore) {
              echo '<div class="col-4 p-3"> <a href="' . $valore['link'] . '"> <img src="' . $valore['imgPrincipal'] . '" alt="na de ná" class="img-fluid"></a></div>';
            }
          ?>
        </div>
        </div>
      

      
        <div class="col-md-6 py-3">
          <h2>Enlaces de páginas:</h2>
          <?php 
            foreach (ACTRICES as $key => $value) {
              echo '<a href="' . $value['link'] . '"> ' . $value['titulo'] .'</a><br>';
            }
            ?>
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



<!-- <php foreach (ACTRICES as $key => $articul) {
          echo   
        '<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/act_00' . $articul['id'] .'.jpg" class="img-fluid">

            <div class="card-body">
              <p class="card-text">' . $articul['texto'] . '</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="' . $articul['link'] . 'type="button" class="btn btn-sm btn-outline-secondary">View</a> 
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
      ?> -->




      <!-- <div class="container">
    <h2> Práctica segunda para examen </h2><br>
  </div>

  