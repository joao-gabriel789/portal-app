<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Sengés - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        
    </script>
<body>
    <!-- Navegação -->
    <header>
        <!-- Mostrar o conteudo Principal -->
        @include('partials.navbar')
    </header>
    <!-- Mostrar Conteudo Principal -->
    <main>
    <div class = "container">
        @yield('conteudo')
    </div>
    </main>
    <!-- Rodape: links contato mapas e outros -->
    <footer>
        @include('partials.rodape')
    </footer>
</body>
</html>