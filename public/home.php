<?php require_once "../app/config.php"; 
require_once APP . "/validacao_acesso.php"; 
use App\Controller;
?>

<!DOCTYPE html>
<html>
<head>
  <title><?= $data['title'] ?></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="/public/assets/js/bootstrap.min.js"></script></head>

</head>

<body>

  <?php include_once("./navbar.php") ?>


<div class="container"> <!-- Início container -->


  <section class="jumbotron text-center">
      <div class="container">
        <h1>Bem vindo ao Quiz, <?php echo $_SESSION['usuario']; ?></h1>
        <p class="lead text-muted">Selecione um quiz para iniciar .</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Resultados Anteriores</a>
          <a href="#" class="btn btn-secondary my-2">Ranking Geral</a>
        </p>
      </div>
  </section><br>

      <div class="container">

        <div class="row">

        <?php foreach($data['quizzes'] as $quiz): ?>



          <!-- Inicio Card-->
          <div class="card col-md-6 col-sm-6 col-lg-3 mb-1">
            <!-- Imagem -->
            <div class="view overlay">
            <?php if (empty($quiz['img'])): ?>
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"><rect width="100%" height="100%" fill="#79999c"></rect></svg>
              <?php else: ?>
              <img class="card-img-top" src="<?="/public/assets/img/{$quiz['img']}" ?>" width="100%" height="100%" alt="Card image cap"/>
              <?php endif;?>
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!-- Conteúdo -->
            <div class="card-body">

              <!-- Título -->
              <h5 class="card-title"><?= $quiz['nome'] ?></h5>
              <hr>
              <!-- Texto -->
              <p class="card-text"><?= $quiz['descricao'] ?></p>
              

            </div>

            <div class="row justify-content-end">
                <a class="btn btn-indigo btn-rounded btn-md btn-outline-secondary mb-1 mr-1" href="<?= "$data[routeQuiz]/$quiz[id]" ?>">Iniciar</a>
            </div>
          </div>
          <!-- Fim Card -->

        <?php endforeach ?>

        </div>

        

      </div>

          
    <!--Logout-->
    <div class="d-flex justify-content-center mt-3">
      <a href="<?= $data['routeLogout'] ?>" class="btn btn-warning btn-lg mb-3 "> Logout </a>
     </div>
    </div>

</div>

<?php include_once "footer.php" ?>

</body>
</html>
