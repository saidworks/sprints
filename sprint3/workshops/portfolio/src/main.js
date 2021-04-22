import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import 'bootstrap/dist/css/bootstrap.min.css';
import { library } from '@fortawesome/fontawesome-svg-core'
import { faCoffee, faFlask } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'


library.add(faCoffee, faFlask)

createApp(App).use(router).component('fa', FontAwesomeIcon).mount("#app");