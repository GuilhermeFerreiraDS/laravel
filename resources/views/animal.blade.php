@extends('_partials/main')

@section('conteudo')

  <!-- Register Section -->
  <section class="animal-section">
    <div class="animal-card">
      <h2>Adicionar animal</h2>
      <form action="{{route('animal')}}" method="POST">
        @csrf
        <div class="mb-3">
          <input type="text" name="nome" class="form-control" placeholder="Nome" required>
        </div>
        <div class="mb-3">
          <input type="text" name="cor" class="form-control" placeholder="Cor" required>
        </div>
        <div class="mb-3">
          <input type="text" name="peso" class="form-control" placeholder="Peso" required>
        </div>
        <div class="mb-3">
          <input type="text" name="idade" class="form-control" placeholder="Idade" required>
        </div>
        <div class="mb-3">
          <input type="text" name="especie" class="form-control" placeholder="Especie" required>
        </div>
        <div class="mb-3">
          <input type="text" name="raca" class="form-control" placeholder="Raça" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="bg-dark text-white text-center py-4">
    <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
  </footer>

  @endsection


