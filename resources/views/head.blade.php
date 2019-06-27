<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/headerFront.css" rel="stylesheet"> 
    <link href="/css/content.css" rel="stylesheet"> 
    <link href="/css/footer.css" rel="stylesheet"> 
    <script src="/js/app.js" ></script>   
    <script src="/js/jquery-3.3.1.slim.min.js" ></script>    
    <title>Home Page</title>
</head>
<body>
    
    @yield('content')
    
    
</body>
</html>