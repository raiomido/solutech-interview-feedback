import Vue from 'vue'
import Vuex from 'vuex'

import SuppliersIndex from './modules/Suppliers'
import SuppliersSingle from './modules/Suppliers/single'
import ProductsIndex from './modules/Products'
import ProductsSingle from './modules/Products/single'
import Dashboard from './modules/dashboard'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {
        SuppliersIndex,
        SuppliersSingle,
        ProductsIndex,
        ProductsSingle,
        Dashboard
    },
    strict: debug,
})