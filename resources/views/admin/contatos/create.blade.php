<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container">
    <br>
    <h1>Novo Cadastro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contatos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite um nome" value="{{ old('nome') }}">
        </div>

        <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" class="form-control" placeholder="Digite um sobrenome" value="{{ old('sobrenome') }}">
        </div>

        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" class="form-control" placeholder="Digite uma idade" value="{{ old('idade') }}">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Digite um número de telefone" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" required value="{{ old('telefone') }}">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Digite um e-mail" value="{{ old('email') }}">
        </div>

        <button type="submit" class="btn btn-primary m-1">Cadastrar</button>
    </form>
</div> 



{{-- <div class="container">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


<h1>Novo Cadastro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('contatos.store') }}" method="POST">

@csrf

<label for="nome">Nome:</label><br>
<input type="text" id="nome" name="nome" placeholder="Digite um nome"><br><br>

<label for="sobrenome">Sobrenome:</label><br>
<input type="text" id="sobrenome" name="sobrenome" placeholder="Digite um sobrenome"><br><br>

        
<label for="idade">Idade:</label><br>
<input type="number" id="idade" name="idade" placeholder="Digite uma idade"><br><br>
    
<label for="telefone">Telefone:</label><br>
<input type="text" id="telefone" name="telefone" placeholder="Digite um número de telefone"><br><br>
        
<label for="email">E-mail:</label><br>
<input type="email" id="email" name="email" placeholder="Digite um e-mail"><br><br>
        
<input type="submit" value="Cadastrar" class="btn btn-primary">
</form>
</div> --}}