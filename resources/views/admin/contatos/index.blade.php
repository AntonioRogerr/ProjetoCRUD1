<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container">
<br>
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h1 class="mb-3 mb-lg-1">Tabela de Cadastros</h1>
        </div>
        <div class="col-lg-6 text-lg-end">
            <a href="{{ route('contatos.create') }}" class="btn btn-success">Realizar Cadastro</a>
        </div>
    </div>
    

{{-- <h1>Tabela de Cadastros</h1>

<div class="col-lg-12" style="text-align: right;">
    <a href="{{ route('contatos.create') }}" class="btn btn-success">Realizar Cadastro</a>
</div> --}}

<form action="{{ route('contatos.search') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Buscar por nome ou sobrenome">
        <button type="submit" class="btn btn-outline-primary">Buscar</button>
    </div>
</form>

<table class="table table-striped table-bordered">
    <thead>
        <th>#</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Data de Nascimento</th>
        <th>Telefone</th>
        <th>E-mail</th>
    </thead>
    <body>
        @foreach ($contatos as $contato)
        <tr>
            <td>{{ $contato->id }} </td>
            <td>{{ $contato->nome }} </td>
            <td>{{ $contato->sobrenome }} </td>
            <td>{{ $contato->data_nascimento }} </td>
            <td>{{ $contato->telefone }} </td>
            <td>{{ $contato->email }} </td>
            <td class="d-flex justify-content-center">
                <form action="{{ route('contatos.destroy',  ['id'=>$contato->id]) }}" method="POST">
                    @csrf
                    <a href="{{ route('contatos.edit', ['id'=>$contato->id]) }}" class="btn btn-primary me-2">          
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                        </svg>
                    </a>
                    @method('DELETE')
                    <button type="submit" onclick="confirmarExclusao()" class="btn btn-danger">                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg></button>
                </form>

                <script>
                    function confirmarExclusao() {
                        if (confirm("Tem certeza que deseja realizar a exclusão?")) {
                            document.getElementById('formExcluir').submit();
                        }
                    }
                </script>
            </td>
        </tr>
            
        @endforeach
    </body>
</table>
</div> 