@extends('layouts.app')

@section('content')

<form action="/edit" method="POST">
  @csrf
  <input type="hidden" name="id" value="@foreach ($data as $object){{ $object->id }}@endforeach">
  <div class="mb-3 text-center">
    <label for="exampleInputPassword1" class="form-label display-6">Nouveau pseudo</label>
    <input type="text" class="form-control" name="pseudo" value=" @foreach ($data as $object){{ $object->pseudo }}@endforeach ">
  </div>
    <div class="mb-3 text-center">
      <label for="exampleInputPassword1" class="form-label display-6">Nouveau message</label>
      <input type="text" class="form-control" name="message" value=" @foreach ($data as $object){{ $object->message }}@endforeach ">
    </div>
    <div class="text-center mt-5">
      <input type="submit" value="Envoyer" class="btn btn-primary col-lg-6">
  </div>
  </form>

@endsection