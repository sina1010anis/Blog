@extends('front.index')

@section('index_page')
    <style_1 :data="{{$data}}" :name_domain="{{$name_domain}}" date="{{jdate()}}">
        <template v-slot:dec_min="slotProps">
            <p>
                @{{slotProps.text_item}}
            </p>
        </template>
        <template v-slot:date_item="slotProps">
            <p>@{{ slotProps.date_time_item }}</p>
        </template>
    </style_1>
@endsection
