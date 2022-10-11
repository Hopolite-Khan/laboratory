import {createApp} from 'vue';
import AppLayout from './layout/App.vue'
import router from './router/index.js';
createApp(AppLayout)
.use(router)
.mount('#app')


