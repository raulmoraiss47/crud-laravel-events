@extends('layouts.main')

@section('Title', 'Criar evento')

@section ('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>    
    <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
            <label for="image">Imagem do Evento:</label>
           <input type="file" id="image" name="image" class="form-control-file">
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento">
        </div><br>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" name="date" id="date">
        </div><br>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Nome do cidade">
        </div><br>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div><br>
        <div class="form-group">
            <label for="title">Descrição</label><br>
            <textarea name="description" id="description" class="form-control" placeholder="Qual o seu evento?"></textarea>           
        </div>
        <div class="form-group"><br>
            <label for="title">Adicione itens de infraestrutura:</label><br> <br>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="cerveja gratis"> Cerveja Grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="cadeiras"> Cadeiras
            </div>    
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div> 
        </div>              
            <input type="submit" class="btn btn-warning" value="Criar Evento">            
    </form>
</div>

@endsection