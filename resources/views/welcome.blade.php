<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
</head>
<body class="back-index-page">
<div id="shit">
    <div id="row">
        <div id="app">
            <div class="select-center">
                <h1 align="center" class="set-font text-center text-view-index-page color-b-700">ایران <b>بلاگ</b></h1>
                <h1 align="center" class="set-font text-center f-18 color-b-500">با ایران بلاگ بهتر دیده شودید</h1>
                @if(!auth()->check())
                    <a class="obj-center set-font f-15 btn-new-blog" href="{{route('login')}}">ساخت بلاگ</a>
                @else
                    <a class="obj-center set-font f-15 btn-new-blog" href="{{route('login')}}">تنظیمات</a>
                @endif
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{url('js/app.js')}}"></script>
</html>
