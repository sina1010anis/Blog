<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tiny.cloud/1/ui7m7meq62auo76tzrli607iyke5fls3fd6akvue4zrray2e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="shit">
    <div id="row">
        <div id="app">

            @yield('index_page')
        </div>
    </div>
</div>
</body>
<script src="{{url('js/app.js')}}"></script>
<script>
    tinymce.init({
        selector: '#editor'
    });
</script>
</html>
