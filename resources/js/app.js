import { createApp } from 'vue';
import App from './components/App.vue';
//Import v-from
import { Form, HasError, AlertError } from 'vform';
window.Form = Form;
createApp(App).mount("#example");
