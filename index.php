<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="descreva o documento aqui">
  <meta name="keywords" content="coloque, palavras, chaves, entre, virgulas, aqui">
  <link rel="stylesheet" href="./style/bootstrap.min.css">
  <link rel="stylesheet" href="./style/style.css">
  
  <title>Olha p que ele fez...</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tecno.Code</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastro</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Missão</a></li>
            <li><a class="dropdown-item" href="#">Visão</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Valores</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true">Saiba mais</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="box">
  <section class="banner">
    <div class="overlay"></div><!-- overlay-->
    <div class="container chamada-banner">
      <div class="row">
          <div class="col-md-12">
              <h2 class="text-center">Tecno.Code</h2>
            </div><!-- col-md-12 -->
            <div class="col-md-12">
              <p class="text-center">Desenvolvimento do marketing digital.</p>
            </div><!-- col-md-12 -->
            <?php require './assets/whatssapp.php' ?>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- banner-->
  <!-- DADASTRO -->
  <section class="cadastro-lead">
    <div class="container">
      <div class="row text-center">
          <div class="col-md-12 ">
            <h2>Entre na nossa lista.</h2>
          </div><!-- col-md-12 -->
          <div class="row mb-6">
            <label for="colFormLabel" class="col-sm-2 col-form-label text-ms-start ">Email</label>
             <div class="col-sm-6">
                <div class="input-group mb-6">
                 <input type="text" class="form-control" placeholder="Receba nossas novidades." aria-label="Recipient's username" aria-describedby="button-addon2">
                 <button class="btn  btn-success" type="button" id="button-addon2">Inscrever-se</button>
               </div><!-- input-group mb-6 -->
            </div><!-- col-sm-6 -->
          </div><!-- row mb-6 -->
        </div><!-- row -->
    </div><!-- container -->
  </section><!-- cadastro-lead -->
</div><!-- box -->

<script src="./script/bootstrap.bundle.min.js"></script>
<script src="./script/popper.min.js"></script>
</body>
</html>