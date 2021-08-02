<template>
    <div class="slider-st-model">
        <img src="/img/1.jpg" alt="">
    </div>
    {{ data.domain }}
    <div class="show-item-one-style-1">
        <h2 dir="rtl" align="right" class="set-font">{{ data.title }}</h2>
        <p dir="rtl" align="right" class="set-font f-12 color-b-700 m-p-0">{{ data.created_at }}</p>
        <div class="line"></div>
        <p dir="rtl" align="right" class="set-font f-14 color-b-900">
            {{ data.body }}
        </p>
        <div class="line"></div>
        <div class="group-key-words" style="overflow: auto">
            <span class="fl-right set-font f-11">{{ data.key_word }}</span>
        </div>
    </div>
    <div class="show-item-one-style-1">
        <div class="comment-section">
            <h1 align="right" class="comment-reply-title set-font color-b-700">کامت جدید</h1>
            <slot name="form_new_comment"/>
        </div>
    </div>
    <div class="show-item-one-style-1">
        <div class="container">
            <div class="response-group">
                <div class="header-dropdown">
                    <div class="panel">
                        <ul>
                            <li>
                                <h2>
                                    Activity Title
                                </h2>
                                <span>2/4</span>
                                <div class="progress">
                                    <div class="progress__complete"></div>
                                </div>
                            </li>
                            <li>
                                <h2>
                                    Activity Title
                                </h2>
                                <span>2/4</span>
                                <div class="progress">
                                    <div class="progress__complete"></div>
                                </div>
                            </li>
                            <li>
                                <h2>
                                    Activity Title
                                </h2>
                                <span>2/4</span>
                                <div class="progress">
                                    <div class="progress__complete"></div>
                                </div>
                            </li>
                            <li>
                                <h2>
                                    Activity Title
                                </h2>
                                <span>2/4</span>
                                <div class="progress">
                                    <div class="progress__complete"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="response">
                    <div v-for="i in comments" class="post-group">
                        <div class="post" style="overflow: auto">
                            <div class="post__avatar"></div>
                            <h3 class="post__author">
                                {{ i.name }} {{ i.sur_name }}
                            </h3>
                            <h4 class="post__timestamp">
                                {{ i.created_at }}
                            </h4>
                            <p class="post__body">
                                {{ i.body }}
                            </p>
                            <div class="post__actions">
                                <div @click="likeComment(i.id)" class="button button--approve obj-center">
                                    <i class="fa fa-thumbs-o-up"></i><i class="fa fa-thumbs-up solid"></i>
                                </div>
                                <div :class="'button button--deny obj-center view-number-like'+i.id">
                                    {{i.like}}
                                </div>
                                <div class="button button--fill comment-trigger">
                                    <span>Comment...</span>
                                </div>
                                <div @click="setIdComment(i.id)" class="button button--flag obj-center">
                                    <i class="fa fa-comment-o"></i><i class="fa fa-comment solid"></i>
                                </div>
                                <div
                                    :class="'w-100' + ' ' +'group-reply-comment'+id_comment + ' '+'group-reply-comment'">
                                    <slot name="form_new_reply_comment" :id_comment="id_comment"/>
                                </div>
                            </div>
                        </div>
                        <div v-for="a in reply">
                            <div v-if="a.comment_id == i.id" class="post reply-comment">
                                <div class="post__avatar"></div>
                                <h3 class="post__author">
                                    {{ a.name }}
                                </h3>
                                <h4 class="post__timestamp">
                                    {{ a.created_at }}
                                </h4>
                                <p class="post__body">
                                    {{ a.body }}
                                </p>
                                <p>{{}}</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "show_style_1",
    props: [
        'data',
        'comments',
        'reply',
    ],
    data: () => ({
        id_comment: 0,
    }),
    methods: {
        setIdComment(id) {
            this.id_comment = id
        },
        likeComment(id){
            axios.post('/like/comment/'+id , {id:id}).then((res) => {
                if (res.data == 'ERR'){
                    alert('شما یک بار به این کامت رای مثبت داده اید');
                }else{
                    const number = $('.view-number-like'+id).text();
                    $('.view-number-like'+id).html(parseInt(res.data) + parseInt(number));
                }
            })
        }
    }
}
</script>

