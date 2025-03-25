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
  progress: {
    // The delay after which the progress bar will appear, in milliseconds...
    delay: 250,

    // The color of the progress bar...
    color: 'red',

    // Whether to include the default NProgress styles...
    includeCSS: true,

    // Whether the NProgress spinner will be shown...
    showSpinner: true,
  },
})

// import { createApp, h } from 'vue'
// import { createInertiaApp } from '@inertiajs/vue3'
// import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'

// createInertiaApp({
//     resolve: (name) =>
//         resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
//     setup({ el, App, props }) {
//         createApp({ render: () => h(App, props) }).mount(el)
//     },
// })
