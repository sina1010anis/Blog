@extends('front.index')

@section('index_page')
    <div class="group-view-all-panel">
        @include('message.msg_view')
        @include('admin.inc.menu')
        <div class="view-setup fl-right">
        <span class="w-50 fl-right  view-setup-admin-panel"
              style="border-left: 2px solid rgba(222,222,222,0.5);box-sizing: border-box">
            <span class="w-100 fl-left">
                <h3 align="center" class="set-font color-b-600">Default Category</h3>
                <span class="line fl-left"></span>
                @foreach($name_domain->category as $category)
                    <span @click="delete_category('{{$category->id}}' , '{{$name_domain->domain}}')" class="view-item-panel-admin" :id="'view-item-panel-admin'+{{$category->id}}">
                        <a class="set-font color-b-700 w-100 pointer item-menu-view" align="center" dir="rtl">{{$category->title}}<b></b></a>
                    </span>
                @endforeach
            </span>
        </span>
            <span class="w-50 fl-left view-setup-admin-panel">
            <span class="w-100 fl-left">
                <h3 align="center" class="set-font color-b-600">New Category</h3>
                <span class="line fl-left"></span>
                <form class="form-edit-blog" action="{{route('admin.new.category' , ['dom' => $name_domain->domain])}}"
                      method="post">
                    @csrf
                    <div class="group-input-login">
                        <input align="center" dir="rtl" type="text" name="name" placeholder="Name..." class="f-12 set-font input-login">
                        <ul>
                            @error('name')
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
