require('./bootstrap');
import '../css/app.css'
import '../css/style.css'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import file from '../js/components/File'
const app = createApp({
    data: () => ({
        test: 'test'
    }),
    components: {
        file,
    }
})
app.mount('#app')
