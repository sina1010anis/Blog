@extends('front.index')

@section('index_page')
    <div class="group-view-all-panel">
        @include('message.msg_view')
        @include('admin.inc.menu')
        <div class="view-setup fl-right">
        <span class="w-50 fl-right  view-setup-admin-panel"
              style="border-left: 2px solid rgba(222,222,222,0.5);box-sizing: border-box">
            <span class="w-100 fl-left">
                <h3 align="center" class="set-font color-b-600">Default Item Category</h3>
                <span class="line fl-left"></span>
                <br>
                @foreach($categorys as $category)
                    <div class="w-100 view-item-category-panel-admin">
                        <p class="set-font color-b-700 f-13" align="right">{{$category->title}}</p>
                        <div class="line"></div>
                        @foreach($category->category_item as $item)
                            <p class="set-font color-b-600 f-12" align="right">{!!$item->item!!}</p>
                        @endforeach
                    </div>
                @endforeach
            </span>
        </span>
            <span class="w-50 fl-left view-setup-admin-panel">
            <span class="w-100 fl-left">
                <h3 align="center" class="set-font color-b-600">New Item Category</h3>
                <span class="line fl-left"></span>
                <form class="form-edit-blog" action="{{route('admin.new.itemCategory' , ['dom' => $name_domain->domain])}}"
                      method="post">
                    @csrf
                                        <div class="group-input-login">
                        <select align="center" dir="rtl" name="category_id" class="f-12 set-font input-login">
                            @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="group-input-login">
                        <textarea id="editor" name="body">
                            <p>Text...</p>
                        </textarea>
                        <ul>
                            @error('body')
                            <li class="set-font f-12">{{$message}}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="obj-center">
                        <button class="btn-new-blog set-font f-12" dir="rtl">SAVE ◄ </button>
                    </div>
                </form>
            </span>
        </span>
        </div>
    </div>
@endsection

