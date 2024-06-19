<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container">
    <br>
    <h1>Editar Cadastro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contatos.update', ['id'=>$contatos->id]) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite um nome" value="{{ old('nome', $contatos->nome) }}">
        </div>
        
        <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" class="form-control" placeholder="Digite um sobrenome" value="{{ old('sobrenome',$contatos->sobrenome) }}">
        </div>
        
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" class="form-control" placeholder="Digite uma idade" value="{{ old('idade', $contatos->idade) }}">
        </div>

        <div class="form-group">    
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Digite um número de telefone"value="{{ old('telefone',$contatos->telefone) }}">
        </div>
        
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email"  class="form-control"placeholder="Digite um e-mail" value="{{ old('email', $contatos->email) }}">
        </div>
        <div class="d-flex justify-content-center w-100">
            <input type="submit" value="Atualizar" class="btn btn-primary m-1"> 

        </div>
    </form>
</div> 
