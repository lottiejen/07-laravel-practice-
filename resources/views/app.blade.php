<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottie's Vet Practice</title>
</head>
<body>
    <header>
    <nav>
       @include("_partials/nav")
    </nav>
    </header>

    <main>
    @yield('content')
    </main>
    
    <footer><p>@include("_partials/footer")</p></footer>
</body>
</html>