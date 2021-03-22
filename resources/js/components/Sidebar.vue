<template>
    <div>
         <router-link to="/" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
            <span class="truncate">
            Dashboard
            </span>
        </router-link>
        <router-link to="/suppliers" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
            <span class="truncate">
            Suppliers
            </span>
        </router-link>
        <router-link to="/products" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
            <span class="truncate">
            Products
            </span>
        </router-link>
    </div>  
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    data() {
        return {
            // Code...
        }
    },
}
</script>