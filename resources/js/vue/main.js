import { createApp } from "vue";
import Oruga from "@oruga-ui/oruga-next"
import '@oruga-ui\theme-oruga\dist\oruga.css'
import App from "./App.vue"
import axios from "axios";


const app = createApp(App)
app.use(Oruga)
app.config.globalProperties.axios
window.axios=window
app.mount("#app")