import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import SuppliersIndex from '../components/Suppliers/Index.vue'
import SuppliersCreate from '../components/Suppliers/Create.vue'
import ProductsIndex from '../components/Products/Index.vue'
import ProductsCreate from '../components/Products/Create.vue'
import Dashboard from '../components/Dashboard.vue'

const routes = [
    { path: '/suppliers', component: SuppliersIndex, name: 'suppliers.index' },
    { path: '/suppliers/create', component: SuppliersCreate, name: 'suppliers.create' },
    { path: '/products', component: ProductsIndex, name: 'products.index' },
    { path: '/products/create', component: ProductsCreate, name: 'products.create' },
    { path: '/', component: Dashboard, name: 'dashboard.index' },
];

export default new VueRouter({
    mode: 'history',
    base: '/dashboard',
    routes
})