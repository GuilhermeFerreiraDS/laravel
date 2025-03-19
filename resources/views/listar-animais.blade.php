<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .animal-section {
        padding: 4rem 0;
      }
      .animal-card {
        transition: transform 0.3s;
      }
      .animal-card:hover {
        transform: scale(1.05);
      }
      .animal-card img {
        height: 200px;
        object-fit: cover;
      }
      .btn-primary {
        background-color: #ff6f61;
        border-color: #ff6f61;
      }
      .btn-primary:hover {
        background-color: #ff3b2f;
        border-color: #ff3b2f;
      }
    </style>
  </head>
  <body>

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
              <a class="nav-link" href="index.html">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="animais.html">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Animal List Section -->
    <section class="animal-section">
      <div class="container">
        <h2 class="text-center mb-5">Animais para Adoção</h2>
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro">
              <div class="card-body">
                <h5 class="card-title">Rex</h5>
                <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e está procurando um lar amoroso.</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Idade:</strong> 2 anos</li>
                  <li class="list-group-item"><strong>Porte:</strong> Médio</li>
                  <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
                </ul>
                <div class="text-center mt-3">
                  <a href="#" class="btn btn-primary">Adotar</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato">
              <div class="card-body">
                <h5 class="card-title">Mimi</h5>
                <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo quentinho e está pronta para ser adotada.</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Idade:</strong> 1 ano</li>
                  <li class="list-group-item"><strong>Porte:</strong> Pequeno</li>
                  <li class="list-group-item"><strong>Sexo:</strong> Fêmea</li>
                </ul>
                <div class="text-center mt-3">
                  <a href="#" class="btn btn-primary">Adotar</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Coelho">
              <div class="card-body">
                <h5 class="card-title">Bolinha</h5>
                <p class="card-text">Bolinha é um coelho muito dócil e brincalhão. Ele adora cenouras e está procurando uma família amorosa.</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Idade:</strong> 6 meses</li>
                  <li class="list-group-item"><strong>Porte:</strong> Pequeno</li>
                  <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
                </ul>
                <div class="text-center mt-3">
                  <a href="#" class="btn btn-primary">Adotar</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Adicione mais cards conforme necessário -->
        </div>
      </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-4">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>