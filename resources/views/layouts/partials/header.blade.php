<header class="blog-header py-3">
    <div class="row flex-nowrap">
        <div class="col-4 pt-1">
        <a class="text-muted" href="/posts/create">Create Post</a>
        </div>
        <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="/">Posts</a>
        </div>
        <div class="col-4 d-flex">
        
            @if(auth()->check())
                Hello, {{auth()->user()->name}}.
                <a href="/logout">Logout</a>
            @else
                <a href="/login">Login</a>
                <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
            @endif
        </div>
    </div>
</header>
