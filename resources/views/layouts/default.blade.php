<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <nav id="navigation">
            <a href="/">Home</a>
            @foreach ($categories as $category)
                <a href="{{ route('category', $category) }}">{{ ucfirst($category) }}</a>
            @endforeach
        </nav>
        
        <div class="container">
            <header id="header">
                @yield('pageTitle')
            </header>
            
            <div class="content">
                @yield('content')
            </div>
        </div>

        <footer id="footer">
            &copy; Copyright 2016
        </footer>

        <script src="js/bundle.js"></script>

    </body>
</html>