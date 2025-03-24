import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import AdminLayout from './Layouts/AdminLayout.vue';
import PublicLayout from './Layouts/PublicLayout.vue';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = name.startsWith('User/') ? AdminLayout : PublicLayout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})