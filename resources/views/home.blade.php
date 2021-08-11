<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body class="back-index-page">
<div id="shit">
    <div id="row">
        <div id="app">
            <?php
                $data = \App\Models\Blog::whereUser_id(auth()->user()->id)->first();
                $count = \App\Models\Blog::whereUser_id(auth()->user()->id)->count();
            ?>
            @if($count == 0)
                <div class="select-center">
                    <h1 align="center" class="set-font text-center f-18 color-b-500">برای این کاربر وبلاگی <span
                            style="color: #ff3c3c">نشد</span></h1>
                    <a @click="vie_form_new_blog" style="width: 90%!important;"
                       class="obj-center set-font f-15 btn-new-blog pointer">ساخت وبلاگ جدید</a>
                </div>

                <div class="new-blog-view-form select-center">
                    <i @click="cls_page_new_blog" style="color: #ff2424"
                       class="fas fa-times pointer item-option-comment-panel-admin f-13"></i>
                    <h1 align="center" class="set-font color-b-600">New Weblog</h1>
                    <div class="line"></div>
                    <form action="{{route('newBlog')}}" method="post">
                        @csrf
                        <div class="group-input-login">
                            <label class="set-font color-b-500 f-12" for="input-domain">Domain</label>
                            <input id="input-domain" dir="rtl" value="{{old('domain')}}" type="text" name="domain"
                                   placeholder="Domain..." class="f-12 set-font input-login">
                            <ul>
                                @error('domain')
                                <li class="set-font f-12">{{$message}}</li>
                                @enderror
                            </ul>
                        </div>
                        <div class="group-input-login">
                            <label class="set-font color-b-500 f-12" for="input-title">Title</label>
                            <input id="input-title" dir="rtl" value="{{old('title')}}" type="text" name="title"
                                   placeholder="Title..." class="f-12 set-font input-login">
                            <ul>
                                @error('domain')
                                <li class="set-font f-12">{{$message}}</li>
                                @enderror
                            </ul>
                        </div>
                        <div class="group-input-login">
                            <label class="set-font color-b-500 f-12" for="input-description">Description</label>
                            <textarea id="input-description" dir="rtl" type="text" name="description" placeholder="Description..."
                                      class="textarea f-12 set-font input-login">{{old('description')}}</textarea>
                            <ul>
                                @error('description')
                                <li class="set-font f-12">{{$message}}</li>
                                @enderror
                            </ul>
                        </div>
                        <div class="group-input-login">
                            <label class="set-font color-b-500 f-12" for="input-style">Style</label>
                            <select id="input-style" align="center" dir="rtl" name="style"
                                    class="f-12 set-font input-login">
                                <option value="1">Style 1</option>
                                <option value="2">Style 2</option>
                            </select>
                        </div>
                        <div class="obj-center">
                            <button class="btn-new-blog set-font f-12" dir="rtl">SAVE ◄</button>
                        </div>
                    </form>
                </div>
                @else
                    <div class="select-center">
                        <h1 align="center" class="set-font text-center f-18 color-b-500">وبلاگ شما <span style="color: #1cd068">فعال</span> می باشد </h1>
                        <a href="{{route('admin.index' , ['dom' => $data->domain])}}" style="width: 90%!important;" class="obj-center set-font f-15 btn-new-blog pointer">پنل مدریت</a>
                        <a href="{{route('blog.test' , ['dom' => $data->domain])}}" style="width: 90%!important;" class="obj-center set-font f-15 btn-new-blog pointer">نمایش</a>
                    </div>
            @endif
        </div>
    </div>
</div>
</body>
<script src="{{url('js/app.js')}}"></script>
</html>
