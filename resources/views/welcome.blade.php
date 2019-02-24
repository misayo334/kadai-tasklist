@extends('layouts.app')

@section('content')

    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to Task List!</h1>
            <br>

            @if (Auth::check())
                <!--基本ここにくることはないと思われる。
                {!! link_to_route('logout.get', 'Logout' , [], ['class' => 'btn btn-lg btn-secondary']) !!}-->
            @else
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
                <br>
                <br>
                {!! link_to_route('login', 'Login', [], ['class' => 'btn btn-lg btn-primary']) !!}
            @endif
        </div>
    </div>
@endsection
