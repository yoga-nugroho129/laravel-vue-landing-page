<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Hosting Indonesia Unlimited & Terbaik - Niagahoster</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/9e2e2b802d.js" crossorigin="anonymous"></script>
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="app">
          <navbar></navbar>
          @yield('content')
          <footer-page></footer-page>
        </div>
    </body>
</html>
