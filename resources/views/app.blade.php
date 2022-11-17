<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        
        <div id="app" v-cloak>
            <div class="container">
                <nav class="navbar navbar-light bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="/">Home</a>
                  </div>
                </nav>
                <div class="row">
                    @foreach($data as $datum)
                        <image-component :datum="{{json_encode($datum)}}"></image-component>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
    <script src="/js/app.js"></script>
</html>
