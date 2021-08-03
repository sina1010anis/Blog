@extends('front.index')

@section('index_page')
    @if($data->count() <=0)
        <p>مقداری یافت نشد</p>
    @else
        <style_1 :menu="{{$menu}}" :data="{{$data}}" :name_domain="{{$name_domain}}" date="{{jdate()}}">
            <template v-slot:dec_min="slotProps">
                <p>
                    @{{slotProps.text_item}}
                </p>
            </template>
            <template v-slot:date_item="slotProps">
                <p>@{{ slotProps.date_time_item }}</p>
            </template>
        </style_1>
    @endif
@endsection
