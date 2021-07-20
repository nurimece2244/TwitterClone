@extends('layouts.app')
@section('content')

<a class="navbar-brand brand-logo"  width="25" height="50" alt="logo" > ~ Beğenenler {{  $tweet->countLike()->count() }}~</a>
    <main>
        @foreach ($tweet-> countLike()->get() as $tweet)
        <section>
                <hr>
                <form action="/tweets/{{ $tweet->id }}" method="POST">
    @csrf
    @method('PUT')

            <section>
                <hr>
                <p> Beğenen(ler): <a href= "/user/{{$tweet->id}}">  {{  $tweet -> name }}  </a></p>
                <hr>
        @endforeach
    </main>
    
@endsection
