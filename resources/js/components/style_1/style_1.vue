<template>
    <div class="header_style_1 w-100">
        <span class="set-font fl-left view-data color-b-700 f-13 view-header-style-1">زمان ورود : {{ date }}</span>
        <span class="set-font fl-right view-domain color-b-700 f-13 view-header-style-1">{{ name_domain.domain }}</span>
    </div>
    <div class="slider-st-model">
        <img src="/img/1.jpg" alt="">
    </div>
    <div class="menu-view-style-1 w-100">
        <ul>
            <li v-for="i in menu" class="item-menu-style-1"><a class="set-font f-13"
                                                               :href="'/Iran-Blog/'+name_domain.domain+'/menu/'+i.name">{{
                    i.name
                }}</a>
            </li>
            <slot name="view-btn" :user_id="name_domain.user_id"/>
        </ul>
    </div>
    <div class="view-item-and-slid">
        <span class="view-item-style-1">
            <span v-for='i in data' class="fl-right item-style-1">
                <h1 dir="rtl" align="right" class="set-font"><a :href="/Iran-Blog/+name_domain.domain+'/'+i.title"
                                                                class="color-b-900">{{ i.title }}</a></h1>
                <p dir="rtl" align="right" class="set-font f-12 color-b-700 m-p-0"> <slot name="date_item"
                                                                                          :date_time_item="i.created_at"/></p>
                <span class="line fl-right"></span>
                <span dir="rtl" align="right" class="set-font f-14 color-b-900">
                    <slot name="dec_min" :text_item="i.body"></slot>
                </span>
            </span>
        </span>
        <span class="view-slid-style-1">
            <span class="fl-right slid-style-1">
                <h2 dir="rtl" align="right" class="set-font color-b-800 f-15">جستوجو خبر ها !</h2>
                <span class="line fl-right"></span>
                <input v-model="search_text" @keyup="search_to_news(name_domain.id)" type="text"
                       class="input-back set-font f-10 search_to_news" align="right" dir="rtl" name="search_to_news"
                       placeholder="جستوجو در خبر ها">
            </span>
                    <slot name="item_category"/>
        </span>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "style_1",
    data: () => ({
        search_text: '',
        id_domain: '',
    }),
    props: [
        'name_domain',
        'date',
        'data',
        'domain',
        'menu',
        'category',
    ],
    methods: {
        search_to_news(id) {
            this.id_domain = id
            if (this.search_text != '') {
                axios.post('/search/item', {data: this.search_text, id: this.id_domain}).then((res) => {
                    $('.view-item-style-1').html(res.data)
                })
            }
        },
    }
}
</script>
