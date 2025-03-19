<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Animal - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .animal-detail-section {
        padding: 4rem 0;
      }
      .animal-detail-card {
        max-width: 800px;
        margin: 0 auto;
      }
      .animal-detail-card img {
        height: 400px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
      }
      .animal-detail-card .card-body {
        padding: 2rem;
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
              <a class="nav-link" href="animais.html">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Animal Detail Section -->
    <section class="animal-detail-section">
      <div class="container">
        <div class="animal-detail-card">
          <img src="https://via.placeholder.com/388" class="card-img-top" alt="Rex">
          <div class="card-body">
            <h2 class="card-title">Rex</h2>
            <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e está procurando um lar amoroso. Rex é muito sociável e se dá bem com outros animais. Ele é vacinado, castrado e está pronto para fazer parte de uma família.</p>
            <ul class="list-group list-group-flush mb-4">
              <li class="list-group-item"><strong>Idade:</strong> 2 anos</li>
              <li class="list-group-item"><strong>Porte:</strong> Médio</li>
              <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
              <li class="list-group-item"><strong>Raça:</strong> Vira-lata</li>
              <li class="list-group-item"><strong>Vacinação:</strong> Completa</li>
              <li class="list-group-item"><strong>Castrado:</strong> Sim</li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn btn-primary btn-lg">Quero Adotar</a>
            </div>
          </div>
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