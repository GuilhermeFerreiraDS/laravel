
  @extends('_partials/main')

  @section('conteudo')
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
@endsection