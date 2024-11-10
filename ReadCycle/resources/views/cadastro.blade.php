@extends('components.app')

@section('title', 'Página Inicial')

@section('content')

<body style="padding-top: 80px;"> <!-- Padding para evitar sobreposição -->
  <div class="container">
    <div class="d-flex justify-content-center align-self-center">
      <div class="cadastro-container mt-5 p-4 border rounded-4 shadow-lg" style="background-color: #F5F5F5; width: 100%; max-width: 600px;">
        <h2 class="text-center" style="color: #4F4F4F;">Cadastro</h2>

        
        <form class="cadastro-form" method="POST" action="{{ route('usuarios.store') }}">
          @csrf <!-- Token CSRF para segurança -->
          
          <!-- Campo Nome -->
          <div class="row mb-3">
            <div class="col-12">
              <label for="nome" class="form-label" style="color: #4F4F4F;">Nome</label>
              <input type="text" name="nome" placeholder="Digite seu nome completo" id="nome" class="form-control" required>
              @error('nome') <p class="text-danger">{{ $message }}</p> @enderror <!-- Mensagem de erro -->
            </div>
          </div>
          
          <!-- Campo Email -->
          <div class="row mb-3">
            <div class="col-12">
              <label for="email" class="form-label" style="color: #4F4F4F;">Email</label>
              <input type="email" name="email" placeholder="Digite seu email" id="email" class="form-control" required>
              @error('email') <p class="text-danger">{{ $message }}</p> @enderror <!-- Mensagem de erro -->
            </div>
          </div>
          
          <!-- Campos de Senha e Confirmar Senha -->
          <div class="row mb-3">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <label for="senha" class="form-label" style="color: #4F4F4F;">Senha</label>
              <input type="password" name="senha" placeholder="Crie uma senha forte" id="senha" class="form-control" required>
              @error('senha') <p class="text-danger">{{ $message }}</p> @enderror <!-- Mensagem de erro -->
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <label for="confirmar-senha" class="form-label" style="color: #4F4F4F;">Confirmar senha</label>
              <input type="password" name="senha_confirmation" placeholder="Confirme sua senha" id="confirmar-senha" class="form-control" required>
              @error('confirmar_senha') <p class="text-danger">{{ $message }}</p> @enderror <!-- Mensagem de erro -->
            </div>
          </div>

          <!-- Botão de Cadastro -->
          <div class="text-center">
            <button class="btn btn-primary btn-lg px-5 py-3 rounded-3 shadow-lg border-0" type="submit" style="background-color: #4A90E2; color: white;">Concluir Cadastro</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Link de cadastro de administrador no canto superior direito -->
<div class="text-end mb-3">
          <a href="{{ route('admin.register') }}" class="btn btn-danger btn-sm"></a>
        </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
@endsection
