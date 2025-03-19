<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .login-section {
        background: url('https://via.placeholder.com/1500x800') no-repeat center center/cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
      }
      .login-card {
        background: rgba(255, 255, 255, 0.9);
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 100%;
      }
      .login-card h2 {
        color: #333;
        margin-bottom: 1.5rem;
      }
      .login-card .form-control {
        margin-bottom: 1rem;
      }
      .login-card .btn-primary {
        background-color: #ff6f61;
        border-color: #ff6f61;
        width: 100%;
      }
      .login-card .btn-primary:hover {
        background-color: #ff3b2f;
        border-color: #ff3b2f;
      }
      .login-card .text-muted {
        color: #666 !important;
      }
      .login-card a {
        color: #ff6f61;
        text-decoration: none;
      }
      .login-card a:hover {
        text-decoration: underline;
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
              <a class="nav-link" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Login Section -->
    <section class="login-section">
      <div class="login-card">
        <h2>Login</h2>
        <form>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Senha" required>
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
          <div class="mt-3">
            <p class="text-muted">Não tem uma conta? <a href="#">Cadastre-se</a></p>
            <p class="text-muted"><a href="#">Esqueceu a senha?</a></p>
          </div>
        </form>
      </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-4">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>