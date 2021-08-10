require('./bootstrap');
import '../css/app.css'
import '../css/style.css'
import $ from 'jquery'
import axios from 'axios'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import style_1 from './components/style_1/style_1'
import style_2 from './components/style_2/style_2'
import show_style_1 from './components/style_1/show_style_1'
import panel from './components/admin/panel'

const app = createApp({
    data: () => ({
        test: 'test',
        id_comment_reply: 0,
        name_comment_reply: '',
        text_comment_reply: '',
    }),
    components: {
        style_1,
        show_style_1,
        panel_admin: panel,
        style_2
    },
    methods: {
        set_comment_reply_admin() {
            const dom = 'test.com';
            if (this.name_comment_reply != '' && this.text_comment_reply != '') {
                axios.post('/Iran-Blog/' + dom + '/admin/new/reply/comment', {
                    name: this.name_comment_reply,
                    text: this.text_comment_reply,
                    id: this.id_comment_reply,
                }).then((res) => {
                    this.name_comment_reply = '';
                    this.text_comment_reply = '';
                    this.id_comment_reply = '';
                    if (res.data == 'ok') {
                        $('.view_msg_all').text('New Comment Successful').animate({'opacity': '1'})
                        $('.group-input-reply-panel-admin').fadeOut()
                    }else{
                        $('.view_msg_all_error').text('New Comment Failed').animate({'opacity': '1'})
                    }
                })
            }
        },
        set_message_reply_panel_admin(id) {
            this.id_comment_reply = id;
            $('.group-input-reply-panel-admin').fadeIn()
        },
        cls_comment_reply() {
            $('.group-input-reply-panel-admin').fadeOut()
        },
        delete_item_menu(id, dom) {
            axios.post('/Iran-Blog/' + dom + '/admin/delete/menu', {
                id: id
            }).then((res) => {
                if (res.data == 'ok') {
                    $('.view_msg_all').text('Successful removal').animate({'opacity': '1'})
                } else {
                    $('.view_msg_all_error').text('Failed to delete').animate({'opacity': '1'});
                }
                setTimeout(() => {
                    $('.view_msg_all').animate({'opacity': '0'})
                    $('.view_msg_all_error').animate({'opacity': '0'})
                }, 2000)
            })
        },

        delete_category(id, dom) {
            axios.post('/Iran-Blog/' + dom + '/admin/delete/category', {
                id: id
            }).then((res) => {
                if (res.data == 'ok') {
                    $('.view_msg_all').text('Successful removal').animate({'opacity': '1'})
                } else {
                    $('.view_msg_all_error').text('Failed to delete').animate({'opacity': '1'});
                }
                setTimeout(() => {
                    $('.view_msg_all').animate({'opacity': '0'})
                    $('.view_msg_all_error').animate({'opacity': '0'})
                }, 2000)
            })
        }
    },
    mounted() {
        setTimeout(() => {
            $('.view_msg_all').animate({'opacity': '0'})
        }, 2000)
    }
})
app.mount('#app')
