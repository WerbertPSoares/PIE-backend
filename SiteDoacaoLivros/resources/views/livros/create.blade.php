@extends('components.app')

@section('title', 'Criar Novo Livro')

@section('content')
    <div class="container mt-5" style="background-color: #F5F5F5; min-height: 100vh; padding: 20px;">
        <div class="form-container p-4 rounded shadow-sm" style="background-color: #4A90E2; max-width: 600px; margin: 0 auto; margin-top: 40px;">
            <div class="motivational-quote text-center mb-4" style="font-size: 22px; font-weight: 600; color: #F5F5F5;">
                "Doe um livro, compartilhe um mundo de sabedoria!"
            </div>

            <h1 class="text-center" style="color: #F5F5F5;">Criar Novo Livro</h1>

            @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('livros.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="titulo" style="color: #F5F5F5;">Título:</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required value="{{ old('titulo') }}" style="border-color: #F5F5F5;">
                </div>

                <div class="form-group mb-3">
                    <label for="autor" style="color: #F5F5F5;">Autor:</label>
                    <input type="text" name="autor" id="autor" class="form-control" required value="{{ old('autor') }}" style="border-color: #F5F5F5;">
                </div>

                <div class="form-group mb-3">
                    <label for="genero" style="color: #F5F5F5;">Gênero:</label>
                    <input type="text" name="genero" id="genero" class="form-control" placeholder="Opcional" value="{{ old('genero') }}" style="border-color: #F5F5F5;">
                </div>

                <div class="form-group mb-3">
                    <label for="isbn" style="color: #F5F5F5;">ISBN:</label>
                    <input type="text" name="isbn" id="isbn" class="form-control" placeholder="Opcional" value="{{ old('isbn') }}" style="border-color: #F5F5F5;">
                </div>

                <div class="form-group mb-3">
                    <label for="editora" style="color: #F5F5F5;">Editora:</label>
                    <input type="text" name="editora" id="editora" class="form-control" placeholder="Opcional" value="{{ old('editora') }}" style="border-color: #F5F5F5;">
                </div>

                <div class="form-group mb-3">
                    <label for="ano" style="color: #F5F5F5;">Ano:</label>
                    <input type="number" name="ano" id="ano" class="form-control" placeholder="Opcional" value="{{ old('ano') }}" style="border-color: #F5F5F5;">
                </div>

                <div class="form-group mb-3">
                    <label for="paginas" style="color: #F5F5F5;">Número de Páginas:</label>
                    <input type="number" name="paginas" id="paginas" class="form-control" placeholder="Opcional" value="{{ old('paginas') }}" style="border-color: #F5F5F5;">
                </div>

                <div class="form-group mb-3">
                    <label for="sinopse" style="color: #F5F5F5;">Sinopse:</label>
                    <textarea name="sinopse" id="sinopse" class="form-control" rows="4" placeholder="Opcional" style="border-color: #F5F5F5;">{{ old('sinopse') }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="capa" class="btn btn-primary" style="background-color: #F5F5F5; border-color: #F5F5F5; color: #4A90E2;">Escolher Foto do Livro</label>
                    <input type="file" id="capa" name="capa" class="d-none" accept="image/*">
                    <span id="file-name" style="color: #F5F5F5;">Nenhuma foto escolhida</span>
                </div>

                <div class="form-group mb-3" id="image-preview" style="display: none;">
                    <label for="preview-img" style="color: #F5F5F5;">Pré-visualização:</label>
                    <img id="preview-img" src="" alt="Pré-visualização da imagem" style="max-width: 200px; margin-top: 10px;">
                    <span id="remove-img" style="cursor: pointer; color: red; font-size: 18px; margin-left: 10px;">Remover</span>
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary" style="background-color: #A4D65E; border-color: #A4D65E;">Salvar Livro</button>
                    <a href="{{ route('livros.index') }}" class="btn btn-secondary" style="background-color: #F5F5F5; border-color: #F5F5F5;">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('capa').addEventListener('change', function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('preview-img').src = e.target.result;
                document.getElementById('image-preview').style.display = 'block';
                document.getElementById('file-name').textContent = file.name;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('remove-img').addEventListener('click', function() {
            document.getElementById('capa').value = '';
            document.getElementById('preview-img').src = '';
            document.getElementById('image-preview').style.display = 'none';
            document.getElementById('file-name').textContent = 'Nenhuma foto escolhida';
        });
    </script>
@endsection


