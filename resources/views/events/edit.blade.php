@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3 py-5">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
    @csrf    
    @method('PUT')
        <div class="form-group mb-3 text-start">
            <label for="image">Imagem:</label>
            <input type="file" id="image" name="image" class="form-control">
            <img src="/img/events/{{$event->image}}">
        </div>
        <div class="form-group mb-3 text-start">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}">
        </div>
        <div class="form-group mb-3 text-start">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$event->city}}">
        </div>  
        <div class="form-group mb-3 text-start">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control">{{$event->description}}</textarea>
        </div>
        <div class="form-group mb-3 text-start">
            <label for="date">Data:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y-m-d')}}">
        </div>
        <div class="form-group">
            <label for="items">Itens disponíveis</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="cadeiras">
                <label class="form-check-label" for="cadeiras">
                    Cadeiras
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="Palco">
                <label class="form-check-label" for="palco">
                    Palco
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="Open Bar">
                <label class="form-check-label" for="openbar">
                    Open Bar
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="Brindes">
                <label class="form-check-label" for="brindes">
                    Brindes
                </label>
            </div>
        </div>
        <div class="form-group mb-3 text-start">
            <label for="private">Evento privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
            </select>
        </div>    
        <input type="submit" value="Editar Evento" class="btn btn-primary mt-3">   
    </form>
</div>

@endsection