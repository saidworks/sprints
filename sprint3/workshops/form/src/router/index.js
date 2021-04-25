import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Signup.vue'

const routes = [{
        path: '/',
        name: 'signup',
        component: Home
    },
    {
        path: '/signin',
        name: 'signin',
        // route level code-splitting
        // this generates a separate chunk (signin.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "signin" */ '../views/Signin.vue')
    },
    {
        path: '/forgot',
        name: 'forgot',
        // route level code-splitting
        // this generates a separate chunk (signin.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "signin" */ '../views/Forgot.vue')
    }
]

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

export default router