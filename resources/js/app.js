import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'
import '../css/app.css'
import Toast from 'vue-toastification'
import 'vue-toastification/dist/index.css'


createInertiaApp({
    progress: {
        delay: 200,
        color: '#ff0000',
    },

    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        const toastOptions = {
            position: 'bottom-right',
            timeout: 2000,
            closeOnClick: true,
            pauseOnFocusLoss: false,
            pauseOnHover: true,
            draggable: true,
            draggablePercent: 0.6,
            showCloseButtonOnHover: false,
            hideProgressBar: false,
            closeButton: 'button',
            icon: true,
            rtl: false,
            transition: 'Vue-Toastification__bounce',
            maxToasts: 10,
            newestOnTop: true,
        }

        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(Toast, toastOptions)
            .component('InertiaLink', Link)
            .component('InertiaHead', Head)
            .mount(el)
    },
})
