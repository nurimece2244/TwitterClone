@extends('layouts.app')
@section('content')

<a class="navbar-brand brand-logo" href= "/home" width="25" height="50" alt="logo" > {{ Auth::user()->name }} Tweetle!</a>
<form action="/tweets" method="POST">
    @csrf
    <div class="textarea-container">
      <textarea maxlength="140" id="tweet-text" rows="5" cols="40" name="text" placeholder="140 characters max"></textarea> 
        @if ($errors->has('text'))
            @foreach ($errors->get('text') as $message)
                <pre>{{ $message }}</pre>
            @endforeach
        @endif
</div>
<div class="form-group row mb-0">
 <div class="mt-3">
  <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >
   {{ __('Tweetle') }}
  </button>
  </div>
  </div>
</form>

@endsection
