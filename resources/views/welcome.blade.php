@extends ('layouts.main')

@section('title','RL Eventos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="get">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search){
    <h2>Buscando por: {{$search}}</h2>
    @else
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif  

@endsection
