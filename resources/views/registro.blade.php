  @extends('_partials/main')

  @section('conteudo')

    <!-- Register Section -->
    <section class="register-section">
      <div class="register-card">
        <h2>Registro</h2>
        <form action="{{route('registro')}}" method="POST">
          @csrf
          <div class="mb-3">
            <input type="text" name="nome_completo" class="form-control" placeholder="Nome Completo" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="mb-3">
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
          </div>
          <div class="mb-3">
            <input type="password" name="confirmar_senha" class="form-control" placeholder="Confirme a Senha" required>
          </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
          <div class="mt-3">
            <p class="text-muted">Já tem uma conta? <a href="login.html">Faça login</a></p>
          </div>
        </form>
      </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-4">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    @endsection
