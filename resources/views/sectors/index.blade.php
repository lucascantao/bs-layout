@extends('app')
@section('title', 'setores')
@section('content')

<div class="bg-white p-1">
    <i class="bi bi-archive-fill"></i>
    Setores
</div>
<div class="bg-white m-4 px-4 py-2">
    <div>
        @if(session()->has('success'))
            <div class="alert alert-success" id="successMessage">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <span>Relação de Setores</span>
    <hr>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Sigla</th>
            <th scope="col">Nome</th>
            <th scope="col" colspan="2" class="text-center">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sectors as $sector)
            <tr>
                <td>{{$sector->id}}</td>
                <td>{{$sector->sigla}}</td>
                <td>{{$sector->nome}}</td>
                <td><a class="btn btn-warning" href="{{route('sector.edit', ['sector' => $sector])}}"   role="button">Editar</a></td>
                <td>
                    <form method="post" >
                        @csrf
                        {{-- @method('delete') --}}
                        <input type="submit" value="Excluir" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{route('sector.create')}}" role="button">Cadastrar</a>
</div>

<!-- Script par sumir mensagem de confirmação -->
<script>
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 2000);
</script>
@endsection    
