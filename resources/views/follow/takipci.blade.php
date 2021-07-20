@extends('layouts.app')

@section('content')
<a class="navbar-brand brand-logo" href= "/home" width="25" height="50" alt="logo" > ~{{$user -> name}}' in {{ __('Takipçileri') }}~</a>
                <main>
                @foreach ($user->following()->get() as $takipci)
            <section>
                <hr>
                <div><a href= "/user/{{ $takipci->id }}">Takipçi: {{ $takipci->name }} </a></div>
                <hr>
            </section>
            @endforeach
    </main>   


@endsection



