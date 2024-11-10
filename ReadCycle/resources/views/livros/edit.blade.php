@extends('components.app')

@section('title', 'Editar Livro')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg" style="border-radius: 10px;">
                <div class="card-header text-center" style="background-color: #4A90E2; color: #fff;">
                    <h3>Editar Livro: {{ $livro->titulo }}</h3>
                </div>

                <div class="card-body" style="background-color: #F5F5F5;">
                    <form action="{{ route('livros.update', $livro->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-4">
                            <label for="titulo" class="text-dark">Título</label>
                            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $livro->titulo) }}" required style="border-color: #A4D65E;">
                        </div>

                        <div class="form-group mb-4">
                            <label for="autor" class="text-dark">Autor</label>
                            <input type="text" name="autor" id="autor" class="form-control" value="{{ old('autor', $livro->autor) }}" required style="border-color: #A4D65E;">
                        </div>

                        <div class="form-group mb-4">
                            <label for="genero" class="text-dark">Gênero</label>
                            <input type="text" name="genero" id="genero" class="form-control" value="{{ old('genero', $livro->genero) }}" style="border-color: #A4D65E;">
                        </div>

                        <div class="form-group mb-4">
                            <label for="isbn" class="text-dark">ISBN</label>
                            <input type="text" name="isbn" id="isbn" class="form-control" value="{{ old('isbn', $livro->isbn) }}" style="border-color: #A4D65E;">
                        </div>

                        <div class="form-group mb-4">
                            <label for="editora" class="text-dark">Editora</label>
                            <input type="text" name="editora" id="editora" class="form-control" value="{{ old('editora', $livro->editora) }}" style="border-color: #A4D65E;">
                        </div>

                        <div class="form-group mb-4">
                            <label for="ano" class="text-dark">Ano</label>
                            <input type="number" name="ano" id="ano" class="form-control" value="{{ old('ano', $livro->ano) }}" style="border-color: #A4D65E;">
                        </div>

                        <div class="form-group mb-4">
                            <label for="paginas" class="text-dark">Número de Páginas</label>
                            <input type="number" name="paginas" id="paginas" class="form-control" value="{{ old('paginas', $livro->paginas) }}" style="border-color: #A4D65E;">
                        </div>

                        <div class="form-group mb-4">
                            <label for="sinopse" class="text-dark">Sinopse</label>
                            <textarea name="sinopse" id="sinopse" class="form-control" rows="4" style="border-color: #A4D65E;">{{ old('sinopse', $livro->sinopse) }}</textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label for="capa" class="text-dark">Capa do Livro</label>
                            <input type="file" name="capa" id="capa" class="form-control" style="border-color: #A4D65E;" onchange="previewImage(event)">
                            
                            <div id="image-preview" class="mt-3">
                                @if ($livro->capa)
                                    <p>Capa Atual:</p>
                                    <img src="{{ $livro->capa }}" alt="Capa Atual" style="max-width: 100px;">
                                @endif
                                <p id="preview-text" style="display: none;">Nenhuma imagem selecionada.</p>
                                <img id="preview-image" src="" alt="Imagem Selecionada" style="max-width: 100px; display: none;">
                            </div>
                        </div>

                        <div class="form-group mt-5 text-center">
                            <button type="submit" class="btn" style="background-color: #4A90E2; color: white;">Atualizar Livro</button>
                            <a href="{{ route('livros.index') }}" class="btn" style="background-color: #FDD835; color: white;">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        var preview = document.getElementById('preview-image');
        var previewText = document.getElementById('preview-text');
        var file = event.target.files[0];

        if (file) {
            previewText.style.display = 'none';
            var reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'inline-block';
            };

            reader.readAsDataURL(file);
        } else {
            previewText.style.display = 'inline';
            preview.style.display = 'none';
        }
    }
</script>

<script src="{{ asset('js/app.js') }}"></script>

@endsection
