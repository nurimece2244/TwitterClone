@extends('layouts.app')
@section('content')

<a class="navbar-brand brand-logo"  width="25" height="50" alt="logo" > Tweeti Editle </a>
<form action="/tweets/{{ $tweet->id }}" method="POST">
    @csrf
    @method('PUT')

        <input maxlength="140" name="text" id="tweet-text" type="text" value="{{ $tweet->text }}" >
        @if ($errors->has('text'))
            @foreach ($errors->get('text') as $message)
                <pre>{{ $message }}</pre>
            @endforeach
        @endif

    <div class="form-group row mb-0">
 <div class="mt-3">
  <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >
   {{ __('Editle') }}
  </button>
  </div>
  </div>

@endsection
