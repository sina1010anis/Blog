<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    {!! htmlScriptTagJsApi() !!}
</head>
<body class="back-index-page">
<div id="shit">
    <div id="row">
        <div id="app">
            @yield('content')
        </div>
    </div>
</div>
</body>
<script src="{{url('js/app.js')}}"></script>
</html>
