@extends('layouts.app')

@section('content')

@foreach($messageAll as $message)
    <div class='col-lg-11 bg-light m-auto mt-3 p-3'>
        <p>Posté le : {{$message->created_at}} - Par : {{$message->pseudo}}</p>
        <div class="col-lg-12 text-center border border-dark m-auto mb-3"></div>
        <p>{{$message->message}}</p>
        
        <a class="btn btn-primary" href=" {{"delete/"}}{{$message->id}} " role="button">Supprimer</a>
        <a class="btn btn-primary" href=" {{"edit/"}}{{$message->id}} " role="button">Modifier</a>
    </div>
    
@endforeach



@endsection