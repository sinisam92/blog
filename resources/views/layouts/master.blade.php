<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title> @yield('title') </title>
</head>
<body>
 
    <main role="main" class="container">
        @include('layouts.partials.header')
            @if($flash = session('message'))
                <div class="alert alert-success">
                    {{ $flash }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-8 blog-main">
                     @yield('content')
                </div><!-- /.blog-main -->
        
                <aside class="col-md-4 blog-sidebar">
                    @include('layouts.partials.sidebar')
                </aside><!-- /.blog-sidebar -->
        
            </div><!-- /.row -->
            @include('layouts.partials.footer')
     </main><!-- /.container -->
    
    
</body>
</html>