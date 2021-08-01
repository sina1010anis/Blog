require('./bootstrap');
import '../css/app.css'
import '../css/style.css'
import $ from 'jquery'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import style_1 from './components/style_1/style_1'
import show_style_1 from './components/style_1/show_style_1'
const app = createApp({
    data: () => ({
        test: 'test'
    }),
    components: {
        style_1,
        show_style_1,
    }
})
app.mount('#app')
