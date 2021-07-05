@extends('layouts.app')

@section('content')


<form action="/add" method="POST" class="mt-3">
    @csrf
    <div class="mb-3 text-center">
        <label class="form-label display-6">Pseudo</label>
        <input type="text" class="form-control"name='pseudo'>
    </div>
    <div class="mb-3 text-center">
        <label class="form-label display-6">Message</label>
        <textarea class="form-control" rows="3" name='message'></textarea>
    </div>
    <div class="text-center mt-5">
        <input type="submit" value="Envoyer" class="btn btn-primary col-lg-6">
    </div>
</form>

@endsection