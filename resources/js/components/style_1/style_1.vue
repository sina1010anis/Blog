<template>
    <div class="header_style_1 w-100">
        <span class="set-font fl-left view-data color-b-700 f-13 view-header-style-1">زمان ورود : {{date}}</span>
        <span class="set-font fl-right view-domain color-b-700 f-13 view-header-style-1">{{name_domain.domain}}</span>
    </div>
    <div class="slider-st-model">
        <img src="/img/1.jpg" alt="">
    </div>
    <div class="menu-view-style-1 w-100">
        <ul>
            <li class="item-menu-style-1"><a href="">1</a></li>
            <li class="item-menu-style-1"><a href="">1</a></li>
            <li class="item-menu-style-1"><a href="">1</a></li>
            <li class="item-menu-style-1"><a href="">1</a></li>
            <li class="item-menu-style-1"><a href="">1</a></li>
        </ul>
    </div>
    <div class="view-item-and-slid">
        <span class="view-item-style-1">
            <span  v-for='i in data' class="fl-right item-style-1">
                <h1 dir="rtl" align="right" class="set-font"><a :href="/Iran-Blog/+name_domain.domain+'/'+i.title" class="color-b-900">{{i.title}}</a></h1>
                <p dir="rtl" align="right" class="set-font f-12 color-b-700 m-p-0"> <slot name="date_item" :date_time_item="i.created_at" /></p>
                <span class="line fl-right"></span>
                <span dir="rtl" align="right" class="set-font f-14 color-b-900">
                    <slot name="dec_min" :text_item="i.body"></slot>
                </span>
            </span>
        </span>
        <span class="view-slid-style-1">
            <span class="fl-right slid-style-1">
                <h2 dir="rtl" align="right" class="set-font color-b-800">Test Text</h2>
                <span class="line fl-right"></span>
                <p>1</p>
                <p>1</p>
                <p>1</p>
                <p>1</p>
                <p>1</p>
                <p>1</p>
                <p>1</p>
            </span>
        </span>
    </div>
</template>

<script>
export default {
    name: "style_1",
    props:[
        'name_domain',
        'date',
        'data',
        'domain',
    ]
}
</script>
