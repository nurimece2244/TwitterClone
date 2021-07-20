@extends('layouts.app')
@section('content')

<a class="navbar-brand brand-logo" href= "/home" width="25" height="50" alt="logo" > Tweets</a>
    <main>
        @foreach ($tweets as $tweet)
            <section>
                <hr>
                <form action="/tweets/{{ $tweet->id }}" method="POST">
    @csrf
    @method('PUT')
                <div><a href= "/user/{{$tweet->user_id}}"> Kullanıcı: {{ $tweet->name }} </a></div>
                <div><a href= "{{ route('tweets.show', $tweet->id)}}" >{{ $tweet->text }}</a></div> 
                <br>
                <like-toggle :tweet-id="{{$tweet->id}}" 
                :is-like ="{{$tweet->isLike() == null ? 'false' : 'true'}}"></like-toggle>
                <br>
                <p> Beğeni Sayısı: <a href= "/tweets/{{$tweet->id}}/likeCount"> {{  $tweet->countLike()->count() }} </a></p>
                <hr>
        @endforeach
    </main>
@endsection
