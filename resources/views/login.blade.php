  @extends('_partials/main')

  @section('conteudo')
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
@endsection