@extends('front.index')

@section('index_page')
    <file :names="{{$dom}}" data="{{jdate()}}"></file>
@endsection
