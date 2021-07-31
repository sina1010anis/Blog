<template>
    <div class="header_style_1 w-100">
        <span class="set-font fl-left view-data color-b-700 f-13 view-header-style-1">زمان ورود : {{data}}</span>
        <span class="set-font fl-right view-domain color-b-700 f-13 view-header-style-1">{{names.domain}}</span>
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
            <span class="fl-right item-style-1">
                <h1 dir="rtl" align="right" class="set-font"><a href="#" class="color-b-900">Test TiTle</a></h1>
                <p dir="rtl" align="right" class="set-font f-12 color-b-700 m-p-0"> 1400-05-09</p>
                <span class="line fl-right"></span>
                <span dir="rtl" align="right" class="set-font f-14 color-b-900">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi architecto at consequuntur culpa dolores ducimus est eum exercitationem facilis fugiat harum illo, libero, nemo optio reiciendis sapiente voluptatem voluptatibus?
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
        'names',
        'data',
    ]
}
</script>
