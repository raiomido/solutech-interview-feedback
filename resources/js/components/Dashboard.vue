<template>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
<div class="bg-gray-50 px-4 py-5 border-b border-gray-200 sm:px-6">
  <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
    <div class="ml-4 mt-2">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Activity Log
      </h3>
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
                User
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action Model
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Model ID
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr v-for="item in data" :key="item.id">
              <td  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                <span class="inline-block rounded-lg font-medium leading-none py-2 px-3 focus:outline-none bg-indigo-50 text-indigo-700">{{item.user.name}}</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{item.action}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{item.action_model}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{item.action_id}}
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
        ...mapGetters('Dashboard', ['data', 'loading']),
    },
    methods: {
        ...mapActions('Dashboard', ['fetchData', 'resetState']),
    }
}
</script>
