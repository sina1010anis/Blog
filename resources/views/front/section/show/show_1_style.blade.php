@extends('front.index')

@section('index_page')
    <show_style_1 :comments="{{$comments}}" :data="{{$nameItem}}">
        <template #form_new_comment>
            @if(session('msg'))
                <p>{{session('msg')}}</p>
            @endif
            <form method="post" action="{{route('blog.new_comment' , ['dom' => $name_domain->domain , 'id' => $nameItem->id])}}" id="commentform" class="comment-form">
                @csrf
                <div class="comment-form-name">
                    <input value="{{old('name')}}" @error('name') class="border-danger" @enderror id="name" placeholder="Name *" name="name" type="text">
                    <label for="name" data-help="¿Are you 11 from Stranger Things?">Name</label>
                    @error('name')
                        <p class="set-font color-b-800">{{$message}}</p>
                    @enderror
                </div>
                <div class="comment-form-surname">
                    <input value="{{old('sur_name')}}" @error('sur_name') class="border-danger" @enderror id="surname" placeholder="Surname *" name="sur_name" type="text">
                    <label for="surname" data-help="A girl has no name- Arya Stark">Surname</label>
                    @error('sur_name')
                        <p class="set-font color-b-800">{{$message}}</p>
                    @enderror
                </div>
                <div class="comment-form-email">
                    <input value="{{old('email')}}" id="email" @error('email') class="border-danger" @enderror placeholder="Email *" name="email" type="text" >
                    <label for="email">Email</label>
                    @error('email')
                        <p class="set-font color-b-800">{{$message}}</p>
                    @enderror
                </div>
                <div class="comment-form-url">
                    <input value="{{old('url')}}" id="url" placeholder="Website" name="url" type="url">
                    <label for="url" data-help="Should start with http:// o https://">Website</label>
                </div>
                <div class="comment-form-comment">
                    <textarea @error('title') class="border-danger" @enderror textarea="" placeholder="Title *" id="comment" name="title">{{old('title')}}</textarea>
                    <label for="comment" data-help="Escribe algo! Lo primero que se te ocurra">Title</label>
                    @error('title')
                    <p class="set-font color-b-800">{{$message}}</p>
                    @enderror
                </div>
                <div class="comment-form-comment">
                    <textarea @error('comment') class="border-danger" @enderror textarea="" placeholder="Comment *" id="comment" name="comment">{{old('comment')}}</textarea>
                    <label for="comment" data-help="Escribe algo! Lo primero que se te ocurra">Comment</label>
                    @error('comment')
                        <p class="set-font color-b-800">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-submit">
                    <input name="submit" type="submit" id="submit" class="submit set-font" value="ثبت">
                </div>
            </form>
        </template>
    </show_style_1>
@endsection
