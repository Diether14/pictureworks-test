@extends('result.layout')
@section('content')
    <section id="main">
        <header>
            <span class="avatar"><img src="{{asset('storage/users/'.$user->id.'.jpg')}}" alt="" /></span>
            <h1>{{$user->name}}</h1>
             <p>{{ nl2br($user->comments) }}</p>
        </header>
    </section>
@endsection