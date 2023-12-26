<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="descreva o documento aqui">
  <meta name="keywords" content="coloque, palavras, chaves, entre, virgulas, aqui">
  <link rel="stylesheet" href="./style/bootstrap.min.css">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="./style/bootstrap-icons.min.css">
  
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
    <div class="container-fluid chamada-banner">
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
      <div class="container-fluid">
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
    <div class="container-fluid">
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
    <div class="container-fluid">
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

  <section class="diferencial text-center" id="diferencial">
    <div class="container ">
    <div class="row">
      <div class="col-sm-4 ">
      <div class="card" style="width: 100%;">
        <img src="./images//bg-card-1.jpg" class="card-img-top" style="height:25rem;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Diferencial #1</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
      <div class="col-sm-4">
      <div class="card" style="width: 100%;">
        <img src="./images//bg-card-2.jpg" class="card-img-top" style=" height:25rem;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Diferencial #2</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
        </div>
      </div>
    </div>
      <div class="col-sm-4">
      <div class="card" style="width: 100%;">
        <img src="./images//bg-card-3.jpg" class="card-img-top" style="height:25rem;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Diferencial #3</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
        </div>
      </div>
    </div>
</div><!-- row -->
</div><!-- container -->
  </section><!-- diferencial -->

<!-- EQUIPE -->

<section class="equipe">
  <h2>Equipe </h2>
  <div class="container equipe-container">
    <div class="row">
      <div class="col-md-6">
        <div class="equipe-single">
            <div class="row">
              <div class="col-md-2">
                <div class="user-picture-1"><div class="user-picture-child-1"></div></div>
              </div>
              <div class="col-md-10">
                <h3>Giovana</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ipsa unde molestiae. Deserunt, similique dignissimos officia accusamus, beatae eligendi natus atque veritatis nulla placeat repellendus eius nemo dolorum velit delectus.</p>

              </div><!-- col-md-9 -->
            </div><!-- row -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="equipe-single">
        <div class="row">
              <div class="col-md-2">
                <div class="user-picture-2"><div class="user-picture-child-2"></div></div>
              </div>
              <div class="col-md-10">
                <h3>David</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ipsa unde molestiae. Deserunt, similique dignissimos officia accusamus, beatae eligendi natus atque veritatis nulla placeat repellendus eius nemo dolorum velit delectus.</p>

              </div><!-- col-md-9 -->
            </div><!-- row -->
        </div>
      </div>
    </div><!-- row -->
  </div><!-- container equipe-container -->
</section><!-- EQUIPE -->
<section class="final-site">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Fale conosco.</h2>
        <form action="/action_page.php">
          <div class="mb-3 mt-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
          </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Mensagem:</label>
            <textarea class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <table class="table">
          <h2>Nossos planos:</h2>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Diário</th>
              <th scope="col">Semanal</th>
              <th scope="col">Mensal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>R$200,00</td>
              <td>R$1000,00</td>
              <td>R$4000,00</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>R$200,00</td>
              <td>R$1000,00</td>
              <td>R$4000,00</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>R$200,00</td>
              <td>R$1000,00</td>
              <td>R$4000,00</td>
            </tr>
          </tbody>
        </table>
              </div>
            </div><!-- row -->
          </div><!-- container -->
</section><!-- final-site -->

<!-- FOOTER -->

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted "><p class="text-center;">&copy; 2023 Company, Inc</p></span>
    </div>

   
  </footer>
</div>

</div><!-- box -->

<script src="./script/bootstrap.bundle.min.js"></script>
<script src="./script/popper.min.js"></script>
</body>
</html>