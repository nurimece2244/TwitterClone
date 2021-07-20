@extends('layouts.app')
@section('content')

<a class="navbar-brand brand-logo" width="25" height="50" alt="logo" > {{$tweet->text }} </a>

    @if (Auth::id() == $tweet->user->id)
        <a href="/tweets/{{ $tweet->id }}/edit"> Edit Tweet</a>

        <form action="/tweets/{{ $tweet->id }}" method="POST">
            @csrf
            @method('DELETE')
            
            <div class="form-group row mb-0">
 <div class="mt-3">
  <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >
   {{ __('Tweeti Sil') }}
  </button>
  </div>
  </div>
        </form>
    @endif
<br>
    <form action="/comments?tweetid={{ $tweet->id }}" method="POST">
        @csrf
        <label for="comment">Tweeti yanıtla</label>
        <input type="text" maxlength="140" name="text" id="comment">
        <div class="form-group row mb-0">
 <div class="mt-3">
  <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >
   {{ __('Yanıtla') }}
  </button>
  </div>
  </div>
        @error('text')
            <div>{{ $message }}</div>
        @enderror
    </form>
    <br>
    @foreach ($tweet->comments as $comment)
        <div>
            <hr>
            <p>-- {{ $comment->user->name }} --</p>
            <p>{{ $comment->text }}</p>
            <hr>
        </div>
    @endforeach

    </ul>


    <form action="/tweets" method="GET">
    @csrf
    </div>

</form>
@endsection



