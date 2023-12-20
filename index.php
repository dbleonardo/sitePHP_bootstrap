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

  <!-- CONTEÚDO -->

  <section class="conteudo">
      <div class="container">
        <h2 class="text-center">
            Vamos buscar juntos as respostas certas!
        </h2><!-- text-center -->
      </div><!-- container -->
      <div class="container">
        <p class="text-center">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, sequi. Sit ipsam beatae, tempore rem cum ex eligendi laboriosam debitis natus aliquam nesciunt necessitatibus vero est enim quas fuga perspiciatis.
        </p><!-- text-center -->
      </div><!-- container -->
  </section><!-- conteudo -->


  <!-- DADASTRO -->
  <section class="cadastro-lead">
    <div class="container">
      <div class="row text-center">
      <div class="fs-2 mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-rss" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                  <path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1m0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1"/>
                </svg>
              Entre na nossa lista
        </div>
         
          <div class="row mb-12">
           
             <div class="col-sm-12">
                <div class="input-group mb-6">
                 <input type="text" class="form-control" placeholder="Receba nossas novidades." aria-label="Recipient's username" aria-describedby="button-addon2">
                 <button class="btn  btn-success" type="button" id="button-addon2">Inscrever-se</button>
               </div><!-- input-group mb-6 -->
            </div><!-- col-sm-6 -->
          </div><!-- row mb-6 -->
        </div><!-- row -->
    </div><!-- container -->
  </section><!-- cadastro-lead -->

  <!-- DEPOIMENTOS -->

  <section class="depoimento text-center">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-square-heart-fill" viewBox="0 0 16 16">
             <path d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
            </svg>
            <h2>Depoimento</h2>
            <blockquote>
              <p class="text-center">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit inventore maiores, rerum, eveniet molestias, voluptatem hic officia eaque veniam dicta mollitia suscipit. Modi, eveniet at? Animi facilis rem natus ipsum.
              </p>
            </blockquote>
          </div>
        </div>
    </div><!-- container -->
  </section><!-- depoimento -->

  <!-- DIFERENCIAIS -->

  <section class="diferencial text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
          <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75M7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116"/>
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0"/>
        </svg>
        <h2 class="text-center">Diferenciai#1</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, consectetur? Accusamus voluptatibus perspiciatis, placeat odio pariatur rerum numquam, deleniti quia sint expedita obcaecati non molestiae maiores explicabo facilis ea repudiandae?</p>

        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
</svg>
        <h2 class="text-center">Diferenciai#2</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, consectetur? Accusamus voluptatibus perspiciatis, placeat odio pariatur rerum numquam, deleniti quia sint expedita obcaecati non molestiae maiores explicabo facilis ea repudiandae?</p>

        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
          <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
        </svg>
        <h2 class="text-center">Diferenciai#3</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, consectetur? Accusamus voluptatibus perspiciatis, placeat odio pariatur rerum numquam, deleniti quia sint expedita obcaecati non molestiae maiores explicabo facilis ea repudiandae?</p>

        </div>
      </div>
    </div><!-- container -->
  </section><!-- diferencial -->


</div><!-- box -->

<script src="./script/bootstrap.bundle.min.js"></script>
<script src="./script/popper.min.js"></script>
</body>
</html>