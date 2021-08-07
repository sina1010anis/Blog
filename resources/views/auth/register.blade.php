@extends('layouts.app')

@section('content')
    <div class="group-item-login select-center">
        <h2 class="set-font color-b-800" align="center">ورود به ایران بلاگ</h2>
        <div class="line"></div>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="group-input-login">
                <input align="right" dir="rtl" type="text" value="{{old('name')}}" name="name" placeholder="نام..." class="f-12 set-font input-login">
                <ul>
                    @error('name')
                    <li class="set-font f-12">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="group-input-login">
                <input align="right" dir="rtl" type="email" value="{{old('email')}}" name="email" placeholder="ایمیل..." class="f-12 set-font input-login">
                <ul>
                    @error('email')
                    <li class="set-font f-12">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="group-input-login">
                <input align="right" dir="rtl" type="password" value="{{old('password')}}" name="password" placeholder="رمز عبور..." class="f-12 set-font input-login">
                <ul>
                    @error('password')
                    <li class="set-font f-12">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="group-input-login">
                <input align="right" dir="rtl" type="password" value="{{old('password_confirmation')}}" name="password_confirmation" placeholder="تکرار رمز عبور..." class="f-12 set-font input-login">
                <ul>
                    @error('password_confirmation')
                    <li class="set-font f-12">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="group-input-login">
                {!! htmlFormSnippet() !!}
                <ul>
                    @error('g-recaptcha-response')
                    <li class="set-font f-12">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="obj-center">
                <button class="btn-new-blog set-font f-12" dir="rtl">عضو ◄ </button>
            </div>
        </form>
        <div class="line"></div>
        <br>
        <div class="boj-center">
            <p align="center" class="set-font f-11 color-b-700">ثبت نام کرده ایید ؟ <a href="{{route('login')}}">کلیک کنید</a></p>
        </div>
        <br>
    </div>
@endsection
