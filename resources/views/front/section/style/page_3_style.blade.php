@extends('front.index')

@section('index_page')
    @if($data->count() <=0)
        <p>مقداری یافت نشد</p>
    @else
        <style_1
            :menu="{{$menu}}"
            :data="{{$data}}"
            :name_domain="{{$name_domain}}"
            date="{{jdate()}}"
        >
            <template v-slot:view-btn="slotProps">
                @auth()
                    <li v-if="'{{auth()->user()->id}}' == slotProps.user_id" class="item-menu-style-1"><a href="{{route('admin.index' , ['dom' =>$name_domain->domain])}}" class="set-font f-13">پنل مدریت</a>
                        @endauth
                    </li>
            </template>
            <template #item_category>
                @foreach($all_category as $category)
                    <span class="fl-right slid-style-1">
                        <h2 dir="rtl" align="right" class="set-font color-b-800 f-15">{{$category->title}}</h2>
                        <span class="line fl-right"></span>
                        <span class="fl-right w-100 group-item-view">
                            @foreach($category->category_item as $item_category)
                                {!! $item_category->item !!}
                            @endforeach
                        </span>
                    </span>
                @endforeach
            </template>
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
