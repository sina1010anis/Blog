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
        test: 'test'
    }),
    components: {
        style_1,
        show_style_1,
        panel_admin : panel,
        style_2
    },
    mounted(){
        setTimeout(()=>{
            $('.view_msg_all').animate({'opacity':'0'})
        },2000)
    }
})
app.mount('#app')
