import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Main from '../components/Main'
import Login from '../components/blocks/Login'
import Register from '../components/blocks/Register'
import Case from "../components/blocks/Case";
import PrivacyPolicy from './views/PrivacyPolicy'

const Admin = () => import(/* webpackChunkName: 'admin' */ './views/admin/Admin')

import Applications from './views/admin/page/Applications'
import CasesAdmin from './views/admin/page/CasesAdmin'
import CategoriesCases from './views/admin/page/CategoriesCases'
import Clients from './views/admin/page/Clients'
import Users from "./views/admin/page/Users"
import LoginAdmin from "../components/blocks/LoginAdmin";

const routes = [
    {
        path: '/',
        component: Main,
        name: 'main',
        meta: {
            title: 'Otclick-ADV Платформа эффективного онлайн-маркетинга'
        }
    },
    {path: '/case/:slug', name: 'case', component: Case, props: true},
    {
        path: '/admin', component: Admin, name: 'admin', meta: {title: 'Дашборд', middleware: 'auth'},
        children: [
            {
                path: 'applications',
                component: Applications,
                name: 'admin.applications',
                meta: {title: 'Заявки', middleware: 'auth'}
            },
            {path: 'clients', component: Clients, name: 'admin.clients', meta: {title: 'Клиенты', middleware: 'auth'}},
            {
                path: 'cases',
                component: CasesAdmin,
                name: 'admin.cases',
                meta: {title: 'Кейсы', middleware: 'auth'}
            },
            {
                path: 'category',
                component: CategoriesCases,
                name: 'admin.category',
                meta: {title: 'Категории', middleware: 'auth'}
            },
            {
                path: 'users',
                component: Users,
                name: 'admin.users',
                meta: {title: 'Пользователи', middleware: 'auth'}
            }
        ]
    },
    {path: '/login', component: Login, name: 'login', meta: {title: 'Авторизация'}},
    {path: '/login-admin', component: LoginAdmin, name: 'login-admin', meta: {title: 'Авторизация', middleware: 'guest'}},
    {path: '/registration', component: Register, name: 'registration', meta: {title: 'Регистрация', middleware: 'guest'}},
    {
        path: '/privacy-policy',
        component: PrivacyPolicy,
        name: 'privacy-policy',
        meta: {title: 'Политика конфиденциальности', middleware: 'guest'}
    }
]

const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior(to, from, savedPosition) {
        return {x: 0, y: 0}
    }
})

router.afterEach((to, from) => {
    Vue.nextTick(() => {
        if (to.meta.title === undefined){
            document.title = 'Otclick-ADV'
        } else {
            document.title = to.meta.title
        }
    })
})

export default router
