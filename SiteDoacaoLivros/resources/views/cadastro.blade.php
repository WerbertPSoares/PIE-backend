@extends('components.app')

@section('title', 'Página Inicial')

@section('content')
<body>

  <div class="container">
    <div class="d-flex justify-content-center align-self-center">
      <div class="cadastro-container mt-5">
        <h2>Cadastro</h2>
        <form class="cadastro-form" method="POST" action="{{ route('usuarios.store') }}">
          @csrf <!-- Token CSRF para segurança -->
          <div class="row">
            <div class="col-12">
              <label for="nome">Nome</label>
              <input type="text" name="nome" placeholder="Digite seu nome completo" id="nome" required>
              @error('nome') <p>{{ $message }}</p> @enderror <!-- Mensagem de erro -->
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <label class="mt-2" for="email">Email</label>
              <input type="email" name="email" placeholder="Digite seu email" id="email" required>
              @error('email') <p>{{ $message }}</p> @enderror <!-- Mensagem de erro -->
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <label class="mt-2" for="senha">Senha</label>
              <input type="password" name="senha" placeholder="Crie uma senha forte" id="senha" required>
              @error('senha') <p>{{ $message }}</p> @enderror <!-- Mensagem de erro -->
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <label class="mt-2" for="confirmar_senha">Confirmar senha</label>
              <input type="password" name="senha_confirmation" placeholder="Confirme sua senha" id="confirmar-senha" required>
              @error('confirmar_senha') <p>{{ $message }}</p> @enderror <!-- Mensagem de erro -->
            </div>
          </div>
          <div class="btn-cadastrar">
            <button class="mt-3" type="submit">Concluir Cadastro</button>
          </div>
        </form>
        
        <!-- Link para a página de cadastro de administradores 
        <div class="mt-4">
          <a href="{{ route('admin.register') }}" class="text-primary">Administrador</a>
        </div>-->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
</body>
@endsection

