  @extends('_partials/main')

  @section('conteudo')
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
@endsection