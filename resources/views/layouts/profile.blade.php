@extends('layouts.app')

@section('content')
<div class="navbar-brand brand-logo" width="25" height="50" alt="logo" >~ {{$user -> name}}' in {{ __('Profili') }} ~</div>
    <div class="navbar-brand brand-logo" width="25" height="50" alt="logo" >{{ $user -> email}}</div>

                    <p> Takipci: <a href="/user/{{$user->id}}/takipci"> {{  $user->following()->count() }} </a></p>  
                    <p> TakipEdilen: <a href= "/user/{{$user->id}}/takipEdilen"> {{  $user->followers()->count() }} </a></p>

                    <div>   <friend-toggle :user-id="{{$user->id}}" 
                :is-friend ="{{$user->isFriend() == null ? 'false' : 'true'}}"></friend-toggle>

                </div>
@endsection



