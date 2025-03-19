@extends('_partials/main')

@section('conteudo')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
      <div>
        <h1>Dê um lar para um amigo</h1>
        <p>Encontre seu novo companheiro e faça a diferença na vida de um animal de rua.</p>
        <a href="#" class="btn btn-primary btn-lg">Ver Animais para Adoção</a>
      </div>
    </section>

    <!-- Sobre Nós -->
    <section class="container my-5">
      <div class="row">
        <div class="col-md-6">
          <h2>Sobre Nós</h2>
          <p>Somos uma organização dedicada a resgatar e encontrar lares amorosos para animais de rua. Acreditamos que cada animal merece uma segunda chance e estamos aqui para ajudar a conectar esses animais a pessoas que possam oferecer um lar seguro e cheio de amor.</p>
          <a href="#" class="btn btn-primary">Saiba Mais</a>
        </div>
        <div class="col-md-6">
          <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Sobre Nós">
        </div>
      </div>
    </section>

    <!-- Animais para Adoção -->
    <section class="bg-light py-5">
      <div class="container">
        <h2 class="text-center mb-5">Animais para Adoção</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro">
              <div class="card-body">
                <h5 class="card-title">Rex</h5>
                <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e está procurando um lar amoroso.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato">
              <div class="card-body">
                <h5 class="card-title">Mimi</h5>
                <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo quentinho e está pronta para ser adotada.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Coelho">
              <div class="card-body">
                <h5 class="card-title">Bolinha</h5>
                <p class="card-text">Bolinha é um coelho muito dócil e brincalhão. Ele adora cenouras e está procurando uma família amorosa.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection
