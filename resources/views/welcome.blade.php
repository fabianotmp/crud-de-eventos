@extends('layouts.main')

@section('title', 'Pagina')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Buscar evento">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{$search}}</h2>
    @else
        <h2>Próximos Eventos</h2>
    @endif
    <div id="card-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3 bg-body-tertiary border-secondary">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">{{date('d/m/Y',strtotime($event->date))}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participantes">x Participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Nenhum registro encontrado! <a href="/">Ver todos</a> </p>
        @elseif(count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>
@endsection