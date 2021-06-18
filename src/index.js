import { createApp } from 'vue';
import App from './components/App.js';

if ( document.getElementById( 'vfb-app' ) ) {
	createApp(App).mount('#vfb-app');
}