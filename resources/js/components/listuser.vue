<template>
    <div>
        <table>
            <tr class="table thead-light" border="1">
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <tr v-for="(item, index) in info.data" :key="index">
                <th>{{ item.id }}</th>
                <th>{{ item.name }}</th>
                <th>{{ item.email }}</th>
            </tr>
        </table>
    </div>

</template>

<script>
import axios from 'axios'
export default {
  data () {
    return {
     info: []
    }
  },
  mounted() {
      this.getData();
  },
  methods: {
    getData() {
    axios.get('/api/users')
    .then(response => 
    {
        this.info = response.data
    })
    }
  }
}
</script>

<style>
table {
    width: 100%;
}

</style>
