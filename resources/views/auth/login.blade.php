@extends('layouts.app')

@section('content')
    <div class="group-item-login select-center">
        <h2 class="set-font color-b-800" align="center">ورود به ایران بلاگ</h2>
        <div class="line"></div>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="group-input-login">
                <input align="right" dir="rtl" type="email" value="{{old('email')}}" name="email" placeholder="ایمیل..." class="f-12 set-font input-login">
                <ul>
                    @error('email')
                        <li class="set-font f-12">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="group-input-login">
                <input align="right" dir="rtl" type="text" value="{{old('password')}}" name="password" placeholder="رمز عبور..." class="f-12 set-font input-login">
                <ul>
                    @error('password')
                        <li class="set-font f-12">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="obj-center">
                <button class="btn-new-blog set-font f-12" dir="rtl">ورود ◄ </button>
            </div>
        </form>
        <div class="line"></div>
        <br>
        <a style="text-align: center;display: block" class="w-100 set-font f-11 text-center" href="{{route('send.google')}}">ورود با گوگل</a>
        <p style="text-align: center" class="text-center f-15 color-b-600 set-font">یا</p>
        <div class="boj-center">
            <p align="center" class="set-font f-11 color-b-700">هنوز ثبت نام نکرده اید ؟ <a href="{{route('register')}}">کلیک کنید</a></p>
        </div>
        <br>
    </div>
@endsection
