@extends('layout.app')
@section('content')
<h1>Welcome to <em style="text-decoration: underline">NOBLOG!</em></h1>
<div class="noposts">

    @foreach ($noposts as $nopost)
    <div class="card">
        <h2 style="color: yellow">{{ $nopost['title'] }}</h2>
        <p>{{ $nopost['content'] }}</p>
    </div>
    @endforeach

</div>
@endsection