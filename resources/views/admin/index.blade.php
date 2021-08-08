@extends('front.index')

@section('index_page')
    <div class="group-view-all-panel">
        @include('message.msg_view')
        @include('admin.inc.menu')
        <panel_admin :blog="{{$name_domain}}">
            <template #view_user>
                <span class="view-item-panel-admin">
                    <a class="set-font color-b-700 w-100" align="center" dir="rtl">Admin : <b>{{$name_domain->user->name}}</b></a>
                </span>
            </template>
            <template #form_edit_blog>
                <form class="form-edit-blog" action="{{route('admin.edit_blog' , ['dom' => $name_domain->domain])}}" method="post">
                    @csrf
                    <div class="group-input-login">
                        <input align="center" dir="rtl" type="text" value="{{$name_domain->title}}" name="title" placeholder="Title..." class="f-12 set-font input-login">
                        <ul>
                            @error('title')
                            <li class="set-font f-12">{{$message}}</li>
                            @enderror
                        </ul>
                    </div>

                    <div class="group-input-login">
                        <input align="center" dir="rtl" type="text" value="{{$name_domain->dec_min}}" name="dec_min" placeholder="dec_min..." class="f-12 set-font input-login">
                        <ul>
                            @error('dec_min')
                            <li class="set-font f-12">{{$message}}</li>
                            @enderror
                        </ul>
                    </div>

                    <div class="group-input-login">
                        <select align="center" dir="rtl" name="style" class="f-12 set-font input-login">
                            <option value="1">Style 1</option>
                            <option value="2">Style 2</option>
                            <option value="3">Style 3</option>
                        </select>
                    </div>
                    <div class="obj-center">
                        <button class="btn-new-blog set-font f-12" dir="rtl">SAVE ◄ </button>
                    </div>
                </form>
            </template>
        </panel_admin>
    </div>
@endsection
