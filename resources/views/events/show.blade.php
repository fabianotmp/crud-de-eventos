@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1 py-5 text-start">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-fluid">
        </div>
    </div>
    <div id="info-container" class="col-md-6 bg-body-tertiary p-3 rounded border mt-3">
        <h1>{{$event->title}}</h1>
        <p class="event-city"><i class="bi bi-geo-alt"></i> {{$event->city}}</p>
        <p class="event-date"><i class="bi bi-calendar4-event"></i> {{ date('d/m/Y', strtotime($event->date))}}</p>
        <p class="participants"><i class="bi bi-person"></i> {{count($event->users)}} Participantes</p>
        <p class="event-owner"><i class="bi bi-star"></i> {{$eventOwner['name']}}</p>
        <h3 class="mt-4">O evento conta com:</h3>
        <ul class="list-group list-group-flush mb-4">
            @foreach($event->items as $item)
            <li class="list-group-item"><i class="bi bi-check2-circle me-2"></i>{{$item}}</li>
            @endforeach
        </ul>  
    
        <form action="/events/join/{{$event->id}}" method="POST">
            @csrf
           <a href="/events/join/{{$event->id}}" 
            class="btn btn-primary w-100" 
            id="event-submit"
            onclick="event.preventDefault();
            this.closest('form').submit();">
            Confirmar Presença
            </a>  
        </form>     
    </div>
    <div class="col-md-12 mt-4" id="description-container">
        <h3>Sobre o evento:</h3>
        <p class="event-description">{{$event->description}}</p>
    </div>
</div>

@endsection