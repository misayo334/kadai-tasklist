<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Task List</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
<!--ここはあとで修正必要！！-->
                @if (Auth::check())
                    <li class="nav-link">{{ Auth::user()->name }}</li>
                    <li>{!! link_to_route('tasks.create', 'New Task', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('logout.get', 'Logout', [], ['class' => 'nav-link']) !!}</li>
                @else
                    <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>

                @endif
<!--ここはあとで修正必要！！（終わり）-->
            </ul>
        </div>
    </nav>
</header>