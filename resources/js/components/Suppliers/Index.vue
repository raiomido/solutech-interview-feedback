<template>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
<div class="bg-gray-50 px-4 py-5 border-b border-gray-200 sm:px-6">
  <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
    <div class="ml-4 mt-2">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Product Suppliers
      </h3>
    </div>
    <div class="ml-4 mt-2 flex-shrink-0">
      <router-link :to="{name: 'suppliers.create'}" type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Add new Supplier
      </router-link>
    </div>
  </div>
  </div>
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Products
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr v-for="item in data" :key="item.id">
              <td  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{item.id}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{item.name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <div class="flex flex-wrap space-x-2">
                <span class="inline-block rounded-lg font-medium leading-none py-2 px-3 mb-2 focus:outline-none bg-indigo-50 text-indigo-700"  v-for="product in item.products" :key="product.id">
                  {{product.name}}
                </span>                  
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 flex justify-end">
                <button @click="deleteItem(item.id)" class="bg-red-50 hover:bg-red-100 text-red-700 font-bold transition duration-300 ease-in-out py-2 px-4">                                                   
                    <span>
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"></path>
                        </svg>
                    </span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
export default {
    data() {
        return {
            //
        }
    },
    created() {
        this.fetchData()
    },
    destroyed() {
        this.resetState()
    },
    computed: {
        ...mapGetters('SuppliersIndex', ['data', 'loading']),
    },
    methods: {
        ...mapActions('SuppliersIndex', ['fetchData', 'destroyData', 'resetState']),
        deleteItem(id) {
            this.destroyData(id)
        }
    }
}
</script>
